<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="images/E.png">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Power BI - EasyCloud</title>
    <link rel="stylesheet" href="styles.css">
    
    <link rel="stylesheet" href="marquee.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">    <style>
      
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
        padding-top: 1rem !important;
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
            <h1 style="text-align: center; font-size: 2.5rem; color: #1a2b4e;">Transform Your
                Business with EasyCloud and Power BI</h1>
            <p style="text-align: center; max-width: 600px; color: #555; font-size: 1.15rem">
                Unleash the power of data-driven decision-making with EasyCloud's seamless integration with Power BI.
                Get real-time insights, interactive dashboards, and advanced analytics to help your business thrive.</p>
            <img src="images/power_bi_image.avif" alt="Power BI"
                style="width: 90%; max-width: 600px; border-radius: 18px; box-shadow: 0 8px 32px rgba(0,0,0,0.10); margin: 0rem auto 0 auto; display: block;">
        </div>
    </section>

    <!-- Why Choose Easycloud with PowerBI Section -->
    <section class="powerbi-benefits-section" style="padding: 3rem 0 2rem 0; background: #fafbfc;">
        <div
            style="display: flex; flex-wrap: wrap; max-width: 1200px; margin: 0 auto; gap: 2.5rem; align-items: flex-start;">
            <!-- Left Column -->
            <div style="flex: 1 1 380px; min-width: 320px; max-width: 520px;">
                <h2 style="font-size: 2.5rem; color: #1a2b4e; font-weight: 800;text-align: center;">Why Choose
                    Easycloud with PowerBI?</h2>
                <p style="color: #555; font-size: 1.15rem;text-align: center;">We empower your organization to
                    transform raw data into actionable insights. Our tailored dashboards and real-time analytics enhance
                    decision-making, streamline operations, and drive growth, ensuring you stay ahead in a competitive
                    landscape.</p>
                <button class="contact-btn" 
                  onclick="window.location.href='contact.php';"
                  style="margin-bottom: 2rem;margin-left:auto;margin-right:auto;display:block;">
                  Contact Us
                </button>

                <img src="images/dashboard_power.avif" alt="Sales by Type"
                    style="width: 90%; border-radius: 18px; box-shadow: 0 4px 24px rgba(0,0,0,0.10);margin-left:auto;margin-right:auto;display:block;">
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
                    <h3 style="color: #2196f3; font-size: 1.3rem; font-weight: 700; margin-bottom: 0.7rem;">Customizable
                        Dashboards</h3>
                    <p style="color: #666; font-size: 1rem;">Customizable Dashboards Design dashboards tailored to your
                        business needs. Monitor key metrics and KPIs at a glance with fully interactive and customizable
                        reports.<br><br>Easy-to-Use Interface: Drag-and-drop functionality for quick report
                        adjustments.<br>Engaging Visuals: Use charts, graphs, and maps to bring your data to life.</p>
                </div>
                <div
                    style="background: #fff; border-radius: 24px; box-shadow: 0 2px 16px rgba(0,0,0,0.07); padding: 2rem 1.5rem;">
                    <h3 style="color: #2196f3; font-size: 1.3rem; font-weight: 700; margin-bottom: 0.7rem;">Advanced
                        Data Analysis</h3>
                    <p style="color: #666; font-size: 1rem;">Advanced Data Analysis Go beyond basic reports with
                        PowerBI's advanced analytics. Analyze patterns, forecast trends, and plan more strategically
                        with data-backed insights.<br><br>Predictive Analysis: Utilize AI and machine learning for
                        future trend predictions.<br>Scenario Testing: Explore various "what-if" situations for more
                        informed decisions.</p>
                </div>
                <div
                    style="background: #fff; border-radius: 24px; box-shadow: 0 2px 16px rgba(0,0,0,0.07); padding: 2rem 1.5rem;">
                    <h3 style="color: #2196f3; font-size: 1.3rem; font-weight: 700; margin-bottom: 0.7rem;">Interactive
                        Reports</h3>
                    <p style="color: #666; font-size: 1rem;">Interactive Reports Dive deeper into your data with
                        interactive reporting. PowerBI's drill-down capabilities allow you to explore the finer details
                        behind your summarized data.<br><br>Drill-Through Functions: Access detailed information from
                        high-level reports.<br>Custom Filters: Adjust reports to display only the data you need.</p>
                </div>
                <div
                    style="background: #fff; border-radius: 24px; box-shadow: 0 2px 16px rgba(0,0,0,0.07); padding: 2rem 1.5rem;">
                    <h3 style="color: #2196f3; font-size: 1.3rem; font-weight: 700; margin-bottom: 0.7rem;">Improved
                        Collaboration</h3>
                    <p style="color: #666; font-size: 1rem;">Improved Collaboration Share insights across your team with
                        ease. PowerBI integrates with Microsoft 365, making it simple to collaborate and keep everyone
                        on the same page.<br><br>Seamless Sharing: Embed reports directly in Microsoft Teams and
                        SharePoint.<br>Controlled Access: Manage who can view and interact with specific data.</p>
                </div>
                <div
                    style="background: #fff; border-radius: 24px; box-shadow: 0 2px 16px rgba(0,0,0,0.07); padding: 2rem 1.5rem;">
                    <h3 style="color: #2196f3; font-size: 1.3rem; font-weight: 700; margin-bottom: 0.7rem;">Mobile
                        Accessibility</h3>
                    <p style="color: #666; font-size: 1rem;">Mobile Accessibility Stay connected to your data on the go
                        with PowerBI's mobile app. Access reports, dashboards, and real-time updates from
                        anywhere.<br><br>Mobile-Optimized: View and interact with reports on your mobile device.<br>Push
                        Notifications: Receive alerts directly on your phone.</p>
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
                        At EasyCloud, we leverage Power BI to transform data into actionable insights. This integration
                        allows businesses to make informed decisions quickly and efficiently, enhancing operational
                        excellence and driving growth.</p>
                    <span style="font-size: 1.05rem; color: #888; font-weight: 600;">Manish Gupta, Founder and
                        CEO</span>
                </div>
            </div>
            <!-- Right: Image -->
            <div
                style="flex: 1 1 480px; min-width: 340px; display: flex; align-items: stretch; justify-content: flex-end;">
                <img src="images/power_bi_image.avif" alt="World Network"
                    style="width: 100%; height: 100%; object-fit: cover; border-top-right-radius: 40px; border-bottom-right-radius: 40px; min-height: 400px; max-height: 500px;">
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