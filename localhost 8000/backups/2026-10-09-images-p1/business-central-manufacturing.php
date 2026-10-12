<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Served at a nested clean URL, so resolve relative links from the site root -->
    <base href="/">

    <!-- Primary Meta Tags -->
    <title>Microsoft Dynamics 365 Business Central for Manufacturing | EasyCloud</title>
    <meta name="title" content="Microsoft Dynamics 365 Business Central for Manufacturing | EasyCloud">
    <meta name="description" content="Microsoft Dynamics 365 Business Central for manufacturing. EasyCloud is a Business Central manufacturing implementation partner connecting finance, inventory and production in one ERP.">
    <meta name="author" content="EasyCloud">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://easycloudsoftware.com/business-central/manufacturing">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://easycloudsoftware.com/business-central/manufacturing">
    <meta property="og:title" content="Microsoft Dynamics 365 Business Central for Manufacturing | EasyCloud">
    <meta property="og:description" content="Connect finance, inventory and production in one ERP with an experienced Business Central manufacturing partner.">

    <!-- Structured data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "name": "Microsoft Dynamics 365 Business Central for Manufacturing",
      "serviceType": "Business Central manufacturing implementation",
      "description": "EasyCloud helps manufacturers implement Microsoft Dynamics 365 Business Central across finance, procurement, inventory, production and reporting.",
      "url": "https://easycloudsoftware.com/business-central/manufacturing",
      "areaServed": "US",
      "provider": {
        "@type": "Organization",
        "name": "EasyCloud",
        "url": "https://easycloudsoftware.com/"
      }
    }
    </script>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://easycloudsoftware.com/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Microsoft Dynamics 365 Business Central",
          "item": "https://easycloudsoftware.com/microsoft-dynamics-365-business-central"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Manufacturing",
          "item": "https://easycloudsoftware.com/business-central/manufacturing"
        }
      ]
    }
    </script>

    <link rel="icon" type="image/png" href="images/E.png">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
<style>
/* Business Central for Manufacturing page
   footer.php re-loads styles.css after this block, so rules that override
   site classes are scoped with an extra page class to keep higher specificity. */

/* ===== Hero ===== */
.bc-hero.mfg-hero {
  padding: 8rem 0 5rem;
  color: #fff;
}
.mfg-hero .domain-hero-container {
  display: grid;
  grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
  gap: 3rem;
  align-items: center;
}
.mfg-hero .domain-hero-content.mfg-hero-content {
  text-align: left;
  max-width: none;
  margin: 0;
}
.mfg-hero .mfg-eyebrow {
  display: flex;
  align-items: center;
  gap: 0.75rem;
  font-size: 1.1rem;
  font-weight: 600;
  color: #00A0E3;
  line-height: 1.4;
  margin: 0 0 1.25rem;
}
.mfg-hero .mfg-eyebrow i {
  font-size: 1.5rem;
}
.mfg-hero .domain-hero-content .mfg-hero-title {
  font-size: 3rem;
  font-weight: 700;
  line-height: 1.2;
  color: #fff;
  margin: 0 0 1.25rem;
}
.mfg-hero .domain-hero-content .mfg-hero-subtitle {
  font-size: 1.3rem;
  font-weight: 600;
  color: #fff;
  max-width: none;
  margin: 0 0 1rem;
}
.mfg-hero .domain-hero-content .mfg-hero-text {
  font-size: 1.1rem;
  max-width: none;
  margin: 0 0 2rem;
}
.mfg-hero .domain-hero-content a {
  text-decoration: none;
}
.mfg-hero .mfg-trust-line {
  list-style: none;
  padding: 0;
  margin: 1.5rem 0 0;
  display: flex;
  flex-wrap: wrap;
  font-size: 0.95rem;
  font-weight: 500;
  color: rgba(255, 255, 255, 0.9);
}
.mfg-hero .mfg-trust-line li:not(:last-child)::after {
  content: "|";
  margin: 0 0.6rem;
  color: #00A0E3;
}
.mfg-placeholder {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 0.5rem;
  text-align: center;
  border: 2px dashed rgba(0, 160, 227, 0.6);
  border-radius: 12px;
  background: rgba(0, 160, 227, 0.06);
  color: #5a6b85;
  font-size: 0.9rem;
  line-height: 1.4;
  padding: 1rem;
}
.mfg-placeholder i {
  font-size: 1.6rem;
  color: #00A0E3;
}
.mfg-placeholder strong {
  color: #1a2b4e;
}
.mfg-hero .mfg-placeholder {
  color: rgba(255, 255, 255, 0.8);
  background: rgba(255, 255, 255, 0.05);
}
.mfg-hero .mfg-placeholder strong {
  color: #fff;
}
.mfg-hero .mfg-badge-slot {
  width: 260px;
  min-height: 70px;
  margin-top: 1.25rem;
  flex-direction: row;
  font-size: 0.85rem;
}
.mfg-hero .mfg-badge-slot i {
  font-size: 1.3rem;
}
.mfg-hero-image.mfg-placeholder {
  aspect-ratio: 4 / 3;
  width: 100%;
  padding: 2rem;
}

