<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Served at a nested clean URL, so resolve relative links from the site root -->
    <base href="/">

    <!-- Primary Meta Tags -->
    <title>Legacy ERP to Business Central Migration | EasyCloud</title>
    <meta name="title" content="Legacy ERP to Business Central Migration | EasyCloud">
    <meta name="description" content="Move from a legacy or on-premise ERP to Microsoft Dynamics 365 Business Central with EasyCloud, bringing finance, inventory and operations onto a modern cloud ERP.">
    <meta name="author" content="EasyCloud">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://easycloudsoftware.com/business-central/legacy-erp-migration">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://easycloudsoftware.com/business-central/legacy-erp-migration">
    <meta property="og:title" content="Legacy ERP to Business Central Migration | EasyCloud">
    <meta property="og:description" content="Move from a legacy or on-premise ERP to Microsoft Dynamics 365 Business Central with EasyCloud, bringing finance, inventory and operations onto a modern cloud ERP.">

    <!-- Structured data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "name": "Legacy ERP to Business Central Migration",
      "serviceType": "Legacy ERP to Microsoft Dynamics 365 Business Central migration",
      "description": "EasyCloud helps businesses move from legacy ERP systems to Microsoft Dynamics 365 Business Central, bringing finance, inventory, purchasing, manufacturing and operations onto a modern cloud ERP.",
      "url": "https://easycloudsoftware.com/business-central/legacy-erp-migration",
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
          "name": "Legacy ERP Migration",
          "item": "https://easycloudsoftware.com/business-central/legacy-erp-migration"
        }
      ]
    }
    </script>

    <link rel="icon" type="image/png" href="images/E.png">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
<style>
/* Legacy ERP to Business Central Migration page
   Follows the QuickBooks migration and manufacturing page patterns.
   footer.php re-loads styles.css after this block, so rules that override
   site classes are scoped with an extra page class to keep higher specificity. */

/* ===== Hero ===== */
.bc-hero.lem-hero {
  padding: 8rem 0 5rem;
  color: #fff;
}
.lem-hero .domain-hero-container {
  display: grid;
  grid-template-columns: minmax(0, 1fr) minmax(0, 1.05fr);
  gap: 3rem;
  align-items: center;
}
.lem-hero .domain-hero-content.lem-hero-content {
  text-align: left;
  max-width: none;
  margin: 0;
}
.lem-hero .domain-hero-content h1.lem-hero-title {
  font-size: 3rem;
  font-weight: 700;
  line-height: 1.2;
  color: #fff;
  margin: 0 0 1.25rem;
}
.lem-hero .domain-hero-content .lem-hero-subtitle {
  font-size: 1.3rem;
  font-weight: 600;
  color: #fff;
  max-width: none;
  margin: 0 0 1rem;
}
.lem-hero .domain-hero-content .lem-hero-text {
  font-size: 1.1rem;
  max-width: none;
  margin: 0 0 2rem;
}
.lem-hero .domain-hero-content a {
  text-decoration: none;
}

