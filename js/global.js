var navbar_right = $('.navbar-right');

$(window).resize(function() {
  if ($(window).width() <= 991) { /* Matches media query max-width on main.css */
    navbar_right.addClass('pull-left');
  }
  else {
  	navbar_right.removeClass('pull-left');
  }
});