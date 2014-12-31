$(document).ready(function() {

	var passwordReq = $('#passwordReq');
	var registerOrLogin = $('.registerOrLogin'); // Modal
	var register = $('#registerJS'); // Modal
	var login = $('#loginJS'); // Modal

	passwordReq.hide();

	$('.registerJS').on('click', function() {
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
			$('.glyphiconQuestionSignRegistration').hover(function() {
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

	$('button.registerOrLogin').on('click', function() { // This modal is on the Live Player page
		registerOrLogin.modal('show');
	});

	$('#glyphiconEnvelope').on('click', function() { // This modal is on the Project Details page
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
			if (data['error'] === true) {
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