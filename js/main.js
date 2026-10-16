/**
 * HomeSecure - USA Home Security Field Guide
 * Client-Side Interactivity, Risk Calculator & Storage
 */

document.addEventListener('DOMContentLoaded', () => {
  initNavbar();
  initMobileMenu();
  initModals();
  initRiskCalculator();
  initChecklist();
  initRegionalTabs();
});

/* ==========================================================================
   1. NAVBAR & SCROLL SPY
   ========================================================================== */
function initNavbar() {
  const header = document.getElementById('navbar');
  if (!header) return;

  const handleScroll = () => {
    if (window.scrollY > 40) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  };

  window.addEventListener('scroll', handleScroll, { passive: true });
  handleScroll();

  // Scroll spy for desktop nav links
  const sections = document.querySelectorAll('section[id]');
  const navLinks = document.querySelectorAll('.desktop-nav .nav-link');

  if (sections.length && navLinks.length) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const id = entry.target.getAttribute('id');
          navLinks.forEach(link => {
            const href = link.getAttribute('href');
            if (href && (href === `#${id}` || href.endsWith(`#${id}`))) {
              link.classList.add('active');
            } else {
              link.classList.remove('active');
            }
          });
        }
      });
    }, { threshold: 0.35 });

    sections.forEach(sec => observer.observe(sec));
  }
}

/* ==========================================================================
   2. MOBILE MENU DRAWER
   ========================================================================== */
function initMobileMenu() {
  const toggleBtn = document.getElementById('mobile-toggle-btn');
  const mobileMenu = document.getElementById('mobile-menu');

  if (!toggleBtn || !mobileMenu) return;

  const toggle = (force) => {
    const isExpanded = force !== undefined ? force : toggleBtn.getAttribute('aria-expanded') !== 'true';
    toggleBtn.setAttribute('aria-expanded', String(isExpanded));
    mobileMenu.hidden = !isExpanded;
  };

  toggleBtn.addEventListener('click', () => toggle());

  // Close mobile menu when clicking any link inside it
  mobileMenu.querySelectorAll('a, button').forEach(el => {
    el.addEventListener('click', () => toggle(false));
  });

  // Close on Escape
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && !mobileMenu.hidden) {
      toggle(false);
      toggleBtn.focus();
    }
  });
}

/* ==========================================================================
   3. NATIVE <dialog> MODALS (TERMS & PRIVACY)
   ========================================================================== */
function initModals() {
  const triggers = document.querySelectorAll('[data-modal]');
  const closeButtons = document.querySelectorAll('[data-close-modal]');

  triggers.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      const modalId = btn.getAttribute('data-modal');
      const dialog = document.getElementById(modalId);
      if (dialog && typeof dialog.showModal === 'function') {
        dialog.showModal();
        document.body.style.overflow = 'hidden';
      }
    });
  });

  closeButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      const dialog = btn.closest('dialog');
      if (dialog) {
        dialog.close();
      }
    });
  });

  // Close when clicking dialog backdrop (light dismiss)
  document.querySelectorAll('dialog.legal-dialog').forEach(dialog => {
    dialog.addEventListener('click', (e) => {
      const rect = dialog.getBoundingClientRect();
      const isInDialog = (
        rect.top <= e.clientY &&
        e.clientY <= rect.top + rect.height &&
        rect.left <= e.clientX &&
        e.clientX <= rect.left + rect.width
      );
      if (!isInDialog) {
        dialog.close();
      }
    });

    dialog.addEventListener('close', () => {
      document.body.style.overflow = '';
    });
  });
}

/* ==========================================================================
   4. INTERACTIVE SECURITY RISK CALCULATOR
   ========================================================================== */
