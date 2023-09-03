/*const menuToggle = document.querySelector('.menu-toggle');
const navigationWrapper = document.querySelector('.navigation-wrapper');
const closeButton = document.getElementById('close-button'); // Get the close button element

menuToggle.addEventListener('click', () => {
    if (navigationWrapper.style.right === '' || navigationWrapper.style.right === '-300px') {
        openNavigation();
    } else {
        closeNavigation();
    }
});

document.addEventListener('click', (event) => {
    if (!navigationWrapper.contains(event.target) && !menuToggle.contains(event.target)) {
        closeNavigation();
    }
});

closeButton.addEventListener('click', () => {
    closeNavigation(); // Call the closeNavigation function when the close button is clicked
});

function openNavigation() {
    navigationWrapper.style.right = '0';
}

function closeNavigation() {
    navigationWrapper.style.right = '-300px';
}*/
document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.querySelector(".menu-toggle");
    const menuItems = document.querySelector(".menu-items");
  
    menuToggle.addEventListener("click", function () {
        menuItems.classList.toggle("active");
    });
  });

