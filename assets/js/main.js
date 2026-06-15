(function () {
  const navbar = document.querySelector('.koodo-navbar');

  const setNav = () => {
    if (!navbar) return;
    navbar.classList.toggle('scrolled', window.scrollY > 40);
  };

  setNav();
  window.addEventListener('scroll', setNav, { passive: true });

  function initKoodoSlider(selector, options = {}) {
    const slider = document.querySelector(selector);
    if (!slider || typeof Splide === 'undefined') return;

    new Splide(selector, {
      type: 'slide',
      perPage: 3,
      perMove: 1,
      gap: '24px',
      pagination: false,
      arrows: true,
      drag: true,
      speed: 600,
      rewind: false,
      trimSpace: true,
      breakpoints: {
        991: {
          perPage: 2,
          gap: '22px',
        },
        575: {
          perPage: 1,
          gap: '18px',
        },
      },
      ...options,
    }).mount();
  }

  initKoodoSlider('#servicesSlider');

  initKoodoSlider('#philosophySlider', {
    breakpoints: {
      991: {
        perPage: 2,
        gap: '22px',
      },
      575: {
        perPage: 1,
        gap: '18px',
      },
    },
  });
})();