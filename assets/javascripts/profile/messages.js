$(document).ready(function() {

	var addFriendContainer = $('#addFriendContainer');
	var glyphiconTrash = $('span#glyphiconTrash');
	var messagesContainer = $('section#messagesContainer');
	var addFriendButton = $('button#addFriendButton');
	var friendsContainer = $('#friendsContainer');
	var friendsContainerImg = $('#friendsContainer img');

	addFriendContainer.hide();
	glyphiconTrash.hide();
	messagesContainer.hide();

	// $('h5').hover(function() {
	// 	if ( glyphiconTrash.is(':hidden') ) {
	// 		glyphiconTrash.fadeIn('fast');
	// 	} else if ( glyphiconTrash.is(':visible') ) {
	// 		glyphiconTrash.fadeOut('fast');
	// 	}
	// });

	$(addFriendButton).on('click', function() {
		if ( addFriendContainer.is(':hidden') ) {
			$(this).addClass('white');
			addFriendContainer.fadeIn('fast');
		}
		else if ( addFriendContainer.is(':visible') ) {
			$(this).removeClass('white');
			addFriendContainer.fadeOut('fast');
		}
	});

	$(friendsContainerImg).on('click', function() {
		friendsContainer.hide();
		messagesContainer.fadeIn('fast');
	});

});