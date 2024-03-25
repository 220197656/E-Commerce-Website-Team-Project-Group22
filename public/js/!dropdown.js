
const navItems = document.querySelectorAll('.hover-underline-animation');

navItems.forEach(navItem => {
  const dropdown = document.getElementById('dd-' + navItem.id);
  // console.log(navItem.id);
  navItem.addEventListener('mouseenter', () => {
    dropdown.classList.add('show-dd');
    // console.log('first part enter')
  });

  navItem.addEventListener('mouseleave', (event) => {
    const bound = navItem.getBoundingClientRect();
    const x = event.clientX;
    const y = event.clientY;
    // console.log('bound x and y var.')



    
    if (
      x > bound.left && x < bound.right && y >= bound.top + 2 && y <= bound.bottom + 10

    ) {
        // console.log(x, y)
    } else {
      dropdown.classList.remove('show-dd');
    }
  });
  dropdown.addEventListener('mouseleave', (event) => {
    const bound = dropdown.getBoundingClientRect();
    const x = event.clientX;
    const y = event.clientY;
    // console.log('bound x and y var.')

    if (
        x >= bound.left && x <= bound.right && y >= bound.top  && y <= bound.bottom
  
      ) {
          // console.log(x, y)
        dropdown.classList.remove('show-dd');

      } else {
        dropdown.classList.remove('show-dd');
      }
  });

});