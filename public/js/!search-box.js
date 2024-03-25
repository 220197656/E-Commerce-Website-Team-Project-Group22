document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("search-button").addEventListener("click", function() {
      var searchBox = document.getElementById("searchbox");
      searchBox.classList.toggle("show-searchbox");
    });
  });