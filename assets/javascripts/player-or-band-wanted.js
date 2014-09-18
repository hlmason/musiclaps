$(document).ready(function() {

	var noListings = $('h4#noListings');
	var newRequestContainer = $('section#newRequestContainer');
	var postNewRequest = $('button#postNewRequest');

	noListings.hide()
	newRequestContainer.hide();

	postNewRequest.on('click', function() {
		postNewRequest.hide();
		newRequestContainer.fadeIn('fast');
	});

});