$(document).ready(function() {

	var embedButton = $('button#embed');
	var shareButton = $('button#share');
	var embedContainer = $('#embedContainer');
	var shareToSocialNetworksContainer = $('#shareToSocialNetworksContainer');

	embedContainer.hide();

	$(embedButton).on('click', function() {
		shareButton.removeClass('white').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		embedButton.addClass('white').addClass('musiclaps-blue');
		shareToSocialNetworksContainer.hide();
		embedContainer.fadeIn('fast');
	});

	$(shareButton).on('click', function() {
		embedButton.removeClass('white').removeClass('musiclaps-blue').addClass('button-navigate-hover-js');
		shareButton.addClass('white').addClass('musiclaps-blue');
		embedContainer.hide();
		shareToSocialNetworksContainer.fadeIn('fast');
	});

});