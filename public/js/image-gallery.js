document.addEventListener('DOMContentLoaded', function() {
    const galleryImages = document.querySelectorAll('.image-gallery img');
    const mainImage = document.querySelector('.main-img img');

    galleryImages.forEach(img => {
      img.addEventListener('click', function() {
        mainImage.src = this.src; 
      });
    });
  });
  