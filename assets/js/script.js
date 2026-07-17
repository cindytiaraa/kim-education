/* ============================================================
   KIM EDUCATION — script.js
   Vanilla JS only. No build step, no framework.
   ============================================================ */

document.addEventListener("DOMContentLoaded", function () {

  /* ---------- Init AOS ---------- */
  if (window.AOS) {
    AOS.init({
      duration: 700,
      once: true,
      offset: 60,
      easing: "ease-out-cubic",
    });
  }

  /* Remove preload guard once fonts/paint settle */
  requestAnimationFrame(() => {
    document.body.classList.remove("preload");
  });

  /* ============================================================
     NAVBAR — scrolled state + active link highlight
     ============================================================ */
  const nav = document.getElementById("kimNav");
  const navLinks = document.querySelectorAll(".nav-links a[data-nav]");
  const sections = Array.from(navLinks)
    .map((a) => document.getElementById(a.getAttribute("data-nav")))
    .filter(Boolean);

  function onScroll() {
    if (!nav) return;
    nav.classList.toggle("scrolled", window.scrollY > 40);

    // Active section highlight
    let currentId = null;
    const scrollPos = window.scrollY + window.innerHeight * 0.35;
    sections.forEach((sec) => {
      if (sec.offsetTop <= scrollPos) currentId = sec.id;
    });
    navLinks.forEach((a) => {
      a.classList.toggle("active", a.getAttribute("data-nav") === currentId);
    });
  }
  window.addEventListener("scroll", onScroll, { passive: true });
  onScroll();

  /* ============================================================
     MOBILE MENU
     ============================================================ */
  const navToggle = document.getElementById("navToggle");
  const mobileMenu = document.getElementById("mobileMenu");
  const closeMenu = document.getElementById("closeMenu");

  function openMobileMenu() {
    mobileMenu.classList.add("open");
    document.body.classList.add("no-scroll");
  }
  function closeMobileMenu() {
    mobileMenu.classList.remove("open");
    document.body.classList.remove("no-scroll");
  }
  if (navToggle) navToggle.addEventListener("click", openMobileMenu);
  if (closeMenu) closeMenu.addEventListener("click", closeMobileMenu);
  document.querySelectorAll(".mobile-menu a").forEach((a) => {
    a.addEventListener("click", closeMobileMenu);
  });

  /* ============================================================
     FLOATING ACTION BUTTON
     ============================================================ */
  const floatingActions = document.getElementById("floatingActions");
  const fabMain = document.getElementById("fabMain");
  if (fabMain) {
    fabMain.addEventListener("click", () => {
      floatingActions.classList.toggle("open");
    });
    document.querySelectorAll(".fab-menu a").forEach((a) => {
      a.addEventListener("click", () => floatingActions.classList.remove("open"));
    });
  }

  /* ============================================================
     COUNT-UP NUMBERS (hero stats + problem stats)
     ============================================================ */
  const counters = document.querySelectorAll("[data-count]");
  const counterObserver = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;
        const el = entry.target;
        counterObserver.unobserve(el);

        const target = parseInt(el.getAttribute("data-count"), 10) || 0;
        const suffix = el.getAttribute("data-suffix") || "";
        const duration = 1400;
        const start = performance.now();

        function tick(now) {
          const progress = Math.min((now - start) / duration, 1);
          const eased = 1 - Math.pow(1 - progress, 3); // ease-out-cubic
          const value = Math.floor(eased * target);
          el.textContent = value + suffix;
          if (progress < 1) requestAnimationFrame(tick);
          else el.textContent = target + suffix;
        }
        requestAnimationFrame(tick);
      });
    },
    { threshold: 0.5 }
  );
  counters.forEach((el) => counterObserver.observe(el));

  /* ============================================================
     WHY-LDPE PROPERTY BARS — trigger fill on view
     ============================================================ */
  const whyLdpe = document.querySelector(".why-ldpe");
  if (whyLdpe) {
    const ldpeObserver = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            whyLdpe.classList.add("in-view");
            ldpeObserver.unobserve(whyLdpe);
          }
        });
      },
      { threshold: 0.3 }
    );
    ldpeObserver.observe(whyLdpe);
  }

  /* ============================================================
     PLASTIC JOURNEY — draw the connecting line once in view
     ============================================================ */
  const journeyLine = document.getElementById("journeyLine");
  if (journeyLine) {
    const journeyObserver = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            journeyLine.classList.add("draw");
            journeyObserver.unobserve(journeyLine);
          }
        });
      },
      { threshold: 0.3 }
    );
    journeyObserver.observe(journeyLine);
  }

  /* ============================================================
     FAQ ACCORDION
     ============================================================ */
  const faqItems = document.querySelectorAll(".faq-item");
  faqItems.forEach((item) => {
    const question = item.querySelector(".faq-question");
    const answer = item.querySelector(".faq-answer");

    question.addEventListener("click", () => {
      const isActive = item.classList.contains("active");

      // Close all
      faqItems.forEach((other) => {
        other.classList.remove("active");
        other.querySelector(".faq-answer").style.maxHeight = null;
      });

      // Open clicked one (unless it was already open -> stays closed)
      if (!isActive) {
        item.classList.add("active");
        answer.style.maxHeight = answer.scrollHeight + 40 + "px";
      }
    });
  });

  /* ============================================================
     SMOOTH ANCHOR OFFSET (compensate for floating fixed nav)
     ============================================================ */
  document.querySelectorAll('a[href^="#"]').forEach((link) => {
    link.addEventListener("click", function (e) {
      const targetId = this.getAttribute("href");
      if (targetId.length <= 1) return;
      const target = document.querySelector(targetId);
      if (!target) return;
      e.preventDefault();
      const offset = 100;
      const top = target.getBoundingClientRect().top + window.scrollY - offset;
      window.scrollTo({ top, behavior: "smooth" });
    });
  });
});
