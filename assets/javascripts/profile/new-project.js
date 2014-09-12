$(document).ready(function() {

	var uploadMP3Container = $('section#uploadMP3Container');
	var newProject = $('section#newProject');
	var addPart = $('section#addPart');
	var addPartToGroup = $('section#addPartToGroup');
	var uploadMP3Button = $('button#uploadMP3Button');
	var recordingPlayer = $('#recordingPlayer');
	var recordingPlayerButton = $('button#recordingPlayerButton');

	uploadMP3Container.hide();
	newProject.hide();
	addPart.hide();
	addPartToGroup.hide();

	$(uploadMP3Button).on('click', function() {
		recordingPlayerButton.removeClass('white').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		uploadMP3Button.addClass('white').addClass('musiclaps-blue');
		recordingPlayer.hide();
		uploadMP3Container.fadeIn('fast');
	});

	$(recordingPlayerButton).on('click', function() {
		uploadMP3Button.removeClass('white').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		recordingPlayerButton.addClass('white').addClass('musiclaps-blue');
		uploadMP3Container.hide();
		recordingPlayer.fadeIn('fast');
	});

	$('input').on('click', function() {
		if ( $('input[value="newProject"]').is(':checked') ) {
			addPart.hide();
			addPartToGroup.hide();
			newProject.fadeIn('fast');
		} else if ( $('input[value="addPart"]').is(':checked') ) {
			newProject.hide();
			addPartToGroup.hide();
			addPart.fadeIn('fast');
		} else if ( $('input[value="addPartToGroup"]').is(':checked') ) {
			addPart.hide();
			newProject.hide();
			addPartToGroup.fadeIn('fast');
		}
	});

});