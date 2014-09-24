$(document).ready(function() {

	/* ===================================
    	My Projects
	=================================== */
	var myProjectsLink = $('a#myProjectsLink');
	var myProjectsDropdownMenu = $('ul#myProjectsDropdownMenu');
	var inProgressPrivateLink = $('a#inProgressPrivateLink');
	var publicLink = $('a#publicLink');
	var groupLink = $('a#groupLink');
	var auditionLink = $('a#auditionLink');
	var lyricsLink = $('a#lyricsLink');


	$(myProjectsLink).on('click', function() {
		if ( myProjectsDropdownMenu.is(':hidden') ) {
			myProjectsDropdownMenu.show();
		} else {
			myProjectsDropdownMenu.hide();
		}		
	});
	
	$(inProgressPrivateLink).on('click', function() {
		window.location.href = 'my-projects-in-progress-private.php';
	});
	$(publicLink).on('click', function() {
		window.location.href = 'my-projects-public.php';
	});
	$(groupLink).on('click', function() {
		window.location.href = 'my-projects-group.php';
	});
	$(auditionLink).on('click', function() {
		window.location.href = 'my-projects-audition.php';
	});
	$(lyricsLink).on('click', function() {
		window.location.href = 'my-projects-lyrics.php';
	});

	/* ===================================
	    Collaborations
	=================================== */
	var collaborationsLink = $('a#collaborationsLink');
	var collaborationsDropdownMenu = $('ul#collaborationsDropdownMenu');
	var openCollabLink = $('a#openCollabLink');
	var requestingCollabLink = $('a#requestingCollabLink');
	var collaboratorsLink = $('a#collaboratorsLink');

	
	$(collaborationsLink).on('click', function() {
		if ( collaborationsDropdownMenu.is(':hidden') ) {
			collaborationsDropdownMenu.show();
		} else {
			collaborationsDropdownMenu.hide();
		}		
	});
	
	$(openCollabLink).on('click', function() {
		window.location.href = 'collaborations-open-collab.php';
	});
	$(requestingCollabLink).on('click', function() {
		window.location.href = 'collaborations-requesting-collab.php';
	});
	$(collaboratorsLink).on('click', function() {
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

	var changeSoundImgContainer = $('section.changeSoundImgContainer');
	
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

	changeSoundImgContainer.hide();

	
	$(projectsContainer).on('click', function() {
		projectsContainer.hide();
		projectForm.fadeIn('fast');
	});
	$(requestingCollabContainer).on('click', function() {
		requestingCollabContainer.hide();
		requestingCollabForm.fadeIn('fast');
	});


	$('.glyphiconRemove').on('click', function() {
		changeSoundImgContainer.hide();
	});


	$('img.audioMixer').on('click', function() {
		if ( volumeAndPan.is(':visible') ) {
			volumeAndPan.hide();
		} else {
			volumeAndPan.show();
		}
	});

	$('button.noCollab').on('click', function() {
		noCollabGlyphicon.show();
		if ( openCollabGlyphicon.is(':visible') ) {
			openCollabGlyphicon.hide();
		}
		if ( requestingCollabGlyphicon.is(':visible') ) {
			requestingCollabGlyphicon.hide();
		}
	});
	$('button.openCollab').on('click', function() {
		openCollabGlyphicon.show();
		if ( noCollabGlyphicon.is(':visible') ) {
			noCollabGlyphicon.hide();
		}
		if ( requestingCollabGlyphicon.is(':visible') ) {
			requestingCollabGlyphicon.hide();
		}
	});
	$('button.requestingCollab').on('click', function() {
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
		changeSoundImgContainer.fadeIn('fast');
	});

});