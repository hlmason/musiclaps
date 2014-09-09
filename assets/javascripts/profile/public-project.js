$(document).ready(function() {

	var embedButton = $('button#embed');
	var shareButton = $('button#share');
	var embedContainer = $('#embedContainer');
	var shareToSocialNetworksContainer = $('#shareToSocialNetworksContainer');

	embedContainer.hide();

	$(embedButton).on('click', function() {
		shareButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		embedButton.addClass('musiclaps-dark-gray').addClass('musiclaps-blue');
		shareToSocialNetworksContainer.hide();
		embedContainer.fadeIn('fast');
	});

	$(shareButton).on('click', function() {
		embedButton.removeClass('musiclaps-dark-gray').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		shareButton.addClass('musiclaps-dark-gray').addClass('musiclaps-blue');
		embedContainer.hide();
		shareToSocialNetworksContainer.fadeIn('fast');
	});

});