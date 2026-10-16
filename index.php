<?php
/**
 * HomeSecure - The Definitive USA Home Security & Burglary Prevention Guide
 * One-Page Interactive Field Guide
 */
require_once __DIR__ . '/includes/config.php';

$pageTitle = SITE_NAME . ' | ' . SITE_TAGLINE;
$pageDescription = 'Definitive home security guide for American homeowners. Master concentric physical defense rings, 3-inch screw strike plates, smart cameras, and FBI burglary prevention protocols.';
$currentPage = 'home';

require_once __DIR__ . '/includes/header.php';
?>

  <main id="main-content">
    <!-- ======================================================== -->
    <!-- HERO SECTION                                             -->
    <!-- ======================================================== -->
    <section class="hero-section" id="hero">
      <div class="hero-backdrop">
        <img 
          src="images/hero-home-security.jpg" 
          alt="Modern American suburban home at twilight with illuminated pathway and security lighting" 
          class="hero-img"
          fetchpriority="high"
          width="1280" 
          height="720"
        >
        <div class="hero-gradient-overlay"></div>
      </div>

      <div class="container hero-content">
        <div class="hero-badge">
          <span class="badge-dot"></span>
          <span>FBI Uniform Crime Report &amp; CPTED Principles Aligned &bull; 2026 Edition</span>
        </div>

        <h1 class="hero-heading">
          Fortify Your Home. <br>
          <span class="text-gradient">Protect What Matters Most.</span>
        </h1>

        <p class="hero-lead">
          The definitive, data-backed residential security blueprint for American suburban, urban, and rural homeowners. Learn concentric physical hardening, perimeter sightlines, smart sensor networks, and real burglary deterrence.
        </p>

        <div class="hero-cta-group">
          <a href="#defense-layers" class="btn btn-primary btn-lg">
            <span>Explore 4-Layer Defense</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <a href="#security-calculator" class="btn btn-secondary btn-lg">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 11l3 3L22 4M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg>
            <span>Run Security Audit</span>
          </a>
        </div>

        <!-- Hero Verified Stats Bar -->
        <div class="hero-stats-grid">
          <div class="stat-card">
            <div class="stat-value">25.7s</div>
            <div class="stat-label">Burglary Frequency in U.S.</div>
            <div class="stat-sub">FBI UCR Crime Statistics</div>
          </div>
          <div class="stat-card">
            <div class="stat-value">34%</div>
            <div class="stat-label">Front Door Intrusions</div>
            <div class="stat-sub">Enter through unlocked or kicked doors</div>
          </div>
          <div class="stat-card">
            <div class="stat-value">300%</div>
            <div class="stat-label">Deterrence Multiplier</div>
            <div class="stat-sub">Homes without alarms are 3x more targeted</div>
          </div>
          <div class="stat-card">
            <div class="stat-value">15%</div>
            <div class="stat-label">Insurance Discount</div>
            <div class="stat-sub">Average policy savings with pro monitoring</div>
          </div>
        </div>
      </div>
    </section>

    <!-- ======================================================== -->
    <!-- SECTION 1: FBI CRIME REALITY & VULNERABILITY MAP         -->
    <!-- ======================================================== -->
    <section class="section section-dark" id="vulnerabilities">
      <div class="container">
        <div class="section-header text-center">
          <div class="section-kicker">Point of Entry Analysis</div>
          <h2 class="section-title">Where Burglars Actually Breach American Homes</h2>
          <p class="section-subtitle">
            Most residential break-ins in the United States are crimes of rapid opportunity, not sophisticated heists. Understanding where intruders attack allows you to reinforce the highest-risk vulnerabilities first.
          </p>
        </div>

        <div class="vulnerabilities-grid">
          <!-- Vulnerability 1: Front Door -->
          <article class="entry-card featured">
            <div class="entry-header">
              <span class="entry-percent">34%</span>
              <span class="entry-badge-tag danger">Primary Target</span>
            </div>
            <h3 class="entry-title">Front Door &amp; Porch</h3>
            <p class="entry-desc">
              Over a third of intruders simply kick in the front door or walk straight in. Standard builder-grade strikes use 3/4-inch screws that only grab the soft door trim, shearing off under 100 lbs of kick force.
            </p>
            <div class="entry-countermeasure">
              <strong>Key Defense:</strong> Install 3-inch hardened steel screws into wall framing studs, heavy-duty strike plates, and ANSI Grade 1 deadbolts.
            </div>
          </article>

          <!-- Vulnerability 2: First-Floor Windows -->
          <article class="entry-card">
            <div class="entry-header">
              <span class="entry-percent">23%</span>
              <span class="entry-badge-tag warning">High Risk</span>
            </div>
            <h3 class="entry-title">First-Floor Windows</h3>
            <p class="entry-desc">
              Windows hidden behind overgrown hedges or on side yards offer concealed access. Standard window latches are made of cast zinc and break easily when pried with a simple flathead screwdriver.
            </p>
            <div class="entry-countermeasure">
              <strong>Key Defense:</strong> Trim shrubs to below 3 feet (CPTED rule), add auxiliary track pin locks, and apply 8-mil shatter-resistant security film.
            </div>
          </article>

          <!-- Vulnerability 3: Sliding Glass / Back Door -->
          <article class="entry-card">
            <div class="entry-header">
              <span class="entry-percent">22%</span>
              <span class="entry-badge-tag warning">High Risk</span>
            </div>
            <h3 class="entry-title">Back Door &amp; Patio Sliders</h3>
            <p class="entry-desc">
              Rear access points offer privacy from street view. Patio sliders can easily be lifted out of their track from the outside, or the fragile factory latch popped with minimal leverage.
            </p>
            <div class="entry-countermeasure">
              <strong>Key Defense:</strong> Install an adjustable steel charley security bar, anti-lift screws in the upper track, and motion-activated floodlights.
            </div>
          </article>

          <!-- Vulnerability 4: Attached Garage -->
          <article class="entry-card">
            <div class="entry-header">
              <span class="entry-percent">9%</span>
              <span class="entry-badge-tag caution">Overlooked</span>
            </div>
            <h3 class="entry-title">Attached Garage &amp; Breezeway</h3>
            <p class="entry-desc">
              Burglars use a wire coat hanger to pull the emergency release cord in under 6 seconds, or access tools inside the garage to breach the interior fire door.
            </p>
            <div class="entry-countermeasure">
              <strong>Key Defense:</strong> Zip-tie or shield the emergency release latch, and treat the garage-to-home interior door with deadbolts identical to exterior doors.
            </div>
          </article>

          <!-- Vulnerability 5: Second Story & Basement -->
          <article class="entry-card">
            <div class="entry-header">
              <span class="entry-percent">12%</span>
              <span class="entry-badge-tag info">Secondary</span>
            </div>
            <h3 class="entry-title">Basement Wells &amp; Balconies</h3>
            <p class="entry-desc">
              Trellises, patio pergolas, and outdoor garbage cans create natural ladders to unlocked second-story windows. Basement egress wells offer concealed subterranean access.
            </p>
            <div class="entry-countermeasure">
              <strong>Key Defense:</strong> Secure polycarbonate well covers with interior quick-release locks; lock all second-story balcony doors regardless of height.
            </div>
          </article>

          <!-- Vulnerability 6: Timing Breakdown -->
          <article class="entry-card timing-card">
            <div class="entry-header">
              <span class="entry-percent">8-10m</span>
              <span class="entry-badge-tag clock">Burglary Clock</span>
            </div>
            <h3 class="entry-title">The 10-Minute Reality</h3>
            <p class="entry-desc">
              <strong>10:00 AM – 3:00 PM:</strong> Peak burglary window when residents are at work or school. Intruders target the master bedroom first for cash, jewelry, and firearms before exiting.
            </p>
            <div class="entry-countermeasure">
              <strong>Key Defense:</strong> Bolt safes directly to floor joists and conceal valuables outside typical master bedroom nightstands and dressers.
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- ======================================================== -->
    <!-- SECTION 2: THE 4 CONCENTRIC DEFENSE RINGS                -->
    <!-- ======================================================== -->
    <section class="section section-rings" id="defense-layers">
      <div class="container">
        <div class="section-header text-center">
          <div class="section-kicker">Core Architecture</div>
          <h2 class="section-title">The 4 Concentric Rings of Home Defense</h2>
          <p class="section-subtitle">
            Military and executive protection experts rely on defense-in-depth: nesting security measures so that if one ring fails, subsequent layers halt or delay the intruder until police arrive.
          </p>
        </div>

        <div class="rings-wrapper">
          <!-- RING 1 -->
          <div class="ring-card">
            <div class="ring-indicator">
              <span class="ring-number">Ring 01</span>
              <span class="ring-name">Outer Perimeter &amp; CPTED</span>
            </div>
            <div class="ring-content">
              <div class="ring-icon-box">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
              </div>
              <h3 class="ring-title">Property Boundary &amp; Sightlines</h3>
              <p class="ring-desc">
                Crime Prevention Through Environmental Design (CPTED) focuses on eliminating hiding spots and creating psychological deterrence at the curb.
              </p>
              <ul class="ring-checklist">
                <li>
                  <svg class="check-icon" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                  <span><strong>The 3/7 Rule:</strong> Keep bushes trimmed below 3 feet and tree branches pruned above 7 feet to ensure clear line of sight from the street.</span>
                </li>
                <li>
                  <svg class="check-icon" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                  <span><strong>Acoustic Landscaping:</strong> Gravel walk paths and river rocks around first-floor windows crunch loudly underfoot, denying silent approaches.</span>
                </li>
                <li>
                  <svg class="check-icon" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                  <span><strong>Dusk-to-Dawn Illumination:</strong> Photocell exterior LED path and driveway lighting leaves zero dark alcoves around entry gates.</span>
                </li>
                <li>
                  <svg class="check-icon" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                  <span><strong>No Hidden Spare Keys:</strong> False rocks and door frames are instantly checked. Use an encrypted smart keypad or leave spares with trusted neighbors.</span>
                </li>
              </ul>
            </div>
          </div>

          <!-- RING 2 -->
          <div class="ring-card highlight">
            <div class="ring-indicator">
              <span class="ring-number">Ring 02</span>
              <span class="ring-name">Exterior Shell Hardening</span>
            </div>
            <div class="ring-content">
              <div class="ring-icon-box">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
              </div>
              <h3 class="ring-title">Doors, Windows &amp; Physical Armor</h3>
              <p class="ring-desc">
                Physical delay is your greatest weapon. If an entry point withstands 3 minutes of forced attempts, over 80% of burglars abandon the target.
              </p>
              <ul class="ring-checklist">
                <li>
                  <svg class="check-icon" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                  <span><strong>3-Inch Case-Hardened Screws:</strong> Replace flimsy factory 3/4" screws on every door strike plate and hinge to anchor into structural 2x4 framing.</span>
                </li>
                <li>
                  <svg class="check-icon" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                  <span><strong>ANSI/BHMA Grade 1 Deadbolts:</strong> Solid steel bolt with 1-inch throw and hardened anti-saw roller pins to resist crowbars and kicking.</span>
                </li>
                <li>
                  <svg class="check-icon" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                  <span><strong>8-Mil Security Window Film:</strong> Applied to front door sidelights and ground-level glass; prevents glass from shattering inward on impact.</span>
                </li>
                <li>
                  <svg class="check-icon" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                  <span><strong>Solid Core Exterior Doors:</strong> Never use hollow-core doors on entryways or the fire door between the attached garage and home.</span>
                </li>
              </ul>
            </div>
          </div>

          <!-- RING 3 -->
          <div class="ring-card">
            <div class="ring-indicator">
              <span class="ring-number">Ring 03</span>
              <span class="ring-name">Interior Space &amp; Asset Vault</span>
            </div>
            <div class="ring-content">
              <div class="ring-icon-box">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
              </div>
              <h3 class="ring-title">Interior Zones &amp; Safe Storage</h3>
              <p class="ring-desc">
                If an intruder breaches the perimeter, your interior setup must immediately trigger alarms, notify emergency services, and deny access to critical assets.
              </p>
              <ul class="ring-checklist">
                <li>
                  <svg class="check-icon" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                  <span><strong>Dual-Tech Motion Sensors:</strong> Combine Passive Infrared (PIR) with microwave radar to prevent pet false alarms while capturing intruders instantly.</span>
                </li>
                <li>
                  <svg class="check-icon" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                  <span><strong>Bolted Gun &amp; Valuables Safe:</strong> An unbolted safe under 500 lbs is easily wheeled out on a hand dolly. Anchor directly into basement concrete or floor joists.</span>
                </li>
                <li>
                  <svg class="check-icon" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                  <span><strong>Smart Lighting Presence Automations:</strong> Cycle lights across kitchen, living room, and upstairs on realistic schedules to simulate active occupancy.</span>
                </li>
              </ul>
            </div>
          </div>

          <!-- RING 4 -->
          <div class="ring-card">
            <div class="ring-indicator">
              <span class="ring-number">Ring 04</span>
              <span class="ring-name">Surveillance &amp; Failover</span>
            </div>
            <div class="ring-content">
              <div class="ring-icon-box">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
              </div>
              <h3 class="ring-title">Smart Surveillance &amp; Outage Resilience</h3>
              <p class="ring-desc">
                Modern thieves carry portable Wi-Fi jammers or snip cable lines. Resilient surveillance must remain active through power and internet outages.
              </p>
              <ul class="ring-checklist">
                <li>
                  <svg class="check-icon" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                  <span><strong>Overlapping Camera Coverage:</strong> Position cameras so each camera's blind spot is recorded by an adjacent camera with clear eye-level facial resolution.</span>
                </li>
                <li>
                  <svg class="check-icon" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                  <span><strong>Cellular Backup &amp; Battery UPS:</strong> Connect your modem, router, and alarm base station to an uninterruptible power supply (UPS) with 4G/5G failover.</span>
                </li>
                <li>
                  <svg class="check-icon" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                  <span><strong>Isolated IoT Guest Network:</strong> Segregate cameras and smart locks onto a dedicated 2.4 GHz WPA3 guest Wi-Fi network away from personal laptops and banking devices.</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ======================================================== -->
    <!-- SECTION 3: INTERACTIVE SECURITY RISK ASSESSMENT WIDGET  -->
    <!-- ======================================================== -->
    <section class="section section-calculator" id="security-calculator">
      <div class="container">
        <div class="calculator-card">
          <div class="calculator-header text-center">
            <span class="calc-badge">Free Interactive Assessment</span>
            <h2 class="calc-title">Test Your USA Home Security Risk Score</h2>
            <p class="calc-desc">
              Answer 5 quick questions about your home’s entry points, hardware, and routine. Our algorithm calculates your vulnerability index (0 to 100) and prescribes immediate corrective actions.
            </p>
          </div>

          <form id="audit-form" class="audit-form" onsubmit="event.preventDefault();">
            <!-- Question 1 -->
            <div class="form-question-group">
              <label class="question-label" for="q-property-type">
                <span class="q-num">1</span>
                <span>What style of residence do you live in?</span>
              </label>
              <select id="q-property-type" class="audit-select" required>
                <option value="suburban">Suburban Single-Family Home (Highest standalone risk)</option>
                <option value="urban">Urban Townhome / Row House (Shared walls, front/rear focus)</option>
                <option value="rural">Rural / Large Acreage (Extended police dispatch time)</option>
                <option value="apartment">Apartment / Condominium (Floor level access)</option>
              </select>
            </div>

            <!-- Question 2 -->
            <div class="form-question-group">
              <label class="question-label" for="q-door-locks">
                <span class="q-num">2</span>
                <span>What hardware protects your front &amp; exterior doors?</span>
              </label>
              <select id="q-door-locks" class="audit-select" required>
                <option value="builder">Standard builder handle lock / short 3/4" screws (High Vulnerability)</option>
                <option value="deadbolt-standard">Traditional deadbolt, standard strike plate (Moderate)</option>
                <option value="hardened">ANSI Grade 1 or 2 deadbolt + 3-inch screws into wall studs (Strong)</option>
                <option value="smart-fortified">Smart auto-locking deadbolt + strike plate reinforcement + metal door jam (Fortress)</option>
              </select>
            </div>

            <!-- Question 3 -->
            <div class="form-question-group">
              <label class="question-label" for="q-outdoor-lighting">
                <span class="q-num">3</span>
                <span>How is your outdoor lighting &amp; landscaping visibility?</span>
              </label>
              <select id="q-outdoor-lighting" class="audit-select" required>
                <option value="dark">Dark shadows, overgrown bushes over 3 feet near windows</option>
                <option value="basic">Standard porch light, turned on only when remembered</option>
                <option value="motion">Motion floodlights at corners, trimmed bushes</option>
                <option value="dusk-dawn">Automated dusk-to-dawn perimeter lighting + motion spotlights + CPTED sightlines</option>
              </select>
            </div>

            <!-- Question 4 -->
            <div class="form-question-group">
              <label class="question-label" for="q-alarm-setup">
                <span class="q-num">4</span>
                <span>What alarm and surveillance systems are installed?</span>
              </label>
              <select id="q-alarm-setup" class="audit-select" required>
                <option value="none">No cameras or security systems currently active</option>
                <option value="doorbell-only">Video doorbell only (Wi-Fi, cloud only)</option>
                <option value="diy-sensors">DIY alarm system with door/window sensors + cameras</option>
                <option value="pro-cellular">Professional 24/7 monitored alarm with cellular backup + battery UPS</option>
              </select>
            </div>

            <!-- Question 5 -->
            <div class="form-question-group">
              <label class="question-label" for="q-routine">
                <span class="q-num">5</span>
                <span>What are your vacation and absence protocols?</span>
              </label>
              <select id="q-routine" class="audit-select" required>
                <option value="vulnerable">Hidden spare key outside, packages sit on porch, mail piles up</option>
                <option value="moderate">Neighbors occasionally pick up packages, static light timer</option>
                <option value="strict">USPS mail hold, randomized smart interior lighting, no exterior keys</option>
              </select>
            </div>

            <div class="text-center calc-btn-wrapper">
              <button type="button" id="btn-calculate-score" class="btn btn-primary btn-lg">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                <span>Generate Security Score</span>
              </button>
            </div>
          </form>

          <!-- Result Card (Populated by JS) -->
          <div id="audit-result" class="audit-result" hidden>
            <div class="score-display">
              <div class="score-gauge">
                <span class="score-number" id="result-score-val">0</span>
                <span class="score-total">/ 100</span>
              </div>
              <div class="score-text">
                <div class="score-rating" id="result-rating-title">Calculating...</div>
                <p class="score-summary" id="result-summary-text">...</p>
              </div>
            </div>

            <div class="remedy-box">
              <h3 class="remedy-heading">Top 3 Immediate Priority Actions for Your Home:</h3>
              <ul class="remedy-list" id="result-recommendations">
                <!-- Injected via JavaScript -->
              </ul>
            </div>

            <div class="calc-footer-actions">
              <button type="button" class="btn btn-outline btn-sm" id="btn-print-audit">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 6 2 18 2 18 9"/><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/><rect x="6" y="14" width="12" height="8"/></svg>
                <span>Print Action Plan</span>
              </button>
              <a href="#checklist" class="btn btn-primary btn-sm">
                <span>View Full Hardening Checklist &darr;</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ======================================================== -->
    <!-- SECTION 4: SMART DIY VS PRO-MONITORED SYSTEMS            -->
    <!-- ======================================================== -->
    <section class="section section-dark" id="system-comparison">
      <div class="container">
        <div class="section-header text-center">
          <div class="section-kicker">Equipment &amp; Tech Guide</div>
          <h2 class="section-title">Smart DIY vs. Pro-Monitored Systems in the USA</h2>
          <p class="section-subtitle">
            Should you install a self-monitored setup or pay a monthly fee for professional dispatch? Here is the honest breakdown of costs, failure points, and insurance perks.
          </p>
        </div>

        <div class="device-showcase-row">
          <div class="device-img-card">
            <img 
              src="images/smart-devices.jpg" 
              alt="Smart home security locks, video doorbell, motion camera, and contact sensors"
              class="device-img"
              loading="lazy"
              width="640" 
              height="360"
            >
            <div class="device-caption">Modern USA home security suite: smart deadbolt, video doorbell, spotlight cam, and entry contact sensors.</div>
          </div>
          <div class="device-text-card">
            <h3 class="device-heading">The Rise of Hybrid Protection</h3>
            <p>
              In the past, security was either a $50/month rigid 3-year contract with an alarm company or a lone deadbolt. Today, modern American homeowners can combine flexible smart hardware with on-demand cellular backup.
            </p>
            <div class="permit-warning">
              <div class="permit-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#f59e0b" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
              </div>
              <div class="permit-text">
                <strong>U.S. Municipal Alarm Permit Notice:</strong> Over 85% of American cities (including Phoenix, Dallas, and Atlanta) require an annual alarm permit ($10–$50). Unpermitted systems face fines up to $500 for false police dispatches. Always check your city’s police website.
              </div>
            </div>
          </div>
        </div>

        <!-- Comparison Table -->
        <div class="comparison-table-wrapper" role="region" aria-label="System Comparison Table" tabindex="0">
          <table class="comparison-table">
            <thead>
              <tr>
                <th scope="col">Feature Metric</th>
                <th scope="col" class="th-diy">Smart DIY Systems <br><small>(Ring, SimpliSafe, Eufy, Wyze)</small></th>
                <th scope="col" class="th-pro">Pro-Monitored Systems <br><small>(ADT, Vivint, Guardian)</small></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Upfront Hardware Cost</th>
                <td><span class="badge-price-low">$150 – $400</span> (Owner purchased)</td>
                <td><span class="badge-price-mid">$0 – $1,200</span> (Often rolled into contract)</td>
              </tr>
              <tr>
                <th scope="row">Monthly Fee</th>
                <td><span class="text-green">$0 – $10 / month</span> (Self-monitor or optional cloud)</td>
                <td><span class="text-amber">$35 – $65 / month</span> (Mandatory contract)</td>
              </tr>
              <tr>
                <th scope="row">Contracts &amp; Commitments</th>
                <td><span class="text-green">Zero Contract</span> (Cancel anytime)</td>
                <td><span class="text-red">24 to 36 Month Contract</span> with early termination fees</td>
              </tr>
              <tr>
                <th scope="row">Police Dispatch Mechanism</th>
                <td>Owner must verify phone notification and call local 911</td>
                <td><span class="text-green">UL-Certified 24/7 Monitoring Station</span> calls police dispatch</td>
              </tr>
              <tr>
                <th scope="row">Internet / Power Outage Resilience</th>
                <td>Moderate (Needs battery backup base + cellular add-on)</td>
                <td><span class="text-green">High</span> (Built-in LTE cellular chip &amp; 24-hr battery)</td>
              </tr>
              <tr>
                <th scope="row">Homeowners Insurance Discount</th>
                <td>5% – 10% (Requires proof of active monitoring)</td>
                <td><span class="text-green">10% – 15%</span> (Provides UL Alarm Certificate)</td>
              </tr>
              <tr>
                <th scope="row">Best Suited For</th>
                <td>Tech-savvy homeowners, renters, budget-conscious families</td>
                <td>Large estates, frequent travelers, families wanting hands-off security</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <!-- ======================================================== -->
    <!-- SECTION 5: USA REGIONAL & CLIMATE DEFENSE GUIDE          -->
    <!-- ======================================================== -->
    <section class="section" id="regional-guide">
      <div class="container">
        <div class="section-header text-center">
          <div class="section-kicker">Coast-to-Coast Hardening</div>
          <h2 class="section-title">USA Regional &amp; Climate Security Guide</h2>
          <p class="section-subtitle">
            A security strategy in suburban Minnesota during a sub-zero blizzard is fundamentally different from a hurricane-prone Florida estate or a dry Arizona desert home.
          </p>
        </div>

        <div class="regional-tabs">
          <div class="tab-nav" role="tablist" aria-label="Regional Security Tabs">
            <button class="tab-btn active" role="tab" aria-selected="true" data-tab="tab-northeast">Northeast &amp; Midwest</button>
            <button class="tab-btn" role="tab" aria-selected="false" data-tab="tab-south">South &amp; Gulf Coast</button>
            <button class="tab-btn" role="tab" aria-selected="false" data-tab="tab-southwest">Southwest &amp; Desert</button>
            <button class="tab-btn" role="tab" aria-selected="false" data-tab="tab-rural">Rural &amp; Large Acreage</button>
          </div>

          <div class="tab-content-area">
            <!-- TAB 1: Northeast & Midwest -->
            <div class="tab-panel active" id="tab-northeast" role="tabpanel">
              <div class="tab-panel-grid">
                <div class="tab-panel-info">
                  <h3 class="panel-title">Winter Freezes &amp; Sub-Zero Battery Survival</h3>
                  <p class="panel-lead">
                    Lithium-ion batteries in wireless cameras (such as Ring and Nest) drop voltage rapidly below 0&deg;F and will refuse to recharge until warmed, creating blind spots during winter vacation periods.
                  </p>
                  <ul class="panel-list">
                    <li><strong>Hardwire Outdoor Cameras:</strong> Run low-voltage doorbell wiring or Power-over-Ethernet (PoE) to avoid relying on lithium batteries in sub-zero temps.</li>
                    <li><strong>Freeze Alert Temperature Sensors:</strong> Install internal water freeze sensors next to basement plumbing to alert you before pipe bursts while away.</li>
                    <li><strong>Snow Egress Clearance:</strong> Keep snow cleared from first-floor egress windows and basement hatch doors to avoid jamming emergency exits.</li>
                  </ul>
                </div>
                <div class="tab-panel-sidebar">
                  <div class="panel-badge-card">
                    <span class="sidebar-kicker">States Aligned</span>
                    <p class="states-list">NY, PA, IL, OH, MI, MN, WI, MA, ME, IN</p>
                    <div class="badge-tip">
                      <strong>Pro Tip:</strong> Silicone weather sleeves prevent moisture intrusion from freezing into deadbolt keyways.
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- TAB 2: South & Gulf Coast -->
            <div class="tab-panel" id="tab-south" role="tabpanel" hidden>
              <div class="tab-panel-grid">
                <div class="tab-panel-info">
                  <h3 class="panel-title">Hurricanes, High Humidity &amp; Storm Outages</h3>
                  <p class="panel-lead">
                    Gulf coast climates experience severe salt-air corrosion, tropical downpours, and frequent prolonged power grid blackouts following hurricanes.
                  </p>
                  <ul class="panel-list">
                    <li><strong>IP67 Waterproof Enclosures:</strong> Standard IP65 cameras allow water vapor condensation during torrential Gulf cloudbursts. Require IP67 rating.</li>
                    <li><strong>Hurricane Shutter Dual-Locks:</strong> Ensure storm shutters have internal locking bolts so they cannot be pried open as a concealed entry point.</li>
                    <li><strong>Cellular &amp; Solar Backup:</strong> After major hurricanes, internet cables are shredded. Standalone solar panels and 4G cellular links keep eyes online.</li>
                  </ul>
                </div>
                <div class="tab-panel-sidebar">
                  <div class="panel-badge-card">
                    <span class="sidebar-kicker">States Aligned</span>
                    <p class="states-list">FL, TX, LA, GA, NC, SC, AL, MS</p>
                    <div class="badge-tip">
                      <strong>Pro Tip:</strong> Coat brass and steel exterior padlocks with marine-grade silicone lubricant to prevent salt-air seizure.
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- TAB 3: Southwest & Desert -->
            <div class="tab-panel" id="tab-southwest" role="tabpanel" hidden>
              <div class="tab-panel-grid">
                <div class="tab-panel-info">
                  <h3 class="panel-title">Extreme Heat, Sun Glare &amp; Stucco Hardening</h3>
                  <p class="panel-lead">
                    Ambient temperatures exceeding 115&deg;F trigger thermal shutdowns on outdoor electronics, while intense sunlight washes out camera sensors unless Wide Dynamic Range (WDR) is active.
                  </p>
                  <ul class="panel-list">
                    <li><strong>Thermal Overheat Shields:</strong> Never mount cameras on unshaded southern-facing stucco walls. Use sunshades or eave soffit mounts.</li>
                    <li><strong>WDR (Wide Dynamic Range):</strong> Essential for camera sensors to balance harsh desert sun against pitch-black shadows under porches.</li>
                    <li><strong>Masonry Stud Anchors:</strong> When anchoring strike plates into concrete block or stucco framing, use Tapcon masonry screws rather than standard wood screws.</li>
                  </ul>
                </div>
                <div class="tab-panel-sidebar">
                  <div class="panel-badge-card">
                    <span class="sidebar-kicker">States Aligned</span>
                    <p class="states-list">AZ, NV, NM, UT, Southern CA</p>
                    <div class="badge-tip">
                      <strong>Pro Tip:</strong> Install UV-rated conduit to protect exterior cabling from sun embrittlement and cracking.
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- TAB 4: Rural & Large Acreage -->
            <div class="tab-panel" id="tab-rural" role="tabpanel" hidden>
              <div class="tab-panel-grid">
                <div class="tab-panel-info">
                  <h3 class="panel-title">Extended Police Dispatch Times &amp; Long Perimeters</h3>
                  <p class="panel-lead">
                    In rural America, sheriff dispatch response times can exceed 25 to 45 minutes. Early detection at the property line is mandatory to give families adequate warning.
                  </p>
                  <ul class="panel-list">
                    <li><strong>Driveway Infrared Beam Sensors:</strong> Solar-powered dual-beam sensors transmit a wireless chime up to 1/2 mile when a vehicle enters the driveway.</li>
                    <li><strong>Solar LTE Trail / Security Cameras:</strong> Position cellular cameras at gate entrances to capture license plates before intruders reach the main house.</li>
                    <li><strong>High-Decibel Siren (110dB+):</strong> Exterior sirens that echo across acreage immediately signal to intruders that their presence is detected.</li>
                  </ul>
                </div>
                <div class="tab-panel-sidebar">
                  <div class="panel-badge-card">
                    <span class="sidebar-kicker">States Aligned</span>
                    <p class="states-list">MT, WY, ID, KS, NE, OK, KY, TN, Rural Counties</p>
                    <div class="badge-tip">
                      <strong>Pro Tip:</strong> Prominently display clearly readable reflective street address numbers at the roadway so emergency EMS/sheriffs find you quickly.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ======================================================== -->
    <!-- SECTION 6: INTERACTIVE HARDENING CHECKLIST               -->
    <!-- ======================================================== -->
    <section class="section section-checklist" id="checklist">
      <div class="container">
        <div class="section-header text-center">
          <div class="section-kicker">Interactive Roadmap</div>
          <h2 class="section-title">The Complete Home Hardening Checklist</h2>
          <p class="section-subtitle">
            Tick off each upgrade as you complete it. Your progress is saved automatically in your browser's local storage so you can return to it anytime.
          </p>
          <div class="checklist-progress-bar-container">
            <div class="progress-info">
              <span class="progress-text">Checklist Progress: <strong id="checklist-counter">0 / 12</strong> Completed</span>
              <span class="progress-percent" id="checklist-pct">0%</span>
            </div>
            <div class="progress-track">
              <div class="progress-fill" id="checklist-progress-fill" style="width: 0%;"></div>
            </div>
          </div>
        </div>

        <div class="checklist-categories-grid">
          <!-- Phase 1: Weekend Quick Wins -->
          <div class="checklist-tier-card">
            <div class="tier-header tier-easy">
              <span class="tier-phase">Phase 1</span>
              <h3 class="tier-title">Weekend Quick Wins</h3>
              <span class="tier-budget">Budget: Under $50</span>
            </div>
            <ul class="checklist-items">
              <li class="check-item">
                <input type="checkbox" id="chk-1" class="custom-chk" data-chk-id="chk-1">
                <label for="chk-1">
                  <strong>Replace strike plate screws with 3" steel screws</strong>
                  <span>Anchors the door into the 2x4 framing stud rather than decorative door casing.</span>
                </label>
              </li>
              <li class="check-item">
                <input type="checkbox" id="chk-2" class="custom-chk" data-chk-id="chk-2">
                <label for="chk-2">
                  <strong>Prune shrubbery according to the 3/7 CPTED rule</strong>
                  <span>Hedges below 3 feet, tree canopies above 7 feet to preserve clear sightlines.</span>
                </label>
              </li>
              <li class="check-item">
                <input type="checkbox" id="chk-3" class="custom-chk" data-chk-id="chk-3">
                <label for="chk-3">
                  <strong>Install sliding door charley bar or track rod</strong>
                  <span>Prevents patio sliders from being forced open or popped out of the exterior track.</span>
                </label>
              </li>
              <li class="check-item">
                <input type="checkbox" id="chk-4" class="custom-chk" data-chk-id="chk-4">
                <label for="chk-4">
                  <strong>Eliminate exterior "fake rock" spare keys</strong>
                  <span>Remove hidden keys from porch fixtures; give spares to trusted neighbors instead.</span>
                </label>
              </li>
            </ul>
          </div>

          <!-- Phase 2: Essential Fortification -->
          <div class="checklist-tier-card">
            <div class="tier-header tier-medium">
              <span class="tier-phase">Phase 2</span>
              <h3 class="tier-title">Essential Fortification</h3>
              <span class="tier-budget">Budget: $100 – $300</span>
            </div>
            <ul class="checklist-items">
              <li class="check-item">
                <input type="checkbox" id="chk-5" class="custom-chk" data-chk-id="chk-5">
                <label for="chk-5">
                  <strong>Upgrade deadbolts to ANSI/BHMA Grade 1</strong>
                  <span>Provides anti-pick pins, hardened steel anti-saw rollers, and kick resistance.</span>
                </label>
              </li>
              <li class="check-item">
                <input type="checkbox" id="chk-6" class="custom-chk" data-chk-id="chk-6">
                <label for="chk-6">
                  <strong>Apply 8-mil clear security film to sidelights</strong>
                  <span>Prevents smash-and-reach break-ins around front doors and French windows.</span>
                </label>
              </li>
              <li class="check-item">
                <input type="checkbox" id="chk-7" class="custom-chk" data-chk-id="chk-7">
                <label for="chk-7">
                  <strong>Install motion-activated LED exterior floodlights</strong>
                  <span>Covers blind corners, driveway approaches, and dark side-yard fences.</span>
                </label>
              </li>
              <li class="check-item">
                <input type="checkbox" id="chk-8" class="custom-chk" data-chk-id="chk-8">
                <label for="chk-8">
                  <strong>Add heavy-duty door jamb reinforcement armor</strong>
                  <span>Reinforces the weakest point of the frame with a 48-inch steel reinforcement shield.</span>
                </label>
              </li>
            </ul>
          </div>

          <!-- Phase 3: Total Peace of Mind -->
          <div class="checklist-tier-card">
            <div class="tier-header tier-advanced">
              <span class="tier-phase">Phase 3</span>
              <h3 class="tier-title">Comprehensive Hardening</h3>
              <span class="tier-budget">Budget: $500+</span>
            </div>
            <ul class="checklist-items">
              <li class="check-item">
                <input type="checkbox" id="chk-9" class="custom-chk" data-chk-id="chk-9">
                <label for="chk-9">
                  <strong>Install cellular-backed smart alarm hub</strong>
                  <span>Transmits alarms during Wi-Fi jamming or when external phone/cable lines are severed.</span>
                </label>
              </li>
              <li class="check-item">
                <input type="checkbox" id="chk-10" class="custom-chk" data-chk-id="chk-10">
                <label for="chk-10">
                  <strong>Anchor heavy valuables safe into concrete or joists</strong>
                  <span>Lag-bolt safe to floor studs in a discreet location outside the master bedroom.</span>
                </label>
              </li>
              <li class="check-item">
                <input type="checkbox" id="chk-11" class="custom-chk" data-chk-id="chk-11">
                <label for="chk-11">
                  <strong>Configure uninterrupted power supply (UPS) for Wi-Fi &amp; NVR</strong>
                  <span>Guarantees 2-4 hours of video recording during power grid blackouts or tripped breakers.</span>
                </label>
              </li>
              <li class="check-item">
                <input type="checkbox" id="chk-12" class="custom-chk" data-chk-id="chk-12">
                <label for="chk-12">
                  <strong>Register alarm permit with municipal police department</strong>
                  <span>Ensures authorized emergency dispatch and prevents steep municipal false alarm fines.</span>
                </label>
              </li>
            </ul>
          </div>
        </div>

        <div class="checklist-reset-row text-center">
          <button type="button" class="btn btn-outline btn-sm" id="btn-reset-checklist">Reset Checklist Progress</button>
        </div>
      </div>
    </section>

    <!-- ======================================================== -->
    <!-- SECTION 7: SAFE ROOM & FAMILY 911 PROTOCOL               -->
    <!-- ======================================================== -->
    <section class="section section-dark" id="safe-room">
      <div class="container">
        <div class="safe-room-grid">
          <div class="safe-room-text">
            <div class="section-kicker">Emergency Preparedness</div>
            <h2 class="section-title">The Family Safe Room &amp; 911 Dispatch Protocol</h2>
            <p class="section-lead">
              If an intruder enters while your family is home, confrontation is the highest-risk outcome. A pre-designated safe room buys vital time for armed police response.
            </p>

            <div class="safe-room-steps">
              <div class="step-item">
                <div class="step-num">1</div>
                <div class="step-content">
                  <h4>Hardening the Room Door</h4>
                  <p>Choose an interior room with a phone signal (often the primary master suite). Replace the hollow-core door with a solid-core wood or metal door and install a heavy-duty deadbolt.</p>
                </div>
              </div>
              <div class="step-item">
                <div class="step-num">2</div>
                <div class="step-content">
                  <h4>Essential Safe Room Supplies</h4>
                  <p>Keep a portable phone power bank, high-lumen tactical flashlight, emergency medical kit, and defensive deterrent (pepper gel or legal firearm) in an accessible biometric vault.</p>
                </div>
              </div>
              <div class="step-item">
                <div class="step-num">3</div>
                <div class="step-content">
                  <h4>What to Say When Dialing 911</h4>
                  <div class="script-box">
                    <p><em>"My address is [123 Maple St]. There is an active break-in. I have my family locked inside the master bedroom safe room. I am unarmed / legally armed. Please send police immediately."</em></p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="safe-room-visual">
            <img 
              src="images/family-security.jpg" 
              alt="Happy American family relaxing safely in their living room with peace of mind"
              class="safe-family-img"
              loading="lazy"
              width="640" 
              height="360"
            >
            <div class="peace-quote-card">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#0ea5e9" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
              <p>"The best home security system is the one that gives your family unshakeable peace of mind before you ever need to think about it."</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ======================================================== -->
    <!-- SECTION 8: FREQUENTLY ASKED QUESTIONS (ACCORDION)        -->
    <!-- ======================================================== -->
    <section class="section" id="faq">
      <div class="container container-sm">
        <div class="section-header text-center">
          <div class="section-kicker">Knowledge Base</div>
          <h2 class="section-title">Frequently Asked Questions</h2>
          <p class="section-subtitle">
            Answers to common questions regarding home security hardware, legal considerations, and burglary deterrence in the United States.
          </p>
        </div>

        <div class="faq-accordion-group">
          <!-- FAQ 1 -->
          <details class="faq-item" open>
            <summary class="faq-summary">
              <span class="faq-question">Do security yard signs and window decals actually deter burglars?</span>
              <svg class="faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
            </summary>
            <div class="faq-answer">
              <p>
                <strong>Yes, but with caveats.</strong> Studies by the University of North Carolina Charlotte Department of Criminal Justice surveyed convicted burglars and found that <strong>over 60%</strong> indicated the presence of security signs or cameras caused them to seek an alternative target.
              </p>
              <p>
                However, experienced thieves can distinguish generic $5 novelty signs from legitimate active monitoring signs. It is best to pair signs with real, visible deterrence like camera lenses and motion floodlights.
              </p>
            </div>
          </details>

          <!-- FAQ 2 -->
          <details class="faq-item">
            <summary class="faq-summary">
              <span class="faq-question">Why are 3-inch screws on door strike plates so important?</span>
              <svg class="faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
            </summary>
            <div class="faq-answer">
              <p>
                When homes are constructed, contractors typically install deadbolts with 3/4-inch screws that only penetrate the soft pine door jamb or decorative molding. Under the force of an adult kick (typically 200–400 lbs of dynamic force), the wood splits instantaneously.
              </p>
              <p>
                Replacing these with <strong>3-inch case-hardened steel screws</strong> drives directly through the jamb and anchors deeply into the structural 2x4 framing studs of the home, multiplying kick resistance by more than 400%.
              </p>
            </div>
          </details>

          <!-- FAQ 3 -->
          <details class="faq-item">
            <summary class="faq-summary">
              <span class="faq-question">Can burglars jam my wireless smart security cameras with Wi-Fi deauthers?</span>
              <svg class="faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
            </summary>
            <div class="faq-answer">
              <p>
                <strong>Yes, this is an emerging threat across the US.</strong> Tech-savvy intruders use cheap handheld Wi-Fi deauthentication tools to flood the 2.4 GHz frequency, causing battery-powered cloud cameras to drop offline and fail to record.
              </p>
              <p>
                To defend against this: (1) Choose cameras with <strong>onboard microSD or local NVR recording</strong> so video continues saving even if Wi-Fi drops; (2) Upgrade to <strong>WPA3 Wi-Fi encryption</strong> with Protected Management Frames (PMF) which blocks deauth attacks; (3) Use hardwired Power-over-Ethernet (PoE) cameras for critical perimeter angles.
              </p>
            </div>
          </details>

          <!-- FAQ 4 -->
          <details class="faq-item">
            <summary class="faq-summary">
              <span class="faq-question">Will installing a home security system lower my US homeowner's insurance policy?</span>
              <svg class="faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
            </summary>
            <div class="faq-answer">
              <p>
                Most major US property insurers (including State Farm, Allstate, Travelers, and Liberty Mutual) offer discounts between <strong>5% and 20%</strong> on homeowner premiums.
              </p>
              <p>
                To qualify for the maximum discount, insurers usually require a <em>Central Station Monitored Alarm Certificate</em> covering both burglary and connected smoke/fire monitoring. Contact your insurance agent to verify which certifications unlock the highest deduction.
              </p>
            </div>
          </details>

          <!-- FAQ 5 -->
          <details class="faq-item">
            <summary class="faq-summary">
              <span class="faq-question">Are smart locks as secure as traditional mechanical deadbolts?</span>
              <svg class="faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
            </summary>
            <div class="faq-answer">
              <p>
                Physical security depends on the lock’s mechanical bolt rating, not whether it has Bluetooth or a touchscreen. A smart lock rated <strong>ANSI/BHMA Grade 1</strong> (such as high-end models from Schlage or Yale) offers identical physical kick resistance to commercial mechanical deadbolts.
              </p>
              <p>
                The primary vulnerability in cheap smart locks is cybersecurity (weak passwords) or battery failure. Choose models with AES-128/256 encryption, two-factor authentication (2FA), and a physical backup keyway or emergency 9V battery jump terminal.
              </p>
            </div>
          </details>

          <!-- FAQ 6 -->
          <details class="faq-item">
            <summary class="faq-summary">
              <span class="faq-question">How do I prevent false alarms from triggering steep municipal fines?</span>
              <svg class="faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
            </summary>
            <div class="faq-answer">
              <p>
                Over 90% of alarm calls dispatched to US police departments are false alarms (caused by pets, fluttering blinds, or forgotten codes). To avoid escalating fines ($100–$500 per incident):
              </p>
              <ul>
                <li>Enable <strong>video verification</strong> so monitoring dispatchers only alert police when a person is visibly verified on camera.</li>
                <li>Use pet-immune motion sensors set to ignore animals under 45–60 lbs.</li>
                <li>Teach houseguests and pet sitters clear verbal duress vs cancel passcodes.</li>
                <li>Regularly check sensor battery health before heading out of town.</li>
              </ul>
            </div>
          </details>
        </div>
      </div>
    </section>

    <!-- ======================================================== -->
    <!-- CTA FINAL SECTION                                        -->
    <!-- ======================================================== -->
    <section class="section section-cta-banner">
      <div class="container text-center">
        <div class="cta-box">
          <h2 class="cta-title">Start Fortifying Your Home Today</h2>
          <p class="cta-subtitle">
            Don't wait for a suspicious vehicle or neighborhood incident to take action. Implement the 4-layer defense starting with a simple $10 pack of 3-inch screws this weekend.
          </p>
          <div class="cta-buttons">
            <a href="#checklist" class="btn btn-primary btn-lg">View Action Checklist</a>
            <button type="button" class="btn btn-secondary btn-lg modal-trigger" data-modal="terms-modal">Read Terms &amp; Advisory</button>
          </div>
        </div>
      </div>
    </section>
  </main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
