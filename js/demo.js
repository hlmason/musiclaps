$(document).ready(function() {

	var wantDemo = $('#wantDemo');

    $('iframe').hide();

    $(window).load(function(){ // Displays modal upon page load
        wantDemo.modal('show');
    });

	$('input').on('click', function() { // Checks whether user wants demo
		if($('input[value="yes"]').is(':checked')) { // If yes,
			wantDemo.modal('hide'); // modal is hidden
			$('#live-player-video').fadeIn('slow'); // and Live Player demo video is displayed;
		}
		if($('input[value="no"]').is(':checked')) { // If no,
			wantDemo.modal('hide'); // modal is hidden
			$('#live-player').fadeIn('slow'); // and actual Live Player is displayed.
		}
	});

});