<?php
// Local dev router for `php -S localhost:8003 router.php`.
// Mirrors the clean-URL rules in .htaccess (Apache isn't used locally).
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$trim = trim($path, '/');

$routes = [
    'microsoft-dynamics-365-business-central' => 'microsoft-dynamics-365-business-central.php',
    'business-central/manufacturing/case-studies' => 'business-central-manufacturing-case-studies.php',
    'business-central/manufacturing' => 'business-central-manufacturing.php',
    'business-central/quickbooks-migration' => 'business-central-quickbooks-migration.php',
    'business-central/legacy-erp-migration' => 'business-central-legacy-erp-migration.php',
    'erpnext' => 'erpnext.php',
    'erpnext/manufacturing' => 'erpnext-manufacturing.php',
    'erpnext/distribution' => 'erpnext-distribution.php',
    'distribution' => 'distribution.php',
    'business-applications' => 'business-applications.php',
    'analytics-bi' => 'analytics-bi.php',
    'dealer-customer-portals' => 'dealer-customer-portals.php',
    'integrations' => 'integrations.php',
    'case-studies' => 'case-studies.php',
    'careers' => 'careers.php',
    'erp-consulting' => 'erp-consulting.php',
    'business-central-vs-erpnext' => 'business-central-vs-erpnext.php',
    'manufacturing' => 'industrial-engineering.php',
];

if ($path === '/industrial-engineering.php') {
    header('Location: /manufacturing', true, 301);
    return true;
}

if (isset($routes[$trim])) {
    $_SERVER['SCRIPT_NAME'] = '/' . $routes[$trim];
    require __DIR__ . '/' . $routes[$trim];
    return true;
}

// Real file at this path: let the built-in server handle it.
if ($trim !== '' && is_file(__DIR__ . '/' . $trim)) {
    return false;
}

// Relative assets requested from a clean-URL page (e.g. /business-central/images/E.png):
// retry with the leading directory stripped.
foreach (['business-central', 'erpnext'] as $prefix) {
    if (strpos($trim, $prefix . '/') === 0) {
        $rest = substr($trim, strlen($prefix) + 1);
        if (is_file(__DIR__ . '/' . $rest)) {
            $mime = mime_content_type(__DIR__ . '/' . $rest);
            if (substr($rest, -4) === '.css') $mime = 'text/css';
            if (substr($rest, -3) === '.js') $mime = 'application/javascript';
            if (substr($rest, -4) === '.svg') $mime = 'image/svg+xml';
            header('Content-Type: ' . $mime);
            readfile(__DIR__ . '/' . $rest);
            return true;
        }
    }
}

return false;
