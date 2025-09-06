<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="image/png" href="images/E.png">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - EasyCloud</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="marquee.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <style>
    * {
      box-sizing: border-box;
    }
    
    body {
      margin-top: 5px !important;
      font-family: 'Poppins', 'Segoe UI', Arial, sans-serif;
      line-height: 1.6;
      color: #333;
    }
    .top-image-video-wrapper {
               position: relative;
               width: 80%;
               max-width: 600px;
               margin: 0 auto 0.5rem auto;
               border-radius: 16px;
               box-shadow: 0 4px 24px rgba(0,0,0,0.10);
               overflow: hidden;
               aspect-ratio: 16/9;
               max-height: 500px;
               background: #000;
           }
           .top-image-video img {
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
      text-decoration: none;
      display: inline-block;
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
      flex-wrap: wrap;
    }
    
    .office-card {
      align-items: center;
      min-width: 260px;
      flex: 1 1 260px;
      max-width: 350px;
    }
    
    section h2, .office-card h3, .trusted-heading {
      font-family: 'Poppins', 'Segoe UI', Arial, sans-serif;
      font-weight: 800;
      color: #1a2b4e;
      letter-spacing: 0.01em;
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

    /* Vision Section */
    .vision-section {
      background: #f7fafd;
      padding: 4rem 0;
    }

    .vision-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 1rem;
      gap: 2rem;
    }

    .vision-content {
      text-align: center;
      margin: 0 auto;
      max-width: 800px;
    }

    .vision-header {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
      margin-bottom: 1rem;
    }

    .vision-header i {
      color: #fff;
      font-size: 1.5rem;
    }

    .vision-header h2 {
      font-size: 1.2rem;
      font-weight: 700;
      color: #fff;
    }

    .vision-content h1 {
      font-size: 2.5rem;
      color: #fff;
      font-weight: 800;
      margin-bottom: 1.5rem;
    }

    .vision-text {
      margin-bottom: 1.5rem;
    }

    .vision-text h3 {
      font-size: 1.3rem;
      color: #fff;
      font-weight: 700;
      margin-bottom: 0.5rem;
    }

    .vision-text p {
      color: #555;
      font-size: 1.15rem;
      line-height: 1.7;
    }

    .vision-stats {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 1.5rem;
      max-width: 100%;
    }

    .stat-card {
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 2px 16px rgba(0,0,0,0.07);
      padding: 1.5rem;
      text-align: center;
    }

    .stat-card h2 {
      font-size: 2.5rem;
      color: #1a2b4e;
      font-weight: 800;
      margin-bottom: 0.5rem;
    }

    .stat-card p {
      color: #666;
      font-size: 1.1rem;
      margin: 0;
    }

    /* Values Section Responsive */
    .values-section {
      background: #fff;
      padding: 3rem 0;
    }

    .values-container {
      max-width: 900px;
      margin: 0 auto;
      padding: 0 1rem;
      text-align: center;
    }

    .values-grid {
      display: flex;
      flex-wrap: wrap;
      gap: 2rem;
      justify-content: center;
    }

    .value-card {
      background: #f7fbff;
      border-radius: 18px;
      box-shadow: 0 2px 16px rgba(0,0,0,0.07);
      padding: 2rem 1.5rem;
      min-width: 220px;
      max-width: 260px;
      flex: 1 1 220px;
    }

    .value-card h3 {
      color: #2196f3;
      font-size: 1.15rem;
      font-weight: 700;
      margin-bottom: 0.5rem;
    }

    .value-card p {
      color: #666;
      font-size: 0.98rem;
      margin: 0;
    }

    /* Solutions Section */
    .solutions-section {
      background: #f7fafd;
      padding: 4rem 0;
    }

    .solutions-container {
      display: flex;
      max-width: 1300px;
      margin: 0 auto;
      gap: 2.5rem;
      align-items: flex-start;
      padding: 0 1rem;
    }

    .solutions-content {
      flex: 1 1 400px;
      min-width: 320px;
      max-width: 480px;
      position: sticky;
      top: 120px;
      align-self: flex-start;
    }

    .section-label {
      color: #2196f3;
      font-weight: 700;
      letter-spacing: 1px;
      margin-bottom: 0.5rem;
      font-size: 1.1rem;
      display: flex;
      align-items: center;
    }

    .section-label i {
      margin-right: 0.5rem;
    }

    .solutions-title {
      font-size: 2.5rem;
      color: #1a2b4e;
      font-weight: 800;
      margin-bottom: 1.2rem;
      line-height: 1.2;
    }

    .solutions-description {
      color: #555;
      font-size: 1.15rem;
      margin-bottom: 2rem;
      line-height: 1.7;
    }

    .solutions-grid {
      flex: 2 1 600px;
      min-width: 340px;
      max-height: 600px;
      overflow-y: auto;
      display: flex;
      flex-direction: column;
      gap: 2rem;
      padding-right: 1rem;
    }

    .solution-card {
      background: #fff;
      border-radius: 24px;
      box-shadow: 0 2px 16px rgba(0,0,0,0.07);
      padding: 2rem 1.5rem;
      display: flex;
      gap: 1.5rem;
      align-items: center;
      transition: all 0.3s ease;
    }

    .solution-card:hover {
      box-shadow: 0 8px 25px rgba(0,0,0,0.12);
      transform: translateY(-2px);
    }

    .solution-card img {
      width: 180px;
      height: 90px;
      object-fit: cover;
      border-radius: 12px;
      flex-shrink: 0;
    }

    .solution-card-content h3 {
      color: #1a2b4e;
      font-size: 1.2rem;
      font-weight: 700;
      margin-bottom: 0.5rem;
    }

    .solution-card-content p {
      color: #666;
      font-size: 1rem;
      margin: 0;
      line-height: 1.5;
    }

    /* Technology Section */
    .technology-section {
      background: #fff;
      padding: 4rem 0;
    }

    .technology-container {
      display: flex;
      max-width: 1300px;
      margin: 0 auto;
      gap: 2.5rem;
      align-items: flex-start;
      padding: 0 1rem;
    }

    .technology-content {
      flex: 1 1 400px;
      min-width: 320px;
      max-width: 480px;
      position: sticky;
      top: 120px;
      align-self: flex-start;
    }

    .technology-grid {
      flex: 2 1 600px;
      min-width: 340px;
      max-height: 600px;
      overflow-y: auto;
      display: flex;
      flex-direction: column;
      gap: 2rem;
      padding-right: 1rem;
    }

    .tech-card {
      background: #fff;
      border-radius: 24px;
      box-shadow: 0 2px 16px rgba(0,0,0,0.07);
      padding: 2rem 1.5rem;
      display: flex;
      gap: 1.5rem;
      align-items: center;
      transition: all 0.3s ease;
    }

    .tech-card:hover {
      box-shadow: 0 8px 25px rgba(0,0,0,0.12);
      transform: translateY(-2px);
    }

    .tech-card img {
      width: 120px;
      height: 60px;
      object-fit: contain;
      border-radius: 8px;
      background: #f7fbff;
      flex-shrink: 0;
    }

    /* Team Section */
    .team-section {
      background: #f7fafd;
      padding: 4rem 0;
    }

    .team-container {
      max-width: 1300px;
      margin: 0 auto;
      text-align: center;
      padding: 0 1rem;
    }

    .team-title {
      font-size: 2.5rem;
      color: #1a2b4e;
      font-weight: 800;
      margin-bottom: 1.2rem;
    }

    .team-description {
      color: #555;
      font-size: 1.18rem;
      max-width: 900px;
      margin: 0 auto 2.5rem auto;
      line-height: 1.7;
    }

    .team-grid {
      display: flex;
      flex-wrap: wrap;
      gap: 2rem;
      justify-content: center;
    }

    .team-card {
      background: #fff;
      border-radius: 16px;
      box-shadow: 0 2px 16px rgba(0,0,0,0.07);
      padding: 2rem 2.5rem;
      min-width: 340px;
      max-width: 500px;
      flex: 1 1 340px;
      display: flex;
      align-items: center;
      gap: 2rem;
      border: 1px solid #ececec;
      transition: all 0.3s ease;
    }

    .team-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }

    .team-card img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
      flex-shrink: 0;
    }

    .team-info {
      text-align: left;
    }

    .team-info h3 {
      color: #1a2b4e;
      font-size: 1.18rem;
      font-weight: 700;
      margin-bottom: 0.3rem;
    }

    .team-info p {
      color: #888;
      font-size: 1rem;
      margin-bottom: 0.5rem;
    }

    .team-info a {
      color: #888;
      font-size: 1.2rem;
      transition: color 0.3s ease;
    }

    .team-info a:hover {
      color: #0077b5;
    }

    /* Global Team Section */
    .global-team-section {
      background: #fff;
      padding: 4rem 0;
      text-align: center;
    }

    .global-team-container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 1rem;
    }

    .global-team-title {
      font-size: 2.5rem;
      color: #1a2b4e;
      font-weight: 800;
      margin-bottom: 1.2rem;
    }

    .global-description {
      color: #555;
      font-size: 1.18rem;
      max-width: 700px;
      margin: 0 auto 2rem auto;
      line-height: 1.7;
    }

    .locations-grid {
      display: flex;
      flex-wrap: wrap;
      gap: 3rem;
      justify-content: center;
      margin-top: 2.5rem;
    }

    .location-card {
      flex: 1 1 220px;
      min-width: 200px;
      max-width: 260px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .location-card img {
      width: 70px;
      height: 70px;
      border-radius: 18px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.08);
      margin-bottom: 1rem;
    }

    .location-card h3 {
      color: #1a2b4e;
      font-size: 1.18rem;
      font-weight: 700;
      margin-bottom: 0.3rem;
    }

    .location-card p {
      color: #888;
      font-size: 1rem;
      text-align: center;
      margin: 0;
    }

    /* Scrollbar Styling */
    .solutions-grid::-webkit-scrollbar,
    .technology-grid::-webkit-scrollbar {
      width: 6px;
    }

    .solutions-grid::-webkit-scrollbar-track,
    .technology-grid::-webkit-scrollbar-track {
      background: #f1f1f1;
      border-radius: 3px;
    }

    .solutions-grid::-webkit-scrollbar-thumb,
    .technology-grid::-webkit-scrollbar-thumb {
      background: #c1c1c1;
      border-radius: 3px;
    }

    .solutions-grid::-webkit-scrollbar-thumb:hover,
    .technology-grid::-webkit-scrollbar-thumb:hover {
      background: #a8a8a8;
    }

    /* Media Queries for Responsiveness */
    @media (max-width: 992px) {
      .vision-container {
        flex-direction: column !important;
        gap: 2rem !important;
        padding: 0 1rem !important;
        align-items: center !important;
      }
      
      .vision-stats {
        grid-template-columns: 1fr 1fr !important;
        gap: 1rem !important;
      }
      
      .stat-card {
        padding: 1.2rem !important;
      }
      
      .solutions-container,
      .technology-container {
        flex-direction: column !important;
        gap: 2rem !important;
        padding: 0 1rem !important;
      }
      
      .solutions-content,
      .technology-content {
        position: static !important;
        top: unset !important;
        max-width: 100% !important;
        min-width: 0 !important;
      }
      
      .solutions-grid,
      .technology-grid {
        max-height: none !important;
        overflow-y: visible !important;
        padding-right: 0 !important;
      }
      
      .office-locations {
        flex-wrap: wrap;
        gap: 2rem;
      }
      
      .office-card {
        min-width: 220px;
        flex: 1 1 220px;
      }
    }

    @media (max-width: 800px) {
      .hero-container {
        flex-direction: column !important;
        padding: 0 1rem !important;
      }
      
      .vision-section {
        padding: 2rem 0 !important;
      }
      
      .vision-container {
        padding: 0 1rem !important;
        align-items: center !important;
      }
      
      .vision-content {
        padding: 1rem !important;
      }
      
      .vision-content h1 {
        font-size: 2rem !important;
      }
      
      .vision-header h2 {
        font-size: 1rem !important;
      }
      
      .vision-stats {
        grid-template-columns: 1fr !important;
      }
      
      .stat-card h2 {
        font-size: 2rem !important;
      }
      
      .stat-card p {
        font-size: 1rem !important;
      }
      
      .values-section > div, .values-section .flex {
        flex-direction: column !important;
        gap: 1rem !important;
      }
      
      .values-grid {
        flex-direction: column;
        align-items: center;
      }
      
      .value-card {
        max-width: 100%;
        min-width: 0;
      }
      
      .solutions-title,
      .team-title,
      .global-team-title {
        font-size: 2rem !important;
      }
      
      .solution-card,
      .tech-card {
        flex-direction: column;
        text-align: center;
        padding: 1.5rem;
      }
      
      .solution-card img,
      .tech-card img {
        width: 120px;
        height: 80px;
        margin-bottom: 1rem;
      }
      
      .team-card {
        flex-direction: column;
        text-align: center;
        min-width: 280px;
        padding: 2rem 1.5rem;
      }
      
      .team-info {
        text-align: center;
      }
      
      .locations-grid {
        flex-direction: column;
        align-items: center;
        gap: 2rem;
      }
      
      .stat-card, .vision-content, .vision-header, .vision-text {
        padding: 1rem !important;
      }
    }

    @media (max-width: 600px) {
      .hero-content h1 {
        font-size: 2rem !important;
        padding-top: 2.5rem !important;
      }
      
      .hero {
        padding-top: 7rem !important;
      }
      
      .hero-container h1 {
        font-size: 1.5rem !important;
      }
      
      .hero-container p {
        font-size: 1rem !important;
      }
      
      .vision-section {
        padding: 2rem 0 !important;
      }
      
      .vision-container {
        padding: 0 0.5rem !important;
        align-items: center !important;
      }
      
      .vision-content {
        padding: 0.5rem !important;
        max-width: 100% !important;
      }
      
      .vision-content h1 {
        font-size: 1.8rem !important;
      }
      
      .vision-header h2 {
        font-size: 0.9rem !important;
      }
      
      .vision-text p {
        font-size: 1rem !important;
      }
      
      .stat-card h2 {
        font-size: 1.8rem !important;
      }
      
      .stat-card p {
        font-size: 0.95rem !important;
      }
      
      .marquee-img {
        height: 28px !important;
        max-width: 60px !important;
      }
      
      .office-card, .links-column {
        padding: 0.5rem !important;
      }
      
      .whatsapp-icon {
        font-size: 1.1rem;
        width: 1.5rem;
        height: 1.5rem;
      }
      
      .whatsapp-chat-link {
        font-size: 0.98rem;
      }
      
      .whatsapp-float-btn {
        width: 2.6rem;
        height: 2.6rem;
        right: 1rem;
        bottom: 1rem;
      }
      
      .whatsapp-float-icon {
        font-size: 1.4rem;
      }
      
      .values-section,
      .solutions-section,
      .technology-section,
      .team-section,
      .global-team-section {
        padding: 2.5rem 0;
      }
      
      .solutions-title,
      .team-title,
      .global-team-title {
        font-size: 1.5rem !important;
      }
      
      .value-card {
        padding: 1.5rem 1rem;
      }
      
      .solution-card,
      .tech-card {
        padding: 1.2rem;
      }
      
      .team-card {
        min-width: 250px;
        padding: 1.5rem 1rem;
      }
      
      .contact-btn {
        padding: 0.8rem 1.5rem;
        font-size: 1rem;
      }
    }

    @media (max-width: 480px) {
      .hero-container {
        padding: 0 0.5rem !important;
      }
      
      .vision-section {
        padding: 1.5rem 0 !important;
      }
      
      .vision-container {
        padding: 0 0.5rem !important;
        align-items: center !important;
      }
      
      .vision-content {
        padding: 0.5rem !important;
        max-width: 100% !important;
      }
      
      .vision-content h1 {
        font-size: 1.5rem !important;
      }
      
      .vision-header h2 {
        font-size: 1.5rem !important;
      }
      
      .vision-text p {
        font-size: 0.95rem !important;
      }
      
      .stat-card {
        padding: 0.8rem !important;
      }
      
      .stat-card h2 {
        font-size: 1.5rem !important;
      }
      
      .stat-card p {
        font-size: 0.9rem !important;
      }
      
      .marquee-img {
        height: 18px !important;
        max-width: 40px !important;
      }
      
      .office-card, .links-column {
        padding: 0.2rem !important;
      }
      
      .values-section,
      .solutions-section,
      .technology-section,
      .team-section,
      .global-team-section {
        padding: 2rem 0;
      }
      
      .solutions-title,
      .team-title,
      .global-team-title {
        font-size: 1.3rem !important;
        margin-bottom: 1rem;
      }
      
      .value-card {
        padding: 1.2rem 0.8rem;
      }
      
      .solution-card,
      .tech-card,
      .team-card {
        padding: 1rem 0.8rem;
      }
      
      .team-card {
        min-width: 220px;
      }
      
      .contact-btn {
        padding: 0.7rem 1.2rem;
        font-size: 0.95rem;
      }
      
      .solutions-description,
      .team-description,
      .global-description {
        font-size: 1rem;
      }
    }
  </style>
