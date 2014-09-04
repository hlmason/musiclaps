$(document).ready(function() {

	var addFriendContainer = $('#addFriendContainer');
	var addFriendButton = $('#addFriendButton');
	var glyphiconTrash = $('span#glyphiconTrash');

	addFriendContainer.hide();
	glyphiconTrash.hide();

	// $('h5').hover(function() {
	// 	if ( glyphiconTrash.is(':hidden') ) {
	// 		glyphiconTrash.fadeIn('fast');
	// 	} else if ( glyphiconTrash.is(':visible') ) {
	// 		glyphiconTrash.fadeOut('fast');
	// 	}
	// });

	$(addFriendButton).on('click', function() {
		if ( addFriendContainer.is(':hidden') ) {
			addFriendContainer.fadeIn('fast');
		}
		else if ( addFriendContainer.is(':visible') ) {
			addFriendContainer.fadeOut('fast');
		}
	});

});