<?php
// Local-only router for `php -S`, which ignores .htaccess.
// Mirrors the clean-URL rewrites in the site's .htaccess.
$root = 'C:/Users/Faheem/Downloads/Easycloud Website';

$routes = [
    '/microsoft-dynamics-365-business-central'     => 'microsoft-dynamics-365-business-central.php',
    '/erpnext/manufacturing'                       => 'erpnext-manufacturing.php',
    '/erpnext/distribution'                        => 'erpnext-distribution.php',
    '/erpnext'                                     => 'erpnext.php',
    '/distribution'                                => 'distribution.php',
    '/business-applications'                       => 'business-applications.php',
    '/analytics-bi'                                => 'analytics-bi.php',
    '/dealer-customer-portals'                     => 'dealer-customer-portals.php',
    '/integrations'                                => 'integrations.php',
    '/case-studies'                                => 'case-studies.php',
    '/careers'                                     => 'careers.php',
    '/erp-consulting'                              => 'erp-consulting.php',
    '/business-central-vs-erpnext'                 => 'business-central-vs-erpnext.php',
    '/business-central/manufacturing/case-studies' => 'business-central-manufacturing-case-studies.php',
    '/business-central/manufacturing'              => 'business-central-manufacturing.php',
    '/business-central/quickbooks-migration'       => 'business-central-quickbooks-migration.php',
    '/business-central/legacy-erp-migration'       => 'business-central-legacy-erp-migration.php',
];

$path = rtrim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

if (isset($routes[$path])) {
    chdir($root);
    $_SERVER['SCRIPT_NAME'] = '/' . $routes[$path];
    $_SERVER['SCRIPT_FILENAME'] = $root . '/' . $routes[$path];
    require $root . '/' . $routes[$path];
    return true;
}

return false;
