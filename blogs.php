<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="images/E.png">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs - EasyCloud</title>
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


    <!-- Featured Blog Block -->
    <section style="max-width: 1200px; margin: 0 auto; padding-top: 1rem; padding-bottom: 6rem;">
    <div style="display: flex; flex-wrap: wrap; gap: 2.5rem; align-items: center; justify-content: center;">

        <!-- Blog Card -->
        <a href="blogs/bom.php" style="text-decoration:none; color:inherit; display:block; max-width:1000px; text-align:center;">

            <!-- Blog Image -->
            <img src="images/Blog Aug-08-25 (2) (1).jpg" alt="BOM Blog"
                style="width: 100%; max-width: 500px; height: auto; aspect-ratio: 500/330; object-fit: cover; border-radius: 32px; flex-shrink: 0; display:block; margin:0 auto;">

            <!-- Blog Content -->
            <div style="flex: 1 1 400px; min-width: 280px; max-width: 500px; margin-top:1.5rem; text-align:center; margin-left:auto; margin-right:auto;">
                <h2 style="color: #1a2b4e; font-size: 2.3rem; font-weight: 800; margin-bottom: 1rem; line-height:1.2;">
                    Is Your BOM Ticking...?
                </h2>
                <div style="color: #888; font-size: 1rem; margin-bottom: 1rem;">
                    <i class="far fa-calendar-alt"></i> August 08, 2025
                </div>
                <p style="color: #555; font-size: 1.1rem; line-height:1.6; margin-bottom: 2rem;">
                    Many manufacturers still use outdated systems, leading to costly delays from inefficient BOM
                    management, scheduling, and data handling. EasyCloud’s advanced ERP solutions automate BOM generation
                    and updates, streamline operations, and help SMBs stay agile and competitive.
                </p>
                <a href="blogs/bom.php" class="contact-btn" style="text-decoration: none;">Read More</a>
            </div>
        </a>
    </div>
