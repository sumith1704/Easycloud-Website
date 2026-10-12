<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary Meta Tags -->
    <title>ERP for Industrial Engineering | EasyCloud</title>
    <meta name="title" content="ERP for Industrial Engineering | EasyCloud">
    <meta name="description" content="Boost productivity and efficiency with EasyCloud ERP tailored for industrial engineering, manufacturing, and operations control.">
    <meta name="keywords" content="industrial ERP, manufacturing ERP software, production automation, ERP for engineering, EasyCloud manufacturing ERP">
    <meta name="author" content="EasyCloud">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://easycloudsoftware.com/industrial-engineering.php">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://easycloudsoftware.com/industrial-engineering.php">
    <meta property="og:title" content="ERP for Industrial Engineering | EasyCloud">
    <meta property="og:description" content="Boost productivity and efficiency with EasyCloud ERP tailored for industrial engineering, manufacturing, and operations control.">
    <meta property="og:image" content="https://easycloudsoftware.com/images/dashboard_logo.avif">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://easycloudsoftware.com/industrial-engineering.php">
    <meta property="twitter:title" content="ERP for Industrial Engineering | EasyCloud">
    <meta property="twitter:description" content="Boost productivity and efficiency with EasyCloud ERP tailored for industrial engineering, manufacturing, and operations control.">
    <meta property="twitter:image" content="https://easycloudsoftware.com/images/dashboard_logo.avif">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/E.png">
    <link rel="stylesheet" href="styles.css">

    <link rel="stylesheet" href="marquee.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
<style>
/* General Layout */
.blog-detail-main-flex {
  display: flex;
  gap: 1.5rem;   /* smaller gap */
  max-width: 1200px;
  margin: 1.5rem auto;
  min-height: 60vh;
  flex-wrap: wrap;
}

.blog-detail-left {
  flex: 0 0 280px;
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.08);
  padding: 1rem;
  position: sticky;
  top: 80px;
  height: fit-content;
}

.blog-detail-right {
  flex: 1 1 0%;
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.08);
  padding: 1rem;
  display: flex;
  flex-direction: column;
  gap: 1rem;  /* reduced spacing between content blocks */
}

/* Blog Content */
.blog-detail-title {
  font-size: 1.8rem;
  font-weight: 700;
  color: #1a2b4e;
  margin-bottom: 0.5rem;
}

.blog-detail-date {
  color: #666;
  font-size: 0.9rem;
  margin-bottom: 0.8rem;
}

.blog-detail-image,
.blog-detail-video-wrapper {
  width: 100%;
  border-radius: 10px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.08);
  overflow: hidden;
  aspect-ratio: 16 / 9;
  background: #000;
}

.blog-detail-image {
  display: block;
  width: 100%;
  height: auto;
}

.blog-detail-content {
  color: #222;
  font-size: 1rem;
  line-height: 1.6;
  margin: 0;  /* removes extra space */
}

.blog-back-link {
  display: inline-block;
  margin-bottom: 1rem;
  color: #2196f3;
  font-weight: 600;
  text-decoration: none;
}
.blog-back-link:hover {
  text-decoration: underline;
  color: #1a2b4e;
}

/* Play Button */
.blog-detail-video-wrapper {
  position: relative;
}
.play-button {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 60px;
  height: 60px;
  background: rgba(26, 43, 78, 0.9);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  border: 2px solid rgba(255,255,255,0.8);
  transition: all 0.3s ease;
}
.play-button i {
  font-size: 1.5rem;
  color: #fff;
  margin-left: 3px;
}
.play-button:hover {
  transform: translate(-50%, -50%) scale(1.1);
  background: #1a2b4e;
}

/* Share Section */
.blog-share {
  margin-top: 1rem;
  display: flex;
  align-items: center;
  gap: 0.4rem;
  font-size: 0.95rem;
}
.blog-share-label {
  font-weight: 600;
  color: #222;
}
.blog-share-icon {
  color: #888;
  transition: color 0.2s;
}
.blog-share-icon:hover {
  color: #2196f3;
}

/* Responsive */
@media (max-width: 992px) {
  .blog-detail-main-flex {
    flex-direction: column;
    gap: 1rem;
  }
  .blog-detail-left,
  .blog-detail-right {
    position: static;
    width: 100%;
  }
}

