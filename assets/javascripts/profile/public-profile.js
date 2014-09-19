$(document).ready(function() {

	var publicProjects = $('section#publicProjects');
	var collaborations = $('section#collaborationsJS');

	var collaborationsLink = $('a#collaborationsLink');
	var publicProfileLink = $('a#publicProfileLink');

	collaborations.hide();

	collaborationsLink.on('click', function() {
		publicProfileLink.removeClass('white').addClass('white-button-navigate-hover-js');
		collaborationsLink.addClass('white').removeClass('white-button-navigate-hover-js');
		publicProjects.hide();
		collaborations.fadeIn('fast');
	});

	publicProfileLink.on('click', function() {
		collaborationsLink.removeClass('white').addClass('white-button-navigate-hover-js');
		publicProfileLink.addClass('white').removeClass('white-button-navigate-hover-js');
		collaborations.hide();
		publicProjects.fadeIn('fast');
	});

});