$(document).ready(function() {

	var projectForm = $('#projectForm');
	var glyphiconPencil = $('#glyphiconPencil');
	var projectsContainer = $('section#projectsContainer');
	var volumeAndPan = $('section#volumeAndPan');
	var glyphiconOk = $('.glyphiconOk');
	var noCollabGlyphicon = $('#noCollabGlyphicon');
	var openCollabGlyphicon = $('#openCollabGlyphicon');
	var requestingCollabGlyphicon = $('#requestingCollabGlyphicon');

	projectForm.hide();
	glyphiconPencil.hide();
	glyphiconOk.hide();

	projectsContainer.click(function() {
		projectsContainer.hide();
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