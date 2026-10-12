<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Served at a nested clean URL, so resolve relative links from the site root -->
    <base href="/">

    <!-- Primary Meta Tags -->
    <title>ERPNext for Manufacturing | Manufacturing ERP by EasyCloud</title>
    <meta name="title" content="ERPNext for Manufacturing | Manufacturing ERP by EasyCloud">
    <meta name="description" content="ERPNext for manufacturing by EasyCloud: connect sales, planning, procurement, inventory, production, quality, dispatch and finance, and extend ERPNext to the factory floor.">
    <meta name="author" content="EasyCloud">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://easycloudsoftware.com/erpnext/manufacturing">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://easycloudsoftware.com/erpnext/manufacturing">
    <meta property="og:title" content="ERPNext for Manufacturing | Manufacturing ERP by EasyCloud">
    <meta property="og:description" content="ERPNext for manufacturing by EasyCloud: connect sales, planning, procurement, inventory, production, quality, dispatch and finance, and extend ERPNext to the factory floor.">

    <!-- Structured data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "name": "ERPNext for Manufacturing",
      "serviceType": "ERPNext manufacturing ERP implementation and extension",
      "description": "Connect the complete manufacturing flow: from order to delivery. Manage BOMs, Work Orders, Job Cards, Production Planning, Workstations, Material Requirements, Subcontracting, Batch & Serial Tracking and Production Costs from one connected system.",
      "url": "https://easycloudsoftware.com/erpnext/manufacturing",
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
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Manufacturing",
          "item": "https://easycloudsoftware.com/erpnext/manufacturing"
        }
      ]
    }
    </script>

    <link rel="icon" type="image/png" href="images/E.png">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
<style>
/* ERPNext for Manufacturing page (same design system as the ERPNext page)
   footer.php re-loads styles.css after this block, so rules that override
   site classes are scoped with an extra page class to keep higher specificity. */

/* ===== Hero ===== */
.bc-hero.erm-hero {
  padding: 7rem 0 6rem;
  color: #fff;
}
.erm-hero .domain-hero-content h1 {
  color: #fff;
  margin-bottom: 1.25rem;
}
.erm-hero .domain-hero-content p {
  max-width: 70ch;
  margin: 0 auto;
}
.erm-final-cta a:focus-visible {
  outline: 2px solid #fff;
  outline-offset: 3px;
}

/* ===== Shared section layout ===== */
.erm-section {
  padding: 5rem 0;
  background-color: #fff;
}
.erm-section.erm-section-light {
  background-color: #f8f9fa;
}
.erm-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 2rem;
}
.erm-section .section-header {
  margin-bottom: 3rem;
}
.erm-section .section-header:last-child {
  margin-bottom: 0;
}
.erm-section .section-header h2 {
  color: #0B1B35;
  font-weight: 700;
}
.erm-section .section-header p {
  max-width: 850px;
}
.erm-intro-text {
  text-align: center;
  font-size: 1.15rem;
  line-height: 1.7;
  color: #444;
  max-width: 900px;
  margin: 3rem auto 0;
}

