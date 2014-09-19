$(document).ready(function() {

	var publicProjects = $('section#publicProjects');
	var collaborations = $('section#collaborationsJS');

	collaborations.hide();

	$('a#collaborationsLink').on('click', function() {
		publicProjects.hide();
		collaborations.fadeIn('fast');
	});

});