function initRiskCalculator() {
  const calcBtn = document.getElementById('btn-calculate-score');
  const resultCard = document.getElementById('audit-result');
  const scoreNum = document.getElementById('result-score-val');
  const ratingTitle = document.getElementById('result-rating-title');
  const summaryText = document.getElementById('result-summary-text');
  const remediesList = document.getElementById('result-recommendations');
  const printBtn = document.getElementById('btn-print-audit');

  if (!calcBtn || !resultCard) return;

  calcBtn.addEventListener('click', () => {
    const q1 = document.getElementById('q-property-type').value;
    const q2 = document.getElementById('q-door-locks').value;
    const q3 = document.getElementById('q-outdoor-lighting').value;
    const q4 = document.getElementById('q-alarm-setup').value;
    const q5 = document.getElementById('q-routine').value;

    let score = 0;
    const recommendations = [];

    // Scoring Q1: Property
    const q1Scores = { suburban: 10, urban: 12, rural: 8, apartment: 15 };
    score += q1Scores[q1] || 10;

    // Scoring Q2: Door Locks (Max 25)
    if (q2 === 'builder') {
      recommendations.push('Immediate Hazard: Replace factory 3/4" door strike plate screws with 3" case-hardened steel screws, and upgrade to an ANSI Grade 1 deadbolt to prevent single-kick breaches.');
    } else if (q2 === 'deadbolt-standard') {
      score += 12;
      recommendations.push('Door Hardening: Your deadbolt is functional, but vulnerable if standard short screws were used. Upgrade to 3-inch screws and add a heavy-duty strike plate reinforcement box.');
    } else if (q2 === 'hardened') {
      score += 22;
    } else if (q2 === 'smart-fortified') {
      score += 25;
    }

    // Scoring Q3: Outdoor Lighting (Max 20)
    if (q3 === 'dark') {
      score += 2;
      recommendations.push('Perimeter Visibility: Trim all shrubs below 3 feet (CPTED rule) and install automated dusk-to-dawn exterior LED spotlights along side yards and entryways.');
    } else if (q3 === 'basic') {
      score += 8;
      recommendations.push('Lighting Automation: Upgrade manual porch lights to smart photocell dusk-to-dawn sensors or dual-head motion-activated LED floodlights.');
    } else if (q3 === 'motion') {
      score += 15;
    } else if (q3 === 'dusk-dawn') {
      score += 20;
    }

    // Scoring Q4: Alarm & Cameras (Max 20)
    if (q4 === 'none') {
      recommendations.push('Surveillance & Warning: Install at least a video doorbell and audible contact sensors on all first-floor entry doors and sliding glass patios.');
    } else if (q4 === 'doorbell-only') {
      score += 8;
      recommendations.push('Alarm Expansion: Video doorbells protect packages, but lack rear perimeter coverage. Add rear floodlight cameras and an alarm base station with battery failover.');
    } else if (q4 === 'diy-sensors') {
      score += 15;
    } else if (q4 === 'pro-cellular') {
      score += 20;
    }

    // Scoring Q5: Routine & Habits (Max 20)
    if (q5 === 'vulnerable') {
      recommendations.push('Routine Protection: Immediately remove outdoor "hidden spare keys" and submit a USPS vacation mail hold whenever leaving for over 48 hours.');
    } else if (q5 === 'moderate') {
      score += 10;
      recommendations.push('Occupancy Simulation: Set up smart lighting automations that mimic realistic room-to-room evening habits when away on vacation.');
    } else if (q5 === 'strict') {
      score += 20;
    }

    // Default safety recommendation if house is already well defended
    if (recommendations.length < 3) {
      recommendations.push('Routine Audit: Test all smoke and glass-break sensor batteries biannually, and confirm your local municipal alarm permit is registered.');
    }

    // Bound score
    const finalScore = Math.min(100, Math.max(15, score));

    // Determine category
    let rating = '';
    let summary = '';
    let gaugeColor = '';

    if (finalScore < 50) {
      rating = 'Critical Vulnerability Level';
      summary = 'Your home exhibits substantial vulnerabilities that burglars look for during 10-minute daylight break-ins. Immediate physical and perimeter upgrades are strongly advised.';
      gaugeColor = '#ef4444';
    } else if (finalScore < 78) {
      rating = 'Moderate Defense Level';
      summary = 'You have established basic deterrents, but remain vulnerable to forced kick-ins, power/Wi-Fi outages, or unobserved blind spots around secondary entryways.';
      gaugeColor = '#f59e0b';
    } else {
      rating = 'Fortress Level Security';
      summary = 'Outstanding! Your property incorporates layered CPTED sightlines, structural door reinforcement, and resilient surveillance. Maintain regular sensor battery tests.';
      gaugeColor = '#10b981';
    }

    // Render result
    resultCard.hidden = false;
    ratingTitle.textContent = rating;
    ratingTitle.style.color = gaugeColor;
    summaryText.textContent = summary;

    // Animate score counter
    animateNumber(scoreNum, 0, finalScore, 900);

    // Update gauge styling
    const gauge = document.querySelector('.score-gauge');
    if (gauge) {
      gauge.style.borderColor = gaugeColor;
      gauge.style.boxShadow = `0 0 25px ${gaugeColor}55`;
    }

    // Render Top 3 recommendations
    remediesList.innerHTML = '';
    recommendations.slice(0, 3).forEach(rec => {
      const li = document.createElement('li');
      li.textContent = rec;
      remediesList.appendChild(li);
    });

    // Smooth scroll to results
    resultCard.scrollIntoView({ behavior: 'smooth', block: 'start' });
  });

  // Print Action Plan button
  if (printBtn) {
    printBtn.addEventListener('click', () => {
      window.print();
    });
  }
}

