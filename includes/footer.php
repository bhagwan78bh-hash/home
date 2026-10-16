<?php
/**
 * HomeSecure - Common Footer & Modals Component
 */
require_once __DIR__ . '/config.php';
$isHomePage = ($currentPage ?? 'home') === 'home';
$homePrefix = $isHomePage ? '' : 'index.php';
?>
  <!-- Footer Component -->
  <footer class="site-footer" id="footer">
    <div class="footer-top-accent"></div>
    <div class="container footer-container">
      <div class="footer-grid">
        <!-- Brand & Mission Column -->
        <div class="footer-col footer-col-brand">
          <a href="<?= $homePrefix ?>#top" class="footer-logo">
            <svg class="footer-shield" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" fill="rgba(14, 165, 233, 0.2)"/>
              <path d="M12 8v4" stroke-linecap="round"/>
              <path d="M12 16h.01" stroke-linecap="round" stroke-width="3"/>
            </svg>
            <span class="footer-brand-name">Home<span class="brand-accent">Secure</span></span>
          </a>
          <p class="footer-desc">
            Empowering American families and homeowners with battle-tested physical hardening, smart surveillance protocols, and neighborhood crime prevention strategies.
          </p>
          <div class="footer-pill-trust">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
            <span>FBI UCR & CPTED Crime Prevention Aligned</span>
          </div>
        </div>

        <!-- Guide Directory Column -->
        <div class="footer-col">
          <h3 class="footer-heading">Security Blueprint</h3>
          <ul class="footer-links">
            <li><a href="<?= $homePrefix ?>#defense-layers">Concentric Defense Rings</a></li>
            <li><a href="<?= $homePrefix ?>#vulnerabilities">Top Burglary Entry Points</a></li>
            <li><a href="<?= $homePrefix ?>#checklist">Home Hardening Checklist</a></li>
            <li><a href="<?= $homePrefix ?>#system-comparison">Smart DIY vs Pro Monitored</a></li>
            <li><a href="<?= $homePrefix ?>#regional-guide">USA Regional & Climate Guide</a></li>
            <li><a href="<?= $homePrefix ?>#security-calculator">Interactive Risk Score Audit</a></li>
          </ul>
        </div>

        <!-- Hardware & Protocols -->
        <div class="footer-col">
          <h3 class="footer-heading">Hardening Focus</h3>
          <ul class="footer-links">
            <li><a href="<?= $homePrefix ?>#defense-layers">3-Inch Screw Strike Plates</a></li>
            <li><a href="<?= $homePrefix ?>#defense-layers">ANSI Grade 1 Deadbolts</a></li>
            <li><a href="<?= $homePrefix ?>#defense-layers">8-Mil Window Security Film</a></li>
            <li><a href="<?= $homePrefix ?>#defense-layers">Dusk-to-Dawn CPTED Lighting</a></li>
            <li><a href="<?= $homePrefix ?>#safe-room">Safe Room & 911 Dispatch Plan</a></li>
            <li><a href="<?= $homePrefix ?>#faq">Burglary Deterrence FAQs</a></li>
          </ul>
        </div>

        <!-- Legal & Emergency Advisory -->
        <div class="footer-col">
          <h3 class="footer-heading">Compliance &amp; Legal</h3>
          <ul class="footer-links">
            <li><button type="button" class="footer-modal-btn modal-trigger" data-modal="terms-modal">Terms of Service (Modal)</button></li>
            <li><button type="button" class="footer-modal-btn modal-trigger" data-modal="privacy-modal">Privacy Policy (Modal)</button></li>
            <li><a href="terms.php">Terms of Service (Full Page)</a></li>
            <li><a href="privacy.php">Privacy Policy (Full Page)</a></li>
          </ul>
          <div class="emergency-notice-box">
            <div class="emergency-icon-title">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#ef4444" stroke-width="2.5"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0zM12 9v4M12 17h.01"/></svg>
              <span>Emergency Advisory</span>
            </div>
            <p>If you suspect an active intruder or forced entry, retreat to safety and dial <strong>911</strong> immediately.</p>
          </div>
        </div>
      </div>

      <!-- Footer Bottom Bar -->
      <div class="footer-bottom">
        <p class="copyright-text">
          &copy; <?= e(CURRENT_YEAR) ?> <strong><?= e(SITE_NAME) ?></strong> (homesecure.guide). All rights reserved. Registered USA Educational &amp; Crime Prevention Resource.
        </p>
        <div class="footer-bottom-links">
          <button type="button" class="footer-simple-link modal-trigger" data-modal="terms-modal">Terms</button>
          <span class="sep">&bull;</span>
          <button type="button" class="footer-simple-link modal-trigger" data-modal="privacy-modal">Privacy</button>
          <span class="sep">&bull;</span>
          <a href="<?= $homePrefix ?>#top" class="footer-simple-link back-to-top">
            <span>Back to top</span>
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 15l-6-6-6 6"/></svg>
          </a>
        </div>
      </div>
    </div>
  </footer>

  <!-- ======================================================== -->
  <!-- NATIVE HTML5 ACCESSIBLE MODAL: TERMS OF SERVICE           -->
  <!-- ======================================================== -->
  <dialog id="terms-modal" class="legal-dialog" aria-labelledby="terms-dialog-title">
    <div class="dialog-card">
      <div class="dialog-header">
        <div class="dialog-title-group">
          <span class="dialog-kicker">Legal Agreement</span>
          <h2 id="terms-dialog-title" class="dialog-title">Terms of Service — <?= e(SITE_NAME) ?></h2>
        </div>
        <button type="button" class="dialog-close-btn" aria-label="Close Terms modal" data-close-modal>
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 6L6 18M6 6l12 12"/></svg>
        </button>
      </div>
      <div class="dialog-body">
        <p class="legal-meta"><strong>Effective Date:</strong> January 1, <?= e(CURRENT_YEAR) ?> | <strong>Jurisdiction:</strong> United States of America</p>

        <h3>1. Acceptance of Terms</h3>
        <p>By accessing, browsing, or utilizing the guides, checklists, calculators, and informational materials on <strong><?= e(SITE_NAME) ?></strong> ("the Website"), you agree to be bound by these Terms of Service. If you do not agree to all terms, do not access or use this site.</p>

        <h3>2. Informational &amp; Educational Purpose Only</h3>
        <p>The contents published by <?= e(SITE_NAME) ?>, including all security checklists, hardware recommendations, strike plate screw specifications, camera positioning blueprints, and risk score tools, are strictly for general educational and informational purposes. While our tips reflect recognized crime prevention through environmental design (CPTED) guidelines and law enforcement statistics, home security variables differ drastically by location, property build, and municipal bylaws.</p>

        <h3>3. No Warranty &amp; Limitation of Liability</h3>
        <p><strong><?= e(SITE_NAME) ?> makes no representation, guarantee, or warranty</strong> that adherence to any advice, checklist, or configuration provided will prevent property crime, trespassing, burglary, vandalism, or unauthorized entry. Under no circumstances shall <?= e(SITE_NAME) ?>, its authors, or contributors be held liable for any direct, indirect, incidental, consequential, or punitive damages resulting from property loss, hardware installation errors, personal injury, or security failures.</p>

        <h3>4. DIY Installation &amp; Electrical Safety</h3>
        <p>Any DIY physical modifications (e.g., replacing door strike plates, drilling door jams, installing smart doorbells, or working with hardwired home transformers) must be undertaken with appropriate safety equipment and by individuals qualified to perform such modifications. Consult a licensed locksmith, master electrician, or certified security contractor if in doubt.</p>

        <h3>5. Emergency Situations</h3>
        <p>This Website does NOT provide alarm monitoring, dispatch, or emergency rescue services. In any life-threatening situation or ongoing criminal trespass, immediately dial <strong>911</strong> or contact your local municipal police department.</p>

        <h3>6. Third-Party Equipment &amp; Trademarks</h3>
        <p>References to third-party security systems, hardware brands (such as Ring, ADT, SimpliSafe, Schlage, Yale, Vivint), or governmental entities (such as the FBI or municipal police) are for illustrative, comparative, and identification purposes only and do not constitute an endorsement or affiliation.</p>

        <h3>7. Governing Law</h3>
        <p>These Terms are governed by and construed in accordance with the laws of the United States of America. Any disputes arising hereunder shall be subject to the exclusive jurisdiction of the competent courts of the United States.</p>
      </div>
      <div class="dialog-footer">
        <a href="terms.php" class="btn btn-secondary btn-sm" target="_blank" rel="noopener">Open Full Standalone Page</a>
        <button type="button" class="btn btn-primary btn-sm" data-close-modal>I Understand &amp; Agree</button>
      </div>
    </div>
  </dialog>

  <!-- ======================================================== -->
  <!-- NATIVE HTML5 ACCESSIBLE MODAL: PRIVACY POLICY            -->
  <!-- ======================================================== -->
  <dialog id="privacy-modal" class="legal-dialog" aria-labelledby="privacy-dialog-title">
    <div class="dialog-card">
      <div class="dialog-header">
        <div class="dialog-title-group">
          <span class="dialog-kicker">Data Protection &amp; CCPA</span>
          <h2 id="privacy-dialog-title" class="dialog-title">Privacy Policy — <?= e(SITE_NAME) ?></h2>
        </div>
        <button type="button" class="dialog-close-btn" aria-label="Close Privacy modal" data-close-modal>
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 6L6 18M6 6l12 12"/></svg>
        </button>
      </div>
      <div class="dialog-body">
        <p class="legal-meta"><strong>Last Revised:</strong> <?= e(LAST_UPDATED) ?> | <strong>Compliance:</strong> USA &amp; California Consumer Privacy Act (CCPA/CPRA)</p>

        <h3>1. Commitment to Privacy</h3>
        <p>At <strong><?= e(SITE_NAME) ?></strong>, we believe your personal safety and digital privacy go hand in hand. We strictly do not sell, rent, or trade your personal information. Our security assessment calculators and checklists run entirely client-side in your web browser.</p>

        <h3>2. Information We Collect</h3>
        <ul>
          <li><strong>Interactive Assessment Data:</strong> When you use our Home Security Risk Score Assessment, your inputs (e.g., door lock type, property style) are processed locally on your device via JavaScript. We do NOT store or transmit your security answers to any remote database.</li>
          <li><strong>Local Browser Storage:</strong> We use HTML5 LocalStorage solely to save your progress on the "Home Hardening Checklist" so your checked items persist when you refresh the page. This data never leaves your device.</li>
          <li><strong>Server Logs:</strong> Standard web hosting logs may automatically record generic access data (IP address, browser user-agent, timestamp) for security monitoring and DDoS mitigation.</li>
        </ul>

        <h3>3. Cookies &amp; Tracking Technologies</h3>
        <p>We do not use invasive third-party cross-site trackers or biometric surveillance cookies. Any cookies used are strictly essential for website performance, session security, and anti-abuse protocols.</p>

        <h3>4. California Consumer Privacy Rights (CCPA / CPRA)</h3>
        <p>If you are a California resident, you have the right under the California Consumer Privacy Act (CCPA) to know what personal data is collected, request deletion, and opt-out of any hypothetical sale of personal data. Because <?= e(SITE_NAME) ?> does not collect personally identifying profiles or sell data, your rights are fully respected by default.</p>

        <h3>5. Contacting Our Data Privacy Team</h3>
        <p>For questions regarding our privacy practices or compliance inquiries, please contact us at: <code><?= e(CONTACT_EMAIL) ?></code>.</p>
      </div>
      <div class="dialog-footer">
        <a href="privacy.php" class="btn btn-secondary btn-sm" target="_blank" rel="noopener">Open Full Standalone Page</a>
        <button type="button" class="btn btn-primary btn-sm" data-close-modal>Close Policy</button>
      </div>
    </div>
  </dialog>

  <!-- Core JavaScript -->
  <script src="js/main.js" defer></script>
</body>
</html>
