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