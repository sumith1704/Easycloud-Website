<?php
/**
 * Location Detector
 * Detects user location via IP address and matches to nearest office
 * Uses free ipapi.co service (1000 requests/day, no signup required)
 */

class LocationDetector {
    
    private $offices = [
        'hyderabad' => [
            'city' => 'Hyderabad',
            'country' => 'India',
            'phone' => '+91-9885550515',
            'whatsapp' => '919885550515',
            'address' => 'Hyderabad, Telangana, India',
            'timezone' => 'Asia/Kolkata',
            'lat' => 17.3850,
            'lng' => 78.4867
        ],
        'bangalore' => [
            'city' => 'Bangalore',
            'country' => 'India',
            'phone' => '+91-XXXXXXXXXX', // Add Bangalore number
            'whatsapp' => '91XXXXXXXXXX',
            'address' => 'Bangalore, Karnataka, India',
            'timezone' => 'Asia/Kolkata',
            'lat' => 12.9716,
            'lng' => 77.5946
        ],
        'dubai' => [
            'city' => 'Dubai',
            'country' => 'UAE',
            'phone' => '+971-XXXXXXXXX', // Add Dubai number
            'whatsapp' => '971XXXXXXXXX',
            'address' => 'Dubai, United Arab Emirates',
            'timezone' => 'Asia/Dubai',
            'lat' => 25.2048,
            'lng' => 55.2708
        ]
    ];

    private $cacheTime = 86400; // 24 hours in seconds

    /**
     * Get user location from IP
     */
    public function getUserLocation() {
        // Check if location is already cached in session
        if (isset($_SESSION['user_location']) && 
            isset($_SESSION['location_timestamp']) && 
            (time() - $_SESSION['location_timestamp']) < $this->cacheTime) {
            return $_SESSION['user_location'];
        }

        // Detect new location
        $location = $this->detectLocation();
        
        if ($location) {
            // Cache in session
            $_SESSION['user_location'] = $location;
            $_SESSION['location_timestamp'] = time();
        }

        return $location;
    }

    /**
     * Detect location via IP using ipapi.co
     */
    private function detectLocation() {
        try {
            // Get user's IP address
            $ip = $this->getUserIP();
            
            // For localhost testing, use a default location
            if ($ip === '127.0.0.1' || $ip === '::1' || strpos($ip, '192.168.') === 0) {
                return $this->getDefaultLocation();
            }

            // Call ipapi.co API
            $url = "https://ipapi.co/{$ip}/json/";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_TIMEOUT, 3);
            curl_setopt($ch, CURLOPT_USERAGENT, 'EasyCloud-Website/1.0');
            
            $response = curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);

            if ($httpCode === 200 && $response) {
                $data = json_decode($response, true);
                
                if (isset($data['city']) && isset($data['country_name'])) {
                    return [
                        'ip' => $ip,
                        'city' => $data['city'],
                        'region' => $data['region'] ?? '',
                        'country' => $data['country_name'],
                        'country_code' => $data['country_code'] ?? '',
                        'timezone' => $data['timezone'] ?? 'UTC',
                        'latitude' => $data['latitude'] ?? 0,
                        'longitude' => $data['longitude'] ?? 0,
                        'nearest_office' => $this->findNearestOffice($data['latitude'] ?? 0, $data['longitude'] ?? 0)
                    ];
                }
            }

            // Fallback to default if API fails
            return $this->getDefaultLocation();

        } catch (Exception $e) {
            error_log('Location detection error: ' . $e->getMessage());
            return $this->getDefaultLocation();
        }
    }

    /**
     * Get user's IP address
     */
    private function getUserIP() {
        // Check for various IP headers (for proxies/load balancers)
        $ipHeaders = [
            'HTTP_CF_CONNECTING_IP', // Cloudflare
            'HTTP_X_FORWARDED_FOR',
            'HTTP_X_REAL_IP',
            'REMOTE_ADDR'
        ];

        foreach ($ipHeaders as $header) {
            if (isset($_SERVER[$header]) && !empty($_SERVER[$header])) {
                $ip = $_SERVER[$header];
                
                // Handle comma-separated IPs (X-Forwarded-For can have multiple)
                if (strpos($ip, ',') !== false) {
                    $ips = explode(',', $ip);
                    $ip = trim($ips[0]);
                }
                
                // Validate IP
                if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)) {
                    return $ip;
                }
            }
        }

        return $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1';
    }

    /**
     * Find nearest office based on coordinates
     */
    private function findNearestOffice($lat, $lng) {
        if (!$lat || !$lng) {
            return 'hyderabad'; // Default
        }

        $nearest = 'hyderabad';
        $minDistance = PHP_FLOAT_MAX;

        foreach ($this->offices as $key => $office) {
            $distance = $this->calculateDistance($lat, $lng, $office['lat'], $office['lng']);
            if ($distance < $minDistance) {
                $minDistance = $distance;
                $nearest = $key;
            }
        }

        return $nearest;
    }

    /**
     * Calculate distance between two coordinates (Haversine formula)
     */
    private function calculateDistance($lat1, $lng1, $lat2, $lng2) {
        $earthRadius = 6371; // km

        $dLat = deg2rad($lat2 - $lat1);
        $dLng = deg2rad($lng2 - $lng1);

        $a = sin($dLat / 2) * sin($dLat / 2) +
             cos(deg2rad($lat1)) * cos(deg2rad($lat2)) *
             sin($dLng / 2) * sin($dLng / 2);

        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
        $distance = $earthRadius * $c;

        return $distance;
    }

    /**
     * Get default location (Hyderabad for localhost)
     */
    private function getDefaultLocation() {
        return [
            'ip' => 'localhost',
            'city' => 'Hyderabad',
            'region' => 'Telangana',
            'country' => 'India',
            'country_code' => 'IN',
            'timezone' => 'Asia/Kolkata',
            'latitude' => 17.3850,
            'longitude' => 78.4867,
            'nearest_office' => 'hyderabad'
        ];
    }

    /**
     * Get office details
     */
    public function getOffice($officeKey) {
        return $this->offices[$officeKey] ?? $this->offices['hyderabad'];
    }

    /**
     * Get nearest office details based on user location
     */
    public function getNearestOffice() {
        $location = $this->getUserLocation();
        $officeKey = $location['nearest_office'] ?? 'hyderabad';
        return $this->getOffice($officeKey);
    }

    /**
     * Get WhatsApp link for nearest office
     */
    public function getWhatsAppLink($message = '') {
        $office = $this->getNearestOffice();
        $defaultMessage = $message ?: 'Hello! I would like to know more about EasyCloud ERP solutions.';
        return "https://wa.me/{$office['whatsapp']}?text=" . urlencode($defaultMessage);
    }

    /**
     * Get all offices
     */
    public function getAllOffices() {
        return $this->offices;
    }
}

// Initialize session if not started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Create global instance
$locationDetector = new LocationDetector();

// Make location data available globally
$userLocation = $locationDetector->getUserLocation();
$nearestOffice = $locationDetector->getNearestOffice();

// Store in session for easy access across pages
$_SESSION['user_city'] = $userLocation['city'];
$_SESSION['user_country'] = $userLocation['country'];
$_SESSION['nearest_office_key'] = $userLocation['nearest_office'];
$_SESSION['nearest_office'] = $nearestOffice;

?>
