const hamburgerMenu = document.querySelector('.hamburger-menu');
const navLinks = document.querySelector('.navigation-wrapper');

hamburgerMenu.addEventListener('click', () => {
  navLinks.classList.toggle('active');
});