<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="images/E.png">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOP 10 ERP System - EasyCloud</title>
    <link rel="stylesheet" href="styles.css">
    
    <link rel="stylesheet" href="marquee.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">  
      <style>
    body {
      margin-top: 5px !important;
      font-family: Arial, sans-serif;
      line-height: 1.6;
      color: #333;
    }
    .logo img {
      margin-top: 15px;
      height: 40px;
    }

    /* HERO */
    .top_erp-hero {
      padding: 2rem 1rem;
      background: #fff;
      text-align: center;
    }
    .top_erp-hero-icon {
      font-size: 2.8rem;
      color: #2196f3;
      margin-bottom: 1rem;
    }
    .top_erp-hero-subtitle {
      font-size: 1.2rem;
      color: #2196f3;
      font-weight: 600;
      margin-bottom: 0.8rem;
    }
    .top_erp-hero-title {
      font-size: 2.2rem;
      font-weight: 800;
      color: #1a2b4e;
      margin-bottom: 1rem;
    }
    .top_erp-hero-desc {
      color: #555;
      font-size: 1rem;
      max-width: 600px;
      margin: 0 auto 1.5rem auto;
    }

    /* IMAGE */
    .top_erp-image-section {
      display: flex;
      justify-content: center;
      padding: 0 1rem 2rem 1rem;
    }
    .top_erp-main-image {
      width: 100%;
      max-width: 800px;
      border-radius: 12px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.1);
      object-fit: cover;
    }

    /* SECTION GENERAL */
    .top_erp-section {
      padding: 2.5rem 1rem;
      max-width: 1100px;
      margin: 0 auto;
      background: #fff;
    }
    .top_erp-section.bg-light {
      background: #f8fafd;
    }
    .top_erp-section-main-title{
        font-size: 2rem;
        font-weight: 800;
        color: #1a2b4e;
        margin: 2rem 0 1rem 0;
        text-align: center;
    }
    .top_erp-section-main-text{
        font-size: 1rem;
        color: #555;
        margin-bottom: 1rem;
        padding: 2.5rem 1rem;
        max-width: 1100px;
        margin: 0 auto;
}
    
    .top_erp-section-title {
      font-size: 1.8rem;
      font-weight: 800;
      color: #1a2b4e;
      margin-bottom: 1rem;
      text-align: center;
    }
    .top_erp-subtitle {
      font-size: 1.2rem;
      font-weight: 700;
      margin-top: 1rem;
      color: #2196f3;
    }
    .top_erp-section-text {
      font-size: 1rem;
      color: #555;
      margin-bottom: 1rem;
    }
    .top_erp-list {
      list-style: none;
      padding-left: 0;
    }
    .top_erp-list li {
      margin-bottom: 0.6rem;
      font-size: 1rem;
      color: #444;
      padding-left: 1.5rem;
      position: relative;
    }
    .top_erp-list li::before {
      content: "✔";
      color: #2196f3;
      position: absolute;
      left: 0;
      font-weight: bold;
    }

    /* CTA */
    .top_erp-cta {
      text-align: center;
      margin: 2rem 0;
    }
    .top_erp-cta-btn {
      background: #1A2B4E;
      color: white;
      padding: 0.9rem 2rem;
      border: none;
      border-radius: 8px;
      font-size: 1rem;
      font-weight: 600;
      cursor: pointer;
      transition: background 0.3s ease;
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
    }
    .top_erp-cta-btn:hover {
      background: #2A3B5E;
    }

    /* TESTIMONIAL */
    .top_erp-testimonial-section {
      background: #fff;
    }
    .top_erp-testimonial-container {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
    }
    .top_erp-testimonial-left {
      flex: 1;
      background: #236093;
      display: flex;
      justify-content: center;
      padding: 2rem;
    }
    .top_erp-testimonial-quote {
      background: #f7fafd;
      border-radius: 16px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
      padding: 2rem;
      max-width: 500px;
    }
    .top_erp-quote-text {
      font-size: 1.4rem;
      font-weight: 700;
      margin-bottom: 1.2rem;
    }
    .top_erp-quote-author {
      color: #666;
      font-size: 1rem;
      font-weight: 600;
    }
    .top_erp-testimonial-right {
      flex: 1;
      min-width: 280px;
    }
    .top_erp-testimonial-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    /* EXPERIENCE */
    .experience-section {
      background: #1A2B4E;
      color: #fff;
      text-align: center;
      padding: 2.5rem 1rem;
    }
    .experience-btn {
      display: inline-block;
      margin-top: 1rem;
      background: #2196f3;
      color: #fff;
      padding: 0.9rem 2rem;
      border-radius: 8px;
      text-decoration: none;
      font-weight: 600;
    }
    .experience-btn:hover {
      background: #1976d2;
    }

    /* RESPONSIVE */
    @media (max-width: 768px) {
      .top_erp-hero-title { font-size: 1.6rem; }
      .top_erp-hero-subtitle { font-size: 1rem; }
      .top_erp-section-title { font-size: 1.5rem; }
      .top_erp-quote-text { font-size: 1.2rem; }
      .top_erp-testimonial-container { flex-direction: column; }
      .top_erp-testimonial-left, .top_erp-testimonial-right { width: 100%; }
    }
  </style>