</head>
<body>

<?php include 'nav_bar.php'; ?>
<div class="top-image">
            <div class="top-image-video-wrapper">
                <img src="images/ecs_thumbnail.png" alt="EasyCloud Image" class="video-thumbnail" >
                <a class="play-button" href="https://youtu.be/fwiBLLi0PXs" target="_blank" rel="noopener"><i class="fas fa-play"></i></a>
            </div>

 <!-- Vision & Mission Section -->
  <section class="vision-section">
    <div class="vision-container">
        <div class="vision-content">
            <div class="vision-header">
                <i class="fas fa-bullseye"></i>
                <h2>Vision & Mission</h2>
            </div>
            <h1>What Ignites Our Drive To Move Forward?</h1>
            <div class="vision-text">
                <h3>Vision:</h3>
                <p>Our vision is to make powerful business tools accessible to everyone, without costly fees—enabling businesses to operate seamlessly from a smartphone to a desktop.</p>
            </div>
            <div class="vision-text">
                <h3>Mission:</h3>
                <p>We work in partnership with our clients & our community to achieve excellence and we aim to continue building on our stellar reputation to become a nationally recognized brand in ERP and Enterprise System.</p>
            </div>
        </div>
        <div class="vision-stats">
            <div class="stat-card">
                <h2>40+</h2>
                <p>Customer</p>
            </div>
            <div class="stat-card">
                <h2>12+</h2>
                <p>Years Of Experience</p>
            </div>
            <div class="stat-card">
                <h2>55+</h2>
                <p>Team size</p>
            </div>
            <div class="stat-card">
                <h2>10,000+</h2>
                <p>No. of Users</p>
            </div>
        </div>
    </div>
