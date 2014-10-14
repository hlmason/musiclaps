$(document).ready(function() {

	var userMenu = $('ul.userMenu');

	$('.glyphiconUser').on('click', function() { // Does the same thing as function below
		if ( userMenu.is(':hidden') ) {
			userMenu.slideDown('fast');
		} else {
			userMenu.slideUp('fast');
		}
	});
	
	$('h4.userMenu').on('click', function() { // Does the same thing as function above
		if ( userMenu.is(':hidden') ) {
			userMenu.slideDown('fast');
		} else {
			userMenu.slideUp('fast');
		}
	});

	$(window).resize(function() { // Makes menu appear when window is made larger than 991px after ul.menu has been slided up 
	  	if ($(window).width() > 991) {
	     	userMenu.show();
	  	}
	});

});