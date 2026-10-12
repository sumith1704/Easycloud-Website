<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) - GDPR Compliant with Cookie Consent -->
    <!-- Analytics will only load if user accepts analytics cookies -->
    <script>
      // Initialize dataLayer for consent mode
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}

      // Set default consent to denied (GDPR compliant)
      gtag('consent', 'default', {
        'analytics_storage': 'denied',
        'ad_storage': 'denied',
        'wait_for_update': 500
      });

      // Initialize Google Analytics (will respect consent)
      gtag('js', new Date());
      gtag('config', 'G-5NW9HQ2H0F', {
        'anonymize_ip': true,
        'cookie_flags': 'SameSite=None;Secure'
      });
    </script>
    <!-- Load gtag.js script -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-5NW9HQ2H0F"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyCloud - Bootstrap Navigation</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">

    <style>
        /* ========================================
           SIMPLE WORKING NAVBAR CSS
           ======================================== */

        :root {
            --navbar-bg: #ffffff;
            --navbar-shadow: 0 2px 8px rgba(0,0,0,0.08);
            --hover-bg: rgba(0,0,0,0.05);
            --hover-color: #1a2b4e;
            --text-color: #555c6a;
            --transition: all 0.3s ease;
        }

        /* Body compensation */
        body {
            padding-top: 85px !important;
        }

        /* Main navbar */
/* Main navbar with glassmorphism */
.easycloud-navbar {
    background: rgba(255, 255, 255, 0.08) !important; /* transparent glass */
    backdrop-filter: blur(12px) !important;
    -webkit-backdrop-filter: blur(12px) !important;
    border-radius: 20px !important; /* curved edges */
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2) !important; /* soft shadow */

    position: fixed !important;
    top: 15px !important; /* small gap from top */
    left: 50% !important;
    transform: translateX(-50%) !important;

    width: 90% !important; /* not full-width to show rounded edges */
    z-index: 9999 !important;
    padding: 1rem 0.75rem !important;
    border: 1px solid rgba(255, 255, 255, 0.2) !important; /* glass border */
}

