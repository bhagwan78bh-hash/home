<?php
/**
 * HomeSecure - Terms of Service (Standalone Page)
 */
require_once __DIR__ . '/includes/config.php';

$pageTitle = 'Terms of Service | ' . SITE_NAME;
$pageDescription = 'Review the Terms of Service for HomeSecure. Understand educational disclaimers, liability limitations, DIY safety recommendations, and conditions of use.';
$currentPage = 'terms';

require_once __DIR__ . '/includes/header.php';
?>

  <main id="main-content" class="legal-page">
    <div class="container container-sm">
      <div class="legal-header">
        <span class="legal-badge">Legal Documentation</span>
        <h1 class="legal-page-title">Terms of Service</h1>
        <p class="legal-meta-info">
          <span><strong>Effective Date:</strong> January 1, <?= e(CURRENT_YEAR) ?></span> &bull;
          <span><strong>Last Modified:</strong> <?= e(LAST_UPDATED) ?></span> &bull;
          <span><strong>Brand:</strong> <?= e(SITE_NAME) ?></span>
        </p>
      </div>

      <div class="legal-card-content">
        <section class="legal-section">
          <h2>1. Agreement to Terms</h2>
          <p>
            Welcome to <strong><?= e(SITE_NAME) ?></strong> ("we," "our," or "us"). By accessing or using our website located at <code><?= e(SITE_DOMAIN) ?></code> (including all subdomains, interactive features, risk calculators, checklists, and guides), you acknowledge that you have read, understood, and agree to be legally bound by these Terms of Service ("Terms"). If you disagree with any part of these terms, you do not have permission to access or use the Website.
          </p>
        </section>

        <section class="legal-section">
          <h2>2. Informational &amp; Educational Purpose Only</h2>
          <p>
            All content, blueprints, diagrams, hardware analyses, checklists, crime statistics, screw length recommendations, and assessments provided on this Website are published <strong>strictly for general educational and informational purposes</strong>. 
          </p>
          <p>
            <?= e(SITE_NAME) ?> is not a licensed private security guard company, armed guard contractor, locksmith, or municipal police agency. Our recommendations reflect general industry best practices (such as CPTED guidelines and FBI crime reports), but cannot account for specific building codes, municipal fire codes, structural variations, or local laws governing your individual property.
          </p>
        </section>

        <section class="legal-section">
          <h2>3. Disclaimer of Warranties &amp; Limitation of Liability</h2>
          <p>
            <strong>THE SERVICE AND ALL MATERIALS ARE PROVIDED ON AN "AS IS" AND "AS AVAILABLE" BASIS WITHOUT ANY WARRANTIES OF ANY KIND, EXPRESS OR IMPLIED.</strong>
          </p>
          <p>
            <?= e(SITE_NAME) ?> expressly disclaims all warranties, including but not limited to the implied warranties of merchantability, fitness for a particular purpose, non-infringement, and title. We do not warrant that:
          </p>
          <ul>
            <li>Following any checklist or guideline will prevent burglaries, break-ins, property theft, trespassing, vandalism, or unauthorized entry.</li>
            <li>Any specific hardware (including locks, screws, cameras, or alarm systems) will remain impenetrable under physical or electronic assault.</li>
            <li>The information on the Website is error-free, exhaustive, or continuously up-to-date with emerging criminal methodologies.</li>
          </ul>
          <p>
            To the maximum extent permitted under applicable law, in no event shall <?= e(SITE_NAME) ?>, its officers, employees, or content contributors be liable for any indirect, punitive, incidental, special, consequential, or exemplary damages, including damages for loss of property, bodily injury, burglary losses, or data compromise.
          </p>
        </section>

        <section class="legal-section">
          <h2>4. DIY Physical &amp; Electrical Modifications</h2>
          <p>
            Executing home fortification tasks (such as replacing strike plate screws, reinforcing door frames, applying window film, installing hardwired doorbell transformers, or drilling into masonry) carries inherent physical risks. Users agree that:
          </p>
          <ul>
            <li>You are solely responsible for ensuring your personal safety, wearing appropriate protective gear (such as safety goggles and work gloves), and verifying that door frame modifications do not compromise emergency fire escape egress.</li>
            <li>Any electrical wiring tasks should strictly comply with the National Electrical Code (NEC) and be evaluated by a licensed electrician if you lack appropriate training.</li>
          </ul>
        </section>

        <section class="legal-section">
          <h2>5. Emergency Situations — Call 911</h2>
          <p>
            <?= e(SITE_NAME) ?> does not operate emergency dispatch, monitoring stations, or armed response units. <strong>If you witness a crime in progress, hear an active intruder, or face a life-threatening situation, do NOT consult this Website. Retreat to safety immediately and dial 911 or your local emergency dispatch center.</strong>
          </p>
        </section>

        <section class="legal-section">
          <h2>6. Third-Party Trademarks &amp; Affiliate Disclosure</h2>
          <p>
            All product names, brand names, and trademarks mentioned on this website (such as Ring, ADT, SimpliSafe, Yale, Schlage, Eufy, Wyze, or Vivint) are the property of their respective owners. Mention of these brands does not imply endorsement, sponsorship, or affiliation unless expressly disclosed.
          </p>
        </section>

        <section class="legal-section">
          <h2>7. Intellectual Property</h2>
          <p>
            All original text, interactive scripts, layouts, and curated guides on <?= e(SITE_NAME) ?> are protected under the copyright laws of the United States. You may print individual copies of our checklist for personal, non-commercial residential use only. Any mass scraping, commercial resale, or unauthorized reproduction is strictly prohibited.
          </p>
        </section>

        <section class="legal-section">
          <h2>8. Governing Law &amp; Jurisdiction</h2>
          <p>
            These Terms shall be governed by and construed in accordance with the laws of the United States of America, without regard to its conflict of law provisions. Any legal action or proceeding arising under these Terms shall be brought exclusively in the federal or state courts located within the United States.
          </p>
        </section>

        <section class="legal-section">
          <h2>9. Contact Information</h2>
          <p>
            If you have questions regarding these Terms of Service, please contact our compliance desk via email at: <code><?= e(CONTACT_EMAIL) ?></code>.
          </p>
        </section>
      </div>

      <div class="legal-footer-nav text-center">
        <a href="index.php" class="btn btn-primary">&larr; Return to Home Guide</a>
        <a href="privacy.php" class="btn btn-secondary">Read Privacy Policy</a>
      </div>
    </div>
  </main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
