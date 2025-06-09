(function ($) {
  $(function () {
    // Get the navbar
    const header = $('[data-js="header"]');
    const body = $('body');

    // Get the offset position of the navbar
    if (
      $(body).hasClass('home') ||
      $(body).hasClass('page-template-wp-custom-template-portfolio-pathways')
    ) {
      // scroll listener
      $(window).on('scroll', function (e) {
        // if scroll is greater than 70px
        if (window.scrollY >= 70 && window.innerWidth > 769) {
          // remove class from header
          $(header).removeClass('top');
        } else {
          $(header).addClass('top');
        }
      });
    } else {
      header.remove('top');
    }
  });
})(jQuery);
