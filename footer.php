<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <style>
        /* Footer */
footer {
    background: #2c3e50;
    color: white;
    padding: 3rem 10% 1rem;
}

.footer-content {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    margin-bottom: 2rem;
}

.footer-section h3 {
    margin-bottom: 1rem;
}

.footer-section ul {
    list-style: none;
}

.footer-section ul li {
    margin-bottom: 0.5rem;
}

.footer-section a {
    color: white;
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer-section a:hover {
    color: #6c5ce7;
}

.social-links {
    display: flex;
    gap: 1rem;
}

.social-links a {
    font-size: 1.5rem;
}

.footer-bottom {
    text-align: center;
    padding-top: 2rem;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
}
/* Footer Links Section */
.footer-links-section {
    padding: 5rem 0;
    background-color: #fff;
}

.footer-links-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2rem;
}

/* Logo and Social Media */
.footer-logo-social {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 2rem;
    margin-bottom: 4rem;
    text-align: center;
}

.footer-logo {
    height: 80px;
    width: auto;
}

.social-icons {
    display: flex;
    gap: 1.5rem;
    margin-top: 1rem;
}

.social-icon {
    width: 40px;
    height: 40px;
    background-color: #f0f0f0;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #666;
    text-decoration: none;
    transition: all 0.3s ease;
}

.social-icon:hover {
    background-color: #1a2b4e;
    color: white;
    transform: translateY(-3px);
}

.social-icon i {
    font-size: 1.2rem;
}

/* Office Locations */
.office-locations {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
    margin-bottom: 4rem;
    justify-items: center;
}

.office-card {
    padding: 1.5rem;
}

.office-card h3 {
    color: #1a2b4e;
    font-size: 1.2rem;
    margin-bottom: 1.5rem;
    font-weight: 600;
}

.office-details {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.office-details a,
.office-details p {
    color: #666;
    text-decoration: none;
    display: flex;
    align-items: flex-start;
    gap: 0.5rem;
    font-size: 0.95rem;
    line-height: 1.5;
}

.office-details a:hover {
    color: #3498db;
}

.office-details i {
    color: #3498db;
    font-size: 1rem;
    margin-top: 0.2rem;
}

/* Quick Links */
.quick-links {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    gap: 2rem;
    padding-top: 3rem;
    border-top: 1px solid #eee;
}

.links-column h3 {
    color: #1a2b4e;
    font-size: 1.1rem;
    margin-bottom: 1.2rem;
    font-weight: 600;
}

.links-column ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.links-column ul li {
    margin-bottom: 0.8rem;
}

.links-column ul li a {
    color: #666;
    text-decoration: none;
    font-size: 0.95rem;
    transition: color 0.3s ease;
}

.links-column ul li a:hover {
    color: #3498db;
}

/* Responsive Design */
@media (max-width: 1200px) {
    .office-locations {
        grid-template-columns: repeat(3, 1fr);
        justify-items: center;
    }
}

@media (max-width: 992px) {
    .quick-links {
        grid-template-columns: repeat(3, 1fr);
    }
}

@media (max-width: 768px) {
    .office-locations {
        grid-template-columns: 1fr;
    }
    
    .quick-links {
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
    }
    
    .office-card {
        padding: 1rem;
    }
}

@media (max-width: 480px) {
    .quick-links {
        grid-template-columns: 1fr;
    }
}

/* Copyright Section */
.copyright-section {
    background-color: #1a2b4e;
    padding: 1.5rem 0;
    text-align: center;
}

.copyright-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2rem;
}

.copyright-section p {
    color: rgba(255, 255, 255, 0.9);
    font-size: 0.9rem;
    margin: 0;
}

@media (max-width: 480px) {
    .copyright-section {
        padding: 1rem 0;
    }
}

