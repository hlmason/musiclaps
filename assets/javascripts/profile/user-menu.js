$(document).ready(function() {

	var userMenu = $('ul.userMenu');

	$('.glyphiconUser').on('click', function() { // This does the same thing as the function below
		if ( userMenu.is(':hidden') ) {
			userMenu.slideDown('fast');
		}
		else if ( userMenu.is(':visible') ) {
			userMenu.slideUp('fast');
		}
	});
	
	$('h4.userMenu').on('click', function() { // This does the same thing as the function above
		if ( userMenu.is(':hidden') ) {
			userMenu.slideDown('fast');
		}
		else if ( userMenu.is(':visible') ) {
			userMenu.slideUp('fast');
		}
	});

});