var navbar_right = $('.navbar-right');
// var h1_landing_page_photo = $('#landing-page-photo h1');

$(window).resize(function() {
  if ($(window).width() <= 991) { /* Matches media query max-width on main.css */
    navbar_right.addClass('pull-left');
    // h1_landing_page_photo.addClass('pull-left');
  }
  else {
  	navbar_right.removeClass('pull-left');
    // h1_landing_page_photo.removeClass('pull-left');
  }
});