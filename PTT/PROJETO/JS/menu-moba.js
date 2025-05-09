const menuButton = document.getElementById('menuToggle');
const menuMobile = document.getElementById('menuMobile');
const closeBtn = document.getElementById('closeBtn');

menuButton.addEventListener('click', () => {
  menuMobile.classList.toggle('open');
  document.body.style.overflow = menuMobile.classList.contains('open') ? 'hidden' : 'auto';
});

closeBtn.addEventListener('click', () => {
  menuMobile.classList.remove('open');
  document.body.style.overflow = 'auto';
});

// Fecha o menu ao clicar em um link
document.querySelectorAll('.menu-mobile a').forEach(link => {
  link.addEventListener('click', () => {
    menuMobile.classList.remove('open');
    document.body.style.overflow = 'auto';
  });
});
