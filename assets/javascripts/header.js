$(document).ready(function() {

	var search = $('input#searchJS');

	var musicDropdownMenu = $('ul#musicDropdownMenu');
	var peopleDropdownMenu = $('ul#peopleDropdownMenu');
	var ourStoryDropdownMenu = $('ul#ourStoryDropdownMenu');


	search.hide();

	$('#glyphiconSearch').on('click', function() {
		if ( search.is(':hidden') ) {
			search.fadeIn('fast');
		} else {
			search.fadeOut('fast');
		}		
	});


	$('a#musicDropdownLink').on('click', function() {
		if ( musicDropdownMenu.is(':hidden') ) {
			musicDropdownMenu.show();
		} else {
			musicDropdownMenu.hide();
		}		
	});

	$('a#peopleDropdownLink').on('click', function() {
		if ( peopleDropdownMenu.is(':hidden') ) {
		 	peopleDropdownMenu.show();
		} else {
			peopleDropdownMenu.hide();
		}		
	});

	$('a#ourStoryDropdownLink').on('click', function() {
		if ( ourStoryDropdownMenu.is(':hidden') ) {
			ourStoryDropdownMenu.show();
		} else {
			ourStoryDropdownMenu.hide();
		}		
	});


	musicDropdownMenu.mouseleave (function() { // Makes dropdown menu go away without having to click
		musicDropdownMenu.hide();		
	});

	peopleDropdownMenu.mouseleave (function() { // Makes dropdown menu go away without having to click
		peopleDropdownMenu.hide();		
	});

	ourStoryDropdownMenu.mouseleave (function() { // Makes dropdown menu go away without having to click
		ourStoryDropdownMenu.hide();		
	});

	// $(window).resize(function() { // Makes menu appear when window is made larger than 991px after ul.menu has been slidden up 
	//   	if ($(window).width() > 991) {
	//      	musicDropdownMenu.mouseleave (function() { // Makes dropdown menu go away without having to click
	// 			musicDropdownMenu.hide();
	// 		});
	//   	}
	// });

});