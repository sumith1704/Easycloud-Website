<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="images/E.png">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Energy & Utilities - EasyCloud</title>
    <link rel="stylesheet" href="styles.css">
    
    <link rel="stylesheet" href="marquee.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>

    <style>
       
    body {
        margin-top: 5px !important;
    }
    .hero {
        padding-top: 0rem !important;
    }
    
    .logo img{
        margin-top: 13px;
        height: 35px;
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
    .office-locations {
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: flex-start;
      gap: 3rem;
      width: 100%;
      flex-wrap: nowrap;
    }
    @media (max-width: 900px) {
      .office-locations {
        flex-wrap: wrap;
        gap: 2rem;
      }
      .office-card {
        min-width: 220px;
        flex: 1 1 220px;
      }
    }
    .office-card {
      align-items: center;
      /* text-align: center; */
      min-width: 260px;
    }
    section h2, .office-card h3, .trusted-heading {
      font-family: 'Poppins', 'Segoe UI', Arial, sans-serif;
      font-weight: 800;
      color: #1a2b4e;
      letter-spacing: 0.01em;
    }
    @media (max-width: 600px) {
      .hero-content h1 {
        font-size: 2rem !important;
        padding-top: 2.5rem !important;
      }
      .hero {
        padding-top: 7rem !important;
      }
    .whatsapp-chat-link {
      display: inline-flex;
      align-items: center;
      gap: 0.4rem;
      margin-top: 0.5rem;
      font-weight: 600;
      color: #25D366;
      text-decoration: none;
      font-size: 1.08rem;
    }
    .whatsapp-icon {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
      color: #25D366;
      background: #eafff3;
      border-radius: 50%;
      width: 2.2rem;
      height: 2.2rem;
      transition: background 0.2s;
    }
    .whatsapp-chat-link:hover .whatsapp-icon {
      background: #25D366;
      color: #fff;
    }
    @media (max-width: 600px) {
      .whatsapp-icon {
        font-size: 1.1rem;
        width: 1.5rem;
        height: 1.5rem;
      }
      .whatsapp-chat-link {
        font-size: 0.98rem;
      }
    }
    .whatsapp-float-btn {
      position: fixed;
      right: 1.5rem;
      bottom: 1.5rem;
      z-index: 2000;
      background: #25D366;
      border-radius: 50%;
      width: 3.5rem;
      height: 3.5rem;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 4px 16px rgba(0,0,0,0.18);
      color: #fff;
      text-decoration: none;
      transition: box-shadow 0.2s, transform 0.2s;
    }
    .whatsapp-float-btn:hover {
      box-shadow: 0 8px 24px rgba(0,0,0,0.22);
      transform: scale(1.08);
    }
    .whatsapp-float-icon {
      font-size: 2rem;
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    @media (max-width: 600px) {
      .whatsapp-float-btn {
        width: 2.6rem;
        height: 2.6rem;
        right: 1rem;
        bottom: 1rem;
      }
      .whatsapp-float-icon {
        font-size: 1.4rem;
      }
    }
    
        </style>
</head>

<body>
    <?php include 'nav_bar.php'; ?>


    <!-- Hero Section -->
    <section class="domain-hero bfsi-hero">
        <div class="domain-hero-container">
            <div class="domain-hero-content">
                <div class="domain-icon">
                   <i class="fas fa-bolt"></i>
                    <span>Energy & Utilities</span>
                </div>
                <h1>Are you ready to optimize your energy and utility operations for efficiency and sustainability? </h1>
                <p>EasyCloud’s Energy & Utilities module improves service delivery, ensures regulatory compliance, and supports sustainable operations.</p>
                <a href="contact.php">
                    <button class="contact-btn">Contact Us</button>
                </a>
            </div>
        </div>
    </section>

  

    <img src="images/energy_and_utilities.avif" alt="Power BI"
    style="width: 60vw; max-width: 900px; border-radius: 18px; box-shadow: 0 8px 32px rgba(0,0,0,0.10); margin: 2rem auto 0 auto; display: block;">


    <!-- Primary Gains Section -->
    <section class="primary-gains-section">
        <div class="primary-gains-container">
            <h2>Key benefits of EasyCloud Energy & 
                Utilities module.</h2>
            <p>EasyCloud offers powerful tools to revolutionize the energy and utilities industry, enhancing operational efficiency, improving data management, and driving innovation. Here’s how our cloud-based solutions can make a difference:</p>
        </div>
    </section>

    <!-- Features Cards Section -->
    <section class="features-cards-section">
        <div class="features-cards-container">
            <div class="feature-card">
                <div class="feature-icon-wrapper">
                    <div class="feature-icon supply-chain">
                        <i class="fas fa-layer-group"></i>
                    </div>
                </div>
                <h3>Improve Customer Engagement and Service
                </h3>
                <div class="feature-details">
                    <div class="feature-item">
                        <h4>Customer Portals:</h4>
                        <p>Provide cloud-based portals where customers can view their energy usage, manage billing, and engage in energy-saving initiatives, enhancing satisfaction and interaction.</p>
                    </div>
                    <div class="feature-item">
                        <h4>Personalized Insights:</h4>
                        <p>Offer tailored recommendations based on customer energy usage patterns, helping them reduce consumption and lower their bills.</p>
                    </div>
                </div>
            </div>

            <div class="feature-card">
                <div class="feature-icon-wrapper">
                    <div class="feature-icon security">
                        <i class="fas fa-fingerprint"></i>
                    </div>
                </div>
                <h3>Optimize Data Management and Analytics
                </h3>
                <div class="feature-details">
                    <div class="feature-item">
                        <h4>Centralized Data Storage:</h4>
                        <p> Store extensive operational and customer data in a single, secure cloud repository, ensuring easy access and consistency across all departments.</p>
                    </div>
                    <div class="feature-item">
                        <h4>Advanced Analytics:</h4>
                        <p>Utilize cloud analytics tools to process and interpret data, offering insights into energy usage trends, demand forecasts, and operational efficiency.</p>
                    </div>
                </div>
            </div>

            <div class="feature-card">
                <div class="feature-icon-wrapper">
                    <div class="feature-icon inventory">
                        <i class="fas fa-boxes"></i>
                    </div>
                </div>
                <h3>Enhance Collaboration and Integration </h3>
                <div class="feature-details">
                    <div class="feature-item">
                        <h4>Unified Platforms:</h4>
                        <p>Unify operational systems and applications through cloud-based platforms, fostering better collaboration and data sharing across teams and stakeholders.</p>
                    </div>
                    <div class="feature-item">
                        <h4>Third-Party Integration:</h4>
                        <p>Extend functionality by connecting with third-party services and applications via cloud APIs, enhancing overall system capabilities.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="features-cards-section">
        <div class="features-cards-container">
            <div class="feature-card">
                <div class="feature-icon-wrapper">
                    <div class="feature-icon supply-chain">
                        <i class="fas fa-layer-group"></i>
                    </div>
                </div>
                <h3>Boost Operational Efficiency
                </h3>
                <div class="feature-details">
                    <div class="feature-item">
                        <h4>Real-Time Monitoring:</h4>
                        <p>Keep an eye on energy generation, distribution, and consumption with real-time cloud-based monitoring. Quickly address operational issues and optimize performance.</p>
                    </div>
                    <div class="feature-item">
                        <h4>Predictive Maintenance:</h4>
                        <p>Use cloud-based predictive maintenance to analyze equipment data, foresee potential failures, and prevent downtime, ultimately reducing maintenance costs.</p>
                    </div>
                </div>
            </div>
            <div class="feature-card">
                <div class="feature-icon-wrapper">
                    <div class="feature-icon security">
                        <i class="fas fa-fingerprint"></i>
                    </div>
                </div>
                <h3>Enhance Grid Management
                </h3>
                <div class="feature-details">
                    <div class="feature-item">
                        <h4>Smart Grid Integration: </h4>
                        <p>Seamlessly integrate with smart grid technologies through the cloud to manage energy distribution, balance loads, and incorporate renewable energy sources.</p>
                    </div>
                    <div class="feature-item">
                        <h4>Demand Response:</h4>
                        <p>Implement demand response programs with cloud solutions, adjusting energy consumption based on real-time data to handle peak loads and maintain grid stability.</p>
                    </div>
                </div>
            </div>

            <div class="feature-card">
                <div class="feature-icon-wrapper">
                    <div class="feature-icon inventory">
                        <i class="fas fa-boxes"></i>
                    </div>
                </div>
                <h3>Promote Energy Efficiency and Sustainability</h3>
                <div class="feature-details">
                    <div class="feature-item">
                        <h4>Energy Management Systems (EMS):</h4>
                        <p>Use cloud-based EMS to optimize energy usage, monitor performance, and identify opportunities for conservation and sustainability.</p>
                    </div>
                    <div class="feature-item">
                        <h4>Renewable Energy Integration: </h4>
                        <p>Facilitate the integration of renewable energy sources like solar and wind with cloud-based solutions for effective grid management and optimization.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="features-cards-section">
        <div class="features-cards-container">
            <div class="feature-card">
                <div class="feature-icon-wrapper">
                    <div class="feature-icon supply-chain">
                        <i class="fas fa-layer-group"></i>
                    </div>
                </div>
                <h3>Achieve Cost Efficiency
                </h3>
                <div class="feature-details">
                    <div class="feature-item">
                        <h4>Scalable Infrastructure:</h4>
                        <p>Adjust cloud resources to match demand fluctuations, whether during peak periods or as services expand, without hefty capital investments.</p>
                    </div>
                    <div class="feature-item">
                        <h4>Operational Savings:</h4>
                        <p>Cut costs related to maintaining physical IT infrastructure by leveraging cloud services for data storage, processing, and application hosting.</p>
                    </div>
                </div>
            </div>
            <div class="feature-card">
                <div class="feature-icon-wrapper">
                    <div class="feature-icon security">
                        <i class="fas fa-fingerprint"></i>
                    </div>
                </div>
                <h3>Enhance Disaster Recovery and Business Continuity
                </h3>
                <div class="feature-details">
                    <div class="feature-item">
                        <h4>Backup Solutions: </h4>
                        <p>Protect critical data and ensure business continuity with cloud-based backup and disaster recovery solutions.

                        </p>
                    </div>
                    <div class="feature-item">
                        <h4>Resilience: </h4>
                        <p>Improve system resilience with cloud services that offer high availability and failover capabilities, minimizing downtime and disruptions.</p>
                    </div>
                </div>
            </div>

            <div class="feature-card">
                <div class="feature-icon-wrapper">
                    <div class="feature-icon inventory">
                        <i class="fas fa-boxes"></i>
                    </div>
                </div>
                <h3>Ensure Regulatory Compliance and Reporting</h3>
                <div class="feature-details">
                    <div class="feature-item">
                        <h4>Compliance Management:</h4>
                        <p>Stay compliant with industry regulations through cloud solutions that include built-in compliance features and regular updates..</p>
                    </div>
                    <div class="feature-item">
                        <h4>Automated Reporting:</h4>
                        <p>Automate regulatory reports and documentation with cloud tools, ensuring accuracy and timely submission.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CEO Quote Section -->
    <section class="ceo-quote-section">
        <div class="ceo-quote-container">
            <div class="quote-content">
                <h2>Our Energy and Utilities solution enhances operational efficiency and sustainability, empowering organizations to optimize resources and drive growth</h2>
                <div class="quote-author">
                    <p>Manish Gupta, Founder and CEO</p>
                </div>
            </div>
            <div class="quote-image">
                <img src="images/energy_and uti.avif" alt="Industrial Factory" class="factory-image">
            </div>
        </div>
    </section>

    <!-- Trusted Partners Section -->
    <section class="trusted-section">
        <h2 class="trusted-heading">Trusted by industry leaders</h2>
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