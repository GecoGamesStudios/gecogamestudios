

  document.addEventListener("DOMContentLoaded", function () {
    var menuIcon = document.querySelector(".menu-icon");
    var menu = document.querySelector(".menu");
  
    menuIcon.addEventListener("click", function () {
      menu.classList.toggle("active");
      menuIcon.classList.toggle("active"); 
  
      // Toggle the display of bars and close icons
      var barsIcon = menuIcon.querySelector(".menu-icon");
      var closeIcon = menuIcon.querySelector(".menu-icon-close");
      if (menuIcon.classList.contains("active")) {
        barsIcon.style.display = "none";
        closeIcon.style.display = "block";
      } else {
        barsIcon.style.display = "block";
        closeIcon.style.display = "none";
      }
    });
  });