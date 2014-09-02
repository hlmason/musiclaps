$(document).ready(function() {

	var requestingCollabContainer = $('section#requestingCollabContainer');
	var collaboratorsContainer = $('section#collaboratsContainer');
	var openCollabContainer = $('section#openCollabContainer');

	var glyphiconPencil = $('span.glyphiconPencil');
	var changeSoundImgContainer = $('section.changeSoundImgContainer');
	var projectForm = $('#projectForm');
	var glyphiconOk = $('span.glyphiconOk');

	var projectsContainer = $('section.projectsContainer');

	var projectImg = $('img.projectImg');

	var requestingCollabButton = $('button#requestingCollabButton');
	var collaboratorsButton = $('button#collaboratorsButton');
	var openCollabButton = $('button#openCollabButton');

	var volumeAndPan = $('section#volumeAndPan');
	var noCollabGlyphicon = $('span#noCollabGlyphicon');
	var openCollabGlyphicon = $('span#openCollabGlyphicon');
	var requestingCollabGlyphicon = $('span#requestingCollabGlyphicon');

	requestingCollabContainer.hide();
	collaboratorsContainer.hide();

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

	$('span.glyphiconRemove').on('click', function() {
		changeSoundImgContainer.hide();
	});


	$(requestingCollabButton).on('click', function() {
		openCollabButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		collaboratorsButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		$(this).addClass('musiclaps-dark-gray').addClass('musiclaps-blue');
		
		openCollabContainer.hide();
		// collaboratorsContainer.hide();
		
		requestingCollabContainer.fadeIn('fast');
	});

	$(collaboratorsButton).on('click', function() {
		requestingCollabButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		openCollabButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		$(this).addClass('musiclaps-dark-gray').addClass('musiclaps-blue');
		
		requestingCollabContainer.hide();
		openCollabContainer.hide();
		
		collaboratorsContainer.fadeIn('fast');
	});

	$(openCollabButton).on('click', function() {
		collaboratorsButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		requestingCollabButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		$(this).addClass('musiclaps-dark-gray').addClass('musiclaps-blue');
		
		collaboratorsContainer.hide();
		requestingCollabContainer.hide();
		
		openCollabContainer.fadeIn('fast');
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