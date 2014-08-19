$(document).ready(function() {

	var registerOrLogin = $('#registerOrLogin');
	var register = $('#register');
	var login = $('#login');

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


	// Express registration per Bart's request.  Not sure where/how this is going to be integrated.
	// $('#registrationExpressJS').on('click', function() {
	// 	$('#registrationExpress').modal('show');
	// });

});