/* ===== Manufacturing flow: eight connected steps ===== */
.erm-flow {
  list-style: none;
  display: flex;
  justify-content: space-between;
  gap: 0.5rem;
  max-width: 1150px;
  margin: 0 auto;
  padding: 0;
  counter-reset: erm-step;
}
.erm-flow li {
  position: relative;
  flex: 1 1 0;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 0.75rem;
  text-align: center;
}
/* connector line from each step to the next */
.erm-flow li:not(:last-child)::after {
  content: "";
  position: absolute;
  top: 34px;
  left: calc(50% + 40px);
  width: calc(100% - 80px + 0.5rem);
  height: 2px;
  background: repeating-linear-gradient(90deg, #00A0E3 0 8px, transparent 8px 14px);
}
.erm-flow li:not(:last-child)::before {
  content: "";
  position: absolute;
  top: 29px;
  right: calc(-50% + 38px - 0.5rem);
  border: 6px solid transparent;
  border-left: 8px solid #00A0E3;
}
.erm-step-icon {
  width: 68px;
  height: 68px;
  border-radius: 18px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(135deg, #1a4b7c 0%, #0d2b4d 100%);
  color: #fff;
  font-size: 1.5rem;
  box-shadow: 0 8px 20px rgba(13, 43, 77, 0.2);
  transition: transform 0.3s ease, box-shadow 0.3s ease, background 0.3s ease;
}
.erm-flow li:hover .erm-step-icon {
  transform: translateY(-5px);
  background: linear-gradient(135deg, #00A0E3 0%, #0088c7 100%);
  box-shadow: 0 12px 26px rgba(0, 160, 227, 0.3);
}
.erm-step-label {
  font-size: 1rem;
  font-weight: 600;
  color: #0B1B35;
  line-height: 1.3;
}
.erm-step-label::before {
  counter-increment: erm-step;
  content: counter(erm-step, decimal-leading-zero);
  display: block;
  font-size: 0.75rem;
  font-weight: 700;
  letter-spacing: 1px;
  color: #00A0E3;
  margin-bottom: 0.2rem;
}

/* ===== Factory-floor extension cards ===== */
.erm-cards {
  list-style: none;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 1.75rem;
  max-width: 1150px;
  margin: 0 auto;
  padding: 0;
}
.erm-cards li {
  flex: 0 1 calc((100% - 3 * 1.75rem) / 4);
}
.erm-card {
  display: flex;
  flex-direction: column;
  height: 100%;
  box-sizing: border-box;
  padding: 1.5rem;
  background: #fff;
  border-radius: 20px;
  box-shadow: 0 6px 24px rgba(0, 0, 0, 0.07);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.erm-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
}
.erm-card-icon {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 100%;
  aspect-ratio: 16 / 9;
  border-radius: 14px;
  background: linear-gradient(135deg, #1a4b7c 0%, #0d2b4d 100%);
  color: rgba(255, 255, 255, 0.85);
  font-size: 2.6rem;
}
.erm-card h3 {
  margin: 1.25rem 0 0;
  color: #1a2b4e;
  font-size: 1.2rem;
  font-weight: 700;
  line-height: 1.3;
}

/* ===== Final CTA ===== */
.erm-final-cta .experience-container h2 {
  color: #fff;
}
.erm-final-cta .experience-btn {
  margin-top: 0.5rem;
}

/* ===== Responsive ===== */
@media (max-width: 992px) {
  .erm-cards li {
    flex-basis: calc((100% - 1.75rem) / 2);
  }
  /* flow becomes a vertical chain */
  .erm-flow {
    flex-direction: column;
    align-items: stretch;
    gap: 1.25rem;
    max-width: 340px;
  }
  .erm-flow li {
    flex-direction: row;
    gap: 1.25rem;
    text-align: left;
  }
  .erm-flow li:not(:last-child)::after {
    top: 62px;
    left: 26px;
    width: 2px;
    height: calc(100% - 62px + 1.25rem - 6px);
    background: repeating-linear-gradient(180deg, #00A0E3 0 6px, transparent 6px 11px);
  }
  .erm-flow li:not(:last-child)::before {
    display: none;
  }
  .erm-step-icon {
    flex: 0 0 auto;
    width: 54px;
    height: 54px;
    border-radius: 14px;
    font-size: 1.25rem;
  }
}
@media (max-width: 768px) {
  .bc-hero.erm-hero {
    padding: 5rem 0 4rem;
  }
  .erm-section {
    padding: 4rem 0;
  }
  .erm-container {
    padding: 0 1.25rem;
  }
  .erm-section .section-header h2 {
    font-size: 2rem;
  }
  .erm-intro-text {
    font-size: 1.05rem;
  }
}
@media (max-width: 600px) {
  .erm-cards {
    gap: 1.25rem;
  }
  .erm-cards li {
    flex-basis: 100%;
  }
  .erm-card-icon {
    aspect-ratio: 3 / 1;
    font-size: 2rem;
  }
}

/* Scroll-in animation (only when JS has marked the page ready) */
.erm-anim .erm-reveal {
  opacity: 0;
  transform: translateY(30px);
  transition: opacity 0.7s ease, transform 0.7s ease;
}
.erm-anim .erm-reveal.erm-visible {
  opacity: 1;
  transform: none;
}
/* items inside a revealed group come in one after another */
.erm-anim .erm-stagger > * {
  opacity: 0;
  transition: opacity 0.5s ease;
}
.erm-anim .erm-stagger.erm-visible > * {
  opacity: 1;
}
.erm-anim .erm-stagger.erm-visible > *:nth-child(2) { transition-delay: 0.08s; }
.erm-anim .erm-stagger.erm-visible > *:nth-child(3) { transition-delay: 0.16s; }
.erm-anim .erm-stagger.erm-visible > *:nth-child(4) { transition-delay: 0.24s; }
.erm-anim .erm-stagger.erm-visible > *:nth-child(5) { transition-delay: 0.32s; }
.erm-anim .erm-stagger.erm-visible > *:nth-child(6) { transition-delay: 0.40s; }
.erm-anim .erm-stagger.erm-visible > *:nth-child(7) { transition-delay: 0.48s; }
.erm-anim .erm-stagger.erm-visible > *:nth-child(n+8) { transition-delay: 0.56s; }

@media (prefers-reduced-motion: reduce) {
  .erm-anim .erm-reveal,
  .erm-anim .erm-stagger > * {
    opacity: 1;
    transform: none;
    transition: none;
  }
  .erm-card,
  .erm-step-icon {
    transition: none;
  }
  .erm-card:hover,
  .erm-flow li:hover .erm-step-icon {
    transform: none;
  }
}
</style>

</head>
<body>

    <?php include 'nav_bar.php'; ?>

    <main id="main-content">

    <!-- Hero Section -->
    <section class="domain-hero bfsi-hero bc-hero erm-hero">
        <div class="domain-hero-container">
            <div class="domain-hero-content">
                <div class="domain-icon">
                    <i class="fas fa-industry" aria-hidden="true"></i>
                    <span>ERPNext</span>
                </div>
                <h1>ERPNext for Manufacturing</h1>
                <p>Connect the complete manufacturing flow: from order to delivery.</p>
            </div>
        </div>
    </section>

    <!-- Manufacturing flow -->
    <section class="erm-section erm-section-light">
        <div class="erm-container">
            <ol class="erm-flow erm-stagger" aria-label="Manufacturing flow from order to delivery">
                <li><div class="erm-step-icon"><i class="fas fa-handshake" aria-hidden="true"></i></div><span class="erm-step-label">Sales</span></li>
                <li><div class="erm-step-icon"><i class="fas fa-calendar-check" aria-hidden="true"></i></div><span class="erm-step-label">Planning</span></li>
                <li><div class="erm-step-icon"><i class="fas fa-cart-shopping" aria-hidden="true"></i></div><span class="erm-step-label">Procurement</span></li>
                <li><div class="erm-step-icon"><i class="fas fa-warehouse" aria-hidden="true"></i></div><span class="erm-step-label">Inventory</span></li>
                <li><div class="erm-step-icon"><i class="fas fa-industry" aria-hidden="true"></i></div><span class="erm-step-label">Production</span></li>
                <li><div class="erm-step-icon"><i class="fas fa-clipboard-check" aria-hidden="true"></i></div><span class="erm-step-label">Quality</span></li>
                <li><div class="erm-step-icon"><i class="fas fa-truck-fast" aria-hidden="true"></i></div><span class="erm-step-label">Dispatch</span></li>
                <li><div class="erm-step-icon"><i class="fas fa-file-invoice-dollar" aria-hidden="true"></i></div><span class="erm-step-label">Finance</span></li>
            </ol>
            <p class="erm-intro-text erm-reveal">Manage BOMs, Work Orders, Job Cards, Production Planning, Workstations, Material Requirements, Subcontracting, Batch &amp; Serial Tracking and Production Costs from one connected system.</p>
        </div>
    </section>

    <!-- Better Visibility. Better Control. -->
    <section class="erm-section">
        <div class="erm-container">
            <div class="section-header erm-reveal">
                <h2>Better Visibility. Better Control.</h2>
                <p>Get real-time visibility into material availability, production progress, WIP, quality, inventory and production costs—helping teams plan better, reduce manual tracking and respond faster to production issues.</p>
            </div>
        </div>
    </section>

    <!-- Take ERPNext Beyond the ERP -->
    <section class="erm-section erm-section-light">
        <div class="erm-container">
            <div class="section-header erm-reveal">
                <h2>Take ERPNext Beyond the ERP</h2>
                <p>EasyCloud can extend ERPNext to the factory floor with:</p>
            </div>
            <ul class="erm-cards erm-stagger" aria-label="Factory-floor extensions for ERPNext">
                <li><div class="erm-card"><div class="erm-card-icon" aria-hidden="true"><i class="fas fa-industry"></i></div><h3>Shop-floor applications</h3></div></li>
                <li><div class="erm-card"><div class="erm-card-icon" aria-hidden="true"><i class="fas fa-qrcode"></i></div><h3>Barcode &amp; QR solutions</h3></div></li>
                <li><div class="erm-card"><div class="erm-card-icon" aria-hidden="true"><i class="fas fa-route"></i></div><h3>Batch &amp; serial traceability</h3></div></li>
                <li><div class="erm-card"><div class="erm-card-icon" aria-hidden="true"><i class="fas fa-weight-scale"></i></div><h3>Scanner &amp; weighing-scale integration</h3></div></li>
                <li><div class="erm-card"><div class="erm-card-icon" aria-hidden="true"><i class="fas fa-microchip"></i></div><h3>Machine/PLC integrations</h3></div></li>
                <li><div class="erm-card"><div class="erm-card-icon" aria-hidden="true"><i class="fas fa-chart-line"></i></div><h3>Real-time dashboards</h3></div></li>
                <li><div class="erm-card"><div class="erm-card-icon" aria-hidden="true"><i class="fas fa-diagram-project"></i></div><h3>Custom workflows &amp; integrations</h3></div></li>
            </ul>
        </div>
    </section>

    <!-- Built for Different Manufacturing Environments -->
    <section class="erm-section">
        <div class="erm-container">
            <div class="section-header erm-reveal">
                <h2>Built for Different Manufacturing Environments</h2>
                <p>ERPNext can support discrete, process and make-to-order manufacturing, including businesses in engineering, food &amp; beverage, packaging, electrical products, plastics, metal fabrication and other industrial manufacturing sectors.</p>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="experience-section erm-final-cta">
        <div class="experience-container">
            <h2>Planning to modernize your manufacturing operations?</h2>
            <a href="contact.php" class="experience-btn">Talk to an EasyCloud ERP Consultant <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
        </div>
    </section>

    <script>
    (function () {
        if (!('IntersectionObserver' in window) ||
            window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            return;
        }
        var targets = document.querySelectorAll('.erm-reveal, .erm-stagger');
        document.documentElement.classList.add('erm-anim');
        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (!entry.isIntersecting) return;
                var el = entry.target;
                el.classList.add('erm-visible');
                if (el.classList.contains('erm-stagger')) {
                    // hand the items back to their own hover styles once they are in
                    setTimeout(function () { el.classList.remove('erm-stagger', 'erm-visible'); }, 1400);
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
