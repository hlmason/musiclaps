$(document).ready(function() {

	var groupForm = $('#groupForm');
	var createNewGroupContainer = $('section#createNewGroupContainer');

	groupForm.hide();
	createNewGroupContainer.hide();

	$('#groupProjectsContainerGroupsPage').on('click', function() {
		$('#groupsContainer').hide();
		groupForm.fadeIn('fast');
	});

	$('button#createNewGroupButton').on('click', function() {
		if ( createNewGroupContainer.is(':hidden') ) {
		createNewGroupContainer.fadeIn('fast');
		}
		else if ( createNewGroupContainer.is(':visible') ) {
		createNewGroupContainer.fadeOut('fast');
		}
	});

});