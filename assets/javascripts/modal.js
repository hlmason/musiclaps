$(document).ready(function() {

	var passwordReq = $('#password-req');
	var registerOrLogin = $('#registerOrLogin');
	var register = $('#registerJS');
	var login = $('#loginJS');

	passwordReq.hide();

	$('.registerJS').on('click', function() {
		if ( registerOrLogin.is(':visible') ) {
			registerOrLogin.modal('hide');
			register.modal('show');
		} else {
			register.modal('show');
		}
	});
		$('#registrationFullJS').click(function() {
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
		if ( registerOrLogin.is(':visible') ) {
			registerOrLogin.modal('hide');
			login.modal('show');
		} else {
			login.modal('show');
		}
	});

	$('#registerOrLoginJS').on('click', function() {
		registerOrLogin.modal('show');
	});

});