</section>

    <!-- Values Section -->
    <section class="values-section">
        <div class="values-container">
            <h2 style="color: #1a2b4e; font-size: 2rem; font-weight: 700; margin-bottom: 2rem;">Our Values</h2>
            <div class="values-grid">
                <div class="value-card">
                    <h3>Innovation</h3>
                    <p>We embrace new ideas and technologies to deliver the best solutions for our clients.</p>
                </div>
                <div class="value-card">
                    <h3>Integrity</h3>
                    <p>We act with honesty, transparency, and respect in all our relationships.</p>
                </div>
                <div class="value-card">
                    <h3>Customer Focus</h3>
                    <p>Our clients' success is our top priority. We listen, understand, and deliver beyond expectations.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Solutions Section: Sticky Left, Scrollable Right -->
    <section class="solutions-section">
      <div class="solutions-container">
        <!-- Left: Sticky -->
        <div class="solutions-content">
          <div>
            <div class="section-label"><i class="fas fa-dot-circle"></i> OUR SOLUTIONS</div>
            <h2 class="solutions-title">Tailored Tech Solutions for Streamlined Business Success.</h2>
            <p class="solutions-description">We offers smart tech solutions designed to simplify your business. Whether it's managing operations or boosting sales, our tools help you work faster and grow with ease. Let us handle the complex stuff so you can focus on success.</p>
            <a href="contact.php">
                <button class="contact-btn">Contact Us</button>
            </a>
          </div>
        </div>
        <!-- Right: Scrollable -->
        <div class="solutions-grid">
          <div class="solution-card">
            <img src="images/big_image_ie.avif" alt="ERP Systems">
            <div class="solution-card-content">
              <h3>ERP Systems:</h3>
              <p>Take control of your entire business operations with our integrated ERP solutions, built to streamline processes and enhance overall efficiency.</p>
            </div>
          </div>
          <div class="solution-card">
            <img src="images/app.avif" alt="POS and Retail">
            <div class="solution-card-content">
              <h3>POS and Retail:</h3>
              <p>Our advanced point-of-sale systems help you manage sales, inventory, and customer interactions smoothly and effectively.</p>
            </div>
          </div>
          <div class="solution-card">
            <img src="images/retail.avif" alt="Supply Chain & Inventory Management">
            <div class="solution-card-content">
              <h3>Supply Chain & Inventory Management:</h3>
              <p>Keep your supply chain running smoothly with real-time tracking, automated inventory updates, and imageed reporting.</p>
            </div>
          </div>
          <div class="solution-card">
            <img src="images/education.avif" alt="Education Management">
            <div class="solution-card-content">
              <h3>Education Management:</h3>
              <p>Support schools and institutions with our tools designed for student management, academic scheduling, and performance tracking.</p>
            </div>
          </div>
          <div class="solution-card">
            <img src="images/healthcare.avif" alt="Healthcare Solutions">
            <div class="solution-card-content">
              <h3>Healthcare Solutions:</h3>
              <p>Enhance patient care and operational workflows with our specialised systems built for the healthcare industry.</p>
            </div>
          </div>
          <div class="solution-card">
            <img src="images/ai.avif" alt="AI-Powered Features">
            <div class="solution-card-content">
              <h3>AI-Powered Features:</h3>
              <p>Leverage AI for image processing and retrieval to enhance data accuracy and enable smarter decisions.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Technology Section: Scrollable Left, Sticky Right -->
  <section class="technology-section">
    <div class="technology-container">
      <!-- Left: Scrollable -->
      <div class="technology-grid">
        <div class="tech-card">
          <img src="images/erp_next.avif" alt="ERPNext">
          <div class="solution-card-content">
            <h3>ERP next:</h3>
            <p>Comprehensive ERP solution.</p>
          </div>
        </div>
        <div class="tech-card">
          <img src="images/flutter.avif" alt="Flutter">
          <div class="solution-card-content">
            <h3>Flutter</h3>
            <p>Cross-platform mobile application development.</p>
          </div>
        </div>
        <div class="tech-card">
          <img src="images/database.avif" alt="Databases">
          <div class="solution-card-content">
            <h3>Databases (Postgres SQL, MariaDB, MY-SQL, Oracle)</h3>
            <p>Reliable and scalable database management systems.</p>
          </div>
        </div>
        <div class="tech-card">
          <img src="images/powerbi.avif" alt="Power BI">
          <div class="solution-card-content">
            <h3>Power BI</h3>
            <p>Advanced business analytics and reporting.</p>
          </div>
        </div>
        <div class="tech-card">
          <img src="images/metabase.avif" alt="Metabase">
          <div class="solution-card-content">
            <h3>Metabase</h3>
            <p>Open-source data visualisation and business intelligence tool.</p>
          </div>
        </div>
        <div class="tech-card">
          <img src="images/superset.avif" alt="Superset">
          <div class="solution-card-content">
            <h3>SuperSet</h3>
            <p>Modern data exploration and visualisation platform.</p>
          </div>
        </div>
      </div>
      <!-- Right: Sticky -->
      <div class="technology-content">
        <div>
          <div class="section-label"><i class="fas fa-dot-circle"></i> Our Technology</div>
          <h2 class="solutions-title">AI-Driven Technology for Effortless Cloud Management</h2>
          <p class="solutions-description">At EasyCloud, we leverage cutting-edge technology platforms to deliver seamless, scalable, and efficient solutions for businesses across industries. Our technology stack includes:</p>
          <a href="contact.php">
              <button class="contact-btn">Contact Us</button>
          </a>
        </div>
      </div>
    </div>
  </section>

    <!-- Meet the People Section -->
    <section class="team-section">
      <div class="team-container">
        <h2 class="team-title">Meet the People</h2>
        <p class="team-description">
          Our team combines passionate young developers with experienced leaders and marketing professionals. We offer 1-year internships in Telangana to nurture fresh talent, with many interns continuing as valued members of the EasyCloud family.
        </p>
        <div class="team-grid">
          <!-- Manish Gupta Card -->
          <div class="team-card">
            <img src="images/manish_man.avif" alt="Manish Gupta">
            <div class="team-info">
              <h3>Manish Gupta</h3>
              <p>CEO & Founder</p>
              <div>
                <a href="https://www.linkedin.com/in/manish-easycloud"><i class="fab fa-linkedin fa-lg"></i></a>
              </div>
            </div>
          </div>
          <!-- Tayyab Sayyad Card -->
          <div class="team-card">
            <img src="images/Sayyad.jpg" alt="Tayyab Sayyad">
            <div class="team-info">
              <h3>Tayyab Sayyad</h3>
              <p>CTO</p>
              <div>
                <a href="https://www.linkedin.com/in/sayyadtayyab/"><i class="fab fa-linkedin fa-lg"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Global Team Section -->
    <section class="global-team-section">
      <div class="global-team-container">
        <h2 class="global-team-title">Be Part of Our Global Team's Exciting Journey</h2>
        <p class="global-description">Come join us on the journey to make work meaningful.</p>
        <a href="contact.php">
            <button class="contact-btn" style="margin-bottom: 2.5rem;">Contact Us</button>
        </a>
        <div class="locations-grid">
          <!-- India -->
          <div class="location-card">
            <img src="images/india.avif" alt="India">
            <h3>India</h3>
            <p>Central hub for EasyCloud's operations in India.</p>
          </div>
          <!-- USA -->
          <div class="location-card">
            <img src="images/usa.avif" alt="USA">
            <h3>USA</h3>
            <p>Serving North American clients with seamless support.</p>
          </div>
          <!-- UAE -->
          <div class="location-card">
            <img src="images/uae.avif" alt="UAE">
            <h3>UAE</h3>
            <p>Supporting Middle Eastern clients and expanding our global presence.</p>
          </div>
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

    <!-- Footer Links Section -->
    <?php include 'footer.php'; ?>

    <!-- WhatsApp Float Button -->
    <a href="https://wa.me/your-whatsapp-number" class="whatsapp-float-btn">
        <i class="fab fa-whatsapp whatsapp-float-icon"></i>
    </a>
    
</body>
</html>