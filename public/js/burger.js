  document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("burger-button").addEventListener("click", function() {
      var navMenu = document.getElementById("nav-menu");
      navMenu.classList.toggle("show-nav");
    });
  });