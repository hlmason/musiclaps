var navbar_right = $('.navbar-right');

// Pulls navbar left in the period before Bootstrap automatically collapses it
$(window).resize(function() {
  if ($(window).width() <= 991) { /* Matches media query max-width on main.css */
    navbar_right.addClass('pull-left');
  }
  else {
  	navbar_right.removeClass('pull-left');
  }
});


var sign_in_out = $('.sign-in-out-js');

// Makes record buttons larger upon hover
$(sign_in_out).mouseenter(function() {
	if ($(this).width('90%')) {
  	$(this).css('width', '100%').css('margin-top', -20);
  }
});

$(sign_in_out).mouseleave(function() {
	if ($(this).width('100%')) {
		$(this).css('width', '90%').css('margin-top', -15);
	}
});