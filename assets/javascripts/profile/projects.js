$(document).ready(function() {

	var publicProjectsContainer = $('section#publicProjectsContainer');
	var groupProjectsContainer = $('section#groupProjectsContainer');
	var auditionProjectsContainer = $('section#auditionProjectsContainer');
	var lyricContainer = $('section#lyricsProjectsContainer');
	var privateProjectsContainer = $('section#privateProjectsContainer');

	var glyphiconPencil = $('.glyphiconPencil');
	var changeSoundImgContainer = $('#changeSoundImgContainer');
	var projectForm = $('#projectForm');
	var glyphiconOk = $('.glyphiconOk');

	var projectsContainer = $('section.projectsContainer');

	var projectImg = $('img.projectImg');

	var publicProjectsButton = $('button#publicProjectsButton');
	var groupProjectsButton = $('button#groupProjectsButton');
	var auditionProjectsButton = $('button#auditionProjectsButton');
	var lyricsProjectsButton = $('button#lyricsProjectsButton');
	var privateProjectsButton = $('button#privateProjectsButton');

	var volumeAndPan = $('section#volumeAndPan');
	var noCollabGlyphicon = $('#noCollabGlyphicon');
	var openCollabGlyphicon = $('#openCollabGlyphicon');
	var requestingCollabGlyphicon = $('#requestingCollabGlyphicon');

	publicProjectsContainer.hide();
	groupProjectsContainer.hide();
	auditionProjectsContainer.hide();
	// lyricsProjectsContainer.hide();

	glyphiconPencil.hide();
	changeSoundImgContainer.hide();
	projectForm.hide();
	glyphiconOk.hide();


	$(projectsContainer).on('click', function() {
		projectsContainer.hide();
		projectForm.fadeIn('fast');
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

	$('span#glyphiconRemove').on('click', function() {
		changeSoundImgContainer.hide();
	});


	$(publicProjectsButton).on('click', function() {
		privateProjectsButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		groupProjectsButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		auditionProjectsContainer.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		lyricsProjectsButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		$(this).addClass('musiclaps-dark-gray').addClass('musiclaps-blue');
		
		privateProjectsContainer.hide();
		groupProjectsContainer.hide();
		auditionProjectsContainer.hide();
		// lyricsProjectsContainer.hide();
		projectForm.hide();
		
		publicProjectsContainer.fadeIn('fast');
	});

	$(groupProjectsButton).on('click', function() {
		privateProjectsButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		publicProjectsButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		auditionProjectsButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		lyricsProjectsButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		$(this).addClass('musiclaps-dark-gray').addClass('musiclaps-blue');
		
		publicProjectsContainer.hide();
		privateProjectsContainer.hide();
		auditionProjectsContainer.hide();
		// lyricsProjectsContainer.hide();
		projectForm.hide();
		
		groupProjectsContainer.fadeIn('fast');
	});

	$(auditionProjectsButton).on('click', function() {
		privateProjectsButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		publicProjectsButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		groupProjectsButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		lyricsProjectsButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		$(this).addClass('musiclaps-dark-gray').addClass('musiclaps-blue');
		
		publicProjectsContainer.hide();
		privateProjectsContainer.hide();
		groupProjectsContainer.hide();
		// lyricsProjectsContainer.hide();
		projectForm.hide();
		
		auditionProjectsContainer.fadeIn('fast');
	});

	$(lyricsProjectsButton).on('click', function() {
		privateProjectsButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		publicProjectsButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		groupProjectsButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		auditionProjectsButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		$(this).addClass('musiclaps-dark-gray').addClass('musiclaps-blue');
		
		publicProjectsContainer.hide();
		auditionProjectsContainer.hide();
		groupProjectsContainer.hide();
		privateProjectsContainer.hide();		
		// lyricsProjectsContainer.fadeIn('fast');
		projectForm.hide();

	});

	$(privateProjectsButton).on('click', function() {
		publicProjectsButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		groupProjectsButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		auditionProjectsButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		lyricsProjectsButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		$(this).addClass('musiclaps-dark-gray').addClass('musiclaps-blue');
		
		publicProjectsContainer.hide();
		auditionProjectsContainer.hide();
		groupProjectsContainer.hide();
		// lyricsProjectsContainer.hide();
		projectForm.hide();
		
		privateProjectsContainer.fadeIn('fast');
	});


	$('img#audioMixer').on('click', function() {
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

});