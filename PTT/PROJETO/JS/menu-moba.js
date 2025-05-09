document.addEventListener("DOMContentLoaded", function () {
  const menuButton = document.querySelector(".menu-mobile-button");
  const mobileMenu = document.querySelector(".menu-mobile");

  menuButton.addEventListener("click", () => {
    mobileMenu.classList.toggle("open");
  });
});
