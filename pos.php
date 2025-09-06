<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="images/E.png">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS (Point of Sale) - EasyCloud</title>
    <link rel="stylesheet" href="styles.css">
    
    <link rel="stylesheet" href="marquee.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">  
      <style>

    body {
        margin-top: 5px !important;
    }
    .hero {
        padding-top: 0rem !important;
    }
    
    .logo img {
        margin-top: 15px;
        height: 40px;
    }
    
    
    .contact-btn {
        background: linear-gradient(90deg, #5a6473 0%, #23272f 100%);
        color: #fff;
        font-weight: 700;
        border: none;
        border-radius: 8px;
        padding: 0.7rem 1.5rem;
        font-size: 1.1rem;
        cursor: pointer;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        transition: background 0.2s, box-shadow 0.2s;
    }
    .contact-btn:hover,
    .contact-btn:focus {
        background: linear-gradient(90deg, #23272f 0%, #5a6473 100%);
        box-shadow: 0 4px 16px rgba(0,0,0,0.12);
    }
    
   
    .apps-section {
        padding: 2rem 0 !important;
        background-color: #fff;
        position: relative;
        overflow: hidden;
    }
    .trusted-section {
        margin-top: 0 !important;
        padding-top: 0 !important;
        padding-bottom: 0.5rem !important;
    }
    .trusted-heading {
        margin-top: 0 !important;
        margin-bottom: 0.5rem !important;
    }

        
        .contact-btn {
            background: linear-gradient(90deg, #5a6473 0%, #23272f 100%);
            color: #fff;
            font-weight: 700;
            border: none;
            border-radius: 8px;
            padding: 0.7rem 1.5rem;
            font-size: 1.1rem;
            cursor: pointer;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            transition: background 0.2s, box-shadow 0.2s;
        }
        .contact-btn:hover,
        .contact-btn:focus {
            background: linear-gradient(90deg, #23272f 0%, #5a6473 100%);
            box-shadow: 0 4px 16px rgba(0,0,0,0.12);
        }
        .pos-hero {
            padding: 0;
            background: #fff;
            text-align: center;
        }
        .pos-hero-icon {
            font-size: 2.8rem;
            color: #2196f3;
            margin-bottom: 1rem;
        }
        .pos-hero-title {
            font-size: 2.5rem;
            font-weight: 800;
            color: #1a2b4e;
            margin-bottom: 1rem;
        }
        .pos-hero-subtitle {
            font-size: 1.2rem;
            color: #2196f3;
            font-weight: 600;
            margin-bottom: 1.2rem;
        }
        .pos-hero-desc {
            color: #555;
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto 2.5rem auto;
        }
        .pos-features-section {
            background: #f8fafd;
            padding: 3rem 0 4rem 0;
        }
        .pos-features-grid {
            display: flex;
            gap: 2.5rem;
            justify-content: center;
            flex-wrap: wrap;
            max-width: 1100px;
            margin: 0 auto;
        }
        .pos-feature-card {
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 2px 16px rgba(0,0,0,0.07);
            padding: 2rem 1.5rem;
            min-width: 240px;
            max-width: 300px;
            flex: 1 1 240px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin-bottom: 1.5rem;
            transition: box-shadow 0.2s, transform 0.2s;
        }
        .pos-feature-card:hover {
            box-shadow: 0 6px 32px rgba(0,0,0,0.13);
            transform: translateY(-4px);
        }
        .pos-feature-icon {
            font-size: 2rem;
            color: #2196f3;
            margin-bottom: 1rem;
        }
        .pos-feature-title {
            font-size: 1.18rem;
            font-weight: 700;
            color: #1a2b4e;
            margin-bottom: 0.5rem;
        }
        .pos-feature-desc {
            color: #666;
            font-size: 1rem;
        }
        .pos-cta {
            text-align: center;
            margin: 3rem 0 2rem 0;
        }
        .pos-cta-btn {
            background: #1A2B4E;
            color: white;
            padding: 1rem 2.2rem;
            border: none;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.7rem;
        }
        .pos-cta-btn:hover {
            background: #2A3B5E;
        }
        .pos-image-section {
            display: flex;
            justify-content: center;
            align-items: center;
            background: #fff;
            padding: 0 0 3rem 0;
        }
        .pos-main-image {
            width: 80%;
            max-width: 800px;
            max-height: 500px;
            border-radius: 18px;
            box-shadow: 0 6px 32px rgba(0,0,0,0.13);
            object-fit: cover;
            display: block;
        }
        .pos-two-col-section {
            background: #f8fafd;
            padding: 4rem 0;
        }
        .pos-two-col-container {
            display: flex;
            max-width: 1400px;
            margin: 0 auto;
            gap: 2.5rem;
        }
        .pos-two-col-left {
            flex: 0 0 420px;
            position: sticky;
            top: 120px;
            align-self: flex-start;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 2px 16px rgba(0,0,0,0.07);
            padding: 2.5rem 2rem;
            height: fit-content;
        }
        .pos-two-col-left h2 {
            font-size: 2.4rem;
            font-weight: 800;
            color: #1a2b4e;
            margin-bottom: 1.2rem;
        }
        .pos-two-col-left p {
            color: #555;
            font-size: 1.18rem;
        }
        .pos-two-col-right {
            flex: 1 1 0%;
            max-height: 600px;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }
        .pos-two-col-right .pos-feature-card {
            min-width: unset;
            max-width: unset;
            margin-bottom: 0;
        }
        .pos-feature-title.blue {
            color: #2196f3;
            font-size: 1.25rem;
            font-weight: 700;
        }
        @media (max-width: 1100px) {
            .pos-two-col-container {
                flex-direction: column;
            }
            .pos-two-col-left {
                position: static;
                width: 100%;
                margin-bottom: 2rem;
            }
            .pos-two-col-right {
                max-height: 400px;
            }
        }
        .pos-testimonial-section {
            width: 100%;
            background: #fff;
            padding: 0;
        }
        .pos-testimonial-container {
            display: flex;
            min-height: 420px;
            width: 100%;
        }
        .pos-testimonial-left {
            flex: 1.2;
            background: #236093;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            position: relative;
            min-width: 0;
        }
        .pos-testimonial-quote {
            background: #f7fafd;
            border-radius: 32px;
            box-shadow: 0 6px 32px rgba(0,0,0,0.13);
            padding: 3rem 3.5rem;
            margin: 3rem 3rem 3rem 0;
            max-width: 600px;
            z-index: 2;
        }
        .pos-quote-text {
            font-size: 2.2rem;
            font-weight: 800;
            color: #1a2b4e;
            margin-bottom: 2rem;
        }
        .pos-quote-author {
            color: #888;
            font-size: 1.1rem;
            font-weight: 600;
        }
        .pos-testimonial-right {
            flex: 1.3;
            display: flex;
            align-items: stretch;
            min-width: 0;
        }
        .pos-testimonial-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 0 0 0 0;
        }
        @media (max-width: 1100px) {
            .pos-testimonial-container {
                flex-direction: column;
                min-height: unset;
            }
            .pos-testimonial-left, .pos-testimonial-right {
                flex: unset;
                min-width: 0;
            }
            .pos-testimonial-quote {
                margin: 2rem auto;
                padding: 2rem 1.5rem;
            }
            .pos-testimonial-image {
                border-radius: 0 0 18px 18px;
                min-height: 220px;
            }
        }
    </style>
</head>
<body>
    
<?php include 'nav_bar.php'; ?>

    <!-- Hero Section -->
    <section class="pos-hero">
        <div class="pos-hero-icon"><i class="fas fa-cash-register"></i></div>
        <div class="pos-hero-subtitle">Point Of Sale (POS)</div>
        <div class="pos-hero-title">Transform Your Business with EasyCloud POS</div>
        <div class="pos-hero-desc">
            EasyCloud POS is a powerful, intuitive solution designed to streamline transactions, enhance customer interactions, and drive business growth. Experience fast billing, real-time analytics, and seamless inventory management—all in one place.
        </div>
    </section>

    <!-- POS Image Section -->
    <section class="pos-image-section">
        <img src="images/pos_big.avif" alt="POS in action" class="pos-main-image">
    </section>

    
    <!-- Call to Action -->
    <div class="pos-cta">
        <a href="contact.php">
        <button class="pos-cta-btn">Book a Demo <i class="fas fa-arrow-right"></i></button>
        </a>
    </div>

    
    <!-- Two Column Scrollable Section -->
    <section class="pos-two-col-section">
        <div class="pos-two-col-container">
            <div class="pos-two-col-left">
                <h2>Why Choose Easycloud for POS and Retail Management?</h2>
                <p>We empower your organization to transform raw data into actionable insights. Our tailored dashboards and real-time analytics enhance decision-making, streamline operations, and drive growth, ensuring you stay ahead in a competitive landscape.</p>
            </div>
            <div class="pos-two-col-right">
                <div class="pos-feature-card">
                    <div class="pos-feature-title blue">Advanced POS System</div>
                    <div class="pos-feature-desc">Our POS system offers a complete solution for managing sales, inventory, and customer interactions. With an intuitive interface and powerful features, Easycloud ensures a smooth checkout process and boosts operational efficiency.<br><br>Fast Transactions: Enjoy quick, accurate transactions with our user-friendly POS interface.<br>Integrated Payments: Accept various payment methods, including credit/debit cards, mobile payments, and cash.</div>
                </div>
                <div class="pos-feature-card">
                    <div class="pos-feature-title blue">Real-Time Inventory Management</div>
                    <div class="pos-feature-desc">Stay on top of your inventory with real-time updates and automated stock management. Easycloud's POS system integrates seamlessly with your inventory, providing accurate stock levels and minimizing the risk of overstocking or running out of stock.<br><br>Live Inventory Tracking: Monitor stock levels in real time and receive alerts for low inventory.<br>Automated Reordering: Set up automatic reordering based on predefined stock thresholds.</div>
                </div>
                <div class="pos-feature-card">
                    <div class="pos-feature-title blue">Multi-Channel Integration</div>
                    <div class="pos-feature-desc">Easily connect Easycloud's POS system with both your online and physical stores. Synchronize sales data, inventory, and customer information across all channels for a cohesive retail experience.<br><br>Omnichannel Support: Manage sales and inventory across multiple channels from one platform.<br>Seamless Synchronization: Ensure consistent pricing, promotions, and stock levels.</div>
                </div>
                <div class="pos-feature-card">
                    <div class="pos-feature-title blue">User-Friendly Interface</div>
                    <div class="pos-feature-desc">Our POS system is designed to be user-friendly, making it accessible for all staff members. The intuitive interface reduces training time and enhances operational efficiency.<br><br>Simple Setup: Quickly configure the POS system with minimal effort.<br>Easy Navigation: Navigate the POS interface effortlessly, even for new users.</div>
                </div>
                <div class="pos-feature-card">
                    <div class="pos-feature-title blue">Secure and Reliable</div>
                    <div class="pos-feature-desc">Safeguard your business data with Easycloud's secure and dependable POS system. Our solution includes robust security features to protect transactions, customer information, and inventory data.<br><br>Data Encryption: Encrypt sensitive transaction and customer data to prevent unauthorized access.<br>Backup and Recovery: Ensure data integrity with regular backups and recovery options.</div>
                </div>
                <div class="pos-feature-card">
                    <div class="pos-feature-title blue">Comprehensive Sales Reporting</div>
                    <div class="pos-feature-desc">Unlock valuable insights into your sales performance with Easycloud's detailed reporting features. Generate in-depth sales reports and analyze trends to make data-driven decisions that drive business growth.<br><br>Customizable Reports: Tailor sales reports to fit your specific business needs.<br>Data Analysis: Evaluate sales trends, customer preferences, and performance metrics.</div>
                </div>
                <div class="pos-feature-card">
                    <div class="pos-feature-title blue">Enhanced Customer Management</div>
                    <div class="pos-feature-desc">Strengthen your customer relationships with Easycloud's CRM integration. Track interactions, manage loyalty programs, and personalize marketing efforts to elevate the shopping experience.<br><br>Customer Profiles: Maintain detailed profiles and purchase history for personalized service.<br>Loyalty Programs: Create and manage customer loyalty programs and promotions.</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial/Quote Section -->
    <section class="pos-testimonial-section">
        <div class="pos-testimonial-container">
            <div class="pos-testimonial-left">
                <div class="pos-testimonial-quote">
                    <p class="pos-quote-text">
                        POS systems connect customer transactions directly to our ERP, giving businesses instant insights to manage sales, inventory, and decisions more efficiently.
                    </p>
                    <p class="pos-quote-author">Manish Gupta, Founder and CEO</p>
                </div>
            </div>
            <div class="pos-testimonial-right">
                <img src="images/manish.avif" alt="POS Testimonial" class="pos-testimonial-image">
            </div>
        </div>
    </section>

     <!-- Image Marquee Section -->
     <section class="marquee-section">
        <div class="marquee-container">
            <div class="marquee-track">
                <!-- First set of images -->
                <div class="marquee-content">
                    <img src="images/axiom.svg" alt="Axiom" class="marquee-img">
                    <img src="images/bankabio.avif" alt="Bankabio" class="marquee-img">
                    <img src="images/dodla.avif" alt="Dodla" class="marquee-img">
                    <img src="images/fin_buddy.avif" alt="Fin Buddy" class="marquee-img">
                    <img src="images/htpl.avif" alt="HTPL" class="marquee-img">
                    <img src="images/karachi_bakery.avif" alt="Karachi Bakery" class="marquee-img">
                    <img src="images/m11.svg" alt="M11" class="marquee-img">
                    <img src="images/medijourn.avif" alt="Medijourn" class="marquee-img">
                    <img src="images/sae.svg" alt="SAE" class="marquee-img">
                    <img src="images/aparna.avif" alt="Aparna" class="marquee-img">
                    <img src="images/rnk.avif" alt="RNK" class="marquee-img">
                    <img src="images/excelrate.avif" alt="Excelrate" class="marquee-img">
                    <img src="images/unicorn.avif" alt="Unicorn" class="marquee-img">
                </div>
                <!-- Duplicate for seamless loop -->
                <div class="marquee-content">
                    <img src="images/axiom.svg" alt="Axiom" class="marquee-img">
                    <img src="images/bankabio.avif" alt="Bankabio" class="marquee-img">
                    <img src="images/dodla.avif" alt="Dodla" class="marquee-img">
                    <img src="images/fin_buddy.avif" alt="Fin Buddy" class="marquee-img">
                    <img src="images/htpl.avif" alt="HTPL" class="marquee-img">
                    <img src="images/karachi_bakery.avif" alt="Karachi Bakery" class="marquee-img">
                    <img src="images/m11.svg" alt="M11" class="marquee-img">
                    <img src="images/medijourn.avif" alt="Medijourn" class="marquee-img">
                    <img src="images/sae.svg" alt="SAE" class="marquee-img">
                    <img src="images/aparna.avif" alt="Aparna" class="marquee-img">
                    <img src="images/rnk.avif" alt="RNK" class="marquee-img">
                    <img src="images/excelrate.avif" alt="Excelrate" class="marquee-img">
                    <img src="images/unicorn.avif" alt="Unicorn" class="marquee-img">
                </div>
            </div>
        </div>
    </section>

      <!-- Experience Section -->
      <section class="experience-section">
        <div class="experience-container">
            <h2 style="color: #ffffff;">Experience EasyCloud Today</h2>
            <p>Got questions? Let's get you moving.</p>
            <a href="contact.php" class="experience-btn">Contact Us <i class="fas fa-arrow-right"></i></a>
        </div>
    </section>
  <?php include 'footer.php'; ?>
    
</body>
</html> 