/* ADDED 2026-10-06: Manufacturing flow chain + ERP choice section (uses the page's existing colours) */
.mfi-flow-chain {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  gap: 0.5rem;
  margin: 1.5rem auto;
  padding: 0;
  list-style: none;
  max-width: 1000px;
}
.mfi-flow-chain li {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  opacity: 0;
  animation: mfiFadeUp 0.5s ease forwards;
}
.mfi-flow-chain li span {
  background: #fff;
  color: #1a2b4e;
  font-weight: 600;
  font-size: 0.95rem;
  padding: 0.55rem 1.1rem;
  border-radius: 999px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.08);
  border: 1px solid rgba(26,43,78,0.12);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.mfi-flow-chain li span:hover {
  transform: translateY(-3px);
  box-shadow: 0 6px 18px rgba(0,0,0,0.14);
}
.mfi-flow-chain li i {
  color: #5a6473;
  font-size: 0.85rem;
}
.mfi-flow-chain li:nth-child(2) { animation-delay: 0.08s; }
.mfi-flow-chain li:nth-child(3) { animation-delay: 0.16s; }
.mfi-flow-chain li:nth-child(4) { animation-delay: 0.24s; }
.mfi-flow-chain li:nth-child(5) { animation-delay: 0.32s; }
.mfi-flow-chain li:nth-child(6) { animation-delay: 0.40s; }
.mfi-flow-chain li:nth-child(7) { animation-delay: 0.48s; }
.mfi-flow-chain li:nth-child(8) { animation-delay: 0.56s; }
@keyframes mfiFadeUp {
  from { opacity: 0; transform: translateY(10px); }
  to   { opacity: 1; transform: translateY(0); }
}
.mfi-erp-buttons {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 1rem;
  margin-top: 2rem;
}
.mfi-erp-buttons button {
  background: linear-gradient(90deg, #5a6473 0%, #23272f 100%);
  color: #fff;
  font-weight: 700;
  border: none;
  border-radius: 8px;
  padding: 1rem 2.5rem;
  font-size: 1.1rem;
  cursor: pointer;
  box-shadow: 0 4px 15px rgba(0,0,0,0.2);
  transition: transform 0.3s, box-shadow 0.3s;
}
@media (prefers-reduced-motion: reduce) {
  .mfi-flow-chain li { opacity: 1; animation: none; }
}
    /* ADDED 2026-10-07: logo strip now has 29 logos (was 13); slower loop so it scrolls at about the same speed as before */
    .marquee-section .marquee-track {
        animation-duration: 89s;
    }
</style>

</head>
<body>

    <?php include 'nav_bar.php'; ?>

    <!-- Hero Section -->
    <section class="domain-hero industrial-hero">
        <div class="domain-hero-container">
            <div class="domain-hero-content">
                <div class="domain-icon">
                    <i class="fas fa-industry"></i>
                    <!-- REPLACED 2026-10-06: <span>Industrial Engineering</span> -->
                    <span>Manufacturing</span>
                </div>
                <!-- REPLACED 2026-10-06: <h1>SEEKING TO IMPROVE<br>YOUR PRODUCTION?</h1> -->
                <h1>Seeking to improve<br>your production?</h1>
                <!-- REPLACED 2026-10-06: <p>If you're looking to streamline your manufacturing operations, EasyCloud offers a comprehensive solution designed to meet the evolving needs of the industry.</p> -->
                <p>From planning and procurement to production, quality and dispatch, EasyCloud helps manufacturers connect operations through ERP, automation and real-time information.</p>
                <a href="contact.php">
                    <!-- REPLACED 2026-10-06: <button class="contact-btn">Contact Us</button> -->
                    <button class="contact-btn">Talk to a Manufacturing ERP Consultant</button>
                </a>
            </div>
        </div>
    </section>



    <img src="images/industrial_resize.jpg" alt="Power BI"
    style="width: 60vw; max-width: 800px; border-radius: 18px; box-shadow: 0 8px 32px rgba(0,0,0,0.10); margin: 3rem auto 0 auto; display: block;">


    <!-- Primary Gains Section -->
    <section class="primary-gains-section">
        <div class="primary-gains-container">
            <!-- REPLACED 2026-10-06:
            <h2>Primary gains of EasyCloud<br>manufacturing module.</h2>
            <p>EasyCloud's manufacturing module provides a tailored solution that improves efficiency, reduces costs, and supports innovation. Transform your processes and drive growth with our comprehensive platform today!</p>
            -->
            <h2>Connect the Complete<br>Manufacturing Flow</h2>
            <ul class="mfi-flow-chain" aria-label="Sales, Planning, Procurement, Inventory, Production, Quality, Dispatch, Finance">
                <li><span>Sales</span></li>
                <li><i class="fas fa-arrow-right" aria-hidden="true"></i><span>Planning</span></li>
                <li><i class="fas fa-arrow-right" aria-hidden="true"></i><span>Procurement</span></li>
                <li><i class="fas fa-arrow-right" aria-hidden="true"></i><span>Inventory</span></li>
                <li><i class="fas fa-arrow-right" aria-hidden="true"></i><span>Production</span></li>
                <li><i class="fas fa-arrow-right" aria-hidden="true"></i><span>Quality</span></li>
                <li><i class="fas fa-arrow-right" aria-hidden="true"></i><span>Dispatch</span></li>
                <li><i class="fas fa-arrow-right" aria-hidden="true"></i><span>Finance</span></li>
            </ul>
            <p>Bring your manufacturing processes together with Microsoft Dynamics 365 Business Central or ERPNext, extended where required with EasyCloud's shop-floor applications, integrations and automation.</p>
        </div>
    </section>

    <!-- Features Cards Section -->
    <!-- CARDS REPLACED 2026-10-06: 8 cards reduced to 6 with new text; old text kept in comments inside each card; cards 7 and 8 commented out below -->
    <section class="features-cards-section">
        <div class="features-cards-container">
            <div class="feature-card">
                <div class="feature-icon-wrapper">
                    <div class="feature-icon supply-chain">
                        <!-- REPLACED 2026-10-06: <i class="fas fa-layer-group"></i> -->
                        <i class="fas fa-calendar-check"></i>
                    </div>
                </div>
                <!-- REPLACED 2026-10-06: <h3>Supply Chain Optimization</h3> -->
                <h3>Production Planning</h3>
                <div class="feature-details">
                    <!-- REPLACED 2026-10-06:
                    <div class="feature-item">
                        <h4>Real-Time Tracking:</h4>
                        <p>Monitor logistics and inventory in real-time, allowing for efficient supply chain management.</p>
                    </div>
                    <div class="feature-item">
                        <h4>Vendor Management:</h4>
                        <p>Streamline your procurement processes and vendor interactions, ensuring better control over supplies.</p>
                    </div>
                    -->
                    <div class="feature-item">
                        <p>Plan materials, capacity, work orders and production requirements.</p>
                    </div>
                </div>
            </div>

            <div class="feature-card">
                <div class="feature-icon-wrapper">
                    <div class="feature-icon security">
                        <!-- REPLACED 2026-10-06: <i class="fas fa-fingerprint"></i> -->
                        <i class="fas fa-hard-hat"></i>
                    </div>
                </div>
                <!-- REPLACED 2026-10-06: <h3>Strengthened Security</h3> -->
                <h3>Shop-Floor Operations</h3>
                <div class="feature-details">
                    <!-- REPLACED 2026-10-06:
                    <div class="feature-item">
                        <h4>Data Backup and Recovery:</h4>
                        <p>Ensure that all important manufacturing data is securely backed up and easily recoverable in case of emergencies.</p>
                    </div>
                    <div class="feature-item">
                        <h4>Advanced Security Protocols:</h4>
                        <p>Benefit from top-tier security features that safeguard your sensitive information.</p>
                    </div>
                    -->
                    <div class="feature-item">
                        <p>Capture production activity closer to where the work happens through ERP and mobile workflows.</p>
                    </div>
                </div>
            </div>

            <div class="feature-card">
                <div class="feature-icon-wrapper">
                    <div class="feature-icon inventory">
                        <i class="fas fa-boxes"></i>
                    </div>
                </div>
                <!-- REPLACED 2026-10-06: <h3>Smarter Inventory Management</h3> -->
                <h3>Inventory &amp; Material Control</h3>
                <div class="feature-details">
                    <!-- REPLACED 2026-10-06:
                    <div class="feature-item">
                        <h4>Real-Time Inventory Tracking:</h4>
                        <p>Keep an eye on inventory levels across all locations in real-time, minimizing stockouts and overstock situations.</p>
                    </div>
                    <div class="feature-item">
                        <h4>Automated Replenishment:</h4>
                        <p>Utilize automated systems to restock inventory, maintaining optimal stock levels and reducing the need for manual intervention.</p>
                    </div>
                    -->
                    <div class="feature-item">
                        <p>Track raw materials, WIP and finished goods across locations.</p>
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
                        <!-- REPLACED 2026-10-06: <i class="fas fa-layer-group"></i> -->
                        <i class="fas fa-qrcode"></i>
                    </div>
                </div>
                <!-- REPLACED 2026-10-06: <h3>Cost Optimization</h3> -->
                <h3>Quality &amp; Traceability</h3>
                <div class="feature-details">
                    <!-- REPLACED 2026-10-06:
                    <div class="feature-item">
                        <h4>Reduced Operational Costs</h4>
                        <p>Monitor logistics and inventory in real-time, allowing for efficient supply chain management.</p>
                    </div>
                    <div class="feature-item">
                        <h4>Vendor Management:</h4>
                        <p>Streamline your procurement processes and vendor interactions, ensuring better control over supplies.</p>
                    </div>
                    -->
                    <div class="feature-item">
                        <p>Manage quality processes with batch, serial, barcode and QR-based traceability.</p>
                    </div>
                </div>
            </div>

            <div class="feature-card">
                <div class="feature-icon-wrapper">
                    <div class="feature-icon security">
                        <!-- REPLACED 2026-10-06: <i class="fas fa-fingerprint"></i> -->
                        <i class="fas fa-plug"></i>
                    </div>
                </div>
                <!-- REPLACED 2026-10-06: <h3>Strengthened Security</h3> -->
                <h3>Factory Integration</h3>
                <div class="feature-details">
                    <!-- REPLACED 2026-10-06:
                    <div class="feature-item">
                        <h4>Data Backup and Recovery:</h4>
                        <p>Ensure that all important manufacturing data is securely backed up and easily recoverable in case of emergencies.</p>
                    </div>
                    <div class="feature-item">
                        <h4>Advanced Security Protocols:</h4>
                        <p>Benefit from top-tier security features that safeguard your sensitive information.</p>
                    </div>
                    -->
                    <div class="feature-item">
                        <p>Connect scanners, weighing scales, machines, PLCs and other shop-floor systems where required.</p>
                    </div>
                </div>
            </div>

            <div class="feature-card">
                <div class="feature-icon-wrapper">
                    <div class="feature-icon inventory">
                        <!-- REPLACED 2026-10-06: <i class="fas fa-boxes"></i> -->
                        <i class="fas fa-chart-line"></i>
                    </div>
                </div>
                <!-- REPLACED 2026-10-06: <h3>Smarter Inventory Management</h3> -->
                <h3>Dashboards &amp; Insights</h3>
                <div class="feature-details">
                    <!-- REPLACED 2026-10-06:
                    <div class="feature-item">
                        <h4>Real-Time Inventory Tracking:</h4>
                        <p>Keep an eye on inventory levels across all locations in real-time, minimizing stockouts and overstock situations.</p>
                    </div>
                    <div class="feature-item">
                        <h4>Automated Replenishment:</h4>
                        <p>Utilize automated systems to restock inventory, maintaining optimal stock levels and reducing the need for manual intervention.</p>
                    </div>
                    -->
                    <div class="feature-item">
                        <p>Give operations and management better visibility into production, inventory, quality and performance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- REMOVED 2026-10-06 (user: use six cards instead of eight): cards 7 "Innovation Enablement" and 8 "Operational Excellence" commented out
    <section class="features-cards-section">
        <div class="features-cards-container">
            <div class="feature-card">
                <div class="feature-icon-wrapper">
                    <div class="feature-icon supply-chain">
                        <i class="fas fa-layer-group"></i>
                    </div>
                </div>
                <h3>Innovation Enablement</h3>
                <div class="feature-details">
                    <div class="feature-item">
                        <h4>Digital Transformation</h4>
                        <p>Accelerate your digital journey with cutting-edge cloud solutions tailored for manufacturing.</p>

                         </div>
                    <div class="feature-item">
                        <h4>Future-Ready Operations</h4>
                        <p>Stay ahead with scalable infrastructure that adapts to evolving industry demands.</p>
                    </div>
                </div>
            </div>

            <div class="feature-card">
                <div class="feature-icon-wrapper">
                    <div class="feature-icon security">
                        <i class="fas fa-fingerprint"></i>
                    </div>
                </div>
                <h3>Operational Excellence</h3>
                <div class="feature-details">
                    <div class="feature-item">
                        <h4>Streamlined Processes</h4>
                        <p>Enhance productivity through automated workflows and real-time monitoring capabilities.</p>
                   </div>
                    <div class="feature-item">
                        <h4>Quality Assurance</h4>
                        <p>Maintain consistent product quality with advanced monitoring and control systems.</p>
                      </div>
                </div>
            </div>


        </div>
    </section>
    -->

    <!-- ADDED 2026-10-06: ERP choice section (after the cards) -->
    <section class="primary-gains-section">
        <div class="primary-gains-container">
            <h2>Choose the ERP That Fits<br>Your Manufacturing Business</h2>
            <p>EasyCloud implements both Microsoft Dynamics 365 Business Central and ERPNext for manufacturing. We help determine the right platform based on your processes, complexity, technology environment, customisation requirements and budget.</p>
            <div class="mfi-erp-buttons">
                <a href="/microsoft-dynamics-365-business-central" style="text-decoration: none;">
                    <button><i class="fab fa-microsoft" style="margin-right: 0.5rem;"></i>Explore Business Central</button>
                </a>
                <a href="/erpnext" style="text-decoration: none;">
                    <button><i class="fas fa-cubes" style="margin-right: 0.5rem;"></i>Explore ERPNext</button>
                </a>
            </div>
        </div>
    </section>

    <!-- Related Blogs Section -->
    <section style="max-width: 1200px; margin: 3rem auto; padding: 2rem 1rem;">
        <!-- REPLACED 2026-10-06: <h2 style="text-align: center; color: #1a2b4e; font-size: 2.5rem; font-weight: 700; margin-bottom: 1rem;">Relative Blogs</h2> -->
        <h2 style="text-align: center; color: #1a2b4e; font-size: 2.5rem; font-weight: 700; margin-bottom: 1rem;">Related Manufacturing Insights</h2>
        <p style="text-align: center; color: #666; font-size: 1.1rem; margin-bottom: 3rem;">Explore our latest articles on industrial engineering and ERP solutions</p>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">

            <!-- Blog Card 1: BOM -->
            <a href="blogs/bom.php" style="text-decoration:none;color:inherit;display:block;">
                <div style="background: #fff; border-radius: 18px; box-shadow: 0 2px 16px rgba(0,0,0,0.07); padding: 1.5rem; display: flex; flex-direction: column; height: 100%; transition: transform 0.3s, box-shadow 0.3s;">
                    <img src="images/Blog Aug-08-25 (2) (1).jpg" alt="Bill of Materials" style="width: 100%; height: 180px; object-fit: cover; border-radius: 12px; margin-bottom: 1rem;">
                    <h3 style="color: #1a2b4e; font-size: 1.2rem; font-weight: 700; margin-bottom: 0.5rem;">Is Your BOM Ticking...?</h3>
                    <p style="color: #666; font-size: 0.95rem; margin-bottom: 1rem; flex-grow: 1;">Automate BOM management, inventory control, and production accuracy with EasyCloud ERP.</p>
                    <span style="color: #5a6473; font-weight: 600;">Read More →</span>
                </div>
            </a>

            <!-- Blog Card 2: Rise of AI Agents -->
            <a href="blogs/rise_of_ai_agents.php" style="text-decoration:none;color:inherit;display:block;">
                <div style="background: #fff; border-radius: 18px; box-shadow: 0 2px 16px rgba(0,0,0,0.07); padding: 1.5rem; display: flex; flex-direction: column; height: 100%; transition: transform 0.3s, box-shadow 0.3s;">
                    <img src="images/ai_blog.avif" alt="AI Agents in ERP" style="width: 100%; height: 180px; object-fit: cover; border-radius: 12px; margin-bottom: 1rem;">
                    <h3 style="color: #1a2b4e; font-size: 1.2rem; font-weight: 700; margin-bottom: 0.5rem;">The Rise of AI Agents: Revolutionizing Manufacturing with ERP and Cloud Solutions</h3>
                    <p style="color: #666; font-size: 0.95rem; margin-bottom: 1rem; flex-grow: 1;">Explore how AI agents are revolutionizing ERP and leading the shift toward autonomous, intelligent systems.</p>
                    <span style="color: #5a6473; font-weight: 600;">Read More →</span>
                </div>
            </a>

            <!-- Blog Card 3: MRP -->
            <a href="blogs/mrp.php" style="text-decoration:none;color:inherit;display:block;">
                <div style="background: #fff; border-radius: 18px; box-shadow: 0 2px 16px rgba(0,0,0,0.07); padding: 1.5rem; display: flex; flex-direction: column; height: 100%; transition: transform 0.3s, box-shadow 0.3s;">
                    <img src="images\WhatsApp Image 2025-07-07 at 3.46.03 PM.jpeg" alt="Material Resource Planning" style="width: 100%; height: 180px; object-fit: cover; border-radius: 12px; margin-bottom: 1rem;">
                    <h3 style="color: #1a2b4e; font-size: 1.2rem; font-weight: 700; margin-bottom: 0.5rem;">Boosting Efficiency with Material Resource Planning (MRP)</h3>
                    <p style="color: #666; font-size: 0.95rem; margin-bottom: 1rem; flex-grow: 1;">Bring automation to MRP with precise inventory, demand, and production planning tools.</p>
                    <span style="color: #5a6473; font-weight: 600;">Read More →</span>
                </div>
            </a>

            <!-- Blog Card 4: Warehouse -->
            <a href="blogs/warehouse.php" style="text-decoration:none;color:inherit;display:block;">
                <div style="background: #fff; border-radius: 18px; box-shadow: 0 2px 16px rgba(0,0,0,0.07); padding: 1.5rem; display: flex; flex-direction: column; height: 100%; transition: transform 0.3s, box-shadow 0.3s;">
                    <img src="images\inventory.avif" alt="Warehouse Management" style="width: 100%; height: 180px; object-fit: cover; border-radius: 12px; margin-bottom: 1rem;">
                    <h3 style="color: #1a2b4e; font-size: 1.2rem; font-weight: 700; margin-bottom: 0.5rem;">Optimize Your Warehouse And Inventory Management With EasyCloud</h3>
                    <p style="color: #666; font-size: 0.95rem; margin-bottom: 1rem; flex-grow: 1;">Gain real-time visibility into inventory, stock movement, and warehousing operations.</p>
                    <span style="color: #5a6473; font-weight: 600;">Read More →</span>
                </div>
            </a>

            <!-- Blog Card 5: Procurement -->
            <a href="blogs/procurement.php" style="text-decoration:none;color:inherit;display:block;">
                <div style="background: #fff; border-radius: 18px; box-shadow: 0 2px 16px rgba(0,0,0,0.07); padding: 1.5rem; display: flex; flex-direction: column; height: 100%; transition: transform 0.3s, box-shadow 0.3s;">
                    <img src="images/procurement.avif" alt="Procurement Management" style="width: 100%; height: 180px; object-fit: cover; border-radius: 12px; margin-bottom: 1rem;">
                    <h3 style="color: #1a2b4e; font-size: 1.2rem; font-weight: 700; margin-bottom: 0.5rem;">Streamline Your Procurement Process With EasyCloud</h3>
                    <p style="color: #666; font-size: 0.95rem; margin-bottom: 1rem; flex-grow: 1;">Automate procurement cycles, vendor management, and purchase orders seamlessly.</p>
                    <span style="color: #5a6473; font-weight: 600;">Read More →</span>
                </div>
            </a>

        </div>

        <!-- CTA Button -->
        <div style="text-align: center; margin-top: 3rem;">
            <a href="/blogs.php" style="text-decoration: none;">
                <button style="background: linear-gradient(90deg, #5a6473 0%, #23272f 100%); color: #fff; font-weight: 700; border: none; border-radius: 8px; padding: 1rem 2.5rem; font-size: 1.1rem; cursor: pointer; box-shadow: 0 4px 15px rgba(0,0,0,0.2); transition: transform 0.3s, box-shadow 0.3s;">
                    <i class="fas fa-book-open" style="margin-right: 0.5rem;"></i>View All Blogs
                </button>
            </a>
        </div>
    </section>

    <style>
        /* Blog card hover effects */
        section a > div {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        section a > div:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15) !important;
        }
        /* CTA button hover */
        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0,0,0,0.3) !important;
        }
    </style>

    <!-- CEO Quote Section -->
    <section class="ceo-quote-section">
        <div class="ceo-quote-container">
            <div class="quote-content">
                <!-- REPLACED 2026-10-06: <h2>We focus on long-term efficiency in industrial engineering, helping you reduce costs and drive innovation with tailored solutions.</h2> -->
                <h2>We believe manufacturing technology should connect what happens on the factory floor with the people making decisions. Our focus is to make that connection practical, visible and useful.</h2>
                <div class="quote-author">
                    <!-- REPLACED 2026-10-06: <p>Manish Gupta, Founder and CEO</p> -->
                    <p>Manish Gupta, Founder</p>
                </div>
            </div>
            <div class="quote-image">
                <img src="images/manish.avif" alt="Industrial Factory" class="factory-image">
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
                    <!-- ADDED 2026-10-07: 16 new client logos -->
                    <img src="images/g-pulla-reddy-sweets.webp" alt="G. Pulla Reddy Sweets" class="marquee-img">
                    <img src="images/pdp.webp" alt="PDP" class="marquee-img">
                    <img src="images/rockwell.webp" alt="Rockwell" class="marquee-img">
                    <img src="images/sai-silks-kalamandir.webp" alt="Sai Silks Kalamandir Pvt. Ltd." class="marquee-img">
                    <img src="images/srinivasa-farms.webp" alt="Srinivasa Farms" class="marquee-img">
                    <img src="images/svs.webp" alt="SVS" class="marquee-img">
                    <img src="images/bppl.webp" alt="BPPL" class="marquee-img">
                    <img src="images/tgbc-the-green-box.webp" alt="TGBC (The Green Box)" class="marquee-img">
                    <img src="images/nuevosol.webp" alt="Nuevosol" class="marquee-img">
                    <img src="images/everest-infra.webp" alt="Everest Infra" class="marquee-img">
                    <img src="images/scoops-ice-cream.webp" alt="Scoops Ice Cream" class="marquee-img">
                    <img src="images/mtar.webp" alt="MTAR" class="marquee-img">
                    <img src="images/bajo-tierra.webp" alt="Bajo Tierra" class="marquee-img">
                    <img src="images/kissan-agri.webp" alt="Kissan Agri" class="marquee-img">
                    <img src="images/vaidyagrama.webp" alt="Vaidyagrama" class="marquee-img">
                    <img src="images/saranya-ashirwad-trust.webp" alt="Saranya (Ashirwad Trust)" class="marquee-img">
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
                    <!-- ADDED 2026-10-07: 16 new client logos -->
                    <img src="images/g-pulla-reddy-sweets.webp" alt="G. Pulla Reddy Sweets" class="marquee-img">
                    <img src="images/pdp.webp" alt="PDP" class="marquee-img">
                    <img src="images/rockwell.webp" alt="Rockwell" class="marquee-img">
                    <img src="images/sai-silks-kalamandir.webp" alt="Sai Silks Kalamandir Pvt. Ltd." class="marquee-img">
                    <img src="images/srinivasa-farms.webp" alt="Srinivasa Farms" class="marquee-img">
                    <img src="images/svs.webp" alt="SVS" class="marquee-img">
                    <img src="images/bppl.webp" alt="BPPL" class="marquee-img">
                    <img src="images/tgbc-the-green-box.webp" alt="TGBC (The Green Box)" class="marquee-img">
                    <img src="images/nuevosol.webp" alt="Nuevosol" class="marquee-img">
                    <img src="images/everest-infra.webp" alt="Everest Infra" class="marquee-img">
                    <img src="images/scoops-ice-cream.webp" alt="Scoops Ice Cream" class="marquee-img">
                    <img src="images/mtar.webp" alt="MTAR" class="marquee-img">
                    <img src="images/bajo-tierra.webp" alt="Bajo Tierra" class="marquee-img">
                    <img src="images/kissan-agri.webp" alt="Kissan Agri" class="marquee-img">
                    <img src="images/vaidyagrama.webp" alt="Vaidyagrama" class="marquee-img">
                    <img src="images/saranya-ashirwad-trust.webp" alt="Saranya (Ashirwad Trust)" class="marquee-img">
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
