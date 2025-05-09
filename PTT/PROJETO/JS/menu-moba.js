const menuButton = document.querySelector('.menu-mobile-button');
const menuMobile = document.querySelector('.menu-mobile');

menuButton.addEventListener('click', () => {
  menuMobile.classList.toggle('open');
});