/* Adjust body padding since navbar is no longer 100% */
body {
    padding-top: 145px !important;
}

        /* Use full bar width + equal side padding (fixes lopsided gap by Contact) */
        .easycloud-navbar > .container {
            max-width: 100% !important;
            padding-left: 1rem !important;
            padding-right: 1rem !important;
        }

        .easycloud-navbar .navbar-brand {
            display: flex !important;
            align-items: center !important;
            margin-right: 0.75rem !important;
            padding-top: 0 !important;
            padding-bottom: 0 !important;
        }

        .easycloud-navbar .navbar-brand img {
            width: auto !important;
            height: 54px !important;
            object-fit: contain !important;
        }

        /* Navigation links */
        .easycloud-navbar .navbar-nav .nav-link {
            color: var(--text-color) !important;
            font-weight: 600 !important;
            font-size: 1.05rem !important;
            padding: 0.65rem 0.65rem !important;
            border-radius: 8px !important;
            transition: var(--transition) !important;
            display: inline-flex !important;
            align-items: center !important;
            line-height: 1.2 !important;
        }

        @media (min-width: 992px) {
            .easycloud-navbar .navbar-nav {
                gap: 0.15rem !important;
            }
            .easycloud-navbar .navbar-nav .nav-link {
                white-space: nowrap !important;
            }
        }

        .easycloud-navbar .navbar-nav .nav-link:hover {
            color: var(--hover-color) !important;
            background-color: var(--hover-bg) !important;
        }

        /* Contact button */
        .easycloud-navbar .contact-btn {
            background: linear-gradient(90deg, #5a6473 0%, #23272f 100%) !important;
            color: #fff !important;
            font-weight: 700 !important;
            border: none !important;
            border-radius: 8px !important;
            padding: 0.5rem 1.25rem !important;
            font-size: 1rem !important;
            cursor: pointer;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            transition: var(--transition);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            line-height: 1.2 !important;
        }

        @media (min-width: 992px) {
            .easycloud-navbar .contact-btn {
                white-space: nowrap !important;
            }
        }

        .easycloud-navbar .contact-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(90, 100, 115, 0.3);
            color: #fff !important;
            text-decoration: none;
        }

        /* SIMPLE DROPDOWN STYLING - NO CUSTOM ANIMATIONS */
        .easycloud-navbar .dropdown-menu {
            border: none !important;
            border-radius: 12px !important;
            box-shadow: 0 8px 32px rgba(0,0,0,0.15) !important;
            padding: 1.25rem !important;
            margin-top: 0.5rem !important;
            background: #ffffff !important;
        }

        /* Specific dropdown widths */
        .easycloud-navbar .domains-dropdown { min-width: 650px; }
        .easycloud-navbar .erp-dropdown { min-width: 480px; }
        .easycloud-navbar .analytics-dropdown { min-width: 420px; }
        .easycloud-navbar .ai-dropdown { min-width: 520px; }
        .easycloud-navbar .apps-dropdown { min-width: 480px; }
        .easycloud-navbar .industries-dropdown { min-width: 340px; }
        .easycloud-navbar .digital-dropdown { min-width: 380px; }
        .easycloud-navbar .work-dropdown { min-width: 380px; }
        .easycloud-navbar .about-dropdown { min-width: 280px; }

        /* Grid layout for domains */
        .easycloud-navbar .domains-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 0.75rem;
        }

        /* Custom dropdown items */
        .easycloud-navbar .dropdown-item-custom {
            display: flex !important;
            align-items: center !important;
            padding: 0.75rem !important;
            border-radius: 8px !important;
            text-decoration: none !important;
            color: #333 !important;
            transition: var(--transition) !important;
            border: 1px solid transparent !important;
            width: 100%;
            box-sizing: border-box;
        }

        .easycloud-navbar .dropdown-item-custom:hover {
            background-color: #f8f9fa !important;
            transform: translateY(-1px) !important;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08) !important;
            text-decoration: none !important;
            color: #333 !important;
            border-color: #e9ecef !important;
        }

        /* Manufacturing group: sub-items listed under the Manufacturing domain */
        .easycloud-navbar .domain-subitems {
            list-style: none;
            margin: 0.25rem 0 0 0;
            padding: 0 0 0 3.5rem;
        }

        .easycloud-navbar .domain-subitems a {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.35rem 0.5rem;
            border-radius: 6px;
            font-size: 0.85rem;
            font-weight: 600;
            color: #2c3e50;
            text-decoration: none;
            transition: var(--transition);
        }

        .easycloud-navbar .domain-subitems a i {
            color: #2196f3;
            font-size: 0.75rem;
        }

        .easycloud-navbar .domain-subitems a:hover {
            background-color: #f8f9fa;
            color: var(--hover-color);
        }

        /* ERP Solutions dropdown layout (NAV 2026-10-12): heading, parent items with chevron, lighter indented sub-items, bold standalone links */
        .easycloud-navbar .erp-menu,
        .easycloud-navbar .erp-menu ul {
            list-style: none;
        }

        .easycloud-navbar .erp-menu .erp-menu-heading {
            display: flex;
            align-items: center;
            gap: 0.6rem;
            padding: 0 0.5rem 0.6rem;
            font-size: 1rem;
            font-weight: 600;
            color: #2c3e50;
        }

        .easycloud-navbar .erp-menu .erp-menu-heading i {
            color: #6c757d;
            font-size: 0.9rem;
        }

        .easycloud-navbar .erp-menu .erp-parent,
        .easycloud-navbar .erp-menu .erp-children a,
        .easycloud-navbar .erp-menu .erp-standalone {
            display: flex;
            align-items: center;
            border-radius: 8px;
            text-decoration: none;
            transition: var(--transition);
        }

        .easycloud-navbar .erp-menu .erp-parent {
            gap: 0.6rem;
            padding: 0.45rem 0.5rem 0.45rem 0.75rem;
            font-size: 0.95rem;
            font-weight: 500;
            color: #2c3e50;
        }

        .easycloud-navbar .erp-menu .erp-parent i {
            color: #2c3e50;
            font-size: 0.8rem;
            width: 0.8rem;
            text-align: center;
            transition: var(--transition);
        }

        .easycloud-navbar .erp-menu .erp-children {
            margin: 0 0 0.35rem 0;
            padding: 0 0 0 2.15rem;
        }

        .easycloud-navbar .erp-menu .erp-children a {
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
            font-weight: 400;
            color: #6c757d;
        }

        .easycloud-navbar .erp-menu .erp-standalone {
            padding: 0.45rem 0.5rem;
            font-size: 0.95rem;
            font-weight: 600;
            color: #2c3e50;
        }

        .easycloud-navbar .erp-menu .erp-parent:hover,
        .easycloud-navbar .erp-menu .erp-children a:hover,
        .easycloud-navbar .erp-menu .erp-standalone:hover {
            background-color: #f8f9fa;
            color: var(--hover-color);
            text-decoration: none;
        }

        .easycloud-navbar .erp-menu .erp-parent:hover i {
            color: #2196f3;
            transform: translateX(2px);
        }

        /* Keyboard focus for the ERP Solutions and Domains menus (2026-10-01 audit) */
        .easycloud-navbar .nav-item.dropdown:has(> .erp-dropdown) > .nav-link:focus-visible,
        .easycloud-navbar .nav-item.dropdown:has(> .domains-dropdown) > .nav-link:focus-visible,
        .easycloud-navbar .erp-dropdown a:focus-visible,
        .easycloud-navbar .domains-dropdown .domain-subitems a:focus-visible,
        .easycloud-navbar .domains-dropdown .domains-grid > li:first-child > .dropdown-item-custom:focus-visible {
            outline: 2px solid #1a2b4e !important;
            outline-offset: 2px;
            box-shadow: none !important;
        }

        /* Icons */
        .easycloud-navbar .item-icon {
            font-size: 1.75rem !important;
            color: #2196f3 !important;
            margin-right: 1rem !important;
            min-width: 40px !important;
            width: 40px !important;
            text-align: center !important;
            flex-shrink: 0 !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
        }

        .easycloud-navbar .analytics-icon {
            width: 40px !important;
            height: 40px !important;
            border-radius: 8px !important;
            margin-right: 1rem !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            color: white !important;
            font-weight: bold !important;
            font-size: 1rem !important;
            flex-shrink: 0 !important;
        }

        .easycloud-navbar .item-info {
            flex: 1 !important;
        }

        .easycloud-navbar .item-info h6 {
            margin-bottom: 0.25rem !important;
            font-size: 0.95rem !important;
            font-weight: 600 !important;
            color: #2c3e50 !important;
        }

        .easycloud-navbar .item-info p {
            margin-bottom: 0 !important;
            font-size: 0.8rem !important;
            color: #6c757d !important;
            line-height: 1.3 !important;
        }

        /* Mobile optimizations */
        @media (max-width: 991.98px) {
            body {
                padding-top: 88px !important;
            }

            .easycloud-navbar {
                padding: 0.75rem 0 !important;
            }
            .easycloud-navbar .navbar-nav .nav-link {
                white-space: normal !important;
            }
            .navbar-brand img {
                width: 60px !important;
                height: auto !important;
            }

            .easycloud-navbar .domains-grid {
                grid-template-columns: 1fr !important;
                gap: 0.5rem !important;
            }

            .easycloud-navbar .dropdown-menu {
                min-width: auto !important;
                width: 100% !important;
                margin: 0.5rem 0 !important;
                padding: 1rem !important;
            }

            .easycloud-navbar .item-icon {
                font-size: 1.5rem !important;
                min-width: 35px !important;
                width: 35px !important;
            }

            .easycloud-navbar .analytics-icon {
                width: 35px !important;
                height: 35px !important;
                font-size: 0.85rem !important;
            }

            .easycloud-navbar .item-info p {
                display: none !important;
            }

            .easycloud-navbar .domain-subitems {
                padding-left: 3rem;
            }

            .easycloud-navbar .contact-btn {
                width: 100% !important;
                justify-content: center !important;
                margin-top: 1rem !important;
                white-space: normal !important;
            }
        }

        /* Logo hover effect */
        .easycloud-navbar .navbar-brand:hover img {
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }

        /* Mobile toggler */
        .easycloud-navbar .navbar-toggler {
            border: none !important;
            color: var(--text-color) !important;
        }

        .easycloud-navbar .navbar-toggler:focus {
            box-shadow: none !important;
        }
    </style>

    <script>
      function initApollo(){var n=Math.random().toString(36).substring(7),o=document.createElement("script");
      o.src="https://assets.apollo.io/micro/website-tracker/tracker.iife.js?nocache="+n,o.async=!0,o.defer=!0,
      o.onload=function(){window.trackingFunctions.onLoad({appId:"69ec8a74b4f84c001558cbf2"})},
      document.head.appendChild(o)}initApollo();
    </script>

