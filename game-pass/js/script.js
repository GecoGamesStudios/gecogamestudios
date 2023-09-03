const slides = document.querySelector('.slideshow');
let currentSlide = 0;

function nextSlide() {
  currentSlide = (currentSlide + 1) % 3; // Change the number based on the number of slides
  slides.style.transform = `translateX(-${currentSlide * 100}%)`;
}

setInterval(nextSlide, 5000); // Auto-advance every 5 seconds

function openCheckoutModal() {
    const modal = document.getElementById("checkoutModal");
    modal.style.display = "flex";
  }
  
  function closeCheckoutModal() {
    const modal = document.getElementById("checkoutModal");
    modal.style.display = "none";
  }