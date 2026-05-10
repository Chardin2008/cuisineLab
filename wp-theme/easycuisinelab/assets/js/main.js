(function () {
  const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const header = document.querySelector('[data-header]');
  const progress = document.querySelector('.scroll-progress');
  const loader = document.querySelector('[data-loader]');
  const menuToggle = document.querySelector('[data-menu-toggle]');
  const mobilePanel = document.querySelector('[data-mobile-panel]');

  if (loader && !prefersReduced) {
    window.setTimeout(() => loader.classList.add('is-hidden'), 1450);
  } else if (loader) {
    loader.classList.add('is-hidden');
  }

  const onScroll = () => {
    const max = document.documentElement.scrollHeight - window.innerHeight;
    const pct = max > 0 ? (window.scrollY / max) * 100 : 0;
    if (progress) progress.style.width = `${pct}%`;
    if (header) header.classList.toggle('is-scrolled', window.scrollY > 18);
  };
  onScroll();
  window.addEventListener('scroll', onScroll, { passive: true });

  if (menuToggle && mobilePanel) {
    menuToggle.addEventListener('click', () => {
      const open = mobilePanel.classList.toggle('is-open');
      menuToggle.setAttribute('aria-expanded', String(open));
      menuToggle.setAttribute('aria-label', open ? 'Fermer le menu' : 'Ouvrir le menu');
    });
    mobilePanel.querySelectorAll('a').forEach((link) => {
      link.addEventListener('click', () => {
        mobilePanel.classList.remove('is-open');
        menuToggle.setAttribute('aria-expanded', 'false');
      });
    });
  }

  const reveals = document.querySelectorAll('.reveal');
  const revealElement = (el) => el.classList.add('is-visible');

  if ('IntersectionObserver' in window && !prefersReduced) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          revealElement(entry.target);
          observer.unobserve(entry.target);
        }
      });
    }, { rootMargin: '0px 0px -8% 0px', threshold: 0.08 });

    reveals.forEach((el) => {
      const rect = el.getBoundingClientRect();
      if (rect.top < window.innerHeight && rect.bottom > 0) {
        revealElement(el);
      } else {
        observer.observe(el);
      }
    });

    window.setTimeout(() => reveals.forEach(revealElement), 2200);
  } else {
    reveals.forEach(revealElement);
  }

  document.querySelectorAll('[data-compare]').forEach((compare) => {
    const after = compare.querySelector('.compare__after');
    const handle = compare.querySelector('.compare__handle');
    const range = compare.querySelector('.compare__range');

    const syncWidth = () => {
      compare.style.setProperty('--compare-width', `${compare.clientWidth}px`);
    };

    const setValue = (value) => {
      const pct = Math.max(0, Math.min(100, Number(value)));
      after.style.width = `${pct}%`;
      handle.style.left = `${pct}%`;
      range.value = String(pct);
    };

    syncWidth();
    setValue(range.value);
    range.addEventListener('input', (event) => setValue(event.target.value));
    window.addEventListener('resize', syncWidth, { passive: true });
  });

  document.querySelectorAll('[data-form]').forEach((form) => {
    let step = 1;
    const steps = Array.from(form.querySelectorAll('.form-step'));
    const dots = Array.from(form.querySelectorAll('.form-dots span'));

    const show = (nextStep) => {
      step = Math.max(1, Math.min(steps.length, nextStep));
      steps.forEach((el) => el.classList.toggle('is-active', Number(el.dataset.step) === step));
      dots.forEach((dot, index) => dot.classList.toggle('is-active', index === step - 1));
    };

    form.querySelectorAll('[data-next]').forEach((button) => {
      button.addEventListener('click', () => {
        const active = form.querySelector(`.form-step[data-step="${step}"]`);
        const fields = Array.from(active.querySelectorAll('input, textarea, select'));
        if (fields.every((field) => field.reportValidity())) show(step + 1);
      });
    });

    form.querySelectorAll('[data-prev]').forEach((button) => {
      button.addEventListener('click', () => show(step - 1));
    });
  });
})();
