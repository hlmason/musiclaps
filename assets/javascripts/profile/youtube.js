$(document).ready(function() {

var youTubeIdReq = $('#youTubeIdReq');
var newYouTubeConnectionForm = $('#newYouTubeConnectionForm');
var editYouTubeConnectionForm = $('#editYouTubeConnectionForm');

youTubeIdReq.hide();
newYouTubeConnectionForm.hide();
editYouTubeConnectionForm.hide();

$('.glyphicon-question-sign').hover(function() {
	youTubeIdReq.fadeIn('slow');
});

// Radio buttons
$('input').on('click', function() {
	if ( $('input[value="new"]').is(':checked') ) {
		editYouTubeConnectionForm.hide();
		newYouTubeConnectionForm.fadeIn('fast');
	} else if ( $('input[value="edit"]').is(':checked') ) {
		newYouTubeConnectionForm.hide();
		editYouTubeConnectionForm.fadeIn('fast');
	}
});

});