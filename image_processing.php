<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="images/E.png">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Processing - EasyCloud</title>
    <link rel="stylesheet" href="styles.css">
    
    <link rel="stylesheet" href="marquee.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
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
            box-shadow: 0 2px 16px rgba(0, 0, 0, 0.07);
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
            box-shadow: 0 6px 32px rgba(0, 0, 0, 0.13);
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
            width: 100%;
            max-width: 1200px;
            max-height: 500px;
            border-radius: 18px;
            box-shadow: 0 6px 32px rgba(0, 0, 0, 0.13);
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
            box-shadow: 0 2px 16px rgba(0, 0, 0, 0.07);
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
            box-shadow: 0 6px 32px rgba(0, 0, 0, 0.13);
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

            .pos-testimonial-left,
            .pos-testimonial-right {
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
        
        body {
            margin-top: 5px !important;
        }
        .hero {
            padding-top: 0rem !important;
        
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
    <section class="pos-hero">
        <div class="pos-hero-icon"><i class="fas fa-image"></i></div>
        <div class="pos-hero-subtitle">Image Processing</div>
        <div class="pos-hero-title">Elevate Visual Data Insights with EasyCloud Image Processing</div>
        <div class="pos-hero-desc">
            EasyCloud's Image Processing solution seamlessly integrates with advanced AI to transform visual data into
            actionable insights. This technology empowers businesses to make smarter, data-driven decisions through
            real-time analysis, boosting operational efficiency and driving innovation.
        </div>
    </section>

    <!-- POS Image Section -->
    <section class="pos-image-section">
        <img src="images/image_processing_resize.jpg" alt="POS in action" class="pos-main-image"
        style="max-width: 600px; height: auto;">
    </section>


    <!-- Call to Action -->
    <div class="pos-cta">
        <button class="pos-cta-btn" onclick="window.location.href='contact.php'">
  Book a Demo <i class="fas fa-arrow-right"></i>
</button>
    </div>

    <!-- Features Section -->
    <!-- <section class="pos-features-section">
        <div class="pos-features-grid">
            <div class="pos-feature-card">
                <div class="pos-feature-icon"><i class="fas fa-bolt"></i></div>
                <div class="pos-feature-title">Fast Billing</div>
                <div class="pos-feature-desc">Process sales quickly and efficiently with an intuitive, user-friendly interface.</div>
            </div>
            <div class="pos-feature-card">
                <div class="pos-feature-icon"><i class="fas fa-boxes"></i></div>
                <div class="pos-feature-title">Inventory Management</div>
                <div class="pos-feature-desc">Track stock in real time, automate reordering, and avoid out-of-stock situations.</div>
            </div>
            <div class="pos-feature-card">
                <div class="pos-feature-icon"><i class="fas fa-chart-line"></i></div>
                <div class="pos-feature-title">Analytics & Reports</div>
                <div class="pos-feature-desc">Gain insights into sales trends, bestsellers, and business performance with powerful analytics.</div>
            </div>
            <div class="pos-feature-card">
                <div class="pos-feature-icon"><i class="fas fa-mobile-alt"></i></div>
                <div class="pos-feature-title">Multi-device Support</div>
                <div class="pos-feature-desc">Access your POS system from desktop, tablet, or mobile—anytime, anywhere.</div>
            </div>
        </div>
    </section> -->

    <!-- Two Column Scrollable Section -->
    <section class="pos-two-col-section">
        <div class="pos-two-col-container">
            <div class="pos-two-col-left">
                <h2>Why Choose Easycloud's AI Image Processing?</h2>
                <p>Experience the next level of efficiency and accuracy with Easycloud's advanced image processing
                    features. Our intelligent automation streamlines your delivery and invoicing processes by capturing,
                    extracting, and verifying critical data effortlessly.</p>
            </div>
            <div class="pos-two-col-right">
                <div class="pos-feature-card">
                    <div class="pos-feature-title blue">Automated Photo Capture</div>
                    <div class="pos-feature-desc">Capture high-quality images of your Proof of Delivery (POD) and
                        delivery weights with ease. Easycloud's integrated system ensures reliable and consistent
                        documentation, making your record-keeping process seamless.<br><br>High-Resolution Capture:
                        Obtain clear, detailed photos of POD documents and delivery weights.<br>Integrated Workflow:
                        Smoothly integrate photo capture into your delivery and invoicing processes.</div>
                </div>
                <div class="pos-feature-card">
                    <div class="pos-feature-title blue">Intelligent Invoice Number Extraction
                    </div>
                    <div class="pos-feature-desc">Our AI-powered system efficiently extracts essential details, like
                        invoice numbers, from POD images. Advanced algorithms and Optical Character Recognition (OCR)
                        ensure accurate data extraction across various document formats.<br><br>Optical Character
                        Recognition (OCR): Automatically read and extract invoice numbers from images.<br>Contextual
                        Analysis: Improve extraction accuracy with context-aware AI models.</div>
                </div>
                <div class="pos-feature-card">
                    <div class="pos-feature-title blue">Smarter Decision-Making
                    </div>
                    <div class="pos-feature-desc">Automated Weight Reading
                        AI technology enables precise weight recording directly from delivery photos. This feature
                        ensures that weights are accurately documented and seamlessly integrated into your inventory
                        system.<br><br>Weight Measurement: Automatically detect and log weights from delivery scale
                        images or documents.<br>Integration: Sync weight data with your goods receipt and inventory
                        management systems.</div>
                </div>
                <div class="pos-feature-card">
                    <div class="pos-feature-title blue">Automated Invoice Matching
                    </div>
                    <div class="pos-feature-desc">Once the invoice number and weight are extracted, Easycloud
                        automatically cross-references this information with your records. This ensures accurate
                        tracking and verification of POD receipts and weights.<br><br>Data Matching: Compare extracted
                        details with your existing database.<br>Error Detection: Identify and flag any discrepancies or
                        missing information for review.</div>
                </div>
                <div class="pos-feature-card">
                    <div class="pos-feature-title blue">POD Receipt Confirmation
                    </div>
                    <div class="pos-feature-desc">After verification, Easycloud automatically updates your records to
                        mark the invoice as "POD Received." This reduces manual data entry and streamlines the
                        verification process.<br><br>Automated Updates: Update invoice statuses automatically in your
                        system.<br>Real-Time Notifications: Receive instant updates on the status of each POD and
                        invoice.</div>
                </div>
                <div class="pos-feature-card">
                    <div class="pos-feature-title blue">Real-Time Analytics
                    </div>
                    <div class="pos-feature-desc">Easycloud's image processing system provides real-time analytics to
                        help you monitor and optimize your delivery and invoicing processes. This feature enables you
                        to track key metrics, identify trends, and make data-driven decisions to improve efficiency and
                        accuracy.<br><br>Real-Time Monitoring: Track POD and invoice statuses in real time.<br>Performance Analytics: Analyze delivery times, weight discrepancies, and invoice processing
                        times.</div>
                </div>
                <div class="pos-feature-card">
                    <div class="pos-feature-title blue">Scalable and Customizable
                    </div>
                    <div class="pos-feature-desc">Easycloud's image processing solution is designed to grow with your
                        business. Whether you're a small startup or a large enterprise, our platform adapts to your
                        needs, ensuring seamless integration and efficient operations.<br><br>Scalability: Scale your
                        operations as your business grows.<br>Customization: Tailor the system to your specific
                        requirements.</div>
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
                        Image processing turns visual data into actionable insights—powering automation, enhancing accuracy, and unlocking new possibilities across industries.
                    </p>
                    <p class="pos-quote-author">Manish Gupta, Founder and CEO</p>
                </div>
            </div>
            <div class="pos-testimonial-right">
                <img src="images/image_proceesing_manish.avif" alt="POS Testimonial" class="pos-testimonial-image">
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