$(document).ready(function() {

	/* ===================================
	    New Project
	=================================== */
	var newProjectDropdownMenu = $('ul#newProjectDropdownMenu');
	var newProjectCaret = $('#newProjectCaret');

	var userMenu = $('ul.userMenu');


	// $('a#newProjectLink').mouseenter (function() {
	// 	newProjectCaret.addClass('upside-down');
	// 	newProjectDropdownMenu.show();
	// });

	$('a#newProjectLink').on('click', function() {
		if ( newProjectDropdownMenu.is(':hidden') ) {
			newProjectCaret.addClass('upside-down');
			newProjectDropdownMenu.show();
		} else {
			newProjectCaret.removeClass('upside-down');
			newProjectDropdownMenu.hide();
		}		
	});

	newProjectDropdownMenu.mouseleave (function() { // Makes dropdown menu go away without having to click.  Note: not implemented for collapsed menu - poor UX
		if ($(window).width() > 991) {
			newProjectCaret.removeClass('upside-down');
			newProjectDropdownMenu.hide();
		}		
	});
	
	$('a#recordingPlayerLink').on('click', function() {
		window.location.href = 'new-project-recording-player.php';
	});
	$('a#uploadMP3Link').on('click', function() {
		window.location.href = 'new-project-upload-mp3.php';
	});

	/* ===================================
    	My Projects
	=================================== */
	var myProjectsDropdownMenu = $('ul#myProjectsDropdownMenu');
	var myProjectsCaret = $('#myProjectsCaret');


	$('a#myProjectsLink').on('click', function() {
		if ( myProjectsDropdownMenu.is(':hidden') ) {
			myProjectsCaret.addClass('upside-down');
			myProjectsDropdownMenu.show();
		} else {
			myProjectsCaret.removeClass('upside-down');
			myProjectsDropdownMenu.hide();
		}		
	});

	myProjectsDropdownMenu.mouseleave (function() { // Makes dropdown menu go away without having to click.  Note: not implemented for collapsed menu - poor UX
		if ($(window).width() > 991) {
			myProjectsCaret.removeClass('upside-down');
			myProjectsDropdownMenu.hide();
		}	
	});
	
	$('a#inProgressPrivateLink').on('click', function() {
		window.location.href = 'my-projects-in-progress-private.php';
	});
	$('a#publicLink').on('click', function() {
		window.location.href = 'my-projects-public.php';
	});
	$('a#groupLink').on('click', function() {
		window.location.href = 'my-projects-group.php';
	});
	$('a#auditionLink').on('click', function() {
		window.location.href = 'my-projects-audition.php';
	});
	$('a#lyricsLink').on('click', function() {
		window.location.href = 'my-projects-lyrics.php';
	});

	/* ===================================
	    Collaborations
	=================================== */
	var collaborationsDropdownMenu = $('ul#collaborationsDropdownMenu');
	var collaborationsCaret = $('#collaborationsCaret');

	
	$('a#collaborationsLink').on('click', function() {
		if ( collaborationsDropdownMenu.is(':hidden') ) {
			collaborationsCaret.addClass('upside-down');
			collaborationsDropdownMenu.show();
		} else {
			collaborationsCaret.removeClass('upside-down');
			collaborationsDropdownMenu.hide();
		}		
	});

	collaborationsDropdownMenu.mouseleave (function() { // Makes dropdown menu go away without having to click.  Note: not implemented for collapsed menu - poor UX
		if ($(window).width() > 991) {
			collaborationsCaret.removeClass('upside-down');
			collaborationsDropdownMenu.hide();
		}	
	});
	
	$('a#openCollabLink').on('click', function() {
		window.location.href = 'collaborations-open-collab.php';
	});
	$('a#requestingCollabLink').on('click', function() {
		window.location.href = 'collaborations-requesting-collab.php';
	});
	$('a#collaboratorsLink').on('click', function() {
		window.location.href = 'collaborations-collaborators.php';
	});

	/* ===================================
	    User icon / User Menu
	=================================== */
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