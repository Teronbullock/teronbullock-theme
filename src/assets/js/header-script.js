// Get the navbar
const header = document.querySelector('[data-js="header"]');
const body = document.querySelector('body');

if (header && body) {
  // Get the offset position of the navbar
  if (
    body.classList.contains('home') ||
    body.classList.contains(
      'page-template-wp-custom-template-portfolio-pathways'
    )
  ) {
    // scroll listener
    window.addEventListener('scroll', e => {
      // if scroll is greater than 70px
      if (window.scrollY >= 70 && window.innerWidth > 769) {
        // remove class from header
        header.classList.remove('top');
      } else {
        header.classList.add('top');
      }
    });
  } else {
    header.classList.remove('top');
  }
}
