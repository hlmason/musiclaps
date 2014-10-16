$(document).ready(function() {

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

	/* ====================================
	    My Projects and Collaborations
	==================================== */
	var glyphiconPencil = $('.glyphiconPencil');
	var projectForm = $('#projectForm');
	var noCollabGlyphicon = $('span.noCollabGlyphicon');
	var openCollabGlyphicon = $('span.openCollabGlyphicon');
	var requestingCollabGlyphicon = $('span.requestingCollabGlyphicon');

	var requestingCollabForm = $('#requestingCollabForm');
	var requestingCollabContainer = $('section#requestingCollabContainer');

	var changeProjectImgContainer = $('section.changeProjectImgContainer');
	
	var projectsContainer = $('section.projectsContainer');

	var volumeAndPan = $('section.volumeAndPan');

	var projectImg = $('img.projectImg');

	
	$('.noListings').hide();

	glyphiconPencil.hide();
	projectForm.hide();
	noCollabGlyphicon.hide();
	openCollabGlyphicon.hide();
	requestingCollabGlyphicon.hide();

	requestingCollabForm.hide();

	changeProjectImgContainer.hide();

	
	$(projectsContainer).on('click', function() {
		projectsContainer.hide();
		projectForm.fadeIn('fast');
	});
	$(requestingCollabContainer).on('click', function() {
		requestingCollabContainer.hide();
		requestingCollabForm.fadeIn('fast');
	});


	$('.glyphiconRemove').on('click', function() {
		changeProjectImgContainer.hide();
	});


	$('img.audioMixer').on('click', function() {
		if ( volumeAndPan.is(':visible') ) {
			volumeAndPan.hide();
		} else {
			volumeAndPan.show();
		}
	});

	$('input.noCollab').on('click', function() {
		noCollabGlyphicon.show();
		if ( openCollabGlyphicon.is(':visible') ) {
			openCollabGlyphicon.hide();
		}
		if ( requestingCollabGlyphicon.is(':visible') ) {
			requestingCollabGlyphicon.hide();
		}
	});
	$('input.openCollab').on('click', function() {
		openCollabGlyphicon.show();
		if ( noCollabGlyphicon.is(':visible') ) {
			noCollabGlyphicon.hide();
		}
		if ( requestingCollabGlyphicon.is(':visible') ) {
			requestingCollabGlyphicon.hide();
		}
	});
	$('input.requestingCollab').on('click', function() {
		requestingCollabGlyphicon.show();
		if ( openCollabGlyphicon.is(':visible') ) {
			openCollabGlyphicon.hide();
		}
		if ( noCollabGlyphicon.is(':visible') ) {
			noCollabGlyphicon.hide();
		}
	});


	$(projectImg).mouseenter(function() { // TODO: Fix
		glyphiconPencil.show();
	});
	$(projectImg).mouseleave(function() {
		glyphiconPencil.hide();
	});
	$(glyphiconPencil).on('click', function() {
		changeProjectImgContainer.fadeIn('fast');
	});

});