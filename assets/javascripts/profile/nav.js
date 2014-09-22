$(document).ready(function() {

	var ul_navLoggedIn = $('ul.navLoggedIn');

	$('#glyphiconUser').on('click', function() {
		if ( ul_navLoggedIn.is(':hidden') ) {
			ul_navLoggedIn.slideDown('slow');
		}
		else if ( ul_navLoggedIn.is(':visible') ) {
			ul_navLoggedIn.slideUp('slow');
		}
	});

	$('h4.navLoggedIn').on('click', function() {
		if ( ul_navLoggedIn.is(':hidden') ) {
			ul_navLoggedIn.slideDown('slow');
		}
		else if ( ul_navLoggedIn.is(':visible') ) {
			ul_navLoggedIn.slideUp('slow');
		}
	});

});