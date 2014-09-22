$(document).ready(function() {

	var ul_navLoggedIn = $('ul.navLoggedIn');

	$('#glyphiconUser').on('click', function() { // This does the same thing as the function below
		if ( ul_navLoggedIn.is(':hidden') ) {
			ul_navLoggedIn.slideDown('slow');
		}
		else if ( ul_navLoggedIn.is(':visible') ) {
			ul_navLoggedIn.slideUp('slow');
		}
	});
	
	$('h4.navLoggedIn').on('click', function() { // This does the same thing as the function above
		if ( ul_navLoggedIn.is(':hidden') ) {
			ul_navLoggedIn.slideDown('slow');
		}
		else if ( ul_navLoggedIn.is(':visible') ) {
			ul_navLoggedIn.slideUp('slow');
		}
	});

});