<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="../images/E.png">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poultry | EasyCloud Blog</title>
    <link rel="stylesheet" href="../styles.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
       
         .
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
       
       
   
       .blog-detail-main-flex {
               display: flex;
               gap: 3rem;
               max-width: 1200px;
               margin: 4rem auto 2rem auto;
               min-height: 60vh;
           }
           .blog-detail-left {
               flex: 0 0 350px;
               background: #fff;
               border-radius: 18px;
               box-shadow: 0 2px 16px rgba(0,0,0,0.07);
               padding: 2.5rem 2rem 2.5rem 2rem;
               position: sticky;
               top: 120px;
               align-self: flex-start;
               height: fit-content;
           }
           .blog-detail-title {
               font-size: 2.1rem;
               font-weight: 800;
               color: #1a2b4e;
               margin-bottom: 0.7rem;
           }
           .blog-detail-date {
               color: #888;
               font-size: 1rem;
               margin-bottom: 2rem;
           }
           .blog-detail-right {
               flex: 1 1 0%;
               max-height: 700px;
               overflow-y: auto;
               background: #fff;
               border-radius: 18px;
               box-shadow: 0 2px 16px rgba(0,0,0,0.07);
               padding: 2.5rem 2rem 3rem 2rem;
               display: flex;
               flex-direction: column;
               gap: 2rem;
           }
           .blog-detail-image {
               width: 100%;
               max-width: 520px;
               display: block;
               margin: 0 auto 0.5rem auto;
               border-radius: 16px;
               box-shadow: 0 4px 24px rgba(0,0,0,0.10);
           }
           .blog-detail-content {
               color: #222;
               font-size: 1.15rem;
               line-height: 1.7;
           }
           .blog-back-link {
               display: inline-block;
               margin-bottom: 2rem;
               color: #2196f3;
               font-weight: 600;
               text-decoration: none;
               font-size: 1.05rem;
               transition: color 0.2s;
           }
           .blog-back-link:hover {
               color: #1a2b4e;
               text-decoration: underline;
           }
           .blog-share {
               margin-top: 2rem;
               display: flex;
               align-items: center;
               gap: 0.7rem;
               font-size: 1.1rem;
           }
           .blog-share-label {
               color: #222;
               font-weight: 600;
               margin-right: 0.5rem;
           }
           .blog-share-icon {
               color: #888;
               font-size: 1.3rem;
               transition: color 0.2s;
           }
           .blog-share-icon:hover {
               color: #2196f3;
           }
           @media (max-width: 1000px) {
               .blog-detail-main-flex {
                   flex-direction: column;
                   gap: 2rem;
               }
               .blog-detail-left, .blog-detail-right {
                   position: static;
                   width: 100%;
                   max-width: 100%;
                   min-width: 0;
               }
               .blog-detail-right {
                   max-height: unset;
                   overflow-y: visible;
               }
           }
           .blog-detail-video-wrapper {
               position: relative;
               width: 100%;
               max-width: 700px;
               margin: 0 auto 0.5rem auto;
               border-radius: 16px;
               box-shadow: 0 4px 24px rgba(0,0,0,0.10);
               overflow: hidden;
               aspect-ratio: 16/9;
               min-height: 400px;
               background: #000;
           }
           .blog-detail-video img {
               width: 100%;
               height: 100%;
               object-fit: cover;
               display: block;
           }
           .video-thumbnail {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}

           /* Play button styles */
.play-button {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 80px;
    height: 80px;
    background: rgba(26, 43, 78, 0.9);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s ease;
    z-index: 10;
    border: 3px solid rgba(255, 255, 255, 0.8);
    text-decoration: none;  /* removes underline */
}

.play-button i {
    font-size: 2rem;
    color: white;
    margin-left: 5px;
}

.play-button:hover {
    background: #1A2B4E;
    transform: translate(-50%, -50%) scale(1.1);
    box-shadow: 0 0 20px rgba(26, 43, 78, 0.3);
}
       
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
       
         .
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
       </style>
