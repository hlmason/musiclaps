$(document).ready(function() {

	var newTopicContainer = $('section#newTopicContainer');

	newTopicContainer.hide();

	$('button#postNewTopic').on('click', function() {
		newTopicContainer.fadeIn('fast');
	});

	$('button#cancelTopic').on('click', function() {
		newTopicContainer.fadeOut('fast');
	});

});