/* Hero visual: Legacy ERP -> Business Central */
.lem-hero-visual {
  display: grid;
  grid-template-columns: 150px 80px minmax(0, 1fr);
  align-items: center;
  padding: 2rem 1.5rem;
  border-radius: 16px;
  background: rgba(255, 255, 255, 0.05);
  border: 1px solid rgba(255, 255, 255, 0.12);
  box-shadow: 0 20px 50px rgba(0, 0, 0, 0.25);
}
.lem-hv-source,
.lem-hv-target {
  border-radius: 12px;
  text-align: center;
}
/* legacy side: on-premise server stack, muted */
.lem-hv-source {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 0.6rem;
  padding: 1.25rem 0.75rem;
  background: rgba(255, 255, 255, 0.04);
  border: 1px dashed rgba(255, 255, 255, 0.3);
}
.lem-hv-rack {
  width: 78px;
  display: flex;
  flex-direction: column;
  gap: 5px;
}
.lem-hv-rack span {
  display: flex;
  align-items: center;
  gap: 5px;
  height: 16px;
  padding: 0 7px;
  border-radius: 3px;
  background: rgba(255, 255, 255, 0.14);
}
.lem-hv-rack span::before {
  content: "";
  width: 5px;
  height: 5px;
  border-radius: 50%;
  background: #f0ad4e;
}
.lem-hv-rack span::after {
  content: "";
  flex: 1;
  height: 2px;
  background: rgba(255, 255, 255, 0.25);
}
.lem-hv-name {
  font-weight: 700;
  font-size: 1.05rem;
  line-height: 1.3;
  color: #fff;
}
.lem-hv-label {
  font-size: 0.82rem;
  color: rgba(255, 255, 255, 0.7);
}
.lem-hv-tags {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 0.3rem;
}
.lem-hv-tags span {
  font-size: 0.7rem;
  padding: 0.15rem 0.45rem;
  border-radius: 50px;
  background: rgba(255, 255, 255, 0.08);
  color: rgba(255, 255, 255, 0.7);
}
.lem-hv-pipe {
  position: relative;
  height: 64px;
  margin: 0 0.5rem;
}
.lem-hv-pipe::before {
  content: "";
  position: absolute;
  left: 0;
  right: 10px;
  top: 50%;
  border-top: 2px dashed rgba(0, 160, 227, 0.7);
}
.lem-hv-pipe::after {
  content: "\f054";
  font-family: "Font Awesome 6 Free";
  font-weight: 900;
  position: absolute;
  right: 0;
  top: 50%;
  transform: translateY(-50%);
  color: #00A0E3;
  font-size: 0.9rem;
}
.lem-hv-packet {
  position: absolute;
  top: 50%;
  left: 0;
  width: 28px;
  height: 28px;
  margin-top: -14px;
  border-radius: 8px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 0.75rem;
  color: #fff;
  background: #00A0E3;
  box-shadow: 0 4px 12px rgba(0, 160, 227, 0.45);
  opacity: 0;
}
/* cloud side */
.lem-hv-target {
  padding: 1.25rem;
  background: rgba(255, 255, 255, 0.08);
  border: 1px solid rgba(255, 255, 255, 0.18);
}
.lem-hv-target-head {
  display: flex;
  align-items: center;
  gap: 0.75rem;
  text-align: left;
  margin-bottom: 1rem;
}
.lem-hv-logo {
  width: 44px;
  height: 44px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  font-size: 1.2rem;
  color: #fff;
  background: #00A0E3;
}
.lem-hv-modules {
  list-style: none;
  margin: 0;
  padding: 0;
  display: grid;
  grid-template-columns: repeat(2, minmax(0, 1fr));
  gap: 0.5rem;
}
.lem-hv-modules li {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  padding: 0.55rem 0.7rem;
  border-radius: 8px;
  background: rgba(255, 255, 255, 0.07);
  border: 1px solid rgba(255, 255, 255, 0.1);
  min-width: 0;
  font-size: 0.85rem;
  font-weight: 500;
  color: #fff;
  text-align: left;
}
.lem-hv-modules li:last-child {
  grid-column: 1 / -1;
}
.lem-hv-modules i {
  color: #00A0E3;
  width: 1.1rem;
  text-align: center;
}

/* ===== Shared section layout ===== */
.lem-section {
  padding: 5rem 0;
  background-color: #fff;
}
.lem-section.lem-section-light {
  background-color: #f8f9fa;
}
.lem-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 2rem;
}
.lem-section .section-header {
  margin-bottom: 3rem;
}
.lem-section .section-header h2 {
  color: #0B1B35;
  font-weight: 700;
}
.lem-section .section-header p {
  max-width: 850px;
}

/* ===== Section 2: holding you back ===== */
.lem-pain-grid {
  display: grid;
  grid-template-columns: repeat(3, minmax(0, 1fr));
  gap: 1.5rem;
}
.lem-pain .feature-card.lem-pain-card {
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  padding: 2rem 1.5rem;
  border-radius: 12px;
  border-top: 4px solid #00A0E3;
}
.lem-pain-num {
  position: absolute;
  top: 1rem;
  right: 1rem;
  font-size: 0.85rem;
  font-weight: 700;
  color: rgba(26, 43, 78, 0.35);
}
.lem-pain .feature-card .feature-icon {
  width: 70px;
  height: 70px;
  margin-bottom: 1rem;
}
.lem-pain .feature-card .feature-icon i {
  font-size: 1.7rem;
  margin: 0;
}
.lem-pain .feature-card h3 {
  font-size: 1.15rem;
  line-height: 1.35;
  margin-bottom: 0.5rem;
}
.lem-pain .feature-card p {
  font-size: 0.98rem;
  color: #666;
  line-height: 1.5;
  margin: 0;
}

