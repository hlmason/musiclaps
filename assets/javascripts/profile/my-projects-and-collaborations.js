$(document).ready(function() {

	/* ===================================
    	My Projects
	=================================== */
	var lyricsExplanation = $('.lyricsExplanation');

	lyricsExplanation.hide();

	$('.glyphiconQuestionSignLyrics').hover(function() {
		lyricsExplanation.fadeIn('slow');
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