document.addEventListener('DOMContentLoaded', function () {
  const menuIcon = document.querySelector('.menu-icon');
  const menu = document.querySelector('.menu');

  // Add a click event listener to the menu icon
  menuIcon.addEventListener('click', function () {
      // Toggle the 'active' class on the menu to show/hide it
      menu.classList.toggle('active');
  });
});