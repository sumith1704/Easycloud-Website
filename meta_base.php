<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="images/E.png">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meta Base - EasyCloud</title>
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
    <section class="hero" style="padding: 4rem 0 2rem 0;">
        <div class="hero-container" style="flex-direction: column; align-items: center;">
            <h1 style="text-align: center; font-size: 2.5rem; margin-bottom: 1rem; color: #1a2b4e;">Boost insights with
                EasyCloud and Metabase for smarter decisions.</h1>
            <p style="text-align: center; max-width: 600px; color: #555; font-size: 1.15rem; margin-bottom: 2rem;">
                Unlock data-driven insights with EasyCloud’s integration with Metabase. This partnership delivers
                real-time analytics and interactive dashboards, empowering your business to make informed decisions and
                enhance performance.

            </p>
            <img src="images/meta_base_image.avif" alt="Power BI"
                style="width: 60vw; max-width: 600px; border-radius: 18px; box-shadow: 0 8px 32px rgba(0,0,0,0.10); margin: 2rem auto 0 auto; display: block;">
        </div>
    </section>

    <!-- Why Choose Easycloud with PowerBI Section -->
    <section class="powerbi-benefits-section" style="padding: 3rem 0 2rem 0; background: #fafbfc;">
        <div
            style="display: flex; flex-wrap: wrap; max-width: 1200px; margin: 0 auto; gap: 2.5rem; align-items: flex-start;">
            <!-- Left Column -->
            <div style="flex: 1 1 380px; min-width: 320px; max-width: 520px;">
                <h2 style="font-size: 2.5rem; color: #1a2b4e; font-weight: 800; margin-bottom: 1.2rem;">Why Integrate
                    EasyCloud with Metabase?</h2>
                <p style="color: #555; font-size: 1.15rem; margin-bottom: 2rem;">Boost your business decisions by
                    integrating EasyCloud with Metabase. This powerful combination brings together Easycloud’s robust
                    ERP features with Metabase’s intuitive analytics and visualization tools, helping you gain deeper
                    insights into your operations.</p>
                <a href="contact.php">
                    <button class="contact-btn" style="margin-bottom: 2rem;">Contact Us</button>
                </a>
                <img src="images/meta_graph.avif" alt="Sales by Type"
                    style="width: 100%; border-radius: 18px; box-shadow: 0 4px 24px rgba(0,0,0,0.10); margin-bottom: 2rem;">
                <img src="images/meta_graph2.avif" alt="Sales by Product Group"
                    style="width: 100%; border-radius: 18px; box-shadow: 0 4px 24px rgba(0,0,0,0.10);">
            </div>
            <!-- Right Column -->
            <div style="flex: 1 1 340px; min-width: 300px; display: flex; flex-direction: column; gap: 1.5rem;">
                <div
                    style="background: #fff; border-radius: 24px; box-shadow: 0 2px 16px rgba(0,0,0,0.07); padding: 2rem 1.5rem;">
                    <h3 style="color: #2196f3; font-size: 1.3rem; font-weight: 700; margin-bottom: 0.7rem;">Unified Data
                        Overview</h3>
                    <p style="color: #666; font-size: 1rem;">Unified Data Overview Combine data from Easycloud's ERP
                        system with PowerBI to get a 360° view of your business. From inventory to financials, you'll
                        have a complete, real-time picture of your operations in one place.<br><br>Data Consolidation:
                        Pull data from Easycloud's different modules into PowerBI.<br>Up-to-Date Information: Stay
                        current with automatic real-time data updates.</p>
                </div>
                <div
                    style="background: #fff; border-radius: 24px; box-shadow: 0 2px 16px rgba(0,0,0,0.07); padding: 2rem 1.5rem;">
                    <h3 style="color: #2196f3; font-size: 1.3rem; font-weight: 700; margin-bottom: 0.7rem;">Effortless
                        Data Visualization
                    </h3>
                    <p style="color: #666; font-size: 1rem;">Metabase’s easy-to-use interface allows you to create
                        dynamic, interactive visualizations of your Easycloud data. Build reports and dashboards that
                        reveal key trends and performance metrics in a way that’s clear and
                        actionable.<br><br>Custom Dashboards: Tailor your dashboards to meet specific business
                        goals.<br>Interactive Charts: Present your data through various charts and graphs for better
                        insights.</p>
                </div>
                <div
                    style="background: #fff; border-radius: 24px; box-shadow: 0 2px 16px rgba(0,0,0,0.07); padding: 2rem 1.5rem;">
                    <h3 style="color: #2196f3; font-size: 1.3rem; font-weight: 700; margin-bottom: 0.7rem;">Simple Data
                        Exploration
                    </h3>
                    <p style="color: #666; font-size: 1rem;">Explore and analyze your Easycloud data without technical
                        complexity. Metabase’s query builder lets you create ad-hoc reports, generate insights, and
                        answer critical business questions with ease.
                        <br><br>Query Builder: Drag-and-drop tools simplify query creation.
                        <br> Ad-Hoc Reporting: Generate reports on-demand for fast insights.
                    </p>
                </div>
                <div
                    style="background: #fff; border-radius: 24px; box-shadow: 0 2px 16px rgba(0,0,0,0.07); padding: 2rem 1.5rem;">
                    <h3 style="color: #2196f3; font-size: 1.3rem; font-weight: 700; margin-bottom: 0.7rem;">Real-Time
                        Analytics
                    </h3>
                    <p style="color: #666; font-size: 1rem;">Stay ahead with real-time data analysis. Easycloud’s
                        integration with Metabase ensures your data is always up-to-date, helping you make timely
                        decisions.<br><br>Live Data Updates: View real-time data in your dashboards and
                        reports.<br>Alerts and Notifications: Set up automatic alerts to track key metrics.</p>
                </div>
                <div
                    style="background: #fff; border-radius: 24px; box-shadow: 0 2px 16px rgba(0,0,0,0.07); padding: 2rem 1.5rem;">
                    <h3 style="color: #2196f3; font-size: 1.3rem; font-weight: 700; margin-bottom: 0.7rem;">
                        User-Friendly Interface
                    </h3>
                    <p style="color: #666; font-size: 1rem;">Metabase is designed for ease of use, allowing users of all
                        technical levels to create and interact with data visualizations without specialized
                        knowledge.<br><br>Intuitive Design: Minimal training needed to get started.
                        <br>Interactive Dashboards: Engage with customizable data dashboards.
                    </p>
                </div>
                <div
                    style="background: #fff; border-radius: 24px; box-shadow: 0 2px 16px rgba(0,0,0,0.07); padding: 2rem 1.5rem;">
                    <h3 style="color: #2196f3; font-size: 1.3rem; font-weight: 700; margin-bottom: 0.7rem;">
                        Collaboration and Sharing
                    </h3>
                    <p style="color: #666; font-size: 1rem;">Share insights across your team with Metabase’s
                        collaboration features. Easily share dashboards and reports, ensuring everyone is aligned with
                        the latest data-driven insights.<br><br>Secure Sharing: Control who sees and interacts with your data.
                        <br>Embedded Reports: Integrate visualizations into other platforms or apps.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial/Quote Section -->
    <section style="background: linear-gradient(90deg, #295b8d 50%, transparent 100%); padding: 0; margin: 0;">
        <div style="display: flex; flex-wrap: wrap; align-items: stretch; min-height: 400px; max-width: 100vw;">
            <!-- Left: Quote -->
            <div
                style="flex: 1 1 480px; min-width: 340px; display: flex; align-items: center; justify-content: center; padding: 2.5rem 1rem;">
                <div
                    style="background: #f6f8fa; border-radius: 40px; box-shadow: 0 4px 32px rgba(0,0,0,0.10); padding: 2.5rem 2.5rem; max-width: 600px;">
                    <p
                        style="font-size: 2.1rem; font-weight: 800; color: #1a2b4e; line-height: 1.18; margin-bottom: 2rem;">
                        Metabase makes data accessible—turning complex queries into clear visuals that help teams explore insights and make informed decisions effortlessly.</p>
                    <span style="font-size: 1.05rem; color: #888; font-weight: 600;">Manish Gupta, Founder and
                        CEO</span>
                </div>
            </div>
            <!-- Right: Image -->
            <div
                style="flex: 1 1 480px; min-width: 340px; display: flex; align-items: stretch; justify-content: flex-end;">
                <img src="images/meta_base_image_big.jpeg" alt="World Network"
                    style="width: 100%; height: 100%; object-fit: cover; border-top-right-radius: 40px; border-bottom-right-radius: 40px; min-height: 400px; max-height: 500px;">
            </div>
        </div>
    </section>
    <!-- Experience Section -->
    <section class="experience-section">
        <div class="experience-container">
            <h2 style="color: #ffffff;">Experience EasyCloud Today</h2>
            <p>Got questions? Let's get you moving.</p>
            <a href="#contact" class="experience-btn">Contact Us <i class="fas fa-arrow-right"></i></a>
        </div>
    </section>

 
    <?php include 'footer.php'; ?>
    
</body>

</html>