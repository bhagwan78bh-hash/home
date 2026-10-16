<?php
/**
 * HomeSecure - Privacy Policy (Standalone Page)
 */
require_once __DIR__ . '/includes/config.php';

$pageTitle = 'Privacy Policy | ' . SITE_NAME;
$pageDescription = 'Read the Privacy Policy for HomeSecure. Transparent disclosure of client-side data handling, CCPA/CPRA compliance, and consumer privacy commitments.';
$currentPage = 'privacy';

require_once __DIR__ . '/includes/header.php';
?>

  <main id="main-content" class="legal-page">
    <div class="container container-sm">
      <div class="legal-header">
        <span class="legal-badge">Consumer Protection</span>
        <h1 class="legal-page-title">Privacy Policy</h1>
        <p class="legal-meta-info">
          <span><strong>Effective Date:</strong> January 1, <?= e(CURRENT_YEAR) ?></span> &bull;
          <span><strong>Last Revised:</strong> <?= e(LAST_UPDATED) ?></span> &bull;
          <span><strong>Brand:</strong> <?= e(SITE_NAME) ?></span>
        </p>
      </div>

      <div class="legal-card-content">
        <section class="legal-section">
          <h2>1. Introduction &amp; Privacy First Philosophy</h2>
          <p>
            At <strong><?= e(SITE_NAME) ?></strong>, we recognize that when you research ways to secure your residence, you are trusting us with sensitive aspects of your lifestyle and home setup. We are fundamentally committed to protecting your privacy and minimizing data collection.
          </p>
          <p>
            <strong>Key Principle:</strong> Our interactive security risk calculator and hardening checklist operate entirely <em>client-side</em> within your personal web browser. We do not transmit, sell, or monetize your home vulnerabilities.
          </p>
        </section>

        <section class="legal-section">
          <h2>2. Information We Process</h2>
          <div class="privacy-highlight-box">
            <h4>A. Client-Side Interactive Data (Calculators &amp; Audits)</h4>
            <p>
              When you answer questions in the "Home Security Risk Score Assessment" (such as property type, lock rating, or presence of outdoor cameras), the calculations are executed locally via JavaScript in your device's browser memory. Your answers are never transmitted to our web servers or written to a database.
            </p>
          </div>

          <div class="privacy-highlight-box">
            <h4>B. HTML5 LocalStorage (Checklist Persistence)</h4>
            <p>
              To allow you to resume your progress on the "Home Hardening Checklist," your browser writes small state flags (such as <code>{"chk-1": true}</code>) to your browser's private local storage. This data resides exclusively on your device and can be cleared at any time via the "Reset Checklist Progress" button or your browser settings.
            </p>
          </div>

          <div class="privacy-highlight-box">
            <h4>C. Automated Server Access Logs</h4>
            <p>
              Like virtually all standard web servers, our hosting environment may record standard, non-personally identifiable diagnostic logs (including IP address, browser user-agent, referring URL, and visit timestamp). These logs are retained solely for server stability, anti-DDoS mitigation, and technical performance analysis.
            </p>
          </div>
        </section>

        <section class="legal-section">
          <h2>3. Cookies &amp; Tracking Technologies</h2>
          <p>
            <?= e(SITE_NAME) ?> does not use invasive third-party cross-site tracking beacons, fingerprinting mechanisms, or biometric trackers. Any session cookies utilized are strictly functional and transient, serving only to maintain security headers and prevent automated abuse.
          </p>
        </section>

        <section class="legal-section">
          <h2>4. No Sale of Personal Information</h2>
          <p>
            <strong>We do not sell, rent, lease, or trade your personal information to third parties, data brokers, or marketing networks.</strong> We have never sold consumer data and will not do so in the future.
          </p>
        </section>

        <section class="legal-section">
          <h2>5. California Consumer Privacy Rights (CCPA / CPRA)</h2>
          <p>
            Under the California Consumer Privacy Act of 2018 (CCPA) and the California Privacy Rights Act (CPRA), California residents are entitled to specific rights concerning their personal information:
          </p>
          <ul>
            <li><strong>Right to Know:</strong> You may request disclosure of what categories of personal data are collected or disclosed.</li>
            <li><strong>Right to Delete:</strong> You may request deletion of any personal information maintained about you.</li>
            <li><strong>Right to Opt-Out of Sale:</strong> As stated, <?= e(SITE_NAME) ?> does not sell personal information under any circumstance.</li>
            <li><strong>Non-Discrimination:</strong> We will never discriminate against you, alter service availability, or reduce quality for exercising your privacy rights.</li>
          </ul>
        </section>

        <section class="legal-section">
          <h2>6. Children's Online Privacy Protection Act (COPPA)</h2>
          <p>
            Our website is directed toward adult homeowners, heads of households, and property managers. We do not knowingly collect or solicit personal information from individuals under the age of 13. If you believe a child has provided us with personal information, please notify us immediately.
          </p>
        </section>

        <section class="legal-section">
          <h2>7. Updates to This Privacy Policy</h2>
          <p>
            We may occasionally update this Privacy Policy to reflect advancements in privacy regulations or enhancements to our digital guides. When revisions occur, the updated policy will be posted on this page with an updated "Last Revised" date.
          </p>
        </section>

        <section class="legal-section">
          <h2>8. Contacting Our Data Protection Officer</h2>
          <p>
            For any inquiries, requests for data verification, or general questions regarding our privacy practices, please contact our team at:
          </p>
          <p class="privacy-contact-block">
            <strong>HomeSecure Privacy &amp; Compliance Office</strong><br>
            Email: <code><?= e(CONTACT_EMAIL) ?></code><br>
            Website: <code>https://<?= e(SITE_DOMAIN) ?></code>
          </p>
        </section>
      </div>

      <div class="legal-footer-nav text-center">
        <a href="index.php" class="btn btn-primary">&larr; Return to Home Guide</a>
        <a href="terms.php" class="btn btn-secondary">Review Terms of Service</a>
      </div>
    </div>
  </main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
