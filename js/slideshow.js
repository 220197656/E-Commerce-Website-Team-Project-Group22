let myIndex = 0;
carousel();

function carousel() {
  let i;
  let x = document.getElementsByClassName("Slideshow");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  setTimeout(carousel, 3000);
}