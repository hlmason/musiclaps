$(document).ready(function() {

	var myProfile = $('#myProfile');
	var editProfile = $('#editProfile');
	var saveProfile = $('#saveProfile');
	var dontSaveProfile = $('#dontSaveProfile');

	myProfile.hide();
	saveProfile.hide();
	dontSaveProfile.hide();

	$(editProfile).on('click', function() {
		editProfile.hide('fast');
		saveProfile.fadeIn('fast');
		dontSaveProfile.fadeIn('fast');
		myProfile.fadeIn('fast');
	});

	$(dontSaveProfile).on('click', function() {
		saveProfile.hide('fast');
		dontSaveProfile.hide('fast');
		editProfile.fadeIn('fast');
		myProfile.fadeOut('fast');
	});

});