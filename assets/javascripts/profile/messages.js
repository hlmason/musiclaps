$(document).ready(function() {

	var addFriendContainer = $('#addFriendContainer');
	var messagesContainer = $('section#messagesContainer');
	var addFriendButton = $('button#addFriendButton');
	var friendsContainer = $('#friendsContainer');
	var friendsContainerImg = $('#friendsContainer img');

	addFriendContainer.hide();
	messagesContainer.hide();

	$(addFriendButton).on('click', function() {
		if ( addFriendContainer.is(':hidden') ) {
			$(this).addClass('white');
			addFriendContainer.fadeIn('fast');
		} else {
			$(this).removeClass('white');
			addFriendContainer.fadeOut('fast');
		}
	});

	$(friendsContainerImg).on('click', function() {
		friendsContainer.hide();
		messagesContainer.fadeIn('fast');
	});

});