/* ===== Shared section layout ===== */
.mfg-section {
  padding: 5rem 0;
  background-color: #fff;
}
.mfg-section.mfg-section-light {
  background-color: #f8f9fa;
}
.mfg-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 2rem;
}
.mfg-section .section-header {
  margin-bottom: 3rem;
}
.mfg-section .section-header h2 {
  color: #0B1B35;
  font-weight: 700;
}
.mfg-section .section-header p {
  max-width: 850px;
}
.mfg-closing-text {
  text-align: center;
  font-size: 1.3rem;
  font-weight: 600;
  color: #1a2b4e;
  margin: 3rem 0 0;
}

/* ===== Section 2: problem cards ===== */
.mfg-problems .features-cards-container {
  padding: 0;
}
.mfg-problems .feature-card {
  display: flex;
  flex-direction: column;
  align-items: center;
  border-radius: 12px;
  border-top: 4px solid #00A0E3;
}
.mfg-problems .feature-card h3 {
  font-size: 1.25rem;
  margin-bottom: 0;
  line-height: 1.35;
}

/* ===== Flow / process diagrams (Sections 3 and 4) ===== */
.mfg-flow {
  list-style: none;
  padding: 0;
  margin: 0 auto;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  row-gap: 1.25rem;
}
.mfg-flow li {
  display: flex;
  align-items: center;
}
.mfg-flow .mfg-step {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 0.6rem;
  width: 120px;
  padding: 1.1rem 0.5rem;
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
  text-align: center;
}
.mfg-flow .mfg-step-icon {
  width: 52px;
  height: 52px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(135deg, #1a2b4e 0%, #1e3c72 100%);
  color: #fff;
  font-size: 1.2rem;
}
.mfg-flow .mfg-step span {
  font-size: 0.95rem;
  font-weight: 600;
  color: #0B1B35;
  line-height: 1.25;
}
.mfg-flow li:not(:last-child)::after {
  content: "\f061";
  font-family: "Font Awesome 6 Free";
  font-weight: 900;
  color: #00A0E3;
  font-size: 1rem;
  margin: 0 0.75rem;
}
.mfg-flow-statement {
  text-align: center;
  font-size: 1.35rem;
  font-weight: 700;
  font-style: italic;
  color: #1a2b4e;
  margin: 2.5rem auto 0;
}
.mfg-capabilities {
  list-style: none;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 0.75rem;
  margin: 2.5rem auto 0;
  padding: 0;
  max-width: 1000px;
}
.mfg-capabilities li {
  background: #f8f9fa;
  color: #1a2b4e;
  font-weight: 600;
  padding: 0.6rem 1.4rem;
  border-radius: 50px;
  border: 1px solid rgba(0, 160, 227, 0.35);
}
.mfg-screenshot-slot.mfg-placeholder {
  max-width: 800px;
  aspect-ratio: 16 / 9;
  margin: 3rem auto 0;
}

/* ===== Section 4: implementation partner ===== */
.mfg-partner .mfg-flow .mfg-step {
  width: 108px;
}
.mfg-partner .mfg-flow .mfg-step-icon {
  background: linear-gradient(135deg, #00A0E3 0%, #0088c7 100%);
}
.mfg-cta-center {
  text-align: center;
  margin: 3rem 0;
}
.mfg-section .mfg-cta-center a.know-more-btn,
.mfg-section .mfg-cta-center a.know-more-btn:hover {
  color: #fff;
  text-decoration: none;
}
.mfg-partner-cards {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 1.5rem;
}
.mfg-partner-card {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 1rem;
  padding: 2rem 1.5rem;
  background: #fff;
  border-radius: 12px;
  border-top: 4px solid #00A0E3;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
  transition: transform 0.3s ease;
}
.mfg-partner-card:hover {
  transform: translateY(-5px);
}
.mfg-partner-card .feature-icon {
  width: 64px;
  height: 64px;
}
.mfg-partner-card .feature-icon i {
  font-size: 1.6rem;
}
.mfg-partner-card h3 {
  font-size: 1.2rem;
  color: #0B1B35;
  font-weight: 600;
  margin: 0;
}
.mfg-partner-card p {
  font-size: 1rem;
  color: #666;
  line-height: 1.5;
  margin: 0;
}

/* ===== Section 5: experience + stats ===== */
.mfg-section.mfg-experience {
  background-color: #1a2b4e;
  color: #fff;
}
.mfg-experience .section-header h2 {
  color: #fff;
}
.mfg-experience .section-header .mfg-experience-subtitle {
  font-size: 1.3rem;
  font-weight: 600;
  color: #00A0E3;
  margin-bottom: 1rem;
}
.mfg-experience .section-header p {
  color: rgba(255, 255, 255, 0.9);
}
.mfg-stats {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 1.5rem;
}
.mfg-stat {
  text-align: center;
  padding: 2rem 1rem;
  border-radius: 12px;
  background: rgba(255, 255, 255, 0.06);
  border: 1px solid rgba(255, 255, 255, 0.12);
}
.mfg-stat .mfg-stat-value {
  display: block;
  font-size: 2.6rem;
  font-weight: 700;
  color: #00A0E3;
  line-height: 1.1;
  margin-bottom: 0.5rem;
}
.mfg-stat .mfg-stat-label {
  display: block;
  font-size: 1.1rem;
  color: rgba(255, 255, 255, 0.9);
}

/* ===== Responsive ===== */
@media (max-width: 1200px) {
  .mfg-partner-cards {
    grid-template-columns: repeat(2, 1fr);
  }
}
@media (max-width: 992px) {
  .mfg-hero .domain-hero-container {
    grid-template-columns: 1fr;
  }
  .mfg-hero .domain-hero-content.mfg-hero-content {
    text-align: center;
  }
  .mfg-hero .mfg-eyebrow,
  .mfg-hero .mfg-trust-line {
    justify-content: center;
  }
  .mfg-hero .mfg-badge-slot {
    margin-left: auto;
    margin-right: auto;
  }
  .mfg-problems .features-cards-container,
  .mfg-stats {
    grid-template-columns: repeat(2, 1fr);
  }
}
@media (max-width: 768px) {
  .bc-hero.mfg-hero {
    padding: 6rem 0 4rem;
  }
  .mfg-hero .domain-hero-content .mfg-hero-title {
    font-size: 2.2rem;
  }
  .mfg-section {
    padding: 4rem 0;
  }
  .mfg-section .section-header h2 {
    font-size: 2rem;
  }
  /* diagrams become a vertical sequence */
  .mfg-flow {
    flex-direction: column;
    row-gap: 0;
  }
  .mfg-flow li {
    flex-direction: column;
  }
  .mfg-flow li:not(:last-child)::after {
    content: "\f063";
    margin: 0.5rem 0;
  }
  .mfg-flow .mfg-step,
  .mfg-partner .mfg-flow .mfg-step {
    width: 220px;
    flex-direction: row;
    justify-content: flex-start;
    padding: 0.75rem 1rem;
    gap: 1rem;
    text-align: left;
  }
  .mfg-flow .mfg-step-icon {
    width: 42px;
    height: 42px;
    font-size: 1rem;
    flex-shrink: 0;
  }
}
@media (max-width: 600px) {
  .mfg-problems .features-cards-container,
  .mfg-partner-cards,
  .mfg-stats {
    grid-template-columns: 1fr;
  }
}

/* ===== Hover effects and animations (2026-10-01) ===== */
/* Section 2 problem cards */
.mfg-problems .feature-card {
  transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
}
.mfg-problems .feature-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
  border-top-color: #1a2b4e;
}
.mfg-problems .feature-card .feature-icon,
.mfg-partner-card .feature-icon {
  transition: transform 0.3s ease;
}
.mfg-problems .feature-card:hover .feature-icon,
.mfg-partner-card:hover .feature-icon {
  transform: scale(1.1);
}

/* Section 3 and 4 flow steps */
.mfg-flow .mfg-step {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.mfg-flow .mfg-step:hover {
  transform: translateY(-5px);
  box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
}
.mfg-flow .mfg-step-icon {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.mfg-flow .mfg-step:hover .mfg-step-icon {
  transform: scale(1.1);
  box-shadow: 0 0 0 6px rgba(0, 160, 227, 0.15);
}

/* Section 3 capability pills */
.mfg-capabilities li {
  transition: background-color 0.3s ease, color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
}
.mfg-capabilities li:hover {
  background: #00A0E3;
  color: #fff;
  transform: translateY(-3px);
  box-shadow: 0 6px 16px rgba(0, 160, 227, 0.3);
}

/* Section 4 cards */
.mfg-partner-card {
  transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
}
.mfg-partner-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
  border-top-color: #1a2b4e;
}

/* Section 5 number cards */
.mfg-stat {
  transition: transform 0.3s ease, background-color 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
}
.mfg-stat:hover {
  transform: translateY(-6px);
  background: rgba(255, 255, 255, 0.1);
  border-color: rgba(0, 160, 227, 0.6);
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.25);
}
.mfg-stat .mfg-stat-value {
  transition: transform 0.3s ease;
}
.mfg-stat:hover .mfg-stat-value {
  transform: scale(1.08);
}

/* Scroll-in animation (only when JS has marked the page ready) */
.mfg-anim .mfg-reveal {
  opacity: 0;
  transform: translateY(30px);
  transition: opacity 0.7s ease, transform 0.7s ease;
}
.mfg-anim .mfg-reveal.mfg-visible {
  opacity: 1;
  transform: none;
}
/* cards inside a revealed group come in one after another */
.mfg-anim .mfg-stagger > * {
  opacity: 0;
  transform: translateY(20px);
  transition: opacity 0.5s ease, transform 0.5s ease;
}
.mfg-anim .mfg-stagger.mfg-visible > * {
  opacity: 1;
  transform: none;
}
.mfg-anim .mfg-stagger.mfg-visible > *:nth-child(2) { transition-delay: 0.08s; }
.mfg-anim .mfg-stagger.mfg-visible > *:nth-child(3) { transition-delay: 0.16s; }
.mfg-anim .mfg-stagger.mfg-visible > *:nth-child(4) { transition-delay: 0.24s; }
.mfg-anim .mfg-stagger.mfg-visible > *:nth-child(5) { transition-delay: 0.32s; }
.mfg-anim .mfg-stagger.mfg-visible > *:nth-child(6) { transition-delay: 0.40s; }
.mfg-anim .mfg-stagger.mfg-visible > *:nth-child(7) { transition-delay: 0.48s; }
.mfg-anim .mfg-stagger.mfg-visible > *:nth-child(8) { transition-delay: 0.56s; }
.mfg-anim .mfg-stagger.mfg-visible > *:nth-child(n+9) { transition-delay: 0.64s; }

@media (prefers-reduced-motion: reduce) {
  .mfg-anim .mfg-reveal,
  .mfg-anim .mfg-stagger > * {
    opacity: 1;
    transform: none;
    transition: none;
  }
  .mfg-problems .feature-card,
  .mfg-partner-card,
  .mfg-flow .mfg-step,
  .mfg-capabilities li,
  .mfg-stat {
    transition: none;
  }
  .mfg-problems .feature-card:hover,
  .mfg-partner-card:hover,
  .mfg-flow .mfg-step:hover,
  .mfg-capabilities li:hover,
  .mfg-stat:hover,
  .mfg-problems .feature-card:hover .feature-icon,
  .mfg-partner-card:hover .feature-icon,
  .mfg-flow .mfg-step:hover .mfg-step-icon,
  .mfg-stat:hover .mfg-stat-value {
    transform: none;
  }
}

/* ===== Audit fixes 2026-10-01 ===== */
/* Hero CTA is a single link (one tab stop); label meets WCAG AA on the blue button */
.domain-hero-content a.contact-btn {
  display: inline-block;
  text-decoration: none;
}
.bfsi-hero.bc-hero a.contact-btn { background: #00a0e3; color: #0b1b35; }
.bfsi-hero.bc-hero a.contact-btn:hover,
.bfsi-hero.bc-hero a.contact-btn:focus-visible {
  background: #45aaf2;
  color: #0b1b35;
}
.bfsi-hero.bc-hero a.contact-btn:focus-visible {
  outline: 2px solid #fff;
  outline-offset: 3px;
}
/* Trust line at body size (16px), same as the homepage hero */
.mfg-hero .mfg-trust-line { font-size: 1rem; }
</style>

</head>
<body>

    <?php include 'nav_bar.php'; ?>

    <main id="main-content">

    <!-- Hero Section -->
    <section class="domain-hero bfsi-hero bc-hero mfg-hero">
        <div class="domain-hero-container">
            <div class="domain-hero-content mfg-hero-content">
                <h1 class="mfg-eyebrow"><i class="fab fa-microsoft" aria-hidden="true"></i> Microsoft Dynamics 365 Business Central for Manufacturers</h1>
                <h2 class="mfg-hero-title">Connect Finance, Inventory and Production in One ERP</h2>
                <p class="mfg-hero-subtitle">Replace disconnected systems, spreadsheets and manual processes with a modern cloud ERP built for growing manufacturers.</p>
                <p class="mfg-hero-text">EasyCloud helps manufacturers implement Microsoft Dynamics 365 Business Central across finance, procurement, inventory, production and reporting.</p>
                <a href="contact.php" class="contact-btn">Book a Manufacturing ERP Assessment</a>
                <ul class="mfg-trust-line">
                    <li>Microsoft Partner</li>
                    <li>Manufacturing ERP Expertise</li>
                    <li>Implementation &bull; Integration &bull; Support</li>
                </ul>
                <!-- PLACEHOLDER: Microsoft partner badge(s). Replace this block with the badge image(s) your partnership status permits. -->
                <div class="mfg-placeholder mfg-badge-slot">
                    <i class="fab fa-microsoft" aria-hidden="true"></i>
                    <span><strong>Microsoft Partner badge</strong><br>image to be supplied</span>
                </div>
            </div>

            <!-- PLACEHOLDER: hero image (1200 x 900, 4:3). Real U.S. manufacturing environment (production line, industrial equipment, warehouse or engineering) with a Business Central dashboard beside it.
                 When supplied, replace this block with:
                 <img src="images/business-central-manufacturing-hero.jpg" alt="Microsoft Dynamics 365 Business Central manufacturing dashboard beside a U.S. production line" class="mfg-hero-img" width="1200" height="900" fetchpriority="high">
            -->
            <div class="mfg-placeholder mfg-hero-image" role="img" aria-label="Hero image placeholder">
                <i class="fas fa-industry" aria-hidden="true"></i>
                <strong>Hero image to be supplied</strong>
                <span>U.S. manufacturing floor with a Business Central dashboard beside it<br>1200 &times; 900 px (4:3)</span>
            </div>
        </div>
    </section>

    <!-- Section 2: Outgrowing your systems -->
    <section class="mfg-section mfg-section-light mfg-problems">
        <div class="mfg-container">
            <div class="section-header mfg-reveal">
                <h2>Is Your Manufacturing Business Outgrowing Its Systems?</h2>
            </div>
            <div class="features-cards-container mfg-stagger">
                <div class="feature-card">
                    <div class="feature-icon-wrapper">
                        <div class="feature-icon security"><i class="fas fa-table" aria-hidden="true"></i></div>
                    </div>
                    <h3>Production planning in spreadsheets</h3>
                </div>
                <div class="feature-card">
                    <div class="feature-icon-wrapper">
                        <div class="feature-icon supply-chain"><i class="fas fa-boxes-stacked" aria-hidden="true"></i></div>
                    </div>
                    <h3>Inventory you can't fully trust</h3>
                </div>
                <div class="feature-card">
                    <div class="feature-icon-wrapper">
                        <div class="feature-icon inventory"><i class="fas fa-cart-shopping" aria-hidden="true"></i></div>
                    </div>
                    <h3>Purchasing disconnected from demand</h3>
                </div>
                <div class="feature-card">
                    <div class="feature-icon-wrapper">
                        <div class="feature-icon supply-chain"><i class="fas fa-eye-slash" aria-hidden="true"></i></div>
                    </div>
                    <h3>Limited visibility into production costs</h3>
                </div>
                <div class="feature-card">
                    <div class="feature-icon-wrapper">
                        <div class="feature-icon inventory"><i class="fas fa-code-compare" aria-hidden="true"></i></div>
                    </div>
                    <h3>Finance and operations using different data</h3>
                </div>
                <div class="feature-card">
                    <div class="feature-icon-wrapper">
                        <div class="feature-icon security"><i class="fas fa-hourglass-half" aria-hidden="true"></i></div>
                    </div>
                    <h3>Management reports taking days to prepare</h3>
                </div>
            </div>
            <p class="mfg-closing-text mfg-reveal">Business Central brings these processes together.</p>
        </div>
    </section>

    <!-- Section 3: Manufacturing flow -->
    <section class="mfg-section mfg-flow-section">
        <div class="mfg-container">
            <ol class="mfg-flow mfg-stagger" aria-label="Manufacturing flow in Business Central">
                <li><div class="mfg-step"><div class="mfg-step-icon"><i class="fas fa-file-signature" aria-hidden="true"></i></div><span>Customer Order</span></div></li>
                <li><div class="mfg-step"><div class="mfg-step-icon"><i class="fas fa-calendar-check" aria-hidden="true"></i></div><span>Plan</span></div></li>
                <li><div class="mfg-step"><div class="mfg-step-icon"><i class="fas fa-cart-shopping" aria-hidden="true"></i></div><span>Purchase</span></div></li>
                <li><div class="mfg-step"><div class="mfg-step-icon"><i class="fas fa-warehouse" aria-hidden="true"></i></div><span>Inventory</span></div></li>
                <li><div class="mfg-step"><div class="mfg-step-icon"><i class="fas fa-industry" aria-hidden="true"></i></div><span>Produce</span></div></li>
                <li><div class="mfg-step"><div class="mfg-step-icon"><i class="fas fa-truck" aria-hidden="true"></i></div><span>Ship</span></div></li>
                <li><div class="mfg-step"><div class="mfg-step-icon"><i class="fas fa-file-invoice-dollar" aria-hidden="true"></i></div><span>Finance</span></div></li>
            </ol>

            <p class="mfg-flow-statement mfg-reveal">One connected ERP from customer demand to financial reporting.</p>

            <ul class="mfg-capabilities mfg-stagger" aria-label="Business Central manufacturing capabilities">
                <li>BOMs</li>
                <li>Routings</li>
                <li>Production Orders</li>
                <li>MRP &amp; Planning</li>
                <li>Work Centers</li>
                <li>Capacity</li>
                <li>Inventory</li>
                <li>Warehousing</li>
                <li>Costing</li>
                <li>Subcontracting</li>
            </ul>

            <!-- PLACEHOLDER: Business Central manufacturing screenshot (1600 x 900, 16:9).
                 When supplied, replace this block with:
                 <img src="images/business-central-manufacturing-screenshot.png" alt="Business Central production orders and planning screen" class="mfg-screenshot" width="1600" height="900" loading="lazy">
            -->
            <div class="mfg-placeholder mfg-screenshot-slot mfg-reveal" role="img" aria-label="Business Central screenshot placeholder">
                <i class="fas fa-desktop" aria-hidden="true"></i>
                <strong>Business Central screenshot to be supplied</strong>
                <span>1600 &times; 900 px (16:9)</span>
            </div>
        </div>
    </section>

    <!-- Section 4: Implementation partner -->
    <section class="mfg-section mfg-section-light mfg-partner">
        <div class="mfg-container">
            <div class="section-header mfg-reveal">
                <h2>Looking for a Business Central Manufacturing Implementation Partner?</h2>
                <p>EasyCloud helps manufacturers implement Microsoft Dynamics 365 Business Central&mdash;from process discovery and solution design to configuration, data migration, integrations, training, go-live and ongoing support.</p>
            </div>

            <ol class="mfg-flow mfg-stagger" aria-label="Business Central implementation process">
                <li><div class="mfg-step"><div class="mfg-step-icon"><i class="fas fa-magnifying-glass" aria-hidden="true"></i></div><span>Discover</span></div></li>
                <li><div class="mfg-step"><div class="mfg-step-icon"><i class="fas fa-pen-ruler" aria-hidden="true"></i></div><span>Design</span></div></li>
                <li><div class="mfg-step"><div class="mfg-step-icon"><i class="fas fa-sliders" aria-hidden="true"></i></div><span>Configure</span></div></li>
                <li><div class="mfg-step"><div class="mfg-step-icon"><i class="fas fa-database" aria-hidden="true"></i></div><span>Migrate</span></div></li>
                <li><div class="mfg-step"><div class="mfg-step-icon"><i class="fas fa-plug" aria-hidden="true"></i></div><span>Integrate</span></div></li>
                <li><div class="mfg-step"><div class="mfg-step-icon"><i class="fas fa-chalkboard-user" aria-hidden="true"></i></div><span>Train</span></div></li>
                <li><div class="mfg-step"><div class="mfg-step-icon"><i class="fas fa-rocket" aria-hidden="true"></i></div><span>Go Live</span></div></li>
                <li><div class="mfg-step"><div class="mfg-step-icon"><i class="fas fa-headset" aria-hidden="true"></i></div><span>Support</span></div></li>
            </ol>

            <div class="mfg-cta-center mfg-reveal">
                <a href="contact.php" class="know-more-btn">Book a Manufacturing ERP Assessment <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
            </div>

            <div class="mfg-partner-cards mfg-stagger">
                <div class="mfg-partner-card">
                    <div class="feature-icon security"><i class="fas fa-industry" aria-hidden="true"></i></div>
                    <h3>Manufacturing Process Expertise</h3>
                    <p>Production, planning, procurement, inventory, costing, traceability and shop-floor processes.</p>
                </div>
                <div class="mfg-partner-card">
                    <div class="feature-icon supply-chain"><i class="fas fa-diagram-project" aria-hidden="true"></i></div>
                    <h3>End-to-End Implementation</h3>
                    <p>Discovery, process mapping, configuration, migration, integration, testing, training and go-live.</p>
                </div>
                <div class="mfg-partner-card">
                    <div class="feature-icon inventory"><i class="fas fa-mobile-screen-button" aria-hidden="true"></i></div>
                    <h3>Beyond Standard ERP</h3>
                    <p>Shop-floor apps, dealer portals, mobile applications, dashboards, barcode solutions and integrations.</p>
                </div>
                <div class="mfg-partner-card">
                    <div class="feature-icon security"><i class="fas fa-headset" aria-hidden="true"></i></div>
                    <h3>Ongoing Support</h3>
                    <p>Continue improving the ERP after go-live as your processes and business evolve.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 5: Manufacturing experience -->
    <section class="mfg-section mfg-experience">
        <div class="mfg-container">
            <div class="section-header mfg-reveal">
                <h2>Manufacturing Problems We've Solved</h2>
                <p class="mfg-experience-subtitle">EasyCloud Manufacturing Experience</p>
                <p>We bring years of experience solving manufacturing, inventory, traceability and shop-floor challenges to our Business Central practice.</p>
            </div>

            <!-- PLACEHOLDER: links to relevant blog pages go here once supplied. -->

            <!-- PLACEHOLDER: replace each "X" with a substantiated figure. -->
            <div class="mfg-stats mfg-stagger">
                <div class="mfg-stat"><span class="mfg-stat-value">5,000</span><span class="mfg-stat-label">invoices/day</span></div>
                <div class="mfg-stat"><span class="mfg-stat-value">X</span><span class="mfg-stat-label">locations connected</span></div>
                <div class="mfg-stat"><span class="mfg-stat-value">X%</span><span class="mfg-stat-label">reduction in manual processing</span></div>
                <div class="mfg-stat"><span class="mfg-stat-value">X</span><span class="mfg-stat-label">users</span></div>
                <div class="mfg-stat"><span class="mfg-stat-value">X</span><span class="mfg-stat-label">SKUs</span></div>
                <div class="mfg-stat"><span class="mfg-stat-value">X</span><span class="mfg-stat-label">transactions/day</span></div>
            </div>
        </div>
    </section>

    <!-- Scroll-in animation for this page's sections and cards -->
    <script>
    (function () {
        if (!('IntersectionObserver' in window) ||
            window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            return;
        }
        var targets = document.querySelectorAll('.mfg-reveal, .mfg-stagger');
        document.documentElement.classList.add('mfg-anim');
        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (!entry.isIntersecting) return;
                var el = entry.target;
                el.classList.add('mfg-visible');
                if (el.classList.contains('mfg-stagger')) {
                    // hand the cards back to their own hover styles once they are in
                    setTimeout(function () { el.classList.remove('mfg-stagger', 'mfg-visible'); }, 1400);
                }
                observer.unobserve(el);
            });
        }, { threshold: 0.15 });
        targets.forEach(function (el) { observer.observe(el); });
    })();
    </script>

    </main>

    <?php include 'footer.php'; ?>

</body>
</html>