</head>
<body>
    <!-- <a href="../blogs.php" class="blog-back-link"><i class="fas fa-arrow-left"></i> Back to Blogs</a> -->
    <?php include '../nav_bar.php'; ?>
    <div class="blog-detail-main-flex">
        <div class="blog-detail-left">
            <h1 class="blog-detail-title">Transforming Poultry Invoicing</h1>
            <div class="blog-detail-date"><i class="far fa-calendar-alt"></i> November 29, 2024</div>
        </div>
        <div class="blog-detail-right">
            <div class="blog-detail-video-wrapper">
                <img src="../images/poultry.avif" alt="Poultry Image" class="video-thumbnail">
                <a class="play-button" href="https://youtu.be/aya1K6zVe8c" target="_blank" rel="noopener"><i class="fas fa-play"></i></a>
            </div>
            <div class="blog-detail-content">
                <h3>Transforming Poultry Invoicing: How EasyCloud Cracked the Code</h3>
                <p>In the fast-paced poultry industry, smooth operations are key. EasyCloud helped a client overcome delivery and invoice challenges with innovative, efficient, tech-driven solutions.</p>
                <h4>The Daily Grind</h4>
                <p>Picture this: Every day, 200 autos and trucks leave the company premises, each loaded with eggs, chicken, and invoices bound for 15-25 retail outlets each. Drivers deliver the goods, collect a signed or stamped invoice, and return these signed documents to the accounts team for filing and reconciliation.</p>
                <p>Sounds simple? Not when you're handling a jaw-dropping 5,000 invoices daily!</p>
                <p>Now, imagine a customer calling three days later to complain about the quality of chicken or claiming non-delivery of eggs. Finding that one elusive invoice amidst a sea of paperwork was like searching for a needle in a haystack—time-consuming, frustrating, and inefficient.</p>
                <h4>The Breakthrough Solution</h4>
                <p>We at Easy Cloud knew there had to be a better way. So, we cracked the code with a solution as simple as it is brilliant:</p>
                <ul>
                    <li><strong>Double QR Code Power:</strong> Each invoice is printed with two QR codes—one on the top left and one on the bottom right. These codes are the backbone of our system, ensuring that every invoice is easily traceable.</li>
                    <li><strong>Snap, Verify, Store:</strong> When delivering orders, the driver snaps a photo of the stamped invoice using our mobile ERP app. To guarantee accuracy, the app rejects any photo where both QR codes aren't visible. This ensures that the entire invoice is captured perfectly.</li>
                    <li><strong>Instant Tagging:</strong> The ERP system automatically tags the photo of the invoice to the corresponding customer record. No more manual sorting, no more filing cabinets—just instant, digital organization.</li>
                    <li><strong>Real-Time Reconciliation:</strong> With invoices securely stored and tagged, reconciling accounts and deliveries becomes a breeze. Discrepancies? Address them almost instantly and keep operations running smoothly.</li>
                </ul>
                <h4>The Game-Changing Results</h4>
                <p>Our client's operations have undergone a complete transformation. Here's what they're enjoying now:</p>
                <ul>
                    <li><strong>Time Savings:</strong> Automated tagging and reconciliation free up hours of administrative work every day.</li>
                    <li><strong>Pinpoint Accuracy:</strong> The double QR code system ensures every invoice is captured correctly and linked to the right delivery.</li>
                    <li><strong>Faster Resolutions:</strong> Customer complaints are addressed in record time with quick invoice retrieval.</li>
                    <li><strong>Streamlined Efficiency:</strong> The entire process is now optimized, making room for growth and scalability.</li>
                </ul>
                <h4>Why Settle for Less?</h4>
                <p>In the poultry business, success is all about efficiency, accuracy, and staying ahead of the game. Our QR code-powered solution proves that even the simplest ideas can have the biggest impact. With Easy Cloud, our client turned a cumbersome process into a well-oiled machine, unlocking new levels of productivity and customer satisfaction.</p>
                <p>Is your business ready to soar to new heights? Let Easy Cloud crack your toughest challenges. Contact us today and discover how we can transform your operations with smart, tailored solutions.</p>
            </div>
            
            <div class="blog-share">
                <span class="blog-share-label">Share:</span>
                <a href="mailto:connect@easycloudsoftware.com" class="blog-share-icon"><i class="fas fa-envelope"></i></a>
                <a href="https://www.youtube.com/@easycloud_info" class="blog-share-icon"><i class="fab fa-youtube"></i></a>
                <a href="https://www.instagram.com/easycloud_info/" class="blog-share-icon"><i class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/company/easycloudin/posts/?feedView=all" class="blog-share-icon"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>

      <?php include '../footer.php'; ?>
        <script src = '../script.js'></script>

</body>
</html> 