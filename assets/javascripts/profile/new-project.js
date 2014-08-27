$(document).ready(function() {

	var uploadMP3Container = $('#uploadMP3Container');
	var newProject = $('#newProject');
	var addPart = $('#addPart');
	var addPartToGroup = $('#addPartToGroup');
	var uploadMP3Button = $('#uploadMP3Button');
	var recordingPlayer = $('#recordingPlayer');
	var recordingPlayerButton = $('#recordingPlayerButton');

	uploadMP3Container.hide();
	newProject.hide();
	addPart.hide();
	addPartToGroup.hide();

	$(uploadMP3Button).on('click', function() {
		recordingPlayerButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		uploadMP3Button.removeClass('button-navigate-hover-js').addClass('musiclaps-dark-gray').addClass('musiclaps-blue');
		recordingPlayer.hide();
		uploadMP3Container.fadeIn('fast');
	});

	$(recordingPlayerButton).on('click', function() {
		uploadMP3Button.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		recordingPlayerButton.removeClass('button-navigate-hover-js').addClass('musiclaps-dark-gray').addClass('musiclaps-blue');
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