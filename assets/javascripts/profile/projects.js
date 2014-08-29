$(document).ready(function() {

	var publicProjectsContainer = $('section#publicProjectsContainer');
	var groupProjectsContainer = $('section#groupProjectsContainer');
	var auditionProjectsContainer = $('section#auditionProjectsContainer');
	var privateProjectsContainer = $('section#privateProjectsContainer');

	var publicProjectsButton = $('button#publicProjectsButton');
	var groupProjectsButton = $('button#groupProjectsButton');
	var auditionProjectsButton = $('button#auditionProjectsButton');
	var privateProjectsButton = $('button#privateProjectsButton');
	
	var projectForm = $('#projectForm');
	var glyphiconPencil = $('.glyphiconPencil');
	var privateProjectsContainer = $('section.projectsContainer');
	var volumeAndPan = $('section#volumeAndPan');
	var glyphiconOk = $('.glyphiconOk');
	var noCollabGlyphicon = $('#noCollabGlyphicon');
	var openCollabGlyphicon = $('#openCollabGlyphicon');
	var requestingCollabGlyphicon = $('#requestingCollabGlyphicon');


	publicProjectsContainer.hide();
	groupProjectsContainer.hide();
	auditionProjectsContainer.hide();
	projectForm.hide();
	glyphiconPencil.hide();
	glyphiconOk.hide();


	$(publicProjectsButton).on('click', function() {
		privateProjectsButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		publicProjectsButton.removeClass('button-navigate-hover-js').addClass('musiclaps-dark-gray').addClass('musiclaps-blue');
		privateProjectsContainer.hide();
		publicProjectsContainer.fadeIn('fast');
	});



	privateProjectsContainer.click(function() {
		privateProjectsContainer.hide();
		projectForm.fadeIn('fast');
	});

	$('img#audioMixer').click(function() {
		if ( volumeAndPan.is(':visible') ) {
			volumeAndPan.hide();
		} else {
			volumeAndPan.show();
		}
	});

	$('button.noCollab').click(function() {
		noCollabGlyphicon.show();
		if ( openCollabGlyphicon.is(':visible') ) {
			openCollabGlyphicon.hide();
		}
		if ( requestingCollabGlyphicon.is(':visible') ) {
			requestingCollabGlyphicon.hide();
		}
	});

	$('button.openCollab').click(function() {
		openCollabGlyphicon.show();
		if ( noCollabGlyphicon.is(':visible') ) {
			noCollabGlyphicon.hide();
		}
		if ( requestingCollabGlyphicon.is(':visible') ) {
			requestingCollabGlyphicon.hide();
		}
	});

	$('button.requestingCollab').click(function() {
		requestingCollabGlyphicon.show();
		if ( openCollabGlyphicon.is(':visible') ) {
			openCollabGlyphicon.hide();
		}
		if ( noCollabGlyphicon.is(':visible') ) {
			noCollabGlyphicon.hide();
		}
	});

});