function animateNumber(element, start, end, duration) {
  let startTime = null;
  const step = (timestamp) => {
    if (!startTime) startTime = timestamp;
    const progress = Math.min((timestamp - startTime) / duration, 1);
    const current = Math.floor(progress * (end - start) + start);
    element.textContent = current;
    if (progress < 1) {
      window.requestAnimationFrame(step);
    } else {
      element.textContent = end;
    }
  };
  window.requestAnimationFrame(step);
}

/* ==========================================================================
   5. INTERACTIVE CHECKLIST WITH LOCALSTORAGE
   ========================================================================== */
function initChecklist() {
  const checkboxes = document.querySelectorAll('.custom-chk');
  const counterEl = document.getElementById('checklist-counter');
  const pctEl = document.getElementById('checklist-pct');
  const fillEl = document.getElementById('checklist-progress-fill');
  const resetBtn = document.getElementById('btn-reset-checklist');

  if (!checkboxes.length) return;

  const STORAGE_KEY = 'homesecure_hardening_checklist';

  // Load saved state from localStorage
  const loadSavedState = () => {
    try {
      const saved = JSON.parse(localStorage.getItem(STORAGE_KEY) || '{}');
      checkboxes.forEach(chk => {
        const id = chk.getAttribute('data-chk-id');
        if (id && saved[id] === true) {
          chk.checked = true;
        }
      });
    } catch (err) {
      console.warn('LocalStorage unavailable for checklist:', err);
    }
    updateProgress();
  };

  // Save current state
  const saveState = () => {
    try {
      const state = {};
      checkboxes.forEach(chk => {
        const id = chk.getAttribute('data-chk-id');
        if (id) state[id] = chk.checked;
      });
      localStorage.setItem(STORAGE_KEY, JSON.stringify(state));
    } catch (err) {
      console.warn('Error saving checklist:', err);
    }
    updateProgress();
  };

  // Update progress bar & percentage
  const updateProgress = () => {
    const total = checkboxes.length;
    let checkedCount = 0;
    checkboxes.forEach(chk => {
      if (chk.checked) checkedCount++;
    });

    const pct = Math.round((checkedCount / total) * 100);

    if (counterEl) counterEl.textContent = `${checkedCount} / ${total}`;
    if (pctEl) pctEl.textContent = `${pct}%`;
    if (fillEl) fillEl.style.width = `${pct}%`;
  };

  // Event listeners
  checkboxes.forEach(chk => {
    chk.addEventListener('change', saveState);
  });

  // Reset progress
  if (resetBtn) {
    resetBtn.addEventListener('click', () => {
      if (confirm('Reset your home security checklist progress?')) {
        checkboxes.forEach(chk => { chk.checked = false; });
        try {
          localStorage.removeItem(STORAGE_KEY);
        } catch (e) {}
        updateProgress();
      }
    });
  }

  loadSavedState();
}

/* ==========================================================================
   6. REGIONAL CLIMATE TABS
   ========================================================================== */
function initRegionalTabs() {
  const tabButtons = document.querySelectorAll('.tab-btn');
  const tabPanels = document.querySelectorAll('.tab-panel');

  if (!tabButtons.length || !tabPanels.length) return;

  tabButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      const targetId = btn.getAttribute('data-tab');

      // Update button active state & ARIA
      tabButtons.forEach(b => {
        const isActive = (b === btn);
        b.classList.toggle('active', isActive);
        b.setAttribute('aria-selected', String(isActive));
      });

      // Update panels
      tabPanels.forEach(panel => {
        if (panel.id === targetId) {
          panel.hidden = false;
          panel.classList.add('active');
        } else {
          panel.hidden = true;
          panel.classList.remove('active');
        }
      });
    });
  });
}