</section>


    <!-- Blog Cards Grid Section -->
    <section style="max-width: 1200px; margin: 0 auto; padding-bottom: 4rem;">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2.5rem;">
            <!-- Blog Card 1 -->
            <a href="blogs/to_dispatch.php" style="text-decoration:none;color:inherit;display:block;">
                <div
                    style="background: #fff; border-radius: 18px; box-shadow: 0 2px 16px rgba(0,0,0,0.07); padding: 1.5rem; display: flex; flex-direction: column; align-items: flex-start;">
                    <img src="images/dispatch_image.avif" alt="Dispatch Blog"
                        style="width: 100%; height: 160px; object-fit: cover; border-radius: 12px; margin-bottom: 1rem;">
                    <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">To Dispatch
                        Or Not To Dispatch </h3>
                        <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">     </h3>
                        <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">     </h3>

                        <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">     </h3>

                        <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">     </h3>

                    <div style="color: #888; font-size: 0.95rem; margin-bottom: 0.7rem;"><i
                            class="far fa-calendar-alt"></i> October 28, 2024</div>
                    <!-- <p style="color: #666; font-size: 1rem; margin-bottom: 1.2rem;">A look at dispatch management and how to optimize your logistics for better results.</p>
                <a href="#" class="contact-btn" style="text-decoration: none;">Read More</a> -->
                </div>
            </a>
            <!-- Blog Card 2 -->
            <a href="blogs/fish_feed.php" style="text-decoration:none;color:inherit;display:block;">
                <div
                    style="background: #fff; border-radius: 18px; box-shadow: 0 2px 16px rgba(0,0,0,0.07); padding: 1.5rem; display: flex; flex-direction: column; align-items: flex-start;">
                    <img src="images/fish_feed.avif" alt="Fish Feed Blog"
                        style="width: 100%; height: 160px; object-fit: cover; border-radius: 12px; margin-bottom: 1rem;">
                    <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">From Fish
                        Feed Sales To Super Sales</h3>
                    <div style="color: #888; font-size: 0.95rem; margin-bottom: 0.7rem;"><i
                            class="far fa-calendar-alt"></i> November 4, 2024</div>
                    <!-- <p style="color: #666; font-size: 1rem; margin-bottom: 1.2rem;">How EasyCloud helped a client transform their sales process in the aquaculture industry.</p>
                <a href="#" class="contact-btn" style="text-decoration: none;">Read More</a> -->
                </div>
            </a>
            <!-- Blog Card 3 -->
            <a href="blogs/chaos.php" style="text-decoration:none;color:inherit;display:block;">
                <div
                    style="background: #fff; border-radius: 18px; box-shadow: 0 2px 16px rgba(0,0,0,0.07); padding: 1.5rem; display: flex; flex-direction: column; align-items: flex-start;">
                    <img src="images/choas.avif" alt="Prescription Blog"
                        style="width: 100%; height: 160px; object-fit: cover; border-radius: 12px; margin-bottom: 1rem;">
                    <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">No More
                        Prescription For Chaos</h3>
                        <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">     </h3>
                        <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">     </h3>

                        <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">     </h3>

                        <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">     </h3>

                    <div style="color: #888; font-size: 0.95rem; margin-bottom: 0.7rem;"><i
                            class="far fa-calendar-alt"></i> November 11, 2024</div>
                    <!-- <p style="color: #666; font-size: 1rem; margin-bottom: 1.2rem;">Streamlining pharmacy operations with digital solutions for better accuracy and service.</p>
                <a href="#" class="contact-btn" style="text-decoration: none;">Read More</a> -->
                </div>
            </a>
            <!-- Blog Card 4 -->
            <a href="blogs/milking.php" style="text-decoration:none;color:inherit;display:block;">
                <div
                    style="background: #fff; border-radius: 18px; box-shadow: 0 2px 16px rgba(0,0,0,0.07); padding: 1.5rem; display: flex; flex-direction: column; align-items: flex-start;">
                    <img src="images/milking.avif" alt="Milking Blog"
                        style="width: 100%; height: 160px; object-fit: cover; border-radius: 12px; margin-bottom: 1rem;">
                    <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">Milking
                        Success</h3>
                        <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">     </h3>
                        <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">     </h3>

                        <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">     </h3>

                        <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">     </h3>

                    <div style="color: #888; font-size: 0.95rem; margin-bottom: 0.7rem;"><i
                            class="far fa-calendar-alt"></i> November 18, 2024</div>
                    <!-- <p style="color: #666; font-size: 1rem; margin-bottom: 1.2rem;">How technology is revolutionizing dairy operations for efficiency and quality.</p>
                <a href="#" class="contact-btn" style="text-decoration: none;">Read More</a> -->
                </div>
            </a>
            <!-- Blog Card 5 -->
            <a href="blogs/poultry.php" style="text-decoration:none;color:inherit;display:block;">
                <div
                    style="background: #fff; border-radius: 18px; box-shadow: 0 2px 16px rgba(0,0,0,0.07); padding: 1.5rem; display: flex; flex-direction: column; align-items: flex-start;">
                    <img src="images/poultry.avif" alt="Poultry Blog"
                        style="width: 100%; height: 160px; object-fit: cover; border-radius: 12px; margin-bottom: 1rem;">
                    <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">
                        Transforming Poultry Invoicing</h3>
                        <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">     </h3>
                        <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">     </h3>

                        <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">     </h3>

                        <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">     </h3>

                    <div style="color: #888; font-size: 0.95rem; margin-bottom: 0.7rem;"><i
                            class="far fa-calendar-alt"></i> November 29, 2024</div>
                    <!-- <p style="color: #666; font-size: 1rem; margin-bottom: 1.2rem;">A case study on automating invoicing for poultry businesses with EasyCloud.</p>
                <a href="#" class="contact-btn" style="text-decoration: none;">Read More</a> -->
                </div>
            </a>
            <!-- Blog Card 6 -->
            <a href="blogs/capture_with_ai.php" style="text-decoration:none;color:inherit;display:block;">
                <div
                    style="background: #fff; border-radius: 18px; box-shadow: 0 2px 16px rgba(0,0,0,0.07); padding: 1.5rem; display: flex; flex-direction: column; align-items: flex-start;">
                    <img src="images/ai_blog.avif" alt="AI Blog"
                        style="width: 100%; height: 160px; object-fit: cover; border-radius: 12px; margin-bottom: 1rem;">
                    <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">
                        Revolutionizing Data Capture With AI</h3>
                    <div style="color: #888; font-size: 0.95rem; margin-bottom: 0.7rem;"><i
                            class="far fa-calendar-alt"></i> December 2, 2024</div>
                    <!-- <p style="color: #666; font-size: 1rem; margin-bottom: 1.2rem;">How AI-powered tools are changing the way businesses collect and use data.</p>
                <a href="#" class="contact-btn" style="text-decoration: none;">Read More</a> -->
                </div>
            </a>
        </div>
    </section>

    <!-- Additional Blog Cards Grid Section -->
    <section style="max-width: 1200px; margin: 0 auto; padding-bottom: 4rem;">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2.5rem;">
            <!-- Blog Card 7 -->
            <a href="blogs/indian_smes.php" style="text-decoration:none;color:inherit;display:block;">
                <div
                    style="background: #fff; border-radius: 28px; box-shadow: 0 2px 16px rgba(0,0,0,0.07); padding: 1.5rem; display: flex; flex-direction: column; align-items: flex-start;">

                    <img src="images/erp.avif" alt="ERP SME Blog"
                        style="width: 100%; height: 160px; object-fit: cover; border-radius: 18px; margin-bottom: 1rem;">
                    <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">How ERP
                        Software is Helping Indian SMEs Get Organized and Attract the...</h3>
                        
                    <div style="color: #888; font-size: 0.95rem; margin-bottom: 0.7rem;"><i
                            class="far fa-calendar-alt"></i> April 8, 2025</div>
                </div>
            </a>
            <!-- Blog Card 8 -->
            <a href="blogs/construction.php" style="text-decoration:none;color:inherit;display:block;">
                <div
                    style="background: #fff; border-radius: 28px; box-shadow: 0 2px 16px rgba(0,0,0,0.07); padding: 1.5rem; display: flex; flex-direction: column; align-items: flex-start;">
                    <img src="images/construction_blog.avif" alt="Construction Blog"
                        style="width: 100%; height: 160px; object-fit: cover; border-radius: 18px; margin-bottom: 1rem;">
                    <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">EasyCloud
                        revolutionizing Construction Projects</h3>
                        <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">     </h3>
                        <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">     </h3>

                        <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">     </h3>

                        <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">     </h3>

                    <div style="color: #888; font-size: 0.95rem; margin-bottom: 0.7rem;"><i
                            class="far fa-calendar-alt"></i> April 23, 2025</div>
                </div>
            </a>
            <!-- Blog Card 9 -->
            <a href="blogs/critical_chan.php" style="text-decoration:none;color:inherit;display:block;">
                <div
                    style="background: #fff; border-radius: 28px; box-shadow: 0 2px 16px rgba(0,0,0,0.07); padding: 1.5rem; display: flex; flex-direction: column; align-items: flex-start;">
                    <img src="images/critical.avif" alt="Chain Project Blog"
                        style="width: 100%; height: 160px; object-fit: cover; border-radius: 18px; margin-bottom: 1rem;">
                    <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">Critical
                        Chain Project Management</h3>
                        <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">     </h3>
                        <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">     </h3>

                        <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">     </h3>

                        <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">     </h3>

                    <div style="color: #888; font-size: 0.95rem; margin-bottom: 0.7rem;"><i
                            class="far fa-calendar-alt"></i> April 28, 2025</div>
                </div>
            </a>
            <!-- Blog Card 10 -->
            <a href="blogs/extrution.php" style="text-decoration:none;color:inherit;display:block;">
                <div
                    style="background: #fff; border-radius: 28px; box-shadow: 0 2px 16px rgba(0,0,0,0.07); padding: 1.5rem; display: flex; flex-direction: column; align-items: flex-start;">
                    <img src="images/smart_erp.avif" alt="Extrusion Blog"
                        style="width: 100%; height: 160px; object-fit: cover; border-radius: 18px; margin-bottom: 1rem;">
                    <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">Smart ERP
                        for Smarter Extrusion</h3>
                        <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">     </h3>
                        <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">     </h3>

                        <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">     </h3>

                        <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">     </h3>

                    <div style="color: #888; font-size: 0.95rem; margin-bottom: 0.7rem;"><i
                            class="far fa-calendar-alt"></i> May 05, 2025</div>
                </div>
            </a>
            <!-- Blog Card 11 -->
            <a href="blogs/real_erp.php" style="text-decoration:none;color:inherit;display:block;">
                <div
                    style="background: #fff; border-radius: 28px; box-shadow: 0 2px 16px rgba(0,0,0,0.07); padding: 1.5rem; display: flex; flex-direction: column; align-items: flex-start;">
                    <img src="images/real_work.avif" alt="Real ERP Blog"
                        style="width: 100%; height: 160px; object-fit: cover; border-radius: 18px; margin-bottom: 1rem;">
                    <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">Real Work
                        Needs a Real ERP — That's EasyCloud</h3>
                    <div style="color: #888; font-size: 0.95rem; margin-bottom: 0.7rem;"><i
                            class="far fa-calendar-alt"></i> May 13, 2025</div>
                </div>
            </a>
            <!-- Blog Card 12 -->
            <a href="blogs/labour_teams.php" style="text-decoration:none;color:inherit;display:block;">
                <div
                    style="background: #fff; border-radius: 28px; box-shadow: 0 2px 16px rgba(0,0,0,0.07); padding: 1.5rem; display: flex; flex-direction: column; align-items: flex-start;">
                    <img src="images/labour_teams.avif" alt="Labour Blog"
                        style="width: 100%; height: 160px; object-fit: cover; border-radius: 18px; margin-bottom: 1rem;">
                    <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">Track.
                        Verify. Pay. EasyCloud for Labour Teams</h3>
                    <div style="color: #888; font-size: 0.95rem; margin-bottom: 0.7rem;"><i
                            class="far fa-calendar-alt"></i> May 24, 2025</div>
                </div>
            </a>

            <a href="blogs/mrp.php" style="text-decoration:none;color:inherit;display:block;">
                <div
                    style="background: #fff; border-radius: 28px; box-shadow: 0 2px 16px rgba(0,0,0,0.07); padding: 1.5rem; display: flex; flex-direction: column; align-items: flex-start;">
                    <img src="images/WhatsApp Image 2025-07-07 at 3.46.03 PM.jpeg" alt="Labour Blog"
                        style="width: 100%; height: 160px; object-fit: cover; border-radius: 18px; margin-bottom: 1rem;">
                    <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">Boosting
                        Efficiency with Material Resource Planning (MRP)</h3>
                         <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">     </h3>
                        <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">     </h3>

                        <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">     </h3>

                        <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">     </h3>

                    <div style="color: #888; font-size: 0.95rem; margin-bottom: 0.7rem;"><i
                            class="far fa-calendar-alt"></i> June 06, 2025</div>
                </div>
            </a>

            <a href="blogs/smart_erp.php" style="text-decoration:none;color:inherit;display:block;">
                <div
                    style="background: #fff; border-radius: 28px; box-shadow: 0 2px 16px rgba(0,0,0,0.07); padding: 1.5rem; display: flex; flex-direction: column; align-items: flex-start;">
                    <img src="images/WhatsApp Image 2025-07-07 at 3.47.02 PM.jpeg" alt="Labour Blog"
                        style="width: 100%; height: 160px; object-fit: cover; border-radius: 18px; margin-bottom: 1rem;">
                    <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">Procure for
                        Performance, Not Prestige</h3>
                        <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">     </h3>
                        <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">     </h3>

                        <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">     </h3>

                        <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">     </h3>


                    <div style="color: #888; font-size: 0.95rem; margin-bottom: 0.7rem;"><i
                            class="far fa-calendar-alt"></i> June 12, 2025</div>
                </div>
            </a>

            <a href="blogs/myth_ten.php" style="text-decoration:none;color:inherit;display:block;">
                <div
                    style="background: #fff; border-radius: 28px; box-shadow: 0 2px 16px rgba(0,0,0,0.07); padding: 1.5rem; display: flex; flex-direction: column; align-items: flex-start;">
                    <img src="images/20250710_1839_Confident Indian Tech Leader_simple_compose_01jzt76rkee3mscv052s6qw38m (1).png" alt="Cloud Computing Myths Blog"
                        style="width: 100%; height: 160px; object-fit: cover; border-radius: 18px; margin-bottom: 1rem;">
                    <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">10 Cloud Computing Myths Busted: Why SMEs Are Switching to EasyCloud ERP</h3>
                    <div style="color: #888; font-size: 0.95rem; margin-bottom: 0.7rem;"><i
                            class="far fa-calendar-alt"></i> July 11, 2025</div>
                </div>
            </a>

            <a href="blogs/bom.php" style="text-decoration:none;color:inherit;display:block;">
                <div
                    style="background: #fff; border-radius: 28px; box-shadow: 0 2px 16px rgba(0,0,0,0.07); padding: 1.5rem; display: flex; flex-direction: column; align-items: flex-start;">
                    <img src="images/Blog Aug-08-25 (2) (1).jpg" alt="Cloud Computing Myths Blog"
                        style="width: 100%; height: 160px; object-fit: cover; border-radius: 18px; margin-bottom: 1rem;">
                    <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">Is Your BOM Ticking...?</h3>

                        <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">     </h3>

                        <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">     </h3>

                        <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">     </h3>


                    <div style="color: #888; font-size: 0.95rem; margin-bottom: 0.7rem;"><i
                            class="far fa-calendar-alt"></i> August 08, 2025</div>
                </div>
            </a>
            <a href="blogs/quality_system.php" style="text-decoration:none;color:inherit;display:block;">
                <div
                    style="background: #fff; border-radius: 28px; box-shadow: 0 2px 16px rgba(0,0,0,0.07); padding: 1.5rem; display: flex; flex-direction: column; align-items: flex-start;">
                    <img src="images/Blog Aug-08-25 (2) (1).jpg" alt="Quality Management Systems Blog"
                        style="width: 100%; height: 160px; object-fit: cover; border-radius: 18px; margin-bottom: 1rem;">
                    <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">Building Effective Quality Management Systems for Small Organizations</h3>

                        <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">     </h3>

                        <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">     </h3>

                        <h3 style="color: #1a2b4e; font-size: 1.18rem; font-weight: 700; margin-bottom: 0.5rem;">     </h3>


                    <div style="color: #888; font-size: 0.95rem; margin-bottom: 0.7rem;"><i
                            class="far fa-calendar-alt"></i> August 08, 2025</div>
                </div>
            </a>
        </div>
    </section>


  
    <?php include 'footer.php'; ?>
    
</body>

</html>