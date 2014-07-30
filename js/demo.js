$(document).ready(function() {

	var wantDemo = $('#wantDemo');
	var demoVideo = $('#demoVideo');
	var selectSong = $('#selectSong');

    $(window).load(function(){ // Displays modal upon page load
        wantDemo.modal('show');
    });

	$('input').on('click', function() { // Asks whether user wants demo
		if ( $('input[value="yes"]').is(':checked') ) { // If yes,
			wantDemo.modal('hide'); // modal is hidden
			demoVideo.modal('show'); // and demo video is displayed;
		} else if ( $('input[value="no"]').is(':checked') ) { // if no,
			wantDemo.modal('hide'); // modal is hidden and Live Player is revealed.
			selectSong.modal('show');
		}
	});

	$('.close').on('click', function() {
		selectSong.modal('show');
	});

});