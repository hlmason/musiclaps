$(document).ready(function() {

	var myProfile = $('#myProfile');
	var editProfile = $('#editProfile');
	var saveProfile = $('#saveProfile');
	var dontSaveProfile = $('#dontSaveProfile');
	var uploadMP3 = $('#uploadMP3');
	var uploadMP3Container = $('#uploadMP3Container');
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

	$(uploadMP3).on('click', function() {
		recordingPlayer.removeClass('musiclaps-blue').addClass('button-navigate-hover');
		uploadMP3.removeClass('button-navigate-hover').addClass('musiclaps-blue');
		uploadMP3Container.fadeIn('fast');
	});

	$(recordingPlayer).on('click', function() {
		uploadMP3.removeClass('musiclaps-blue').addClass('button-navigate-hover');
		recordingPlayer.removeClass('button-navigate-hover').addClass('musiclaps-blue');
		uploadMP3Container.hide();
	});

});