/* Domain Hero Section */
.domain-hero {
    padding: 8rem 0 6rem;
    min-height: 60vh;
    display: flex;
    align-items: center;
    background: linear-gradient(135deg, #1a2b4e 0%, #0d1829 100%);
    color: white;
}

        </style>
</head>
<body>

    <!-- Footer Links Section -->
    <section class="footer-links-section">
        <div class="footer-links-container">
            <!--  Logo and Social Media -->
             <div class="footer-logo-social">
                <img src="../images/main_logo.svg" alt="EasyCloud Logo" class="footer-logo" width="80" height="80">
                <div class="social-icons">
                    <a href="https://x.com/Easycloud_info" class="social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/company/easycloudin/posts/?feedView=all" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://www.youtube.com/@easycloud_info" class="social-icon"><i class="fab fa-youtube"></i></a>
                    <a href="https://www.instagram.com/easycloud_info/" class="social-icon"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
           

            <!-- Office Locations -->
            <div class="office-locations">
                <div class="office-card">
                    <h3>Head Office</h3>
                    <div class="office-details">
                        <a href="mailto:connect@easycloudsoftware.com"><i class="fas fa-envelope"></i> connect@easycloudsoftware.com</a>
                        <a href="tel:+919848027830"><i class="fas fa-phone"></i> +91 98480 27830</a>
                        <?php
                        // Smart WhatsApp button - shows nearest office number
                        $whatsappLink = isset($locationDetector) ? $locationDetector->getWhatsAppLink() : 'https://wa.me/919848027830';
                        $locationText = isset($userLocation) ? " (Detected: {$userLocation['city']})" : "";
                        ?>
                        <a href="<?php echo htmlspecialchars($whatsappLink); ?>" target="_blank" rel="noopener" class="whatsapp-chat-link" title="Chat with nearest office<?php echo htmlspecialchars($locationText); ?>">
                            <span class="whatsapp-icon"><i class="fab fa-whatsapp"></i></span> Chat with us
                        </a>
                        <p><i class="fas fa-map-marker-alt"></i> 2nd Floor, BabuKhan Millenium Center, Somajiguda, Hyderabad, Telangana, 500082</p>
                    </div>
                </div>

                <div class="office-card">
                    <h3>US Office</h3>
                    <div class="office-details">
                        <a href="mailto:connect@easycloudsoftware.com"><i class="fas fa-envelope"></i> connect@easycloudsoftware.com</a>
                        <a href="tel:+16032333940"><i class="fas fa-phone"></i> +1 (603) 233-3940</a>
                        <p><i class="fas fa-map-marker-alt"></i> 23600 Mercantile Road, Suite C-100, Beachwood, OH 44122</p>
                    </div>
                </div>

                <div class="office-card">
                    <h3>UAE Office</h3>
                    <div class="office-details">
                        <a href="mailto:connect@easycloudsoftware.com"><i class="fas fa-envelope"></i> connect@easycloudsoftware.com</a>
                        <a href="tel:+97150475442"><i class="fas fa-phone"></i> +971 50 475 4423</a>
                        <p><i class="fas fa-map-marker-alt"></i> Saif Zone - Sharjah - United Arab Emirates</p>
                    </div>
                </div>

                <!-- <div class="office-card">
                    <h3>Australia Office</h3>
                    <div class="office-details">
                        <a href="mailto:connect@easycloudsoftware.com"><i class="fas fa-envelope"></i> connect@easycloudsoftware.com</a>
                        <a href="tel:+61421979860"><i class="fas fa-phone"></i> +61421979860</a>
                        <p><i class="fas fa-map-marker-alt"></i> 79 Queens Parade, Fawkner, VIC, Australia</p>
                    </div>
                </div> -->
            </div>
 
            <!-- Quick Links -->
            <div class="quick-links">
                <div class="links-column">
                    <h3>Domains</h3>
                    <ul>
                        <li><a href="industrial-engineering.php">Industrial Engineering</a></li>
                        <li><a href="retail.php">Retail</a></li>
                        <li><a href="construction.php">Construction</a></li>
                        <li><a href="bfsi.php">BFSI</a></li>
                        <li><a href="energy_and_utilities.php">Energy & Utilities</a></li>
                        <li><a href="livestock.php">Livestock & Feed</a></li>
                        <li><a href="education.php">Education</a></li>
                        <li><a href="health_care.php">Healthcare</a></li>
                    </ul>
                </div>

                <div class="links-column">
                    <h3>Analytics</h3>
                    <ul>
                        <li><a href="power_BI.php">Power BI</a></li>
                        <li><a href="super_set.php">Superset</a></li>
                        <li><a href="meta_base.php">Meta Base</a></li>
                    </ul>
                </div>

                <div class="links-column">
                    <h3>AI</h3>
                    <ul>
                        <li><a href="process_automation.php">Process Automation</a></li>
                        <li><a href="image_processing.php">Image Processing</a></li>
                        <li><a href="rag.php">RAG</a></li>
                    </ul>
                </div>

                <div class="links-column">
                    <h3>Apps</h3>
                    <ul>
                        <li><a href="pos.php">POS (Point Of Sales)</a></li>
                        <li><a href="mobile_app.php">Mobile Apps</a></li>
                        <li><a href="hse.php">HSE</a></li>
                    </ul>
                </div>

                <div class="links-column">
                    <h3>Learning</h3>
                    <ul>
                        <li><a href="erp_system.php">ERP Systems</a></li>
                        <li><a href="top_erp.php">Top10 ERP</a></li>
                        <li><a href="artificial_intelligence.php">Artificial Intelligence</a></li>
                </ul>
                </div>

                <div class="links-column">
                    <h3>Others</h3>
                    <ul>
                        <li><a href="blogs.php">Our Blogs</a></li>
                        <li><a href="our_process.php">Our Processes</a></li>
                        <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Copyright Section -->
    <section class="copyright-section">
        <div class="copyright-container">
            <p>&copy; 2025 EasyCloud. All Rights Reserved.</p>
        </div>
    </section>

<?php
/**
 * Auto-includes: Location Detection, Cookie Consent, Share Button
 * Universal paths that work on both localhost AND live server
 */

// Function to safely include files with multiple fallback strategies
function safeInclude($relativePath, $useOnce = true) {
    // Strategy 1: Document root (works on most live servers)
    if (isset($_SERVER['DOCUMENT_ROOT']) && !empty($_SERVER['DOCUMENT_ROOT'])) {
        $path = rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/' . ltrim($relativePath, '/');
        if (file_exists($path)) {
            return $useOnce ? @include_once $path : @include $path;
        }
    }
    
    // Strategy 2: From current script's directory going up
    $currentDir = dirname($_SERVER['SCRIPT_FILENAME']);
    $path = $currentDir . '/' . $relativePath;
    if (file_exists($path)) {
        return $useOnce ? @include_once $path : @include $path;
    }
    
    // Strategy 3: One level up (for blog pages)
    $path = dirname($currentDir) . '/' . $relativePath;
    if (file_exists($path)) {
        return $useOnce ? @include_once $path : @include $path;
    }
    
    // Strategy 4: Direct relative path
    if (file_exists($relativePath)) {
        return $useOnce ? @include_once $relativePath : @include $relativePath;
    }
    
    return false;
}

// 1. Location Detection (Server-side, instant)
safeInclude('includes/location-detector.php', true);

// 2. Cookie Consent Banner (shown on all pages - CRITICAL)
safeInclude('includes/cookie-consent.php', false);

// 3. Mobile Share Button - Auto-include for Blog Pages Only
$currentPath = $_SERVER['REQUEST_URI'];
$scriptName = basename($_SERVER['SCRIPT_FILENAME']);

// Check if we're on an individual blog page
$isBlogPost = (
    strpos($currentPath, '/blogs/') !== false && 
    strpos($currentPath, '/blogs.php') === false &&
    strpos($currentPath, 'blogs.php') === false &&
    $scriptName !== 'blogs.php'
);

// Include share button only on individual blog pages
if ($isBlogPost) {
    safeInclude('blogs/share-button.php', false);
}
?>

<!-- Cookie Manager JavaScript - Absolute path from domain root -->
<script src="/js/cookie-manager.js"></script>

<!-- Blog Tracker JavaScript - Absolute path from domain root -->
<script src="/js/blog-tracker.js"></script>

</body>
</html>