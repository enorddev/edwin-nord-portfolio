/* ============================================================
   Edwin Nord Portfolio — main.js
============================================================ */

(function () {
  'use strict';

  /* ----------------------------------------------------------
     NAV: Scroll shadow + mobile toggle
  ---------------------------------------------------------- */
  const nav      = document.getElementById('site-nav');
  const navOpen  = document.getElementById('nav-open');
  const navClose = document.getElementById('nav-close');
  const navMob   = document.getElementById('nav-mobile');

  window.addEventListener('scroll', () => {
    nav.classList.toggle('scrolled', window.scrollY > 30);
  }, { passive: true });

  function openMobileNav() {
    navMob.classList.add('open');
    navOpen.classList.add('open');
    document.body.style.overflow = 'hidden';
  }

  window.closeMobileNav = function () {
    navMob.classList.remove('open');
    navOpen.classList.remove('open');
    document.body.style.overflow = '';
  };

  if (navOpen)  navOpen.addEventListener('click', openMobileNav);
  if (navClose) navClose.addEventListener('click', closeMobileNav);

  /* ----------------------------------------------------------
     SMOOTH SCROLL for anchor links
  ---------------------------------------------------------- */
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const target = document.querySelector(this.getAttribute('href'));
      if (!target) return;
      e.preventDefault();
      const offset = 72; // nav height
      const top = target.getBoundingClientRect().top + window.scrollY - offset;
      window.scrollTo({ top, behavior: 'smooth' });
    });
  });

  /* ----------------------------------------------------------
     REVEAL ON SCROLL (IntersectionObserver)
  ---------------------------------------------------------- */
  const revealEls = document.querySelectorAll('.reveal');

  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.12 }
    );
    revealEls.forEach(el => observer.observe(el));
  } else {
    revealEls.forEach(el => el.classList.add('visible'));
  }

  /* ----------------------------------------------------------
     HERO TYPEWRITER
  ---------------------------------------------------------- */
  const phrases = [
    'Front-End Developer',
    'React Developer',
    'WordPress Specialist',
    'UI-Focused Builder',
  ];

  const subtitleEl = document.querySelector('.hero-subtitle');
  if (subtitleEl) {
    const originalText = subtitleEl.textContent;

    // Append a small animated badge after the existing text
    const badge = document.createElement('span');
    badge.style.cssText = `
      display: inline-block;
      margin-left: 0.5rem;
      font-family: var(--font-mono);
      font-size: 0.75rem;
      letter-spacing: 0.1em;
      color: var(--accent);
      background: var(--accent-light);
      padding: 0.2em 0.6em;
      border-radius: 3px;
      vertical-align: middle;
    `;

    let phraseIndex = 0;
    let charIndex = 0;
    let deleting = false;

    function tick() {
      const current = phrases[phraseIndex];
      if (deleting) {
        charIndex--;
        badge.textContent = current.slice(0, charIndex);
        if (charIndex === 0) {
          deleting = false;
          phraseIndex = (phraseIndex + 1) % phrases.length;
          setTimeout(tick, 500);
          return;
        }
        setTimeout(tick, 50);
      } else {
        charIndex++;
        badge.textContent = current.slice(0, charIndex);
        if (charIndex === current.length) {
          deleting = true;
          setTimeout(tick, 2200);
          return;
        }
        setTimeout(tick, 80);
      }
    }

    subtitleEl.appendChild(badge);
    setTimeout(tick, 1800);
  }

  /* ----------------------------------------------------------
     CONTACT FORM — EmailJS + fallback WordPress AJAX
  ---------------------------------------------------------- */
  const form        = document.getElementById('contact-form');
  const submitBtn   = document.getElementById('form-submit');
  const submitText  = document.getElementById('submit-text');
  const successMsg  = document.getElementById('form-success');

  if (form) {
    // Init EmailJS — replace with your actual public key
    if (typeof emailjs !== 'undefined') {
      emailjs.init('GUY4sNoil3TacnxC0');
    }

    form.addEventListener('submit', async function (e) {
      e.preventDefault();

      const name    = document.getElementById('cf-name').value.trim();
      const email   = document.getElementById('cf-email').value.trim();
      const subject = document.getElementById('cf-subject').value.trim();
      const message = document.getElementById('cf-message').value.trim();

      if (!name || !email || !message) {
        alert('Please fill in all required fields.');
        return;
      }

      submitBtn.disabled = true;
      submitText.textContent = 'Sending…';

      const params = {
        from_name : name,
        from_email: email,
        subject   : subject || 'Portfolio Contact',
        message,
      };

      try {
        if (typeof emailjs !== 'undefined') {
          await emailjs.send('YOUR_SERVICE_ID', 'YOUR_TEMPLATE_ID', params);
        } else {
          // Fallback: WordPress AJAX
          const nonce = document.getElementById('en_contact_nonce_field')?.value || '';
          const fd = new FormData();
          fd.append('action', 'en_contact');
          fd.append('nonce', nonce);
          Object.entries(params).forEach(([k, v]) => fd.append(k, v));
          const resp = await fetch(EN.ajaxUrl, { method: 'POST', body: fd });
          const json = await resp.json();
          if (!json.success) throw new Error(json.data?.message || 'Send failed');
        }

        form.reset();
        successMsg.style.display = 'block';
        submitText.textContent = 'Sent!';
        setTimeout(() => {
          successMsg.style.display = 'none';
          submitText.textContent = 'Send Message';
          submitBtn.disabled = false;
        }, 5000);

      } catch (err) {
        console.error('Contact form error:', err);
        alert('Something went wrong. Please try again or reach out on LinkedIn.');
        submitText.textContent = 'Send Message';
        submitBtn.disabled = false;
      }
    });
  }

})();
