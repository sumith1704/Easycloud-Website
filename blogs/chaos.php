<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="../images/E.png">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chaos | EasyCloud Blog</title>
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
            <h1 class="blog-detail-title">No More Prescription For Chaos</h1>
            <div class="blog-detail-date"><i class="far fa-calendar-alt"></i> November 11, 2024</div>
        </div>
        <div class="blog-detail-right">
            <div class="blog-detail-video-wrapper">
                <img src="../images/choas.avif" alt="Chaos Image" class="video-thumbnail">
                <a class="play-button" href="https://youtu.be/55lfzdij-Dw" target="_blank" rel="noopener"><i class="fas fa-play"></i></a>
            </div>
            <div class="blog-detail-content">
                <h3>How Automation Transformed Pharmacy Inventory Management</h3>
                <h4>Introduction</h4>
                <p>In the bustling world of pharmaceutical retail, a typical medical store often hosts thousands, if not more, Stock Keeping Units (SKUs). Have you ever wondered how they keep track of all those products or remember to reorder them when supplies run low?</p>
                <p>In the rare moments when the pharmacist engages with you, they might be discreetly jotting down a quick note under the counter, signaling that certain items need replenishing. But what happens when this scenario is compounded across a chain of pharmacies, scattered across a city or even a state? How can you ensure that your stores don't run out of fast-moving items while preventing excess orders of slow-moving ones? This was the exact dilemma presented by one of our visionary clients who aimed to establish a network of pharmacies in Hyderabad and Secunderabad.</p>
                <p>At this point, our client operated 15 stores throughout the city, managed by a central warehouse. With a penchant for lean principles and a strong belief in technology, the client sought a more systematic solution to this complex problem than the conventional method of using handwritten registers.</p>
                <h4>The Path to Transformation</h4>
                <p>As always, we embarked on this journey with our team, consisting of functional consultants and IT professionals. We dedicated several days to comprehending the entire process end-to-end, starting at the stores, observing the sales and invoicing procedures, and witnessing how inventory replenishment was orchestrated at the store level. We also spent time at the central warehouse, scrutinizing the manual requisition process through messages and emails, and tracking the conversion of these requisitions into internal invoices. Additionally, we monitored the packaging and receipt of goods at various stores.</p>
                <p>The silver lining was that all sales and dispatch data at each store level was already available in the system. Unsurprisingly, the Pareto Principle held true, with 80% of the sales being driven by just 20% of the products across all stores. To address this, we needed to identify the sales levels of each item at each store. Our team formulated a plethora of calculated assumptions and introduced an "auto-replenishment system." We customized the invoice system, warehouse dispatch system, and inventory systems to suit the client's unique requirements.</p>
                <p>This singular system brought about several crucial automation elements:</p>
                <ul>
                    <li><strong>Minimum Inventory Level:</strong> To avert stockouts, we identified a critical minimum inventory level that signaled a warning.</li>
                    <li><strong>Expiry Date Monitoring:</strong> The system flagged items nearing their expiration date based on warehouse delivery details and sales data from each store.</li>
                    <li><strong>Control Over Slow-Moving Items:</strong> The system helped prevent over-ordering of slow-moving items.</li>
                    <li><strong>Dynamic Parameters:</strong> The system adapted to changing trends, modifying the MOQ, inventory levels, and minimum inventory levels based on historical data.</li>
                    <li><strong>Pilferage Control:</strong> It played a significant role in curbing pilferage.</li>
                </ul>
                <h4>The Transformation</h4>
                <p>Today, when you walk into one of our client's pharmacies, you won't find a pharmacist worrying about their stock levels. They are confident that they have the required stock and can meet customer expectations. Their time is better spent engaging with clients instead of filling registers, ensuring a happier, more satisfied customer base.</p>
                <h4>Conclusion: No More Prescription for Chaos</h4>
                <p>In the fast-paced world of pharmaceutical retail, automation has proven to be the elixir for managing complex inventories. From chaotic note-taking under the counter to a well-orchestrated auto-replenishment system, our client's pharmacies have evolved into efficient, customer-focused establishments. So, while it's been a journey from chaos to control, the punchline is clear – the future of Retail Chain Inventory  management is automated, and the results are anything but humdrum.</p>
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