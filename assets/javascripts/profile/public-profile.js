$(document).ready(function() {

	var collaborations = $('section#collaborationsJS');
	var publicProjects = $('section#publicProjects');

	var collaborationsLink = $('a#collaborationsLink');
	var publicProfileLink = $('a#publicProfileLink');

	collaborations.hide();

	collaborationsLink.on('click', function() {
		publicProfileLink.removeClass('white');
		collaborationsLink.addClass('white').addClass('musiclaps-blue'); // Not sure why ".musiclaps-blue" is not being added
		publicProjects.hide();
		collaborations.fadeIn('fast');
	});

	publicProfileLink.on('click', function() {
		collaborationsLink.removeClass('white');
		publicProfileLink.addClass('white').addClass('musiclaps-blue'); // Not sure why ".musiclaps-blue" is not being added
		collaborations.hide();
		publicProjects.fadeIn('fast');
	});

});