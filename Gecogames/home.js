
const hamburgerMenu = document.querySelector('.hamburger-menu');
const navLinks = document.querySelector('.navigation-wrapper');

hamburgerMenu.addEventListener('click', () => {
  navLinks.classList.toggle('active');
});


let slideIndex = 0;
showSlides();

function showSlides() {
    let slides = document.getElementsByClassName("slide");
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 3000); // Change slide every 3 seconds
}

function scrollToTop() {
    window.scrollTo({ top: 0, behavior: "smooth" });
  }
  
  window.addEventListener("scroll", function() {
    const backToTopBtn = document.getElementById("back-to-top-btn");
    if (window.scrollY > 300) {
      backToTopBtn.style.display = "block";
    } else {
      backToTopBtn.style.display = "none";
    }
  });
  