</head>
<body>
    
<?php include 'nav_bar.php'; ?>

    <!-- Hero Section -->
    <section class="top_erp-hero">
        <div class="top_erp-hero-icon"><i class="fas fa-address-card"></i></div>
        <div class="top_erp-hero-subtitle">ERP System</div>
        <div class="top_erp-hero-title">Top 10 ERP Software Companies in  the World (2025 Edition)</div>
        <div class="top_erp-hero-desc">
            Compare the Best ERP Systems for Businesses of All Sizes – Features, Pricing, Pros & Cons Explained
        </div>
    </section>

    <!-- TOP 10 ERP Image Section -->
    <section class="top_erp-image-section">
        <img src="images/Top 10 ERP - 1.png" alt="TOP 10 ERP in action" class="top_erp-main-image">
    </section>

    <div class="top_erp-section-main-title">The Top-10 ERP</div>
    <p class="top_erp-section-main-text">
        Explore the Top 10 ERP software companies in India, featuring industry leaders delivering cutting-edge ERP solutions tailored to diverse business needs. Whether you're looking for a trusted ERP service provider, an ERP software development company in India, or a comprehensive ERP directory, this guide will help you find the best solution for your enterprise.
    </p>
    
    <!-- Call to Action -->
    <div class="top_erp-cta">
        <a href="contact.php">
        <button class="top_erp-cta-btn">Book a Demo <i class="fas fa-arrow-right"></i></button>
        </a>
    </div>
    <!-- ================= EasyCloud ================= -->
    <section class="top_erp-section">
      <h2 class="top_erp-section-title">EasyCloud</h2>
      <p class="top_erp-section-text">
        EasyCloud is an advanced cloud-based ERP software designed to streamline business operations and enhance enterprise efficiency. With AI-powered automation, real-time analytics, and seamless integration across multiple modules, EasyCloud helps businesses achieve scalability, accuracy, and operational excellence.
      </p>
      <h3 class="top_erp-subtitle">Key Features:</h3>
      <ul class="top_erp-list">
        <li>Cloud-Based & AI-Driven: Enables real-time access and intelligent automation.</li>
        <li>Comprehensive Business Modules: Finance, inventory, procurement, sales, HR, supply chain.</li>
        <li>Advanced Reporting & Insights: Real-time analytics for decision-making and growth.</li>
      </ul>
      <h3 class="top_erp-subtitle">Key Benefits:</h3>
      <ul class="top_erp-list">
        <li>Real-Time Business Management with a single source of truth.</li>
        <li>Scalability & Customization for enterprises of all sizes.</li>
        <li>Seamless Integrations with 3rd-party tools & platforms.</li>
      </ul>
      <p class="top_erp-section-text">
        Trusted by businesses across retail, manufacturing, BFSI, healthcare, and more, EasyCloud is the go-to ERP solution for scalability and digital transformation.
      </p>
    </section>

    <!-- ================= NetSuite ================= -->
    <section class="top_erp-section bg-light">
      <h2 class="top_erp-section-title">NetSuite</h2>
      <p class="top_erp-section-text">
        NetSuite by Oracle is a global leader in cloud ERP, seamlessly integrating financials, CRM, inventory, order management, and eCommerce.
      </p>
      <h3 class="top_erp-subtitle">Key Features:</h3>
      <ul class="top_erp-list">
        <li>Cloud-Based ERP with real-time synchronization.</li>
        <li>Comprehensive modules: financials, inventory, order management, CRM.</li>
        <li>Advanced Analytics & Reporting for strategic planning.</li>
      </ul>
      <h3 class="top_erp-subtitle">Key Benefits:</h3>
      <ul class="top_erp-list">
        <li>Real-Time Business Monitoring & trend analysis.</li>
        <li>Scalability for growing enterprises.</li>
        <li>Global ERP Capabilities: multi-currency & multi-language support.</li>
      </ul>
    </section>

    <!-- ================= SAP ERP ================= -->
    <section class="top_erp-section">
      <h2 class="top_erp-section-title">SAP ERP</h2>
      <p class="top_erp-section-text">
        SAP ERP delivers scalable, integrated, AI-powered solutions across finance, HR, supply chain, and procurement to enhance efficiency and profitability.
      </p>
      <h3 class="top_erp-subtitle">Key Features:</h3>
      <ul class="top_erp-list">
        <li>End-to-End Business Integration with AI-driven insights.</li>
        <li>Customizable & Scalable for industry-specific needs.</li>
        <li>Advanced Analytics & Automation for smarter decision-making.</li>
      </ul>
      <h3 class="top_erp-subtitle">Benefits:</h3>
      <ul class="top_erp-list">
        <li>Enhanced Operational Efficiency through automation.</li>
        <li>Cloud Scalability & Global Compliance.</li>
        <li>Industry Standards & Regulatory Compliance.</li>
      </ul>
    </section>

    <!-- ================= Microsoft Dynamics ERP ================= -->
    <section class="top_erp-section bg-light">
      <h2 class="top_erp-section-title">Microsoft Dynamics ERP</h2>
      <p class="top_erp-section-text">
        Microsoft Dynamics ERP blends cloud technology, AI, and automation with deep Microsoft ecosystem integration.
      </p>
      <h3 class="top_erp-subtitle">Key Features:</h3>
      <ul class="top_erp-list">
        <li>Seamless Integration with Office 365, Azure, Power BI.</li>
        <li>User-Centric Dashboard & AI-powered workflows.</li>
        <li>Customizable & Scalable modular ERP.</li>
      </ul>
      <h3 class="top_erp-subtitle">Benefits:</h3>
      <ul class="top_erp-list">
        <li>Boosted Productivity via automation & forecasting.</li>
        <li>Cloud-Based Scalability for global expansion.</li>
        <li>Robust Microsoft Support & Training ecosystem.</li>
      </ul>
    </section>



    <!-- Testimonial/Quote Section -->
    <section class="top_erp-testimonial-section">
        <div class="top_erp-testimonial-container">
            <div class="top_erp-testimonial-left">
                <div class="top_erp-testimonial-quote">
                    <p class="top_erp-quote-text">
                        ERP systems integrate core business processes into a unified platform, providing real-time insights that help organizations optimize operations and make data-driven decisions.
                    </p>
                    <p class="top_erp-quote-author">Manish Gupta, Founder and CEO</p>
                </div>
            </div>
            <div class="top_erp-testimonial-right">
                <img src="images/Top 10 ERP - 2.png" alt="TOP 10 ERP Testimonial" class="top_erp-testimonial-image">
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