/* Section 2 visual: Move to a Connected Cloud ERP */
.lem-connect {
  max-width: 900px;
  margin: 3.5rem auto 0;
  padding: 2.5rem 2rem;
  background: #fff;
  border-radius: 16px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
  text-align: center;
}
.lem-connect-title {
  font-size: 1.5rem;
  font-weight: 700;
  color: #0B1B35;
  margin: 0 0 1.75rem;
}
.lem-system {
  border-radius: 12px;
  padding: 1.25rem 1.5rem;
}
.lem-system-from {
  display: inline-flex;
  align-items: center;
  gap: 0.75rem;
  background: #f8f9fa;
  border: 1px dashed #c5cdd8;
  color: #1a2b4e;
}
.lem-system-from i {
  color: #8a96a8;
  font-size: 1.2rem;
}
.lem-system-to {
  background: linear-gradient(135deg, #1a2b4e 0%, #1e3c72 100%);
  color: #fff;
}
.lem-system-name {
  display: block;
  font-weight: 700;
  font-size: 1.15rem;
  line-height: 1.3;
}
.lem-system-to .lem-system-name {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 0.6rem;
}
.lem-system-to .lem-system-name i {
  color: #00A0E3;
}
.lem-down {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 42px;
  height: 42px;
  margin: 0.9rem auto;
  border-radius: 50%;
  background: rgba(0, 160, 227, 0.12);
  color: #00A0E3;
}
.lem-modules {
  list-style: none;
  margin: 1.1rem 0 0;
  padding: 0;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 0.5rem;
}
.lem-modules li {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  padding: 0.5rem 0.9rem;
  border-radius: 50px;
  background: rgba(255, 255, 255, 0.1);
  border: 1px solid rgba(0, 160, 227, 0.5);
  font-size: 0.92rem;
  font-weight: 600;
}
.lem-modules i {
  color: #00A0E3;
}

/* ===== Section 3: migrate with confidence ===== */
.lem-approach-title {
  text-align: center;
  font-size: 1.75rem;
  font-weight: 700;
  color: #0B1B35;
  margin: 0 0 2.5rem;
}
/* dominant six-step graphic */
.lem-flow {
  position: relative;
  list-style: none;
  margin: 0;
  padding: 0;
  display: grid;
  grid-template-columns: repeat(6, minmax(0, 1fr));
  gap: 1.25rem;
}
/* connecting track behind the step icons; fills in when revealed */
.lem-flow::before,
.lem-flow::after {
  content: "";
  position: absolute;
  top: 74px;
  left: calc(100% / 12);
  right: calc(100% / 12);
  height: 4px;
  border-radius: 4px;
}
.lem-flow::before {
  background: #e3e8ef;
}
.lem-flow::after {
  background: linear-gradient(90deg, #00A0E3 0%, #1e3c72 100%);
  transform-origin: left center;
  transform: scaleX(1);
}
.lem-flow > li {
  position: relative;
  z-index: 1;
  display: flex;
}
.lem-step {
  flex: 1;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 0.9rem;
  padding: 2rem 0.75rem 1.75rem;
  background: #fff;
  border-radius: 14px;
  border-bottom: 4px solid #00A0E3;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
  text-align: center;
}
.lem-step-icon {
  position: relative;
  width: 84px;
  height: 84px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(135deg, #00A0E3 0%, #0088c7 100%);
  color: #fff;
  font-size: 1.9rem;
  box-shadow: 0 0 0 6px #fff;
}
.lem-step-num {
  position: absolute;
  top: -6px;
  right: -8px;
  width: 26px;
  height: 26px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #1a2b4e;
  color: #fff;
  font-size: 0.75rem;
  font-weight: 700;
  border: 2px solid #fff;
}
.lem-step-name {
  font-size: 1.25rem;
  font-weight: 700;
  color: #0B1B35;
}
.lem-approach-caption {
  max-width: 850px;
  margin: 2.5rem auto 0;
  text-align: center;
  font-size: 1.1rem;
  color: #555;
  line-height: 1.6;
}

/* closing CTA directly after the graphic */
.lem-cta-panel {
  margin: 3rem auto 0;
  padding: 3rem 2rem;
  border-radius: 16px;
  background: linear-gradient(135deg, #1a2b4e 0%, #1e3c72 100%);
  color: #fff;
  text-align: center;
}
.lem-cta-panel h2 {
  color: #fff;
  font-weight: 700;
  margin: 0 0 1rem;
}
.lem-cta-panel p {
  max-width: 700px;
  margin: 0 auto 2rem;
  font-size: 1.1rem;
  color: rgba(255, 255, 255, 0.9);
}
.lem-section a.lem-cta-btn,
.lem-section a.lem-cta-btn:hover {
  color: #fff;
  text-decoration: none;
}
.lem-cta-btn {
  display: inline-flex;
  align-items: center;
  gap: 0.6rem;
  padding: 1rem 2.5rem;
  font-size: 1.05rem;
  font-weight: 600;
  letter-spacing: 0.02em;
  background: #00a0e3;
  border-radius: 8px;
  transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
}
.lem-cta-btn:hover {
  background: #0088c7;
  transform: translateY(-3px);
  box-shadow: 0 10px 25px rgba(0, 160, 227, 0.35);
}
.lem-cta-btn i {
  transition: transform 0.3s ease;
}
.lem-cta-btn:hover i {
  transform: translateX(4px);
}

/* ===== Responsive ===== */
@media (max-width: 1200px) {
  .lem-flow {
    grid-template-columns: repeat(3, minmax(0, 1fr));
    row-gap: 1.5rem;
  }
  .lem-flow::before,
  .lem-flow::after {
    display: none;
  }
}
@media (max-width: 992px) {
  .lem-hero .domain-hero-container {
    grid-template-columns: 1fr;
  }
  .lem-hero .domain-hero-content.lem-hero-content {
    text-align: center;
  }
  .lem-hero-visual {
    max-width: 620px;
    width: 100%;
    margin: 0 auto;
  }
  .lem-pain-grid {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }
}
@media (max-width: 768px) {
  .bc-hero.lem-hero {
    padding: 6rem 0 4rem;
  }
  .lem-hero .domain-hero-content h1.lem-hero-title {
    font-size: 2.2rem;
  }
  .lem-section {
    padding: 4rem 0;
  }
  .lem-section .section-header h2,
  .lem-cta-panel h2 {
    font-size: 2rem;
  }
  /* hero visual stacks top to bottom */
  .lem-hero-visual {
    grid-template-columns: 1fr;
    justify-items: center;
    padding: 1.5rem 1.25rem;
  }
  .lem-hv-source {
    width: 200px;
  }
  .lem-hv-pipe {
    width: 64px;
    height: 90px;
    margin: 0.5rem 0;
  }
  .lem-hv-pipe::before {
    left: 50%;
    right: auto;
    top: 0;
    bottom: 10px;
    border-top: 0;
    border-left: 2px dashed rgba(0, 160, 227, 0.7);
  }
  .lem-hv-pipe::after {
    content: "\f078";
    right: auto;
    left: 50%;
    top: auto;
    bottom: -4px;
    transform: translateX(-50%);
  }
  .lem-hv-packet {
    top: 0;
    left: 50%;
    margin-top: 0;
    margin-left: -14px;
  }
  .lem-hv-target {
    width: 100%;
  }
  .lem-connect {
    padding: 2rem 1.25rem;
  }
  /* six steps become a vertical sequence */
  .lem-flow {
    grid-template-columns: 1fr;
    max-width: 420px;
    margin: 0 auto;
    row-gap: 2.25rem;
  }
  .lem-flow > li:not(:last-child)::after {
    content: "\f063";
    font-family: "Font Awesome 6 Free";
    font-weight: 900;
    position: absolute;
    left: 0;
    bottom: -2.25rem;
    width: 100%;
    height: 2.25rem;
    line-height: 2.25rem;
    text-align: center;
    color: #00A0E3;
  }
  .lem-step {
    flex-direction: row;
    justify-content: flex-start;
    gap: 1.25rem;
    padding: 1rem 1.25rem;
    text-align: left;
  }
  .lem-step-icon {
    width: 56px;
    height: 56px;
    font-size: 1.3rem;
    flex-shrink: 0;
  }
  .lem-cta-panel {
    padding: 2.5rem 1.25rem;
  }
}
@media (max-width: 600px) {
  .lem-pain-grid,
  .lem-hv-modules {
    grid-template-columns: 1fr;
  }
  .lem-cta-btn {
    padding: 1rem 1.5rem;
    font-size: 0.95rem;
  }
}

/* ===== Hover effects ===== */
.lem-pain .feature-card.lem-pain-card,
.lem-connect,
.lem-step {
  transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
}
.lem-pain .feature-card.lem-pain-card:hover,
.lem-connect:hover {
  transform: translateY(-6px);
  box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
}
.lem-pain .feature-card.lem-pain-card:hover {
  border-top-color: #1a2b4e;
}
.lem-pain .feature-card .feature-icon,
.lem-pain-num,
.lem-down,
.lem-step-icon {
  transition: transform 0.3s ease, color 0.3s ease, box-shadow 0.3s ease;
}
.lem-pain .feature-card:hover .feature-icon {
  transform: scale(1.1);
}
.lem-pain .feature-card:hover .lem-pain-num {
  color: #00A0E3;
  transform: scale(1.15);
}
.lem-connect:hover .lem-down {
  transform: translateY(4px);
}
.lem-step:hover {
  transform: translateY(-8px);
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
  border-bottom-color: #1a2b4e;
}
.lem-step:hover .lem-step-icon {
  transform: scale(1.1);
  box-shadow: 0 0 0 6px #fff, 0 0 0 12px rgba(0, 160, 227, 0.18);
}
.lem-modules li,
.lem-hv-modules li {
  transition: background-color 0.3s ease, color 0.3s ease, transform 0.3s ease;
}
.lem-modules li:hover,
.lem-hv-modules li:hover {
  background: #00A0E3;
  color: #fff;
  transform: translateY(-2px);
}
.lem-modules li:hover i,
.lem-hv-modules li:hover i {
  color: #fff;
}

/* ===== Animations ===== */
/* hero: data packets travel from the legacy ERP into Business Central */
@keyframes lem-flow-x {
  0%   { left: 0;                   opacity: 0; }
  15%  { opacity: 1; }
  80%  { opacity: 1; }
  100% { left: calc(100% - 28px);   opacity: 0; }
}
@keyframes lem-flow-y {
  0%   { top: 0;                    opacity: 0; }
  15%  { opacity: 1; }
  80%  { opacity: 1; }
  100% { top: calc(100% - 28px);    opacity: 0; }
}
@keyframes lem-module-glow {
  0%, 70%, 100% { border-color: rgba(255, 255, 255, 0.1); background: rgba(255, 255, 255, 0.07); }
  80%           { border-color: rgba(0, 160, 227, 0.8);   background: rgba(0, 160, 227, 0.25); }
}
@keyframes lem-blink {
  0%, 100% { opacity: 1; }
  50%      { opacity: 0.25; }
}
.lem-hv-packet {
  animation: lem-flow-x 3.6s linear infinite;
}
.lem-hv-packet:nth-child(2) { animation-delay: 0.9s; }
.lem-hv-packet:nth-child(3) { animation-delay: 1.8s; }
.lem-hv-packet:nth-child(4) { animation-delay: 2.7s; }
.lem-hv-modules li {
  animation: lem-module-glow 4.5s ease-in-out infinite;
}
.lem-hv-modules li:nth-child(2) { animation-delay: 0.9s; }
.lem-hv-modules li:nth-child(3) { animation-delay: 1.8s; }
.lem-hv-modules li:nth-child(4) { animation-delay: 2.7s; }
.lem-hv-modules li:nth-child(5) { animation-delay: 3.6s; }
.lem-hv-modules li:hover {
  animation: none;
}
.lem-hv-rack span::before {
  animation: lem-blink 1.6s ease-in-out infinite;
}
.lem-hv-rack span:nth-child(2)::before { animation-delay: 0.5s; }
.lem-hv-rack span:nth-child(3)::before { animation-delay: 1s; }
@media (max-width: 768px) {
  .lem-hv-packet {
    animation-name: lem-flow-y;
  }
}

/* Scroll-in animation (only when JS has marked the page ready) */
.lem-anim .lem-reveal {
  opacity: 0;
  transform: translateY(30px);
  transition: opacity 0.7s ease, transform 0.7s ease;
}
.lem-anim .lem-reveal.lem-visible {
  opacity: 1;
  transform: none;
}
/* cards inside a revealed group come in one after another */
.lem-anim .lem-stagger > * {
  opacity: 0;
  transform: translateY(20px);
  transition: opacity 0.5s ease, transform 0.5s ease;
}
.lem-anim .lem-stagger.lem-visible > * {
  opacity: 1;
  transform: none;
}
.lem-anim .lem-stagger.lem-visible > *:nth-child(2) { transition-delay: 0.12s; }
.lem-anim .lem-stagger.lem-visible > *:nth-child(3) { transition-delay: 0.24s; }
.lem-anim .lem-stagger.lem-visible > *:nth-child(4) { transition-delay: 0.36s; }
.lem-anim .lem-stagger.lem-visible > *:nth-child(5) { transition-delay: 0.48s; }
.lem-anim .lem-stagger.lem-visible > *:nth-child(n+6) { transition-delay: 0.6s; }
/* the six-step track draws left to right as the steps appear */
.lem-anim .lem-flow::after {
  transform: scaleX(0);
  transition: transform 1.2s ease 0.2s;
}
.lem-anim .lem-flow.lem-visible::after,
.lem-anim .lem-flow.lem-done::after {
  transform: scaleX(1);
}

@media (prefers-reduced-motion: reduce) {
  .lem-anim .lem-reveal,
  .lem-anim .lem-stagger > *,
  .lem-anim .lem-flow::after {
    opacity: 1;
    transform: none;
    transition: none;
  }
  .lem-hv-packet {
    animation: none;
    display: none;
  }
  .lem-hv-modules li,
  .lem-hv-rack span::before {
    animation: none;
  }
  .lem-pain .feature-card.lem-pain-card,
  .lem-connect,
  .lem-step,
  .lem-modules li,
  .lem-hv-modules li,
  .lem-cta-btn,
  .lem-cta-btn i {
    transition: none;
  }
  .lem-pain .feature-card.lem-pain-card:hover,
  .lem-connect:hover,
  .lem-step:hover,
  .lem-modules li:hover,
  .lem-hv-modules li:hover,
  .lem-cta-btn:hover,
  .lem-cta-btn:hover i,
  .lem-pain .feature-card:hover .feature-icon,
  .lem-pain .feature-card:hover .lem-pain-num,
  .lem-connect:hover .lem-down,
  .lem-step:hover .lem-step-icon {
    transform: none;
  }
}

/* ===== Audit fixes 2026-10-01 ===== */
/* Hero CTA is a single link (one tab stop); label meets WCAG AA on the blue button */
.domain-hero-content a.contact-btn {
  display: inline-block;
  text-decoration: none;
}
.bfsi-hero.bc-hero a.contact-btn { color: #0b1b35; }
.bfsi-hero.bc-hero a.contact-btn:hover,
.bfsi-hero.bc-hero a.contact-btn:focus-visible {
  background: #45aaf2;
  color: #0b1b35;
}
.bfsi-hero.bc-hero a.contact-btn:focus-visible {
  outline: 2px solid #fff;
  outline-offset: 3px;
}
.lem-section a.lem-cta-btn { color: #0b1b35; }
.lem-section a.lem-cta-btn:hover,
.lem-section a.lem-cta-btn:focus-visible {
  background: #45aaf2;
  color: #0b1b35;
}
.lem-section a.lem-cta-btn:focus-visible { outline: 2px solid #fff; outline-offset: 3px; }
.lem-pain-num { color: #5a6473; }
.lem-pain .feature-card p { font-size: 1rem; }
</style>

</head>
<body>

    <?php include 'nav_bar.php'; ?>

    <main id="main-content">

    <!-- Hero Section -->
    <section class="domain-hero bfsi-hero bc-hero lem-hero">
        <div class="domain-hero-container">
            <div class="domain-hero-content lem-hero-content">
                <h1 class="lem-hero-title">Move to Microsoft Dynamics 365 Business Central</h1>
                <p class="lem-hero-subtitle">Older or on-premise ERP systems can become increasingly difficult to maintain, integrate and adapt as your business grows.</p>
                <p class="lem-hero-text">EasyCloud helps businesses move from legacy ERP systems to Microsoft Dynamics 365 Business Central—bringing finance, inventory, purchasing, manufacturing and operations onto a modern cloud ERP.</p>
                <a href="contact.php" class="contact-btn">Book an ERP Migration Assessment</a>
            </div>

            <!-- Hero visual: Legacy ERP -> Microsoft Dynamics 365 Business Central transformation graphic.
                 Text-labelled tiles; the official Business Central logo can replace the icon in .lem-hv-logo once you have the rights to use it. -->
            <div class="lem-hero-visual" role="img" aria-label="Data moving from a legacy on-premise ERP into Microsoft Dynamics 365 Business Central finance, inventory, purchasing, manufacturing and operations">
                <div class="lem-hv-source">
                    <div class="lem-hv-rack" aria-hidden="true"><span></span><span></span><span></span></div>
                    <span class="lem-hv-name">Legacy ERP</span>
                    <span class="lem-hv-label">On-premise</span>
                </div>
                <div class="lem-hv-pipe" aria-hidden="true">
                    <span class="lem-hv-packet"><i class="fas fa-file-invoice-dollar" aria-hidden="true"></i></span>
                    <span class="lem-hv-packet"><i class="fas fa-boxes-stacked" aria-hidden="true"></i></span>
                    <span class="lem-hv-packet"><i class="fas fa-cart-shopping" aria-hidden="true"></i></span>
                    <span class="lem-hv-packet"><i class="fas fa-industry" aria-hidden="true"></i></span>
                </div>
                <div class="lem-hv-target">
                    <div class="lem-hv-target-head">
                        <div class="lem-hv-logo"><i class="fas fa-cloud" aria-hidden="true"></i></div>
                        <span class="lem-hv-name">Microsoft Dynamics 365 Business Central</span>
                    </div>
                    <ul class="lem-hv-modules" aria-hidden="true">
                        <li><i class="fas fa-file-invoice-dollar" aria-hidden="true"></i> Finance</li>
                        <li><i class="fas fa-boxes-stacked" aria-hidden="true"></i> Inventory</li>
                        <li><i class="fas fa-cart-shopping" aria-hidden="true"></i> Purchasing</li>
                        <li><i class="fas fa-industry" aria-hidden="true"></i> Manufacturing</li>
                        <li><i class="fas fa-gears" aria-hidden="true"></i> Operations</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: Is your current ERP holding you back? -->
    <section class="lem-section lem-section-light lem-pain">
        <div class="lem-container">
            <div class="section-header lem-reveal">
                <h2>Is Your Current ERP Holding You Back?</h2>
                <p>It may be time to consider a change if you're dealing with:</p>
            </div>
            <div class="lem-pain-grid lem-stagger">
                <div class="feature-card lem-pain-card">
                    <span class="lem-pain-num" aria-hidden="true">01</span>
                    <div class="feature-icon security"><i class="fas fa-server" aria-hidden="true"></i></div>
                    <h3>High maintenance costs</h3>
                    <p>for ageing infrastructure and software</p>
                </div>
                <div class="feature-card lem-pain-card">
                    <span class="lem-pain-num" aria-hidden="true">02</span>
                    <div class="feature-icon supply-chain"><i class="fas fa-plug-circle-xmark" aria-hidden="true"></i></div>
                    <h3>Limited integrations</h3>
                    <p>with newer applications and technologies</p>
                </div>
                <div class="feature-card lem-pain-card">
                    <span class="lem-pain-num" aria-hidden="true">03</span>
                    <div class="feature-icon inventory"><i class="fas fa-table" aria-hidden="true"></i></div>
                    <h3>Manual workarounds &amp; spreadsheets</h3>
                    <p>outside your ERP</p>
                </div>
                <div class="feature-card lem-pain-card">
                    <span class="lem-pain-num" aria-hidden="true">04</span>
                    <div class="feature-icon security"><i class="fas fa-chart-column" aria-hidden="true"></i></div>
                    <h3>Difficult reporting</h3>
                    <p>and limited real-time visibility</p>
                </div>
                <div class="feature-card lem-pain-card">
                    <span class="lem-pain-num" aria-hidden="true">05</span>
                    <div class="feature-icon supply-chain"><i class="fas fa-screwdriver-wrench" aria-hidden="true"></i></div>
                    <h3>Complex upgrades &amp; customizations</h3>
                    <p>that make change slow or expensive</p>
                </div>
                <div class="feature-card lem-pain-card">
                    <span class="lem-pain-num" aria-hidden="true">06</span>
                    <div class="feature-icon inventory"><i class="fas fa-gauge-high" aria-hidden="true"></i></div>
                    <h3>A system that can't keep pace</h3>
                    <p>with new locations, processes or growth</p>
                </div>
            </div>

            <!-- Visual graphic: Move to a Connected Cloud ERP -->
            <div class="lem-connect lem-reveal">
                <h3 class="lem-connect-title">Move to a Connected Cloud ERP</h3>
                <div class="lem-system lem-system-from">
                    <i class="fas fa-server" aria-hidden="true"></i>
                    <span class="lem-system-name">Legacy ERP</span>
                </div>
                <div class="lem-down" aria-hidden="true"><i class="fas fa-arrow-down" aria-hidden="true"></i></div>
                <div class="lem-system lem-system-to">
                    <span class="lem-system-name"><i class="fas fa-cloud" aria-hidden="true"></i> Microsoft Dynamics 365 Business Central</span>
                    <ul class="lem-modules">
                        <li><i class="fas fa-file-invoice-dollar" aria-hidden="true"></i> Finance</li>
                        <li><i class="fas fa-cart-shopping" aria-hidden="true"></i> Purchasing</li>
                        <li><i class="fas fa-boxes-stacked" aria-hidden="true"></i> Inventory</li>
                        <li><i class="fas fa-industry" aria-hidden="true"></i> Manufacturing</li>
                        <li><i class="fas fa-handshake" aria-hidden="true"></i> Sales</li>
                        <li><i class="fas fa-diagram-project" aria-hidden="true"></i> Projects</li>
                        <li><i class="fas fa-chart-line" aria-hidden="true"></i> Reporting &amp; Analytics</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3: Migrate with confidence -->
    <section class="lem-section lem-approach">
        <div class="lem-container">
            <div class="section-header lem-reveal">
                <h2>Migrate with Confidence</h2>
                <p>Replacing an ERP is more than moving data. It's an opportunity to simplify processes and build a better system for the future.</p>
            </div>

            <h3 class="lem-approach-title lem-reveal">EasyCloud Migration Approach</h3>

            <!-- Visual graphic: Assess -> Map -> Configure -> Migrate -> Integrate -> Go Live -->
            <ol class="lem-flow lem-stagger" aria-label="EasyCloud legacy ERP migration approach">
                <li><div class="lem-step"><div class="lem-step-icon"><i class="fas fa-magnifying-glass" aria-hidden="true"></i><span class="lem-step-num" aria-hidden="true">1</span></div><span class="lem-step-name">Assess</span></div></li>
                <li><div class="lem-step"><div class="lem-step-icon"><i class="fas fa-map-location-dot" aria-hidden="true"></i><span class="lem-step-num" aria-hidden="true">2</span></div><span class="lem-step-name">Map</span></div></li>
                <li><div class="lem-step"><div class="lem-step-icon"><i class="fas fa-sliders" aria-hidden="true"></i><span class="lem-step-num" aria-hidden="true">3</span></div><span class="lem-step-name">Configure</span></div></li>
                <li><div class="lem-step"><div class="lem-step-icon"><i class="fas fa-database" aria-hidden="true"></i><span class="lem-step-num" aria-hidden="true">4</span></div><span class="lem-step-name">Migrate</span></div></li>
                <li><div class="lem-step"><div class="lem-step-icon"><i class="fas fa-plug" aria-hidden="true"></i><span class="lem-step-num" aria-hidden="true">5</span></div><span class="lem-step-name">Integrate</span></div></li>
                <li><div class="lem-step"><div class="lem-step-icon"><i class="fas fa-rocket" aria-hidden="true"></i><span class="lem-step-num" aria-hidden="true">6</span></div><span class="lem-step-name">Go Live</span></div></li>
            </ol>

            <p class="lem-approach-caption lem-reveal">We help determine what should be migrated, redesigned, integrated or retired rather than simply recreating your old ERP in a new system.</p>

            <!-- Closing CTA, directly after the migration graphic -->
            <div class="lem-cta-panel lem-reveal">
                <h2>Ready to Modernise Your ERP?</h2>
                <p>Start with an assessment of your existing system, business processes and future requirements.</p>
                <a href="contact.php" class="lem-cta-btn">BOOK A LEGACY ERP MIGRATION ASSESSMENT <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
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
        var targets = document.querySelectorAll('.lem-reveal, .lem-stagger');
        document.documentElement.classList.add('lem-anim');
        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (!entry.isIntersecting) return;
                var el = entry.target;
                el.classList.add('lem-visible');
                if (el.classList.contains('lem-stagger')) {
                    // hand the cards back to their own hover styles once they are in
                    setTimeout(function () {
                        el.classList.add('lem-done');
                        el.classList.remove('lem-stagger', 'lem-visible');
                    }, 1600);
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
