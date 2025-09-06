<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="images/E.png">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthcare - EasyCloud</title>
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
            @media screen and (max-width: 992px) {
              .burger {
                display: block;
                position: absolute;
                right: 2rem;
                top: 1.2rem;
                z-index: 2000;
              }
              
            /* Show only desktop nav-links on desktop, only mobile nav-links on mobile */
            .nav-links-mobile { display: flex !important; }
            .nav-links-desktop { display: flex !important; }
            @media screen and (max-width: 992px) {
              .nav-links-mobile { display: flex !important; }
              .nav-links-mobile.active { display: flex !important; }
              .nav-links-desktop { display: flex !important; }
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
            
            rgin-top: 0.2rem !important;
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
                    <i class="fas fa-hospital"></i>
                    <span>Healthcare</span>
                </div>
                <h1>Ready to transform your healthcare operations with streamlined management and improved patient
                    engagement? </h1>
                <p>EasyCloud Healthcare module offers integrated solutions that improve operational efficiency, enhance
                    patient engagement, and optimize resource management in healthcare facilities</p>
                <a href="contact.php">
                    <button class="contact-btn">Contact Us</button>
                </a>
            </div>
        </div>
    </section>

    <!-- Hero Image Section -->
    <!-- <section class="hero-image-section retail-hero-image-section">
        <div class="hero-image-container retail-hero-image-container">
            <img src="images/energy_and_utilities.avif" alt="Retail Card Payment" class="hero-main-image retail-main-image">

        </div>
    </section> -->

    <img src="images/health_care.avif" alt="Power BI"
        style="width: 60vw; max-width: 900px; border-radius: 18px; box-shadow: 0 8px 32px rgba(0,0,0,0.10); margin: 2rem auto 0 auto; display: block;">


    <!-- Primary Gains Section -->
    <section class="primary-gains-section">
        <div class="primary-gains-container">
            <h2>Principal benefits of effortless
                education module.</h2>
            <p>EasyCloud is designed to meet the unique needs of the healthcare sector, offering a comprehensive ERP
                solution that simplifies hospital management, enhances patient care, and optimizes daily operations.
                Here’s a closer look at how EasyCloud can revolutionize healthcare institutions:

            </p>
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
                <h3>Telemedicine and Remote Consultations
                </h3>
                <div class="feature-details">
                    <div class="feature-item">
                        <p>Enable remote consultations and telemedicine services, allowing healthcare providers to offer
                            care from a distance, while still accessing all necessary patient information.</p>
                    </div>
                    <div class="feature-item">
                        <h4>Key Features

                        </h4>
                        <p>Online Consultation Scheduling, Secure Video Conferencing and Messaging, Remote Prescription
                            and Treatment Sharing</p>
                    </div>
                </div>
            </div>

            <div class="feature-card">
                <div class="feature-icon-wrapper">
                    <div class="feature-icon security">
                        <i class="fas fa-fingerprint"></i>
                    </div>
                </div>
                <h3>Patient Engagement and Portal Access
                </h3>
                <div class="feature-details">
                    <div class="feature-item">
                        <p>Enhance patient satisfaction with EasyCloud’s secure patient portal, giving them easy access
                            to their medical records, appointment schedules, and billing information.</p>
                    </div>
                    <div class="feature-item">
                        <h4>Key Features

                        </h4>
                        <p>Secure Online Patient Login, Access to Appointment Histories and Medical Records, Billing,
                            Prescription, and Test Result Access</p>
                    </div>
                </div>
            </div>

            <div class="feature-card">
                <div class="feature-icon-wrapper">
                    <div class="feature-icon inventory">
                        <i class="fas fa-boxes"></i>
                    </div>
                </div>
                <h3>Streamlined Patient Information Management </h3>
                <div class="feature-details">
                    <div class="feature-item">
                        <p>EasyCloud enables healthcare providers to efficiently manage patient data—from demographics
                            and medical history to diagnoses and treatment plans. This ensures seamless across
                            departments.</p>

                    </div>
                    <div class="feature-item">
                        <h4>Key Features

                        </h4>
                        <p>Electronic Medical Records (EMR), Patient Registration and Appointment Scheduling, Detailed
                            Treatment and Consultation History</p>
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
                <h3>Comprehensive Inpatient and Outpatient Management
                </h3>
                <div class="feature-details">
                    <div class="feature-item">
                  
                        <p>From managing hospital admissions and discharges to efficiently tracking outpatient care, EasyCloud handles it all with ease.</p>
                    </div>
                    <div class="feature-item">
                        <h4>Key Features</h4>
                        <p>Admission, Discharge, and Transfer (ADT) System, Ward and Bed Allocation, Outpatient Visit and Follow-Up Tracking.

                        </p>
                    </div>
                </div>
            </div>
            <div class="feature-card">
                <div class="feature-icon-wrapper">
                    <div class="feature-icon security">
                        <i class="fas fa-fingerprint"></i>
                    </div>
                </div>
                <h3>Laboratory and Diagnostic Services Integration
                </h3>
                <div class="feature-details">
                    <div class="feature-item">
                   
                        <p>EasyCloud streamlines lab tests, radiology, and imaging services, ensuring accurate and timely coordination between departments.</p>
                    </div>
                    <div class="feature-item">
                        <h4>Key Features

</h4>
                        <p>Test Request Submission and Result Tracking, Automated Laboratory Workflow, Integration with Diagnostic Equipment.</p>
                    </div>
                </div>
            </div>

            <div class="feature-card">
                <div class="feature-icon-wrapper">
                    <div class="feature-icon inventory">
                        <i class="fas fa-boxes"></i>
                    </div>
                </div>
                <h3>Comprehensive Pharmacy Management</h3>
                <div class="feature-details">
                    <div class="feature-item">
            
                        <p>Pharmacy operations are simplified with EasyCloud, helping to track prescriptions, manage stock, and ensure medication accuracy.</p>
                    </div>
                    <div class="feature-item">
                        <h4>Key Features

                        </h4>
                        <p>Prescription Management and Dispensing, Real-Time Inventory Tracking, Automatic Restocking Alerts and Expiry Notifications.</p>
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
                <h3>Regulatory Compliance and Accreditation Support
                </h3>
                <div class="feature-details">
                    <div class="feature-item">
                        <p>EasyCloud helps healthcare facilities stay compliant with industry standards and supports the accreditation process with automated documentation and reporting.</p>
                    </div>
                    <div class="feature-item">
                        <h4>Key Features

                        </h4>
                        <p>Compliance Reporting and Audit Tools, Document Management for Regulations, Accreditation Tracking and Management.</p>
                    </div>
                </div>
            </div>
            <div class="feature-card">
                <div class="feature-icon-wrapper">
                    <div class="feature-icon security">
                        <i class="fas fa-fingerprint"></i>
                    </div>
                </div>
                <h3>Efficient Appointment Scheduling
                </h3>
                <div class="feature-details">
                    <div class="feature-item">
                        
                        <p>With EasyCloud, scheduling patient appointments becomes hassle-free, reducing wait times and ensuring healthcare professionals are available when needed.
                        </p>
                    </div>
                    <div class="feature-item">
                        <h4>Key Features

                        </h4>
                        <p>Doctor Availability Management, Automated Reminders and Notifications, Online Appointment Booking for Patients.</p>
                    </div>
                </div>
            </div>

            <div class="feature-card">
                <div class="feature-icon-wrapper">
                    <div class="feature-icon inventory">
                        <i class="fas fa-boxes"></i>
                    </div>
                </div>
                <h3>Doctor and Staff Management
                </h3>
                <div class="feature-details">
                    <div class="feature-item">
                    
                        <p>EasyCloud allows hospitals to manage staff schedules, payroll, and performance more efficiently, helping to create a well-coordinated workforce.</p>
                    </div>
                    <div class="feature-item">
                        <h4>Key Features

                        </h4>
                        <p>Doctor and Staff Scheduling Tools, Attendance and Leave Management, Automated Payroll and Compliance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CEO Quote Section -->
    <section class="ceo-quote-section">
        <div class="ceo-quote-container">
            <div class="quote-content">
                <h2>Our Healthcare solution enhances operations and patient care, empowering providers to achieve better outcomes</h2>
                <div class="quote-author">
                    <p>Manish Gupta, Founder and CEO</p>
                </div>
            </div>
            <div class="quote-image">
                <img src="images/hospital_beds.avif" alt="Industrial Factory" class="factory-image">
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