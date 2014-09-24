$(document).ready(function() {

	var newProjectLink = $('a#newProjectLink');
	var newProjectDropdownMenu = $('ul#newProjectDropdownMenu');
	var recordingPlayerLink = $('a#recordingPlayerLink');
	var uploadMP3Link = $('a#uploadMP3Link');

	var newProject = $('section#newProject');
	var addPart = $('section#addPart');
	var addPartToGroup = $('section#addPartToGroup');


	$(newProjectLink).on('click', function() {
		if ( newProjectDropdownMenu.is(':hidden') ) {
			newProjectDropdownMenu.show();
		} else {
			newProjectDropdownMenu.hide();
		}		
	});
	
	$(recordingPlayerLink).on('click', function() {
		window.location.href = 'recording-player.php';
	});
	$(uploadMP3Link).on('click', function() {
		window.location.href = 'upload-mp3.php';
	});


	newProject.hide();
	addPart.hide();
	addPartToGroup.hide();

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