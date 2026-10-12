<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Served at a nested clean URL, so resolve relative links from the site root -->
    <base href="/">

    <!-- Primary Meta Tags -->
    <title>ERPNext Implementation, Customisation &amp; Development | EasyCloud</title>
    <meta name="title" content="ERPNext Implementation, Customisation &amp; Development | EasyCloud">
    <meta name="description" content="EasyCloud helps businesses implement, customise and extend ERPNext: one integrated ERP for finance, sales, purchasing, inventory, manufacturing, projects and operations.">
    <meta name="author" content="EasyCloud">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://easycloudsoftware.com/erpnext">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://easycloudsoftware.com/erpnext">
    <meta property="og:title" content="ERPNext Implementation, Customisation &amp; Development | EasyCloud">
    <meta property="og:description" content="EasyCloud helps businesses implement, customise and extend ERPNext: one integrated ERP for finance, sales, purchasing, inventory, manufacturing, projects and operations.">

    <!-- Structured data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "name": "ERPNext Implementation and Customisation",
      "serviceType": "ERPNext implementation, customisation and development",
      "description": "EasyCloud helps businesses implement, customise and extend ERPNext to fit their processes, industry and growth requirements.",
      "url": "https://easycloudsoftware.com/erpnext",
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
          "name": "ERPNext",
          "item": "https://easycloudsoftware.com/erpnext"
        }
      ]
    }
    </script>

    <link rel="icon" type="image/png" href="images/E.png">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
<style>
/* ERPNext page (same design system as the Business Central pages)
   footer.php re-loads styles.css after this block, so rules that override
   site classes are scoped with an extra page class to keep higher specificity. */

/* ===== Hero ===== */
.bc-hero.ern-hero {
  padding: 7rem 0 6rem;
  color: #fff;
}
.ern-hero .domain-hero-content h1 {
  color: #fff;
  margin-bottom: 1.25rem;
}
.ern-hero .domain-hero-content p {
  max-width: 70ch;
  margin: 0 auto 1.25rem;
}
.ern-hero-buttons {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 1rem;
  margin-top: 2rem;
}
.ern-hero .domain-hero-content a.contact-btn {
  display: inline-block;
  text-decoration: none;
}
.ern-hero.bfsi-hero a.contact-btn:not(.ern-btn-outline) {
  background: #00a0e3;
  color: #0b1b35;
}
.ern-hero.bfsi-hero a.contact-btn:not(.ern-btn-outline):hover,
.ern-hero.bfsi-hero a.contact-btn:not(.ern-btn-outline):focus-visible {
  background: #45aaf2;
  color: #0b1b35;
}
.ern-hero.bfsi-hero a.contact-btn.ern-btn-outline {
  background: transparent;
  color: #fff;
  border: 2px solid #fff;
}
.ern-hero.bfsi-hero a.contact-btn.ern-btn-outline:hover {
  background: rgba(255, 255, 255, 0.12);
}
.ern-hero a.contact-btn:focus-visible,
.ern-final-cta a:focus-visible {
  outline: 2px solid #fff;
  outline-offset: 3px;
}

/* ===== Shared section layout ===== */
.ern-section {
  padding: 5rem 0;
  background-color: #fff;
}
.ern-section.ern-section-light {
  background-color: #f8f9fa;
}
.ern-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 2rem;
}
.ern-section .section-header {
  margin-bottom: 3rem;
}
.ern-section .section-header h2 {
  color: #0B1B35;
  font-weight: 700;
}
.ern-section .section-header p {
  max-width: 850px;
}
.ern-section .section-header p + p {
  margin-top: 1rem;
}
.ern-section .section-header .ern-eyebrow {
  font-size: 1.1rem;
  font-weight: 600;
  color: #1a4b7c;
  margin-bottom: 0.75rem;
}
.ern-closing-text {
  text-align: center;
  font-size: 1.3rem;
  font-weight: 600;
  color: #1a2b4e;
  max-width: 850px;
  margin: 3rem auto 0;
}

