$(document).ready(function() {

	var groupForm = $('#groupForm');

	groupForm.hide();

	$('#groupProjectsContainerGroupsPage').on('click', function() {
		$('#groupsContainer').hide();
		groupForm.fadeIn('fast');
	});

});