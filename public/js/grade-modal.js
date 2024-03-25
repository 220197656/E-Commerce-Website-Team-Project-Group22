// Get the modal
var modal = document.getElementById('modal-popup');

var open = document.getElementById('grades-popup-button');

var close = document.getElementById("grades-popup-close-button");



open.onclick = function() {
  modal.classList.remove('hidden-opacity');
  modal.classList.remove('hidden');

}

close.onclick = function() {
  modal.classList.add('hidden-opacity');
  setTimeout(() => {
  modal.classList.add('hidden');
  }, 250);
}

