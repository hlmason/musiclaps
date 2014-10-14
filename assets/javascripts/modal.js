$(document).ready(function() {

	var passwordReq = $('#passwordReq');
	var registerOrLogin = $('.registerOrLogin'); // Modal
	var register = $('#registerJS'); // Modal
	var login = $('#loginJS'); // Modal

	passwordReq.hide();

	$('.registerJS').on('click', function() { // This is a link on header.php and index.php, and a button on register-or-login.php
		if ( registerOrLogin.is(':visible') ) { // This modal is on the Live Player page
			registerOrLogin.modal('hide');
			register.modal('show');
		} else {
			register.modal('show');
		}
	});
		$('button#registrationFullJS').on('click', function() {
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

	$('.loginJS').on('click', function() { // This is a link on login.php and a button on register-or-login.php
		if ( registerOrLogin.is(':visible') ) { // This modal is on the Live Player page
			registerOrLogin.modal('hide');
			login.modal('show');
		} else {
			login.modal('show');

		}
	});

	$('button.registerOrLoginJS').on('click', function() { // This modal is on the Live Player page
		registerOrLogin.modal('show');
	});

	$('#glyphiconEnvelope').on('click', function() { // This modal is on the Public Project 'B' page
		registerOrLogin.modal('show');
	});

	/* ===========================================
	    Ajax for registration modal validations
	=========================================== */
	$('form.registrationForm').submit(function() {
		
		var registrationForm = $(this);
		var registrationInputField = $('#registration-full-modal-body input');
		var registrationSelectOption = $('#registration-full-modal-body select');
		var validationErrorMessages = $('#validationErrorMessages');

		$.post(registrationForm.attr('action'), registrationForm.serialize(), function(data) {
			console.log(data);
			if (data['error'] == true) {
				registrationInputField.css('border', '2px solid #38AAFF');
				registrationSelectOption.css('border', '2px solid #38AAFF');
				validationErrorMessages.html(data['html']);
			} else {
				registrationInputField.css('border', '1px solid #cecece');
				registrationInputField.css('border', '1px solid #cecece');
				validationErrorMessages.html(data['html']);
				// document.getElementById('resetForm').reset();
			}
		}, 
			'json');
		return false;
	});

});