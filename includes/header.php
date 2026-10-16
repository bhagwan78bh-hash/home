<?php
/**
 * HomeSecure - Common Header Component
 */
require_once __DIR__ . '/config.php';

$pageTitle = $pageTitle ?? SITE_NAME . ' | ' . SITE_TAGLINE;
$pageDescription = $pageDescription ?? 'Comprehensive, data-driven home security guide for American homeowners. Master perimeter defense, door hardening, smart cameras, and FBI burglary prevention protocols.';
$currentPage = $currentPage ?? 'home';
$isHomePage = ($currentPage === 'home');
$homePrefix = $isHomePage ? '' : 'index.php';
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= e($pageTitle) ?></title>
  <meta name="description" content="<?= e($pageDescription) ?>">
  <meta name="keywords" content="home security USA, burglary prevention guide, smart locks, FBI crime stats, security cameras, perimeter defense, strike plate reinforcement, home protection checklist">
  <meta name="author" content="HomeSecure USA">
  <meta name="robots" content="index, follow">

  <!-- OpenGraph & Twitter Social Cards -->
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="<?= e(SITE_NAME) ?>">
  <meta property="og:title" content="<?= e($pageTitle) ?>">
  <meta property="og:description" content="<?= e($pageDescription) ?>">
  <meta property="og:image" content="images/hero-home-security.jpg">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= e($pageTitle) ?>">
  <meta name="twitter:description" content="<?= e($pageDescription) ?>">
  <meta name="twitter:image" content="images/hero-home-security.jpg">

  <!-- Typography & Icons -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=JetBrains+Mono:wght@500;700&display=swap" rel="stylesheet">

  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Favicon SVG -->
  <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%230284c7'%3E%3Cpath d='M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-1 6h2v2h-2V7zm0 4h2v6h-2v-6z'/%3E%3C/svg%3E">

  <!-- Structured Data: WebSite & HowTo for Rich Google Snippets -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "<?= e($pageTitle) ?>",
    "description": "<?= e($pageDescription) ?>",
    "publisher": {
      "@type": "Organization",
      "name": "<?= e(SITE_NAME) ?>",
      "url": "https://<?= e(SITE_DOMAIN) ?>/"
    },
    "inLanguage": "en-US"
  }
  </script>
</head>
<body id="top">
  <!-- Top Announcement Bar -->
  <div class="top-announcement-bar" role="complementary" aria-label="Security Update Banner">
    <div class="container top-bar-inner">
      <div class="announcement-badge">
        <span class="pulsing-radar"></span>
        <span>USA National Security Advisory</span>
      </div>
      <p class="announcement-text">
        Burglary occurs every <strong>25.7 seconds</strong> across the U.S. Protect your family with our verified 4-layer defense blueprint.
      </p>
      <a href="<?= $homePrefix ?>#security-calculator" class="announcement-link">
        <span>Test Your Home Score</span>
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
    </div>
  </div>

  <!-- Primary Navigation Header -->
  <header class="site-header" id="navbar">
    <div class="container header-container">
      <!-- Brand Logo -->
      <a href="<?= $homePrefix ?>#top" class="brand-logo" aria-label="HomeSecure Home">
        <div class="brand-icon-wrapper">
          <svg class="brand-shield" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" fill="rgba(14, 165, 233, 0.15)"/>
            <path d="M12 8v4" stroke-linecap="round"/>
            <path d="M12 16h.01" stroke-linecap="round" stroke-width="3"/>
          </svg>
        </div>
        <div class="brand-text-block">
          <span class="brand-title">Home<span class="brand-accent">Secure</span></span>
          <span class="brand-tagline">USA Home Protection Hub</span>
        </div>
      </a>

      <!-- Desktop Navigation Menu -->
      <nav class="desktop-nav" aria-label="Primary Navigation">
        <ul class="nav-links">
          <li><a href="<?= $homePrefix ?>#defense-layers" class="nav-link">4 Defense Rings</a></li>
          <li><a href="<?= $homePrefix ?>#vulnerabilities" class="nav-link">Burglary Map</a></li>
          <li><a href="<?= $homePrefix ?>#checklist" class="nav-link">Hardening Checklist</a></li>
          <li><a href="<?= $homePrefix ?>#system-comparison" class="nav-link">DIY vs Monitored</a></li>
          <li><a href="<?= $homePrefix ?>#regional-guide" class="nav-link">USA Regional</a></li>
          <li><a href="<?= $homePrefix ?>#faq" class="nav-link">FAQ</a></li>
        </ul>
      </nav>

      <!-- Header Action & Mobile Menu Toggle -->
      <div class="header-actions">
        <a href="<?= $homePrefix ?>#security-calculator" class="btn btn-primary btn-sm header-cta">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          <span>Calculate Risk Score</span>
        </a>

        <button type="button" class="mobile-toggle" id="mobile-toggle-btn" aria-label="Toggle navigation menu" aria-expanded="false" aria-controls="mobile-menu">
          <span class="hamburger-bar"></span>
          <span class="hamburger-bar"></span>
          <span class="hamburger-bar"></span>
        </button>
      </div>
    </div>

    <!-- Mobile Drawer Menu -->
    <div class="mobile-menu" id="mobile-menu" hidden>
      <nav class="mobile-nav" aria-label="Mobile Navigation">
        <ul class="mobile-nav-links">
          <li><a href="<?= $homePrefix ?>#defense-layers" class="mobile-link">4 Defense Rings</a></li>
          <li><a href="<?= $homePrefix ?>#vulnerabilities" class="mobile-link">Burglary Entry Map</a></li>
          <li><a href="<?= $homePrefix ?>#checklist" class="mobile-link">Hardening Checklist</a></li>
          <li><a href="<?= $homePrefix ?>#system-comparison" class="mobile-link">DIY vs Pro Monitoring</a></li>
          <li><a href="<?= $homePrefix ?>#regional-guide" class="mobile-link">USA Regional Climate Guide</a></li>
          <li><a href="<?= $homePrefix ?>#faq" class="mobile-link">Frequently Asked Questions</a></li>
          <li><a href="<?= $homePrefix ?>#security-calculator" class="mobile-link highlight">Interactive Risk Assessment</a></li>
          <li><button type="button" class="mobile-link modal-trigger" data-modal="terms-modal">Terms of Service</button></li>
          <li><button type="button" class="mobile-link modal-trigger" data-modal="privacy-modal">Privacy Policy</button></li>
        </ul>
      </nav>
    </div>
  </header>
