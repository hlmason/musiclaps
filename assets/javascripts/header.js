$(document).ready(function() {

	$('#registerJS').on('click', function() {
		$('#register').modal('show');
	});
		$('#registerWithEmail').click(function() {
			$('#register').modal('hide');
			$('#emailRegistration').modal('show');
		});

	$('#loginJS').on('click', function() {
		// if ( $('#registerOrLogin').is(':visible') ) {
		// 	$('#registerOrLogin').modal('hide');
		// 	$('#login').modal('show');
		// } else {
			$('#login').modal('show');
		// }
	});

	$('#registerOrLoginJS').on('click', function() {
		$('#registerOrLogin').modal('show');
	});

});