/* ===== Module and service cards ===== */
.ern-section .features-cards-container.ern-cards {
  padding: 0;
}
.ern-cards .feature-card {
  display: flex;
  flex-direction: column;
  align-items: center;
  border-radius: 12px;
  border-top: 4px solid #00A0E3;
}
.ern-cards .feature-card h3 {
  font-size: 1.3rem;
  line-height: 1.35;
  margin-bottom: 0.75rem;
}
.ern-cards .feature-card p {
  color: #666;
  font-size: 1rem;
  line-height: 1.6;
  text-align: center;
}
.ern-services .feature-card h3 {
  margin-bottom: 0;
}

/* ===== Capability and industry pills ===== */
.ern-pills {
  list-style: none;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 0.75rem;
  margin: 0 auto;
  padding: 0;
  max-width: 1000px;
}
.ern-pills li {
  background: #fff;
  color: #1a2b4e;
  font-weight: 600;
  padding: 0.6rem 1.4rem;
  border-radius: 50px;
  border: 1px solid rgba(0, 160, 227, 0.35);
  box-shadow: 0 4px 14px rgba(0, 0, 0, 0.06);
}
.ern-section-light .ern-pills li {
  background: #fff;
}
.ern-section:not(.ern-section-light) .ern-pills li {
  background: #f8f9fa;
}

