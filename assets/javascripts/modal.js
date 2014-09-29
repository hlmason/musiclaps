$(document).ready(function() {

	var passwordReq = $('#passwordReq');
	var registerOrLogin = $('#registerOrLogin');
	var register = $('#registerJS');
	var login = $('#loginJS');

	passwordReq.hide();

	$('.registerJS').on('click', function() {
		if ( registerOrLogin.is(':visible') ) { // This modal is on the Live Player page
			registerOrLogin.modal('hide');
			register.modal('show');
		} else {
			register.modal('show');
		}
	});
		$('#registrationFullJS').on('click', function() {
			register.modal('hide');
			$('#registrationFull').modal('show');
		});
		// Express registration per Bart's request.  Not sure where/how this is going to be integrated.
		// $('#registrationExpressJS').on('click', function() {
		// 	$('#registrationExpress').modal('show');
		// });
			$('.glyphicon-question-sign').hover(function() {
				passwordReq.fadeIn('slow');
			});

	$('.loginJS').on('click', function() {
		if ( registerOrLogin.is(':visible') ) { // This modal is on the Live Player page
			registerOrLogin.modal('hide');
			login.modal('show');
		} else {
			login.modal('show');

		}
	});

	$('#registerOrLoginJS').on('click', function() { // This modal is on the Live Player page
		registerOrLogin.modal('show');
	});

});