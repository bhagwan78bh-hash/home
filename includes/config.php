<?php
/**
 * HomeSecure - USA Home Security & Burglary Prevention Guide
 * Configuration & Core Helpers
 */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Brand & Site Definitions
define('SITE_NAME', 'HomeSecure');
define('BRAND_SLUG', 'homesecure');
define('SITE_TAGLINE', 'The Definitive USA Home Security & Burglary Prevention Field Guide');
define('SITE_DOMAIN', 'homesecure.guide');
define('CONTACT_EMAIL', 'security-guide@homesecure.guide');
define('CURRENT_YEAR', date('Y'));
define('LAST_UPDATED', 'October 2026');

// Security response headers for local execution
if (!headers_sent()) {
    header('X-Content-Type-Options: nosniff');
    header('X-Frame-Options: SAMEORIGIN');
    header('Referrer-Policy: strict-origin-when-cross-origin');
}

/**
 * Escape HTML output for XSS protection
 */
function e(?string $value): string {
    return htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8');
}

/**
 * Return current active page class helper
 */
function is_active(string $page, string $current): string {
    return $page === $current ? 'active' : '';
}
