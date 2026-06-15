(function(){
  const navbar = document.querySelector('.koodo-navbar');
  const setNav = () => navbar && navbar.classList.toggle('scrolled', window.scrollY > 40);
  setNav();
  window.addEventListener('scroll', setNav, {passive:true});

  const services = document.getElementById('servicesTrack');
  document.querySelectorAll('[data-scroll]').forEach(btn => {
    btn.addEventListener('click', () => {
      const direction = btn.getAttribute('data-scroll') === 'left' ? -1 : 1;
      services && services.scrollBy({ left: direction * 400, behavior: 'smooth' });
    });
  });

  const philosophy = document.getElementById('philosophyTrack');
  document.querySelectorAll('[data-philosophy]').forEach(btn => {
    btn.addEventListener('click', () => {
      const direction = btn.getAttribute('data-philosophy') === 'left' ? -1 : 1;
      philosophy && philosophy.scrollBy({ left: direction * 320, behavior: 'smooth' });
    });
  });
})();
