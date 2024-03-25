document.getElementById('right-button').addEventListener('click', function() {
    document.querySelector('.image-gallery').scrollBy({ left: 350, behavior: 'smooth' });
});

document.getElementById('left-button').addEventListener('click', function() {
    document.querySelector('.image-gallery').scrollBy({ left: -350, behavior: 'smooth' });
});
