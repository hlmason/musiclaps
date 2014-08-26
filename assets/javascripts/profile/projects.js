$(document).ready(function() {

	var projectForm = $('#projectForm');
	var projectsContainer = $('#projectsContainer');
	var glyphiconPencil = $('#glyphiconPencil');

	projectForm.hide();
	glyphiconPencil.hide();

	projectsContainer.click(function() {
		projectsContainer.hide();
		projectForm.fadeIn('fast');
	});

});