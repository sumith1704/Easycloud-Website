<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Served at a nested clean URL, so resolve relative links from the site root -->
    <base href="/">

    <!-- Primary Meta Tags -->
    <title>ERPNext for Distribution &amp; Wholesale | EasyCloud</title>
    <meta name="title" content="ERPNext for Distribution &amp; Wholesale | EasyCloud">
    <!-- REPLACED 2026-10-12 (too long): <meta name="description" content="EasyCloud implements and extends ERPNext for distributors and wholesalers: multi-warehouse inventory, purchasing, sales orders, pricing, fulfilment and accounting in one connected ERP system."> -->
    <meta name="description" content="EasyCloud implements and extends ERPNext for distributors and wholesalers: multi-warehouse inventory, purchasing, sales orders, pricing and accounting.">
    <!-- 2026-10-12 SEO: Primary keyword theme: ERPNext for distribution / wholesale distribution ERP
         Secondary themes: multi-warehouse inventory management, purchasing and replenishment, sales order management,
         batch and serial tracking, dealer and distributor portals, ERPNext implementation partner -->
    <meta name="keywords" content="ERPNext for distribution, wholesale distribution ERP, ERPNext wholesale, multi-warehouse inventory management, distribution ERP software, ERPNext implementation partner, batch and serial tracking, dealer and distributor portal">
    <meta name="author" content="EasyCloud">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://easycloudsoftware.com/erpnext/distribution">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://easycloudsoftware.com/erpnext/distribution">
    <meta property="og:title" content="ERPNext for Distribution &amp; Wholesale | EasyCloud">
    <!-- REPLACED 2026-10-12: <meta property="og:description" content="EasyCloud implements and extends ERPNext for distributors and wholesalers: multi-warehouse inventory, purchasing, sales orders, pricing, fulfilment and accounting in one connected ERP system."> -->
    <meta property="og:description" content="EasyCloud implements and extends ERPNext for distributors and wholesalers: multi-warehouse inventory, purchasing, sales orders, pricing and accounting.">

    <!-- Structured data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "name": "ERPNext for Distribution & Wholesale",
      "serviceType": "ERPNext implementation for distribution and wholesale",
      "description": "Connect your entire distribution operation, from procurement to delivery, with ERPNext implemented and extended by EasyCloud.",
      "url": "https://easycloudsoftware.com/erpnext/distribution",
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
          "name": "Distribution",
          "item": "https://easycloudsoftware.com/erpnext/distribution"
        }
      ]
    }
    </script>

    <link rel="icon" type="image/png" href="images/E.png">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
<style>
/* ERPNext for Distribution page (same design system as the /erpnext page)
   footer.php re-loads styles.css after this block, so rules that override
   site classes are scoped with an extra page class to keep higher specificity. */

/* ===== Hero ===== */
.bc-hero.erd-hero {
  padding: 7rem 0 6rem;
  color: #fff;
}
.erd-hero .domain-hero-content h1 {
  color: #fff;
  margin-bottom: 1.25rem;
}
.erd-hero .domain-hero-content p {
  max-width: 70ch;
  margin: 0 auto 1.25rem;
}

/* ===== Shared section layout ===== */
.erd-section {
  padding: 5rem 0;
  background-color: #fff;
}
.erd-section.erd-section-light {
  background-color: #f8f9fa;
}
.erd-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 2rem;
}
.erd-section .section-header {
  margin-bottom: 3rem;
}
.erd-section .section-header h2 {
  color: #0B1B35;
  font-weight: 700;
}
.erd-section .section-header p {
  max-width: 850px;
}
.erd-section .section-header p + p {
  margin-top: 1rem;
}
.erd-closing-text {
  text-align: center;
  font-size: 1.3rem;
  font-weight: 600;
  color: #1a2b4e;
  max-width: 850px;
  margin: 3rem auto 0;
}

