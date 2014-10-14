$(document).ready(function() {

	var wantWalkthrough = $('#wantWalkthrough'); // Modal
	var selectSong = $('#selectSong'); // Modal

    $(window).load(function() { // Displays modal upon page load
        wantWalkthrough.modal('show');
    });

    // Radio buttons
	$('input').on('click', function() { // Asks whether user wants walkthrough
		if ( $('input[value="yes"]').is(':checked') ) { // If yes,
			wantWalkthrough.modal('hide'); // modal is hidden
			window.location.href='../../walkthrough/walkthrough.php'; // and user is redirected to walkthrough;
		} else if ( $('input[value="no"]').is(':checked') ) { // if no,
			wantWalkthrough.modal('hide'); // modal is hidden and Live Player is revealed.
			selectSong.modal('show');
		}
	});

	// Text to right of radio buttons is selectable for mobile UX
	$('a.yesOrNo').on('click', function() { // Asks whether user wants walkthrough
		$(this).data('clicked', true);
		if ( $('a#yes').data('clicked') ) { // If yes,
			wantWalkthrough.modal('hide'); // modal is hidden
			window.location.href='../../walkthrough/walkthrough.php'; // and user is redirected to walkthrough;
		} else if ( $('a#no').data('clicked') ) { // if no,
			wantWalkthrough.modal('hide'); // modal is hidden and Live Player is revealed.
			selectSong.modal('show');
		}
	});

	// $('.close').on('click', function() {
	// 	selectSong.modal('show');
	// });

	$('#selectSongJS').on('click', function() {
		selectSong.modal('show');
	});

});