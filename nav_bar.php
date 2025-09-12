<!DOCTYPE html>
<html lang="en">
<head>
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
    padding: 0.3rem 0.6rem !important;
    border: 1px solid rgba(255, 255, 255, 0.2) !important; /* glass border */
}

/* Adjust body padding since navbar is no longer 100% */
body {
    padding-top: 120px !important;
}

        /* Navigation links */
        .easycloud-navbar .navbar-nav .nav-link {
            color: var(--text-color) !important;
            font-weight: 600 !important;
            font-size: 1.1rem !important;
            padding: 0.6rem 1.2rem !important;
            border-radius: 8px !important;
            transition: var(--transition) !important;
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
            padding: 0.6rem 1.5rem !important;
            font-size: 1rem !important;
            cursor: pointer;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            transition: var(--transition);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
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
        .easycloud-navbar .analytics-dropdown { min-width: 420px; }
        .easycloud-navbar .ai-dropdown { min-width: 520px; }
        .easycloud-navbar .apps-dropdown { min-width: 480px; }

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
                padding-top: 70px !important;
            }
            
            .easycloud-navbar {
                padding: 0.5rem 0 !important;
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
            
            .easycloud-navbar .contact-btn {
                width: 100% !important;
                justify-content: center !important;
                margin-top: 1rem !important;
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
</head>
<body>
    <!-- Bootstrap Navigation -->
    <nav class="navbar navbar-expand-lg easycloud-navbar">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="/index.php" aria-label="EasyCloud Home">
                <img src="/images/main_logo.svg" alt="EasyCloud Logo" width="100" height="40" />
            </a>

            <!-- Mobile toggle button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Navigation items -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <!-- Domains Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Domains
                        </a>
                        <ul class="dropdown-menu domains-dropdown">
                            <div class="domains-grid">
                                <li><a href="/industrial-engineering.php" class="dropdown-item-custom">
                                    <i class="fas fa-industry item-icon"></i>
                                    <div class="item-info">
                                        <h6>Industrial Engineering</h6>
                                        <p>Make industrial processes more efficient and effective.</p>
                                    </div>
                                </a></li>
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
                                <li><a href="/extrution.php" class="dropdown-item-custom">
                                    <i class="fas fa-cogs item-icon"></i>
                                    <div class="item-info">
                                        <h6>Extrusion ERP</h6>
                                        <p>Enhance your production efficiency and achieve superior product quality.</p>
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

                    <!-- Regular Nav Items -->
                    <li class="nav-item"><a class="nav-link" href="/blogs.php">Blogs</a></li>
                    <li class="nav-item"><a class="nav-link" href="/our_process.php">Our Processes</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about.php">About Us</a></li>
                </ul>

                <!-- Contact Button -->
                <div class="d-flex">
                    <a href="/contact.php">
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