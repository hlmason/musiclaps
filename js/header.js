$(document).ready(function() {

	$('#registerJS').on('click', function() {
		$('#register').modal('show');
	});
		$('#registerWithEmail').click(function() {
			$('#register').modal('hide');
			$('#emailRegistration').modal('show');
		});

	$('#loginJS').on('click', function() {
		$('#login').modal('show');
	});

});