</head>
<body>
    <!-- Bootstrap Navigation -->
    <nav class="navbar navbar-expand-lg easycloud-navbar align-items-center">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="/index.php" aria-label="EasyCloud Home">
                <img src="/images/main_logo.svg" alt="EasyCloud Logo" width="150" height="54" />
            </a>

            <!-- Mobile toggle button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Navigation items -->
            <div class="collapse navbar-collapse align-items-lg-center" id="navbarNav">
                <ul class="navbar-nav mx-auto align-items-lg-center">
                    <!-- Home Icon -->
                    <li class="nav-item">
                        <a class="nav-link" href="/index.php" aria-label="Home">
                            <i class="fas fa-home"></i>
                        </a>
                    </li>

                    <!-- ERP Solutions Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            ERP Solutions
                        </a>
                        <?php if (false): /* NAV 2026-10-12: previous ERP Solutions dropdown layout hidden (replaced by the layout below) */ ?>
                        <ul class="dropdown-menu erp-dropdown">
                            <li><a href="/microsoft-dynamics-365-business-central" class="dropdown-item-custom">
                                <i class="fab fa-microsoft item-icon" aria-hidden="true"></i>
                                <div class="item-info">
                                    <h6>Microsoft Dynamics 365 Business Central</h6>
                                    <?php /* NAV 2026-10-03: description hidden <p>Cloud ERP powered by Microsoft</p> */ ?>
                                </div>
                            </a>
                            <ul class="domain-subitems">
                                <li><a href="/business-central/manufacturing"><i class="fas fa-angle-right" aria-hidden="true"></i>Manufacturing</a></li>
                                <li><a href="/business-central/quickbooks-migration"><i class="fas fa-angle-right" aria-hidden="true"></i>QuickBooks Migration</a></li>
                                <li><a href="/business-central/legacy-erp-migration"><i class="fas fa-angle-right" aria-hidden="true"></i>Legacy ERP Migration</a></li>
                                <li><a href="/business-central/manufacturing/case-studies"><i class="fas fa-angle-right" aria-hidden="true"></i>Manufacturing Case Studies</a></li>
                            </ul></li>
                            <li><a href="/erpnext" class="dropdown-item-custom">
                                <i class="fas fa-cubes item-icon" aria-hidden="true"></i>
                                <div class="item-info">
                                    <h6>ERPNext</h6>
                                    <?php /* NAV 2026-10-03: description hidden <p>Flexible, open-source ERP</p> */ ?>
                                </div>
                            </a>
                            <ul class="domain-subitems">
                                <li><a href="/erpnext/manufacturing"><i class="fas fa-angle-right" aria-hidden="true"></i>Manufacturing</a></li>
                                <li><a href="/erpnext/distribution"><i class="fas fa-angle-right" aria-hidden="true"></i>Distribution</a></li>
                            </ul></li>
                            <li><a href="/erp-consulting" class="dropdown-item-custom">
                                <i class="fas fa-handshake item-icon" aria-hidden="true"></i>
                                <div class="item-info">
                                    <h6>ERP Consulting &amp; Implementation</h6>
                                    <?php /* NAV 2026-10-03: description hidden <p>Choosing, implementing and supporting the right ERP</p> */ ?>
                                </div>
                            </a></li>
                            <li><a href="/business-central-vs-erpnext" class="dropdown-item-custom">
                                <i class="fas fa-scale-balanced item-icon" aria-hidden="true"></i>
                                <div class="item-info">
                                    <h6>Business Central vs ERPNext</h6>
                                    <?php /* NAV 2026-10-03: previous title/description hidden
                                    <h6>Compare ERP Solutions</h6>
                                    <p>Business Central vs ERPNext</p>
                                    */ ?>
                                </div>
                            </a></li>
                        </ul>
                        <?php endif; /* end NAV 2026-10-12 hidden block */ ?>
                        <ul class="dropdown-menu erp-dropdown erp-menu">
                            <li class="erp-menu-heading"><i class="fas fa-bars-staggered" aria-hidden="true"></i>ERP Solutions</li>
                            <li class="erp-group">
                                <a href="/microsoft-dynamics-365-business-central" class="erp-parent"><i class="fas fa-angle-right" aria-hidden="true"></i>Microsoft Dynamics 365 Business Central</a>
                                <ul class="erp-children">
                                    <li><a href="/business-central/manufacturing">Manufacturing</a></li>
                                    <li><a href="/business-central/quickbooks-migration">QuickBooks Migration</a></li>
                                    <?php /* NAV 2026-10-12: not in the new layout (Legacy ERP Migration moved to a standalone link below)
                                    <li><a href="/business-central/manufacturing/case-studies">Manufacturing Case Studies</a></li>
                                    */ ?>
                                    <?php /* NAV 2026-10-12 (second change): Manufacturing Case Studies now sits under ERPNext, see below */ ?>
                                </ul>
                            </li>
                            <li class="erp-group">
                                <a href="/erpnext" class="erp-parent"><i class="fas fa-angle-right" aria-hidden="true"></i>ERPNext</a>
                                <ul class="erp-children">
                                    <li><a href="/erpnext/manufacturing">Manufacturing</a></li>
                                    <li><a href="/erpnext/distribution">Distribution</a></li>
                                    <li><a href="/business-central/manufacturing/case-studies">Manufacturing Case Studies</a></li>
                                </ul>
                            </li>
                            <li><a href="/erp-consulting" class="erp-standalone">ERP Consulting &amp; Implementation</a></li>
                            <li><a href="/business-central/legacy-erp-migration" class="erp-standalone">Legacy ERP Migration</a></li>
                            <li><a href="/business-central-vs-erpnext" class="erp-standalone">Business Central vs ERPNext</a></li>
                        </ul>
                    </li>

                    <!-- Industries Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Industries
                        </a>
                        <ul class="dropdown-menu industries-dropdown">
                            <li><a href="/industrial-engineering.php" class="dropdown-item-custom">
                                <i class="fas fa-industry item-icon" aria-hidden="true"></i>
                                <div class="item-info">
                                    <h6>Manufacturing</h6>
                                </div>
                            </a>
                            <ul class="domain-subitems">
                                <li><a href="/extrution.php"><i class="fas fa-angle-right" aria-hidden="true"></i>Extrusion ERP</a></li>
                            </ul></li>
                            <li><a href="/distribution" class="dropdown-item-custom">
                                <i class="fas fa-truck item-icon" aria-hidden="true"></i>
                                <div class="item-info">
                                    <h6>Distribution</h6>
                                </div>
                            </a></li>
                            <li><a href="/construction.php" class="dropdown-item-custom">
                                <i class="fas fa-hard-hat item-icon" aria-hidden="true"></i>
                                <div class="item-info">
                                    <h6>Construction</h6>
                                </div>
                            </a></li>
                            <li><a href="/retail.php" class="dropdown-item-custom">
                                <i class="fas fa-shopping-cart item-icon" aria-hidden="true"></i>
                                <div class="item-info">
                                    <h6>Retail</h6>
                                </div>
                            </a></li>
                            <li><a href="/health_care.php" class="dropdown-item-custom">
                                <i class="fas fa-hospital item-icon" aria-hidden="true"></i>
                                <div class="item-info">
                                    <h6>Healthcare</h6>
                                </div>
                            </a></li>
                            <li><a href="/livestock.php" class="dropdown-item-custom">
                                <i class="fas fa-cow item-icon" aria-hidden="true"></i>
                                <div class="item-info">
                                    <h6>Dairy &amp; Agro</h6>
                                </div>
                            </a></li>
                        </ul>
                    </li>

                    <!-- Digital Solutions Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Digital Solutions
                        </a>
                        <ul class="dropdown-menu digital-dropdown">
                            <li><a href="/business-applications" class="dropdown-item-custom">
                                <i class="fas fa-mobile-screen-button item-icon" aria-hidden="true"></i>
                                <div class="item-info">
                                    <h6>Business Applications</h6>
                                </div>
                            </a></li>
                            <li><a href="/analytics-bi" class="dropdown-item-custom">
                                <i class="fas fa-chart-line item-icon" aria-hidden="true"></i>
                                <div class="item-info">
                                    <h6>Analytics &amp; BI</h6>
                                </div>
                            </a></li>
                            <li><a href="/artificial_intelligence.php" class="dropdown-item-custom">
                                <i class="fas fa-robot item-icon" aria-hidden="true"></i>
                                <div class="item-info">
                                    <h6>AI &amp; Automation</h6>
                                </div>
                            </a></li>
                            <li><a href="/dealer-customer-portals" class="dropdown-item-custom">
                                <i class="fas fa-users item-icon" aria-hidden="true"></i>
                                <div class="item-info">
                                    <h6>Dealer &amp; Customer Portals</h6>
                                </div>
                            </a></li>
                            <li><a href="/integrations" class="dropdown-item-custom">
                                <i class="fas fa-plug item-icon" aria-hidden="true"></i>
                                <div class="item-info">
                                    <h6>Integrations</h6>
                                </div>
                            </a></li>
                        </ul>
                    </li>

                    <!-- Our Work Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Our Work
                        </a>
                        <ul class="dropdown-menu work-dropdown">
                            <li><a href="/case-studies" class="dropdown-item-custom">
                                <i class="fas fa-briefcase item-icon" aria-hidden="true"></i>
                                <div class="item-info">
                                    <h6>Case Studies / Success Stories</h6>
                                </div>
                            </a></li>
                            <li><a href="/blogs.php" class="dropdown-item-custom">
                                <i class="fas fa-newspaper item-icon" aria-hidden="true"></i>
                                <div class="item-info">
                                    <h6>Blogs</h6>
                                </div>
                            </a></li>
                        </ul>
                    </li>

                    <!-- About Us Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About Us
                        </a>
                        <ul class="dropdown-menu about-dropdown">
                            <li><a href="/about.php" class="dropdown-item-custom">
                                <i class="fas fa-building item-icon" aria-hidden="true"></i>
                                <div class="item-info">
                                    <h6>About EasyCloud</h6>
                                </div>
                            </a></li>
                            <li><a href="/our_process.php" class="dropdown-item-custom">
                                <i class="fas fa-diagram-project item-icon" aria-hidden="true"></i>
                                <div class="item-info">
                                    <h6>Our Process</h6>
                                </div>
                            </a></li>
                            <li><a href="/careers" class="dropdown-item-custom">
                                <i class="fas fa-user-tie item-icon" aria-hidden="true"></i>
                                <div class="item-info">
                                    <h6>Careers</h6>
                                </div>
                            </a></li>
                        </ul>
                    </li>

                    <?php /* NAV 2026-10-03: previous menus hidden (Domains, Analytics, AI, Apps, Firewall, Our Processes, About Us link; Blogs restored under Our Work). Kept for future use; remove this comment wrapper to restore.
                    <!-- Domains Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Domains
                        </a>
                        <ul class="dropdown-menu domains-dropdown">
                            <div class="domains-grid">
                                <li><a href="/industrial-engineering.php" class="dropdown-item-custom">
                                    <i class="fas fa-industry item-icon" aria-hidden="true"></i>
                                    <div class="item-info">
                                        <h6>Manufacturing</h6>
                                        <p>Make industrial processes more efficient and effective.</p>
                                    </div>
                                </a>
                                <ul class="domain-subitems">
                                    <li><a href="/extrution.php"><i class="fas fa-angle-right" aria-hidden="true"></i>Extrusion ERP</a></li>
                                    <li><a href="/business-central/manufacturing"><i class="fas fa-angle-right" aria-hidden="true"></i>Manufacturing Capabilities in Business Central</a></li>
                                </ul></li>
                                <li><a href="/bfsi.php" class="dropdown-item-custom">
                                    <i class="fas fa-landmark item-icon"></i>
                                    <div class="item-info">
                                        <h6>BFSI</h6>
                                        <p>Improve financial services and streamline operations.</p>
                                    </div>
                                </a></li>
                                <li><a href="/education.php" class="dropdown-item-custom">
                                    <i class="fas fa-graduation-cap item-icon"></i>
                                    <div class="item-info">
                                        <h6>Education</h6>
                                        <p>Make teaching simpler and improve administration.</p>
                                    </div>
                                </a></li>
                                <li><a href="/retail.php" class="dropdown-item-custom">
                                    <i class="fas fa-shopping-cart item-icon"></i>
                                    <div class="item-info">
                                        <h6>Retail</h6>
                                        <p>Simplify operations and improve customer experiences.</p>
                                    </div>
                                </a></li>
                                <li><a href="/energy_and_utilities.php" class="dropdown-item-custom">
                                    <i class="fas fa-bolt item-icon"></i>
                                    <div class="item-info">
                                        <h6>Energy & Utilities</h6>
                                        <p>Make energy management easier and improve utility services.</p>
                                    </div>
                                </a></li>
                                <li><a href="/health_care.php" class="dropdown-item-custom">
                                    <i class="fas fa-hospital item-icon"></i>
                                    <div class="item-info">
                                        <h6>Healthcare</h6>
                                        <p>Make patient care easier and improve health management.</p>
                                    </div>
                                </a></li>
                                <li><a href="/construction.php" class="dropdown-item-custom">
                                    <i class="fas fa-hard-hat item-icon"></i>
                                    <div class="item-info">
                                        <h6>Construction</h6>
                                        <p>Manage projects better and increase site efficiency.</p>
                                    </div>
                                </a></li>
                                <li><a href="/livestock.php" class="dropdown-item-custom">
                                    <i class="fas fa-cow item-icon"></i>
                                    <div class="item-info">
                                        <h6>Livestock & Feed</h6>
                                        <p>Improve livestock management and make feeding more efficient.</p>
                                    </div>
                                </a></li>
                            </div>
                        </ul>
                    </li>

                    <!-- Analytics Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Analytics
                        </a>
                        <ul class="dropdown-menu analytics-dropdown">
                            <li><a href="/power_BI.php" class="dropdown-item-custom">
                                <div class="analytics-icon" style="background: linear-gradient(45deg, #f7b733, #fc4a1a);">BI</div>
                                <div class="item-info">
                                    <h6>Power BI</h6>
                                    <p>Turn data into insights with easy-to-use visualizations.</p>
                                </div>
                            </a></li>
                            <li><a href="/super_set.php" class="dropdown-item-custom">
                                <div class="analytics-icon" style="background: linear-gradient(45deg, #667eea, #764ba2);">SS</div>
                                <div class="item-info">
                                    <h6>Superset</h6>
                                    <p>Explore and visualize your data effortlessly.</p>
                                </div>
                            </a></li>
                            <li><a href="/meta_base.php" class="dropdown-item-custom">
                                <div class="analytics-icon" style="background: linear-gradient(45deg, #4facfe, #00f2fe);">MB</div>
                                <div class="item-info">
                                    <h6>Metabase</h6>
                                    <p>Get answers from your data quickly and simply.</p>
                                </div>
                            </a></li>
                        </ul>
                    </li>

                    <!-- AI Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            AI
                        </a>
                        <ul class="dropdown-menu ai-dropdown">
                            <li><a href="/process_automation.php" class="dropdown-item-custom">
                                <i class="fas fa-cogs item-icon"></i>
                                <div class="item-info">
                                    <h6>Process Automation</h6>
                                    <p>Automate routine tasks and get more done.</p>
                                </div>
                            </a></li>
                            <li><a href="/image_processing.php" class="dropdown-item-custom">
                                <i class="fas fa-image item-icon"></i>
                                <div class="item-info">
                                    <h6>Image Processing</h6>
                                    <p>Improve and analyze images easily.</p>
                                </div>
                            </a></li>
                            <li><a href="/rag.php" class="dropdown-item-custom">
                                <i class="fas fa-robot item-icon"></i>
                                <div class="item-info">
                                    <h6>RAG (Retrieval-Augmented Generation)</h6>
                                    <p>Get smarter answers by combining data retrieval and generation.</p>
                                </div>
                            </a></li>
                        </ul>
                    </li>

                    <!-- Apps Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Apps
                        </a>
                        <ul class="dropdown-menu apps-dropdown">
                            <li><a href="/pos.php" class="dropdown-item-custom">
                                <i class="fas fa-cash-register item-icon"></i>
                                <div class="item-info">
                                    <h6>POS (Point Of Sales)</h6>
                                    <p>Revolutionize your sales operations with EasyCloud's POS system.</p>
                                </div>
                            </a></li>
                            <li><a href="/mobile_app.php" class="dropdown-item-custom">
                                <i class="fas fa-mobile-screen-button item-icon"></i>
                                <div class="item-info">
                                    <h6>Mobile Apps</h6>
                                    <p>Enhance user experience and accessibility on the go.</p>
                                </div>
                            </a></li>
                            <li><a href="/hse.php" class="dropdown-item-custom">
                                <i class="fas fa-hospital item-icon"></i>
                                <div class="item-info">
                                    <h6>HSE (Healthcare)</h6>
                                    <p>Transforming healthcare experiences through technology.</p>
                                </div>
                            </a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="/firewall.php">Firewall</a></li>

                    <!-- Regular Nav Items -->
                    <li class="nav-item"><a class="nav-link" href="/our_process.php">Our Processes</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about.php">About Us</a></li>
                    */ ?>


                </ul>

                <!-- Contact Button -->
                <div class="d-flex align-items-center">
                    <a href="/contact.php" class="d-inline-flex align-items-center text-decoration-none">
                        <button class="contact-btn">
                            <i class="fas fa-envelope me-2"></i>Contact Us
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <script>
        // Add hover functionality for desktop
        document.addEventListener('DOMContentLoaded', function() {
            const dropdowns = document.querySelectorAll('.easycloud-navbar .dropdown');

            dropdowns.forEach(dropdown => {
                const dropdownToggle = dropdown.querySelector('.dropdown-toggle');
                const dropdownMenu = dropdown.querySelector('.dropdown-menu');

                // Only add hover on desktop
                if (window.innerWidth >= 992) {
                    dropdown.addEventListener('mouseenter', function() {
                        dropdownToggle.classList.add('show');
                        dropdownMenu.classList.add('show');
                        dropdownToggle.setAttribute('aria-expanded', 'true');
                    });

                    dropdown.addEventListener('mouseleave', function() {
                        dropdownToggle.classList.remove('show');
                        dropdownMenu.classList.remove('show');
                        dropdownToggle.setAttribute('aria-expanded', 'false');
                    });
                }
            });
        });
    </script>
</body>
</html>
