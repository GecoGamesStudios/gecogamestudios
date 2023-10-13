document.addEventListener('DOMContentLoaded', function () {
  const menuIcon = document.querySelector('.menu-icon');
  const menu = document.querySelector('.menu');

  // Add a click event listener to the menu icon
  menuIcon.addEventListener('click', function () {
      // Toggle the 'active' class on the menu to show/hide it
      menu.classList.toggle('active');
  });
});

document.getElementById('search-icon').addEventListener('click', function() {
    const searchField = document.getElementById('search-field');
    if (searchField.style.display === 'none' || searchField.style.display === '') {
      searchField.style.display = 'block';
    } else {
      searchField.style.display = 'none';
    }
  });
  
  function performSearch() {
    const searchTerm = document.querySelector('#search-field input[type="text"]').value;
    // Perform your search action here with the searchTerm
    // For this example, let's just log the search term
    console.log('Searched for: ' + searchTerm);
  }


  let currentSlide = 0;
  const slides = document.querySelectorAll(".slide");
  
  function showSlide(index) {
      if (index < 0) {
          currentSlide = slides.length - 1;
      } else if (index >= slides.length) {
          currentSlide = 0;
      }
  
      slides.forEach((slide, i) => {
          if (i === currentSlide) {
              slide.style.display = "block";
          } else {
              slide.style.display = "none";
          }
      });
  }
  
  function nextSlide() {
      currentSlide++;
      showSlide(currentSlide);
  }
  
  function prevSlide() {
      currentSlide--;
      showSlide(currentSlide);
  }
  
  showSlide(currentSlide);
  
  // changes every after 15 second
  setInterval(nextSlide, 15000);