/* ===== Icon cards (operations and extensions) ===== */
.erd-ind-cards {
  list-style: none;
  display: grid;
  grid-template-columns: repeat(3, minmax(0, 1fr));
  gap: 1.75rem;
  max-width: 1100px;
  margin: 0 auto;
  padding: 0;
}
.erd-ind-card {
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
.erd-ind-card img {
  display: block;
  width: 100%;
  aspect-ratio: 16 / 9;
  height: auto;
  border-radius: 14px;
  object-fit: cover;
}
.erd-ind-placeholder {
  width: 100%;
  aspect-ratio: 16 / 9;
  height: auto;
  border-radius: 14px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(135deg, #1a4b7c 0%, #0d2b4d 100%);
  color: rgba(255, 255, 255, 0.85);
  font-size: 3rem;
}
.erd-ind-card h3 {
  margin: 1.25rem 0 0;
  color: #1a2b4e;
  font-size: 1.35rem;
  font-weight: 700;
  line-height: 1.3;
}
.erd-ind-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
}

/* five across for the ten operations, four across for the eight extensions */
.erd-ind-cards.erd-cols-5 {
  grid-template-columns: repeat(5, minmax(0, 1fr));
  gap: 1.25rem;
  max-width: 1200px;
}
.erd-ind-cards.erd-cols-4 {
  grid-template-columns: repeat(4, minmax(0, 1fr));
}
.erd-cols-5 .erd-ind-card {
  padding: 1.1rem;
}
.erd-cols-5 .erd-ind-placeholder {
  font-size: 2.4rem;
}
.erd-cols-5 .erd-ind-card h3 {
  font-size: 1.1rem;
  margin-top: 1rem;
}
.erd-section:not(.erd-section-light) .erd-ind-card {
  background: #fff;
  box-shadow: 0 6px 24px rgba(0, 0, 0, 0.09);
}

/* ===== Distribution flow (connected step chain) ===== */
.erd-flow {
  list-style: none;
  padding: 0;
  margin: 0 auto;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  row-gap: 1.25rem;
}
.erd-flow li {
  display: flex;
  align-items: center;
}
.erd-flow .erd-step {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 0.6rem;
  width: 124px;
  padding: 1.1rem 0.5rem;
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
  text-align: center;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.erd-flow .erd-step-icon {
  width: 52px;
  height: 52px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(135deg, #1a4b7c 0%, #0d2b4d 100%);
  color: #fff;
  font-size: 1.2rem;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.erd-flow .erd-step span {
  font-size: 0.95rem;
  font-weight: 600;
  color: #0B1B35;
  line-height: 1.25;
}
.erd-flow li:not(:last-child)::after {
  content: "\f061";
  font-family: "Font Awesome 6 Free";
  font-weight: 900;
  color: #00A0E3;
  font-size: 1rem;
  margin: 0 0.75rem;
}
.erd-flow .erd-step:hover {
  transform: translateY(-5px);
  box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
}
.erd-flow .erd-step:hover .erd-step-icon {
  transform: scale(1.1);
  box-shadow: 0 0 0 6px rgba(0, 160, 227, 0.15);
}
.erd-flow-text {
  text-align: center;
  font-size: 1.15rem;
  line-height: 1.7;
  color: #444;
  max-width: 850px;
  margin: 2.75rem auto 0;
}

/* ===== Text sections ===== */
.erd-text-section .section-header {
  margin-bottom: 0;
}
.erd-text-section .section-header p {
  font-size: 1.15rem;
  line-height: 1.7;
}

/* ===== 2026-10-12: hero image size + centred full-width section images ===== */
/* hero: text on the left, image stretched to fill the whole right half of the hero (edge to edge, full height) */
.bc-hero.erd-hero {
  padding: 0;
  gap: 0;
  align-items: stretch;
  overflow: hidden;
}
.erd-hero .domain-hero-container {
  flex: 1 1 50%;
  min-width: 0;
  max-width: none;
  padding: 7rem 2rem 6rem;
  display: flex;
  align-items: center;
  justify-content: center;
}
.erd-hero .erd-hero-img {
  flex: 0 0 50%;
  width: 50%;
  max-width: none;
  height: auto;
  align-self: stretch;
  object-fit: cover;
  object-position: 80% center;
  border-radius: 0;
  margin: 0;
  display: block;
  box-shadow: none;
}
.erd-text-section .erd-text-img {
  display: block;
  width: 100%;
  max-width: 100%;
  height: auto;
  aspect-ratio: 16 / 9;
  object-fit: cover;
  border-radius: 16px;
  margin: 2rem auto 2rem;
  box-shadow: 0 10px 30px rgba(11, 27, 53, 0.08);
}
@media (max-width: 900px) {
  .bc-hero.erd-hero {
    flex-direction: column;
  }
  .erd-hero .domain-hero-container {
    flex: none;
    padding: 5rem 1.25rem 3rem;
  }
  .erd-hero .erd-hero-img {
    flex: none;
    align-self: auto;
    width: 100%;
    height: 260px;
  }
  .erd-text-section .erd-text-img {
    aspect-ratio: 4 / 3;
    margin: 1.5rem auto;
  }
}

/* ===== Final CTA ===== */
.erd-final-cta a:focus-visible {
  outline: 2px solid #fff;
  outline-offset: 3px;
}
.erd-final-buttons {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 1rem;
}

/* ===== Responsive ===== */
@media (max-width: 1100px) {
  .erd-ind-cards.erd-cols-5,
  .erd-ind-cards.erd-cols-4 {
    grid-template-columns: repeat(3, minmax(0, 1fr));
  }
}
@media (max-width: 768px) {
  .bc-hero.erd-hero {
    padding: 0; /* 2026-10-12: hero padding now lives on the text container so the image can fill edge to edge */
  }
  .erd-section {
    padding: 4rem 0;
  }
  .erd-container {
    padding: 0 1.25rem;
  }
  .erd-section .section-header h2 {
    font-size: 2rem;
  }
  .erd-ind-cards.erd-cols-5,
  .erd-ind-cards.erd-cols-4 {
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 1rem;
  }
  .erd-cols-5 .erd-ind-card,
  .erd-cols-4 .erd-ind-card {
    padding: 0.9rem;
    border-radius: 16px;
  }
  .erd-cols-5 .erd-ind-placeholder,
  .erd-cols-4 .erd-ind-placeholder {
    font-size: 2rem;
    border-radius: 12px;
  }
  .erd-cols-5 .erd-ind-card h3,
  .erd-cols-4 .erd-ind-card h3 {
    font-size: 1rem;
    margin-top: 0.85rem;
  }
  /* the flow becomes a vertical sequence */
  .erd-flow {
    flex-direction: column;
    row-gap: 0;
  }
  .erd-flow li {
    flex-direction: column;
  }
  .erd-flow li:not(:last-child)::after {
    content: "\f063";
    margin: 0.5rem 0;
  }
  .erd-flow .erd-step {
    width: 220px;
    flex-direction: row;
    justify-content: flex-start;
    padding: 0.75rem 1rem;
    gap: 1rem;
    text-align: left;
  }
  .erd-flow .erd-step-icon {
    width: 42px;
    height: 42px;
    font-size: 1rem;
    flex-shrink: 0;
  }
}

/* Scroll-in animation (only when JS has marked the page ready) */
.erd-anim .erd-reveal {
  opacity: 0;
  transform: translateY(30px);
  transition: opacity 0.7s ease, transform 0.7s ease;
}
.erd-anim .erd-reveal.erd-visible {
  opacity: 1;
  transform: none;
}
/* items inside a revealed group come in one after another */
.erd-anim .erd-stagger > * {
  opacity: 0;
  transition: opacity 0.5s ease;
}
.erd-anim .erd-stagger.erd-visible > * {
  opacity: 1;
}
.erd-anim .erd-stagger.erd-visible > *:nth-child(2) { transition-delay: 0.08s; }
.erd-anim .erd-stagger.erd-visible > *:nth-child(3) { transition-delay: 0.16s; }
.erd-anim .erd-stagger.erd-visible > *:nth-child(4) { transition-delay: 0.24s; }
.erd-anim .erd-stagger.erd-visible > *:nth-child(5) { transition-delay: 0.32s; }
.erd-anim .erd-stagger.erd-visible > *:nth-child(6) { transition-delay: 0.40s; }
.erd-anim .erd-stagger.erd-visible > *:nth-child(7) { transition-delay: 0.48s; }
.erd-anim .erd-stagger.erd-visible > *:nth-child(8) { transition-delay: 0.56s; }
.erd-anim .erd-stagger.erd-visible > *:nth-child(n+9) { transition-delay: 0.64s; }

@media (prefers-reduced-motion: reduce) {
  .erd-anim .erd-reveal,
  .erd-anim .erd-stagger > * {
    opacity: 1;
    transform: none;
    transition: none;
  }
  .erd-ind-card,
  .erd-flow .erd-step,
  .erd-flow .erd-step-icon {
    transition: none;
  }
  .erd-ind-card:hover,
  .erd-flow .erd-step:hover,
  .erd-flow .erd-step:hover .erd-step-icon {
    transform: none;
  }
}
/* ===== 2026-10-12: image-card text centred (cards with a photo on top) ===== */
.erd-ind-card,
.erd-ind-card h3 {
  text-align: center;
}
</style>

</head>
<body>

    <?php include 'nav_bar.php'; ?>

    <main id="main-content">

    <!-- Hero Section -->
    <section class="domain-hero bfsi-hero bc-hero erd-hero">
        <div class="domain-hero-container">
            <div class="domain-hero-content">
                <div class="domain-icon">
                    <i class="fas fa-truck-ramp-box" aria-hidden="true"></i>
                    <span>ERPNext</span>
                </div>
                <h1>ERPNext for Distribution &amp; Wholesale</h1>
                <p>Connect your entire distribution operation—from procurement to delivery.</p>
            </div>
        </div>
        <!-- 2026-10-12: hero image resized (was full-size, flowed over 1.5 screens)
        <img src="images/erpnext-distribution-hero.webp" alt="Modern distribution warehouse with pallet racking and forklifts managed with ERPNext" style="width: 100%; height: auto; display: block;" width="1920" height="1080" loading="lazy" decoding="async">
        -->
        <img class="erd-hero-img" src="images/erpnext-distribution-hero.webp" alt="Modern distribution warehouse with pallet racking and forklifts managed with ERPNext" width="1920" height="1080" loading="lazy" decoding="async">
    </section>

    <!-- Distribution flow -->
    <section class="erd-section erd-section-light">
        <div class="erd-container">
            <ol class="erd-flow erd-stagger" aria-label="Distribution flow in ERPNext">
                <li><div class="erd-step"><div class="erd-step-icon"><i class="fas fa-cart-shopping" aria-hidden="true"></i></div><span>Procurement</span></div></li>
                <li><div class="erd-step"><div class="erd-step-icon"><i class="fas fa-boxes-stacked" aria-hidden="true"></i></div><span>Inventory</span></div></li>
                <li><div class="erd-step"><div class="erd-step-icon"><i class="fas fa-warehouse" aria-hidden="true"></i></div><span>Warehousing</span></div></li>
                <li><div class="erd-step"><div class="erd-step-icon"><i class="fas fa-handshake" aria-hidden="true"></i></div><span>Sales</span></div></li>
                <li><div class="erd-step"><div class="erd-step-icon"><i class="fas fa-box-open" aria-hidden="true"></i></div><span>Fulfilment</span></div></li>
                <li><div class="erd-step"><div class="erd-step-icon"><i class="fas fa-truck" aria-hidden="true"></i></div><span>Dispatch</span></div></li>
                <li><div class="erd-step"><div class="erd-step-icon"><i class="fas fa-file-invoice-dollar" aria-hidden="true"></i></div><span>Finance</span></div></li>
            </ol>
            <p class="erd-flow-text erd-reveal">Manage purchasing, multi-warehouse inventory, sales orders, pricing, stock transfers, batch &amp; serial tracking, customer credit, fulfilment and accounting through one connected ERP system.</p>
        </div>
    </section>

    <!-- Better Inventory Visibility. Better Control. -->
    <section class="erd-section erd-text-section">
        <div class="erd-container">
            <div class="section-header erd-reveal">
                <h2>Better Inventory Visibility. Better Control.</h2>
                <!-- 2026-10-12: image centred and widened to the content frame (was left aligned, max 600px)
                <img src="images/inventory-visibility-warehouse.webp" alt="Inventory controller doing a cycle count with a scanner for real-time stock visibility" style="width: 100%; max-width: 600px; height: auto; border-radius: 16px; display: block; margin: 0 0 1.5rem;" width="1200" height="900" loading="lazy" decoding="async">
                -->
                <img class="erd-text-img" src="images/inventory-visibility-warehouse.webp" alt="Inventory controller doing a cycle count with a scanner for real-time stock visibility" width="1200" height="900" loading="lazy" decoding="async">
                <p>Get real-time visibility across warehouses, branches and locations. Know what is available, what has been committed, what needs replenishment and what is moving—helping teams make faster purchasing, sales and fulfilment decisions.</p>
            </div>
        </div>
    </section>

    <!-- Manage Complex Distribution Operations -->
    <section class="erd-section erd-section-light">
        <div class="erd-container">
            <div class="section-header erd-reveal">
                <h2>Manage Complex Distribution Operations</h2>
                <p>ERPNext can support growing distributors and wholesalers with:</p>
            </div>
            <ul class="erd-ind-cards erd-cols-5 erd-stagger" aria-label="Distribution operations supported by ERPNext">
                <li>
                    <div class="erd-ind-card">
                        <!-- REPLACED 2026-10-09: <div class="erd-ind-placeholder" aria-hidden="true"><i class="fas fa-warehouse"></i></div> -->
                        <img src="images/multi-warehouse-inventory.webp" alt="Warehouse manager checking multi-warehouse inventory levels in a large distribution center" width="800" height="450" loading="lazy" decoding="async">
                        <h3>Multi-Warehouse Inventory</h3>
                    </div>
                </li>
                <li>
                    <div class="erd-ind-card">
                        <!-- REPLACED 2026-10-09: <div class="erd-ind-placeholder" aria-hidden="true"><i class="fas fa-cart-flatbed"></i></div> -->
                        <img src="images/purchasing-replenishment.webp" alt="Purchasing coordinator verifying an inbound stock replenishment delivery at a warehouse dock" width="800" height="450" loading="lazy" decoding="async">
                        <h3>Purchasing &amp; Replenishment</h3>
                    </div>
                </li>
                <li>
                    <div class="erd-ind-card">
                        <!-- REPLACED 2026-10-09: <div class="erd-ind-placeholder" aria-hidden="true"><i class="fas fa-file-signature"></i></div> -->
                        <img src="images/sales-order-management.webp" alt="Sales coordinator processing customer orders in a distribution company's order management system" width="800" height="450" loading="lazy" decoding="async">
                        <h3>Sales Order Management</h3>
                    </div>
                </li>
                <li>
                    <div class="erd-ind-card">
                        <!-- REPLACED 2026-10-09: <div class="erd-ind-placeholder" aria-hidden="true"><i class="fas fa-tags"></i></div> -->
                        <img src="images/multiple-price-lists.webp" alt="Pricing team comparing wholesale, retail and dealer price lists for a distribution business" width="800" height="450" loading="lazy" decoding="async">
                        <h3>Multiple Price Lists</h3>
                    </div>
                </li>
                <li>
                    <div class="erd-ind-card">
                        <!-- REPLACED 2026-10-09: <div class="erd-ind-placeholder" aria-hidden="true"><i class="fas fa-barcode"></i></div> -->
                        <img src="images/batch-serial-tracking.webp" alt="Warehouse associate scanning a carton barcode for batch and serial number traceability" width="800" height="450" loading="lazy" decoding="async">
                        <h3>Batch &amp; Serial Tracking</h3>
                    </div>
                </li>
                <li>
                    <div class="erd-ind-card">
                        <!-- REPLACED 2026-10-09: <div class="erd-ind-placeholder" aria-hidden="true"><i class="fas fa-right-left"></i></div> -->
                        <img src="images/stock-transfers.webp" alt="Pallets being loaded onto a truck for an inter-warehouse stock transfer" width="800" height="450" loading="lazy" decoding="async">
                        <h3>Stock Transfers</h3>
                    </div>
                </li>
                <li>
                    <div class="erd-ind-card">
                        <!-- REPLACED 2026-10-09: <div class="erd-ind-placeholder" aria-hidden="true"><i class="fas fa-credit-card"></i></div> -->
                        <img src="images/customer-credit-control.webp" alt="Accounts receivable manager reviewing customer credit limits and outstanding balances" width="800" height="450" loading="lazy" decoding="async">
                        <h3>Customer Credit Control</h3>
                    </div>
                </li>
                <li>
                    <div class="erd-ind-card">
                        <!-- REPLACED 2026-10-09: <div class="erd-ind-placeholder" aria-hidden="true"><i class="fas fa-rotate-left"></i></div> -->
                        <img src="images/returns-management.webp" alt="Warehouse worker inspecting and scanning customer returns at a returns processing station" width="800" height="450" loading="lazy" decoding="async">
                        <h3>Returns</h3>
                    </div>
                </li>
                <li>
                    <div class="erd-ind-card">
                        <!-- REPLACED 2026-10-09: <div class="erd-ind-placeholder" aria-hidden="true"><i class="fas fa-truck-fast"></i></div> -->
                        <img src="images/dispatch-delivery.webp" alt="Driver completing a delivery with digital proof of delivery on a mobile phone" width="800" height="450" loading="lazy" decoding="async">
                        <h3>Dispatch &amp; Delivery</h3>
                    </div>
                </li>
                <li>
                    <div class="erd-ind-card">
                        <!-- REPLACED 2026-10-09: <div class="erd-ind-placeholder" aria-hidden="true"><i class="fas fa-building"></i></div> -->
                        <img src="images/multi-company-operations.webp" alt="Executives reviewing consolidated results across multiple companies in one ERP" width="800" height="450" loading="lazy" decoding="async">
                        <h3>Multi-Company Operations</h3>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- Extend ERPNext Beyond the ERP -->
    <section class="erd-section">
        <div class="erd-container">
            <div class="section-header erd-reveal">
                <h2>Extend ERPNext Beyond the ERP</h2>
                <p>EasyCloud can extend ERPNext around your distribution operations with:</p>
            </div>
            <ul class="erd-ind-cards erd-cols-4 erd-stagger" aria-label="EasyCloud extensions around ERPNext">
                <li>
                    <div class="erd-ind-card">
                        <!-- REPLACED 2026-10-09: <div class="erd-ind-placeholder" aria-hidden="true"><i class="fas fa-users"></i></div> -->
                        <img src="images/dealer-distributor-portal.webp" alt="Dealer checking orders and invoices in an online dealer and distributor portal" width="800" height="450" loading="lazy" decoding="async">
                        <h3>Dealer &amp; Distributor Portals</h3>
                    </div>
                </li>
                <li>
                    <div class="erd-ind-card">
                        <!-- REPLACED 2026-10-09: <div class="erd-ind-placeholder" aria-hidden="true"><i class="fas fa-mobile-screen-button"></i></div> -->
                        <img src="images/mobile-sales-app.webp" alt="Field sales rep taking a customer order on a mobile sales app inside a retail store" width="800" height="450" loading="lazy" decoding="async">
                        <h3>Mobile Sales Apps</h3>
                    </div>
                </li>
                <li>
                    <div class="erd-ind-card">
                        <!-- REPLACED 2026-10-09: <div class="erd-ind-placeholder" aria-hidden="true"><i class="fas fa-qrcode"></i></div> -->
                        <img src="images/barcode-qr-solutions.webp" alt="Worker scanning a QR code on a storage bin with a smartphone for accurate inventory" width="800" height="450" loading="lazy" decoding="async">
                        <h3>Barcode &amp; QR Solutions</h3>
                    </div>
                </li>
                <li>
                    <div class="erd-ind-card">
                        <!-- REPLACED 2026-10-09: <div class="erd-ind-placeholder" aria-hidden="true"><i class="fas fa-dolly"></i></div> -->
                        <img src="images/warehouse-applications.webp" alt="Warehouse picker following a tablet picking app to fulfill orders faster" width="800" height="450" loading="lazy" decoding="async">
                        <h3>Warehouse Applications</h3>
                    </div>
                </li>
                <li>
                    <div class="erd-ind-card">
                        <!-- REPLACED 2026-10-09: <div class="erd-ind-placeholder" aria-hidden="true"><i class="fas fa-expand"></i></div> -->
                        <img src="images/scanner-weighing-integration.webp" alt="Packing station with an integrated barcode scanner and weighing scale feeding the ERP" width="800" height="450" loading="lazy" decoding="async">
                        <h3>Scanner Integrations</h3>
                    </div>
                </li>
                <li>
                    <div class="erd-ind-card">
                        <!-- REPLACED 2026-10-09: <div class="erd-ind-placeholder" aria-hidden="true"><i class="fas fa-list-check"></i></div> -->
                        <img src="images/approval-workflows.webp" alt="Manager approving a purchase request on a smartphone through an ERP approval workflow" width="800" height="450" loading="lazy" decoding="async">
                        <h3>Approval Workflows</h3>
                    </div>
                </li>
                <li>
                    <div class="erd-ind-card">
                        <!-- REPLACED 2026-10-09: <div class="erd-ind-placeholder" aria-hidden="true"><i class="fas fa-chart-line"></i></div> -->
                        <img src="images/real-time-dashboards.webp" alt="Operations team monitoring real-time distribution dashboards on a wall of screens" width="800" height="450" loading="lazy" decoding="async">
                        <h3>Real-Time Dashboards</h3>
                    </div>
                </li>
                <li>
                    <div class="erd-ind-card">
                        <!-- REPLACED 2026-10-09: <div class="erd-ind-placeholder" aria-hidden="true"><i class="fas fa-plug"></i></div> -->
                        <img src="images/third-party-integrations.webp" alt="Coordinator syncing e-commerce, shipping and accounting systems with the ERP" width="800" height="450" loading="lazy" decoding="async">
                        <h3>Third-Party Integrations</h3>
                    </div>
                </li>
            </ul>
            <p class="erd-closing-text erd-reveal">Connect your sales teams, warehouses, dealers and management to the same flow of information—from order through fulfilment and payment.</p>
        </div>
    </section>

    <!-- Built for Growing Distribution Businesses -->
    <section class="erd-section erd-section-light erd-text-section">
        <div class="erd-container">
            <div class="section-header erd-reveal">
                <h2>Built for Growing Distribution Businesses</h2>
                <!-- 2026-10-12: image centred and widened to the content frame (was left aligned, max 600px)
                <img src="images/growing-distribution-business.webp" alt="Owner of a growing wholesale distribution business overseeing warehouse operations" style="width: 100%; max-width: 600px; height: auto; border-radius: 16px; display: block; margin: 0 0 1.5rem;" width="1200" height="900" loading="lazy" decoding="async">
                -->
                <img class="erd-text-img" src="images/growing-distribution-business.webp" alt="Owner of a growing wholesale distribution business overseeing warehouse operations" width="1200" height="900" loading="lazy" decoding="async">
                <p>Suitable for industrial distributors, electrical and engineering products, food &amp; beverage distribution, consumer products, building materials and other multi-location trading and distribution businesses.</p>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="experience-section erd-final-cta">
        <div class="experience-container">
            <h2 style="color: #ffffff;">Looking to bring greater visibility and control to your distribution operations?</h2>
            <div class="erd-final-buttons">
                <a href="contact.php" class="experience-btn">Talk to an EasyCloud ERP Consultant <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </section>

    <script>
    (function () {
        if (!('IntersectionObserver' in window) ||
            window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            return;
        }
        var targets = document.querySelectorAll('.erd-reveal, .erd-stagger');
        document.documentElement.classList.add('erd-anim');
        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (!entry.isIntersecting) return;
                var el = entry.target;
                el.classList.add('erd-visible');
                if (el.classList.contains('erd-stagger')) {
                    // hand the items back to their own hover styles once they are in
                    setTimeout(function () { el.classList.remove('erd-stagger', 'erd-visible'); }, 1400);
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