/* ===== ERP at the core: hub with seven connected solutions ===== */
.ern-core-visual {
  position: relative;
  width: 640px;
  height: 640px;
  max-width: 100%;
  margin: 0 auto;
}
.ern-core-visual::before {
  content: "";
  position: absolute;
  inset: 75px;
  border: 2px dashed rgba(0, 160, 227, 0.4);
  border-radius: 50%;
}
.ern-core-hub {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 150px;
  height: 150px;
  transform: translate(-50%, -50%);
  border-radius: 50%;
  background: linear-gradient(135deg, #1a4b7c 0%, #0d2b4d 100%);
  box-shadow: 0 0 0 12px rgba(0, 160, 227, 0.15);
  display: flex;
  align-items: center;
  justify-content: center;
}
.ern-core-hub span {
  color: #fff;
  font-size: 2.2rem;
  font-weight: 700;
  letter-spacing: 2px;
}
.ern-core-nodes {
  list-style: none;
  margin: 0;
  padding: 0;
}
.ern-core-node {
  position: absolute;
  width: 140px;
  transform: translate(-50%, -50%);
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 0.5rem;
  text-align: center;
  padding: 1rem 0.75rem;
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
}
.ern-core-node .ern-node-icon {
  width: 46px;
  height: 46px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(135deg, #00A0E3 0%, #0088c7 100%);
  color: #fff;
  font-size: 1.1rem;
}
.ern-core-node span {
  font-size: 0.95rem;
  color: #0B1B35;
  font-weight: 600;
  line-height: 1.3;
}
/* seven nodes evenly placed around the ring (radius 245px from centre) */
.ern-core-node.node-1 { top: calc(50% - 245px); left: 50%; }
.ern-core-node.node-2 { top: calc(50% - 153px); left: calc(50% + 192px); }
.ern-core-node.node-3 { top: calc(50% + 55px);  left: calc(50% + 239px); }
.ern-core-node.node-4 { top: calc(50% + 221px); left: calc(50% + 106px); }
.ern-core-node.node-5 { top: calc(50% + 221px); left: calc(50% - 106px); }
.ern-core-node.node-6 { top: calc(50% + 55px);  left: calc(50% - 239px); }
.ern-core-node.node-7 { top: calc(50% - 153px); left: calc(50% - 192px); }

/* ===== Final CTA ===== */
.ern-final-cta .ern-cta-lead {
  font-size: 1.4rem;
  font-weight: 600;
  color: #fff;
  margin-bottom: 1rem;
}
.ern-final-cta .experience-container > p:not(.ern-cta-lead) {
  max-width: 800px;
  margin-left: auto;
  margin-right: auto;
}
.ern-final-buttons {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 1rem;
}
.ern-final-cta .experience-btn.ern-btn-outline {
  background: transparent;
  color: #fff;
  border: 2px solid #fff;
}
.ern-final-cta p.ern-consultant-line {
  margin: 2rem auto 0;
  font-size: 1.05rem;
}
.ern-consultant-line a {
  color: #fff;
  font-weight: 600;
  text-decoration: underline;
  text-underline-offset: 3px;
}
.ern-consultant-line a:hover {
  color: #00A0E3;
}

/* ===== Responsive ===== */
@media (max-width: 768px) {
  .bc-hero.ern-hero {
    padding: 5rem 0 4rem;
  }
  .ern-section {
    padding: 4rem 0;
  }
  .ern-container {
    padding: 0 1.25rem;
  }
  .ern-section .section-header h2 {
    font-size: 2rem;
  }
  .ern-core-visual {
    width: 100%;
    height: auto;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1rem;
  }
  .ern-core-visual::before {
    display: none;
  }
  .ern-core-nodes {
    display: contents;
  }
  .ern-core-hub,
  .ern-core-node,
  .ern-core-node[class*="node-"] {
    position: static;
    transform: none;
    width: auto;
  }
  .ern-core-hub {
    grid-column: 1 / -1;
    justify-self: center;
    width: 120px;
    height: 120px;
    margin-bottom: 1rem;
  }
  .ern-core-node.node-7 {
    grid-column: 1 / -1;
  }
}

/* ===== Hover effects ===== */
.ern-cards .feature-card {
  transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
}
.ern-cards .feature-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
  border-top-color: #1a2b4e;
}
.ern-cards .feature-card .feature-icon {
  transition: transform 0.3s ease;
}
.ern-cards .feature-card:hover .feature-icon {
  transform: scale(1.1);
}
.ern-pills li {
  transition: background-color 0.3s ease, color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
}
.ern-section .ern-pills li:hover {
  background: #00A0E3;
  color: #fff;
  transform: translateY(-3px);
  box-shadow: 0 6px 16px rgba(0, 160, 227, 0.3);
}
.ern-core-node {
  transition: box-shadow 0.3s ease, translate 0.3s ease;
}
.ern-core-node:hover {
  translate: 0 -5px;
  box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
}

/* ===== Built Around Your Industry: industry cards ===== */
.ern-ind-cards {
  list-style: none;
  display: grid;
  grid-template-columns: repeat(3, minmax(0, 1fr));
  gap: 1.75rem;
  max-width: 1100px;
  margin: 0 auto;
  padding: 0;
}
.ern-ind-card {
  display: flex;
  flex-direction: column;
  height: 100%;
  box-sizing: border-box;
  padding: 1.5rem;
  background: #fff;
  border-radius: 20px;
  box-shadow: 0 6px 24px rgba(0, 0, 0, 0.07);
  color: inherit;
  text-decoration: none;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
a.ern-ind-card,
a.ern-ind-card:visited,
a.ern-ind-card:hover {
  color: inherit;
  text-decoration: none;
}
.ern-ind-card img,
.ern-ind-placeholder {
  display: block;
  width: 100%;
  aspect-ratio: 16 / 9;
  height: auto;
  border-radius: 14px;
}
.ern-ind-card img {
  object-fit: cover;
}
.ern-ind-placeholder {
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(135deg, #1a4b7c 0%, #0d2b4d 100%);
  color: rgba(255, 255, 255, 0.85);
  font-size: 3rem;
}
.ern-ind-card h3 {
  margin: 1.25rem 0 0;
  color: #1a2b4e;
  font-size: 1.35rem;
  font-weight: 700;
  line-height: 1.3;
}
.ern-ind-more {
  margin-top: auto;
  padding-top: 1rem;
  color: #2c4a6b;
  font-weight: 600;
}
.ern-ind-more span {
  display: inline-block;
  transition: transform 0.3s ease;
}
.ern-ind-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
}
a.ern-ind-card:hover .ern-ind-more {
  color: #00A0E3;
}
a.ern-ind-card:hover .ern-ind-more span {
  transform: translateX(4px);
}
a.ern-ind-card:focus-visible {
  outline: 3px solid #00A0E3;
  outline-offset: 3px;
}
@media (max-width: 992px) {
  .ern-ind-cards {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }
}
@media (max-width: 600px) {
  .ern-ind-cards {
    grid-template-columns: 1fr;
    gap: 1.25rem;
  }
}

/* Scroll-in animation (only when JS has marked the page ready) */
.ern-anim .ern-reveal {
  opacity: 0;
  transform: translateY(30px);
  transition: opacity 0.7s ease, transform 0.7s ease;
}
.ern-anim .ern-reveal.ern-visible {
  opacity: 1;
  transform: none;
}
/* items inside a revealed group come in one after another */
.ern-anim .ern-stagger > * {
  opacity: 0;
  transition: opacity 0.5s ease;
}
.ern-anim .ern-stagger.ern-visible > * {
  opacity: 1;
}
.ern-anim .ern-stagger.ern-visible > *:nth-child(2) { transition-delay: 0.08s; }
.ern-anim .ern-stagger.ern-visible > *:nth-child(3) { transition-delay: 0.16s; }
.ern-anim .ern-stagger.ern-visible > *:nth-child(4) { transition-delay: 0.24s; }
.ern-anim .ern-stagger.ern-visible > *:nth-child(5) { transition-delay: 0.32s; }
.ern-anim .ern-stagger.ern-visible > *:nth-child(6) { transition-delay: 0.40s; }
.ern-anim .ern-stagger.ern-visible > *:nth-child(7) { transition-delay: 0.48s; }
.ern-anim .ern-stagger.ern-visible > *:nth-child(8) { transition-delay: 0.56s; }
.ern-anim .ern-stagger.ern-visible > *:nth-child(n+9) { transition-delay: 0.64s; }

@media (prefers-reduced-motion: reduce) {
  .ern-anim .ern-reveal,
  .ern-anim .ern-stagger > * {
    opacity: 1;
    transform: none;
    transition: none;
  }
  .ern-cards .feature-card,
  .ern-cards .feature-card .feature-icon,
  .ern-pills li,
  .ern-core-node,
  .ern-ind-card,
  .ern-ind-more span {
    transition: none;
  }
  .ern-ind-card:hover,
  a.ern-ind-card:hover .ern-ind-more span,
  .ern-cards .feature-card:hover,
  .ern-cards .feature-card:hover .feature-icon,
  .ern-section .ern-pills li:hover {
    transform: none;
  }
  .ern-core-node:hover {
    translate: none;
  }
}
</style>

</head>
<body>

    <?php include 'nav_bar.php'; ?>

    <main id="main-content">

    <!-- Hero Section -->
    <section class="domain-hero bfsi-hero bc-hero ern-hero">
        <div class="domain-hero-container">
            <div class="domain-hero-content">
                <div class="domain-icon">
                    <i class="fas fa-cubes" aria-hidden="true"></i>
                    <span>ERPNext</span>
                </div>
                <h1>Flexible ERP. Built Around Your Business.</h1>
                <p>Bring finance, sales, purchasing, inventory, manufacturing, projects and operations together on one integrated ERP platform.</p>
                <p>EasyCloud helps businesses implement, customise and extend ERPNext to fit their processes, industry and growth requirements.</p>
                <div class="ern-hero-buttons">
                    <a href="contact.php" class="contact-btn">Request a Demo</a>
                    <a href="contact.php" class="contact-btn ern-btn-outline">Talk to an ERP Consultant</a>
                </div>
            </div>
        </div>
    </section>

    <!-- One ERP. Connected Business Operations. -->
    <section class="ern-section ern-section-light">
        <div class="ern-container">
            <div class="section-header ern-reveal">
                <h2>One ERP. Connected Business Operations.</h2>
                <p>ERPNext provides an integrated platform to manage your core business processes and information.</p>
            </div>
            <div class="features-cards-container ern-cards ern-stagger">
                <div class="feature-card">
                    <div class="feature-icon-wrapper">
                        <div class="feature-icon security"><i class="fas fa-file-invoice-dollar" aria-hidden="true"></i></div>
                    </div>
                    <h3>Finance &amp; Accounting</h3>
                    <p>Accounting, receivables, payables, assets, budgeting and financial reporting.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon-wrapper">
                        <div class="feature-icon supply-chain"><i class="fas fa-handshake" aria-hidden="true"></i></div>
                    </div>
                    <h3>Sales &amp; CRM</h3>
                    <p>Manage leads, opportunities, quotations, sales orders and customers.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon-wrapper">
                        <div class="feature-icon inventory"><i class="fas fa-cart-shopping" aria-hidden="true"></i></div>
                    </div>
                    <h3>Purchasing</h3>
                    <p>Manage suppliers, procurement, purchase orders and approvals.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon-wrapper">
                        <div class="feature-icon supply-chain"><i class="fas fa-warehouse" aria-hidden="true"></i></div>
                    </div>
                    <h3>Inventory &amp; Warehousing</h3>
                    <p>Track inventory, warehouses, batches, serial numbers and stock movements.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon-wrapper">
                        <div class="feature-icon inventory"><i class="fas fa-industry" aria-hidden="true"></i></div>
                    </div>
                    <h3>Manufacturing</h3>
                    <p>Manage BOMs, production planning, Work Orders, Job Cards, workstations and materials.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon-wrapper">
                        <div class="feature-icon security"><i class="fas fa-diagram-project" aria-hidden="true"></i></div>
                    </div>
                    <h3>Projects</h3>
                    <p>Manage projects, tasks, timesheets, costs and profitability.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Open-Source. Flexible. Extensible. -->
    <section class="ern-section">
        <div class="ern-container">
            <div class="section-header ern-reveal">
                <h2>Open-Source. Flexible. Extensible.</h2>
                <p>ERPNext is built on the open-source Frappe Framework, giving businesses significant flexibility to configure and extend their ERP as requirements evolve.</p>
            </div>
<?php /* REPLACED 2026-10-06: extensibility pills, now shown as cards below
            <ul class="ern-pills ern-stagger" aria-label="ERPNext extensibility">
                <li>Custom Workflows</li>
                <li>Custom Forms &amp; Fields</li>
                <li>Reports &amp; Dashboards</li>
                <li>Integrations</li>
                <li>Portals</li>
                <li>Custom Applications</li>
            </ul>
*/ ?>
            <ul class="ern-ind-cards ern-stagger" aria-label="ERPNext extensibility">
                <li>
                    <div class="ern-ind-card">
                        <!-- REPLACED 2026-10-09: <div class="ern-ind-placeholder" aria-hidden="true"><i class="fas fa-diagram-project"></i></div> -->
                        <img src="images/erpnext-custom-workflows.webp" alt="Team mapping a custom ERP approval workflow on a glass wall in a modern office" width="800" height="450" loading="lazy" decoding="async">
                        <h3>Custom Workflows</h3>
                    </div>
                </li>
                <li>
                    <div class="ern-ind-card">
                        <!-- REPLACED 2026-10-09: <div class="ern-ind-placeholder" aria-hidden="true"><i class="fas fa-pen-to-square"></i></div> -->
                        <img src="images/erpnext-custom-forms-fields.webp" alt="Business user configuring custom ERP form fields on a laptop" width="800" height="450" loading="lazy" decoding="async">
                        <h3>Custom Forms &amp; Fields</h3>
                    </div>
                </li>
                <li>
                    <div class="ern-ind-card">
                        <!-- REPLACED 2026-10-09: <div class="ern-ind-placeholder" aria-hidden="true"><i class="fas fa-chart-pie"></i></div> -->
                        <img src="images/erpnext-reports-dashboards.webp" alt="Finance team reviewing ERP reports and real-time dashboards on a meeting room screen" width="800" height="450" loading="lazy" decoding="async">
                        <h3>Reports &amp; Dashboards</h3>
                    </div>
                </li>
                <li>
                    <div class="ern-ind-card">
                        <!-- REPLACED 2026-10-09: <div class="ern-ind-placeholder" aria-hidden="true"><i class="fas fa-plug"></i></div> -->
                        <img src="images/erpnext-integrations.webp" alt="Engineer integrating ERPNext with third-party business systems through APIs" width="800" height="450" loading="lazy" decoding="async">
                        <h3>Integrations</h3>
                    </div>
                </li>
                <li>
                    <div class="ern-ind-card">
                        <!-- REPLACED 2026-10-09: <div class="ern-ind-placeholder" aria-hidden="true"><i class="fas fa-globe"></i></div> -->
                        <img src="images/erpnext-customer-portals.webp" alt="Business customer reordering stock through a self-service ERP customer portal on a tablet" width="800" height="450" loading="lazy" decoding="async">
                        <h3>Portals</h3>
                    </div>
                </li>
                <li>
                    <div class="ern-ind-card">
                        <!-- REPLACED 2026-10-09: <div class="ern-ind-placeholder" aria-hidden="true"><i class="fas fa-cubes"></i></div> -->
                        <img src="images/erpnext-custom-applications.webp" alt="Developers and a business user testing a custom application built on the ERPNext platform" width="800" height="450" loading="lazy" decoding="async">
                        <h3>Custom Applications</h3>
                    </div>
                </li>
            </ul>
            <p class="ern-closing-text ern-reveal">EasyCloud helps you use this flexibility without unnecessarily complicating your ERP.</p>
        </div>
    </section>

    <!-- Go Beyond Standard ERP -->
    <section class="ern-section ern-section-light">
        <div class="ern-container">
            <div class="section-header ern-reveal">
                <p class="ern-eyebrow">Go Beyond Standard ERP</p>
                <h2>ERP at the Core. Connected Solutions Around It.</h2>
                <p>Extend ERPNext with solutions designed around the way your business operates:</p>
            </div>
            <div class="ern-core-visual ern-reveal">
                <div class="ern-core-hub"><span>ERP</span></div>
                <ul class="ern-core-nodes" aria-label="Connected solutions around ERPNext">
                    <li class="ern-core-node node-1"><div class="ern-node-icon"><i class="fas fa-mobile-screen-button" aria-hidden="true"></i></div><span>Mobile Apps</span></li>
                    <li class="ern-core-node node-2"><div class="ern-node-icon"><i class="fas fa-users" aria-hidden="true"></i></div><span>Dealer &amp; Customer Portals</span></li>
                    <li class="ern-core-node node-3"><div class="ern-node-icon"><i class="fas fa-industry" aria-hidden="true"></i></div><span>Shop-Floor Applications</span></li>
                    <li class="ern-core-node node-4"><div class="ern-node-icon"><i class="fas fa-barcode" aria-hidden="true"></i></div><span>Barcode &amp; Traceability Solutions</span></li>
                    <li class="ern-core-node node-5"><div class="ern-node-icon"><i class="fas fa-chart-line" aria-hidden="true"></i></div><span>Business Intelligence</span></li>
                    <li class="ern-core-node node-6"><div class="ern-node-icon"><i class="fas fa-gears" aria-hidden="true"></i></div><span>Workflow Automation</span></li>
                    <li class="ern-core-node node-7"><div class="ern-node-icon"><i class="fas fa-plug" aria-hidden="true"></i></div><span>Third-Party Integrations</span></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Why ERPNext with EasyCloud? -->
    <section class="ern-section">
        <div class="ern-container">
            <div class="section-header ern-reveal">
                <p class="ern-eyebrow">Why ERPNext with EasyCloud?</p>
                <h2>Technology + Process Understanding + Custom Development</h2>
                <p>We don't just configure ERPNext. We understand your processes and build a solution around your operational requirements.</p>
            </div>
            <div class="features-cards-container ern-cards ern-services ern-stagger">
                <div class="feature-card">
                    <div class="feature-icon-wrapper">
                        <div class="feature-icon security"><i class="fas fa-comments" aria-hidden="true"></i></div>
                    </div>
                    <h3>ERP Consulting &amp; Process Mapping</h3>
                </div>
                <div class="feature-card">
                    <div class="feature-icon-wrapper">
                        <div class="feature-icon supply-chain"><i class="fas fa-sliders" aria-hidden="true"></i></div>
                    </div>
                    <h3>Implementation &amp; Configuration</h3>
                </div>
                <div class="feature-card">
                    <div class="feature-icon-wrapper">
                        <div class="feature-icon inventory"><i class="fas fa-code" aria-hidden="true"></i></div>
                    </div>
                    <h3>Customisation &amp; Development</h3>
                </div>
                <div class="feature-card">
                    <div class="feature-icon-wrapper">
                        <div class="feature-icon supply-chain"><i class="fas fa-database" aria-hidden="true"></i></div>
                    </div>
                    <h3>Data Migration &amp; Integration</h3>
                </div>
                <div class="feature-card">
                    <div class="feature-icon-wrapper">
                        <div class="feature-icon inventory"><i class="fas fa-chalkboard-user" aria-hidden="true"></i></div>
                    </div>
                    <h3>Training &amp; Go-Live</h3>
                </div>
                <div class="feature-card">
                    <div class="feature-icon-wrapper">
                        <div class="feature-icon security"><i class="fas fa-headset" aria-hidden="true"></i></div>
                    </div>
                    <h3>Ongoing Support &amp; Enhancements</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Built Around Your Industry -->
    <section class="ern-section ern-section-light">
        <div class="ern-container">
            <div class="section-header ern-reveal">
                <h2>Built Around Your Industry</h2>
                <p>EasyCloud brings ERP and process experience across:</p>
            </div>
<?php /* REPLACED 2026-10-06: industry pills, now shown as cards below
            <ul class="ern-pills ern-stagger" aria-label="Industries">
                <li>Manufacturing</li>
                <li>Engineering</li>
                <li>Distribution</li>
                <li>Extrusion</li>
                <li>Construction</li>
                <li>Publishing</li>
                <li>Packaging</li>
                <li>Healthcare</li>
                <li>Dairy &amp; Agro</li>
            </ul>
*/ ?>
            <ul class="ern-ind-cards ern-stagger" aria-label="Industries">
                <li>
                    <a href="industrial-engineering.php" class="ern-ind-card">
                        <img src="images/industrial_eng.avif" alt="Manufacturing" width="320" height="180" loading="lazy" decoding="async">
                        <h3>Manufacturing</h3>
                        <span class="ern-ind-more">Read More <span aria-hidden="true">&rarr;</span></span>
                    </a>
                </li>
                <li>
                    <div class="ern-ind-card">
                        <!-- REPLACED 2026-10-09: <div class="ern-ind-placeholder" aria-hidden="true"><i class="fas fa-gears"></i></div> -->
                        <img src="images/engineering-industry-erp.webp" alt="Engineers reviewing a machined gearbox in a fabrication workshop that runs on engineering ERP" width="800" height="450" loading="lazy" decoding="async">
                        <h3>Engineering</h3>
                        <span class="ern-ind-more">Read More <span aria-hidden="true">&rarr;</span></span>
                    </div>
                </li>
                <li>
                    <a href="/distribution" class="ern-ind-card">
                        <img src="images/logistics.avif" alt="Distribution" width="320" height="180" loading="lazy" decoding="async">
                        <h3>Distribution</h3>
                        <span class="ern-ind-more">Read More <span aria-hidden="true">&rarr;</span></span>
                    </a>
                </li>
                <li>
                    <a href="extrution.php" class="ern-ind-card">
                        <img src="images/extrustion.webp" alt="Extrusion" width="320" height="180" loading="lazy" decoding="async">
                        <h3>Extrusion</h3>
                        <span class="ern-ind-more">Read More <span aria-hidden="true">&rarr;</span></span>
                    </a>
                </li>
                <li>
                    <a href="construction.php" class="ern-ind-card">
                        <img src="images/construction.avif" alt="Construction" width="320" height="180" loading="lazy" decoding="async">
                        <h3>Construction</h3>
                        <span class="ern-ind-more">Read More <span aria-hidden="true">&rarr;</span></span>
                    </a>
                </li>
                <li>
                    <div class="ern-ind-card">
                        <!-- REPLACED 2026-10-09: <div class="ern-ind-placeholder" aria-hidden="true"><i class="fas fa-book-open"></i></div> -->
                        <img src="images/publishing-industry-erp.webp" alt="Press operator checking printed pages on a production line at a publishing and printing company" width="800" height="450" loading="lazy" decoding="async">
                        <h3>Publishing</h3>
                        <span class="ern-ind-more">Read More <span aria-hidden="true">&rarr;</span></span>
                    </div>
                </li>
                <li>
                    <div class="ern-ind-card">
                        <!-- REPLACED 2026-10-09: <div class="ern-ind-placeholder" aria-hidden="true"><i class="fas fa-box"></i></div> -->
                        <img src="images/packaging-industry-erp.webp" alt="Operator inspecting corrugated boxes on a packaging production line managed with ERP" width="800" height="450" loading="lazy" decoding="async">
                        <h3>Packaging</h3>
                        <span class="ern-ind-more">Read More <span aria-hidden="true">&rarr;</span></span>
                    </div>
                </li>
                <li>
                    <a href="health_care.php" class="ern-ind-card">
                        <img src="images/healthcare.avif" alt="Healthcare" width="320" height="180" loading="lazy" decoding="async">
                        <h3>Healthcare</h3>
                        <span class="ern-ind-more">Read More <span aria-hidden="true">&rarr;</span></span>
                    </a>
                </li>
                <li>
                    <a href="livestock.php" class="ern-ind-card">
                        <img src="images/livestock.avif" alt="Dairy &amp; Agro" width="320" height="180" loading="lazy" decoding="async">
                        <h3>Dairy &amp; Agro</h3>
                        <span class="ern-ind-more">Read More <span aria-hidden="true">&rarr;</span></span>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="experience-section ern-final-cta">
        <div class="experience-container">
            <h2 style="color: #ffffff;">Ready to Explore ERPNext?</h2>
            <p class="ern-cta-lead">Let's understand what your business needs.</p>
            <p>Talk to EasyCloud about your processes, current systems and growth plans. We'll help determine how ERPNext can be configured and extended for your organisation.</p>
            <div class="ern-final-buttons">
                <a href="contact.php" class="experience-btn">BOOK AN ERP CONSULTATION <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
                <a href="contact.php" class="experience-btn ern-btn-outline">REQUEST A DEMO <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
            </div>
            <p class="ern-consultant-line">Not sure which ERP is right for you? <a href="contact.php">Talk to an EasyCloud ERP consultant <span aria-hidden="true">&rarr;</span></a></p>
        </div>
    </section>

    <script>
    (function () {
        if (!('IntersectionObserver' in window) ||
            window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            return;
        }
        var targets = document.querySelectorAll('.ern-reveal, .ern-stagger');
        document.documentElement.classList.add('ern-anim');
        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (!entry.isIntersecting) return;
                var el = entry.target;
                el.classList.add('ern-visible');
                if (el.classList.contains('ern-stagger')) {
                    // hand the items back to their own hover styles once they are in
                    setTimeout(function () { el.classList.remove('ern-stagger', 'ern-visible'); }, 1400);
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
