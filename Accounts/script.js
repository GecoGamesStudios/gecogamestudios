<script>
const sidebar = document.querySelector('.sidebar');
const logo = document.querySelector('.logo');
const mainContent = document.querySelector('.main-content');

logo.addEventListener('click', () => {
  sidebar.classList.toggle('open');
  mainContent.classList.toggle('shift');
});

/*tt*/

let currentSlide = 0;

function showSlide(slideIndex) {
  const slides = document.querySelectorAll('.slide');
  if (slideIndex < 0) {
    currentSlide = slides.length - 1;
  } else if (slideIndex >= slides.length) {
    currentSlide = 0;
  }
  const translateX = -currentSlide * 100;
  document.querySelector('.slider').style.transform = `translateX(${translateX}%)`;
}

function prevSlide() {
  currentSlide--;
  showSlide(currentSlide);
}

function nextSlide() {
  currentSlide++;
  showSlide(currentSlide);
}

showSlide(currentSlide);

</script>