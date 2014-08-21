$(document).ready(function() {

	var myProfile = $('#myProfile');
	var editProfile = $('#editProfile');
	var saveProfile = $('#saveProfile');
	var dontSaveProfile = $('#dontSaveProfile');
	var uploadMP3Button = $('#uploadMP3Button');
	var uploadMP3Container = $('#uploadMP3Container');
	var recordingPlayerButton = $('#recordingPlayerButton');
	var recordingPlayer = $('#recordingPlayer');

	myProfile.hide();
	saveProfile.hide();
	dontSaveProfile.hide();
	uploadMP3Container.hide();

	$(editProfile).on('click', function() {
		editProfile.hide();
		saveProfile.fadeIn('fast');
		dontSaveProfile.fadeIn('fast');
		myProfile.fadeIn('fast');
	});

	$(dontSaveProfile).on('click', function() {
		saveProfile.hide();
		dontSaveProfile.hide();
		editProfile.fadeIn('fast');
		myProfile.fadeOut('fast');
	});

	$(uploadMP3Button).on('click', function() {
		recordingPlayerButton.removeClass('musiclaps-blue').addClass('button-navigate-hover');
		uploadMP3Button.removeClass('button-navigate-hover').addClass('musiclaps-blue');
		recordingPlayer.hide();
		uploadMP3Container.fadeIn('fast');
	});

	$(recordingPlayerButton).on('click', function() {
		uploadMP3Button.removeClass('musiclaps-blue').addClass('button-navigate-hover');
		recordingPlayerButton.removeClass('button-navigate-hover').addClass('musiclaps-blue');
		uploadMP3Container.hide();
		recordingPlayer.fadeIn('fast');
	});

});