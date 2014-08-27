$(document).ready(function() {

	var projectForm = $('#projectForm');
	var glyphiconPencil = $('#glyphiconPencil');
	var projectsContainer = $('#projectsContainer');
	var volumeAndPan = $('#volumeAndPan');

	projectForm.hide();
	glyphiconPencil.hide();

	projectsContainer.click(function() {
		projectsContainer.hide();
		projectForm.fadeIn('fast');
	});

	$('#audioMixer').click(function() {
		if ( volumeAndPan.is(':visible') ) {
			volumeAndPan.fadeOut('fast');
		} else {
			volumeAndPan.fadeIn('fast');
		}
	});

});