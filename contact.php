<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="images/E.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Easy Cloud</title>
    <link rel="stylesheet" href="styles.css">
    
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <script type="text/javascript">
        (function() {
            try {
                emailjs.init("rLVfbagaLgRxkCy8y");
                console.log('EmailJS Initialized');
            } catch (err) {
                console.error('EmailJS Initialization Error:', err);
            }
        })();

            

    </script>
   
    <style>
        .contact-section {
        margin-top: 7.5rem !important;
    }
       
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
            border-radius: 6px;
            padding: 0.5rem 0.5rem;
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
        
        /* Additional Responsive Styles */
        .contact-container {
          display: flex;
          justify-content: space-between;
          max-width: 1200px;
          margin: 0 auto;
          padding: 2rem;
          gap: 2rem;
        }

        .contact-info {
          flex: 1;
          display: flex;
          flex-direction: column;
          gap: 1.5rem;
        }

        .form-container {
          flex: 1;
          display: flex;
          flex-direction: column;
          gap: 1.5rem;
        }

        .map-section iframe {
          width: 100%;
          height: 400px;
          border: 0;
        }

        @media (max-width: 768px) {
          .contact-container {
            flex-direction: column;
            padding: 1rem;
          }

          .contact-section {
            margin-top: 5rem !important;
          }

          .info-card, .social-links {
            text-align: center;
          }

          .social-icons {
            justify-content: center;
          }

          .map-section iframe {
            height: 300px;
          }
        }

        @media (max-width: 480px) {
          .contact-container {
            padding: 0.5rem;
          }

          h2, h3 {
            font-size: 1.2rem;
          }

          p, a {
            font-size: 0.9rem;
          }

          .google-form-btn {
            font-size: 1rem;
            padding: 0.8rem;
          }

          .map-section iframe {
            height: 250px;
          }
        }
        
        </style>
</head>
<body>
    <?php include 'nav_bar.php'; ?>


    <!-- Contact Section -->
    <section class="contact-section">
        <div class="contact-container">
            <div class="contact-info">
                <div class="info-card">
                    <div class="card-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3>Visit Us</h3>
                    <p>Head Office: 2nd Floor, BabuKhan Millenium Center, Somajiguda, Hyderabad, Telangana, 500082</p>
                </div>

                <div class="info-card">
                    <div class="card-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h3>Call Us</h3>
                    <a href="tel:+919848027830">+91 98480 27830</a>
                </div>

                <div class="info-card">
                    <div class="card-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3>Email Us</h3>
                    <a href="mailto:connect@easycloudsoftware.com">connect@easycloudsoftware.com</a>
                </div>

                <div class="social-links">
                    <h3>Connect With Us</h3>
                    
                    <div class="social-icons">
                        <a href="https://x.com/Easycloud_info" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/company/easycloudin/posts/?feedView=all" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.youtube.com/@easycloud_info" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                        <a href="https://www.instagram.com/easycloud_info/" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>

            <div class="form-container">
                <div class="form-header">
                    <h2>Send Us a Message</h2>
                    <p>Fill out the form below and we'll get back to you shortly.</p>
                </div>
                <div class="google-form-card">
                    <img src="images/google-forms-logo.svg" alt="Google Forms" class="google-form-logo">
                    <h3>EasyCloud Contact Form</h3>
                    <p>For a seamless and secure experience, please use our Google Form to reach out to us. Your message will be delivered directly to our team.</p>
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSeCs4wQcU1QF9Ygm67a0FmwZepl-ZwGnqTRRVD4i5Qwb6H59g/viewform" target="_blank" rel="noopener" class="google-form-btn">
                        Fill Out the Form <i class="fas fa-external-link-alt"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3807.3374288357877!2d78.46419731487527!3d17.394751988079533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb976e0f8e3c11%3A0x1e0c0b6f6e91552f!2sBabukhan%20Millennium%20Centre!5e0!3m2!1sen!2sin!4v1645524456789!5m2!1sen!2sin"
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy">
        </iframe>
    </section>

    

    <?php include 'footer.php'; ?>

    
</body>
</html>