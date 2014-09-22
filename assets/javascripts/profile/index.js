$(document).ready(function() {

	var myProfile = $('section#myProfile');
	var saveProfile = $('h4#saveProfile');
	var dontSaveProfile = $('h4#dontSaveProfile');
	var editProfile = $('h4#editProfile');
	var myPublicProjects = $('section#myPublicProjects');

	myProfile.hide();
	saveProfile.hide();
	dontSaveProfile.hide();

	$(editProfile).on('click', function() {
		editProfile.hide();
		saveProfile.fadeIn('fast');
		dontSaveProfile.fadeIn('fast');
		myPublicProjects.hide();
		myProfile.fadeIn('fast');
	});

	$(dontSaveProfile).on('click', function() {
		saveProfile.hide();
		dontSaveProfile.hide();
		editProfile.fadeIn('fast');
		myProfile.hide();
		myPublicProjects.fadeIn('fast');
	});

});