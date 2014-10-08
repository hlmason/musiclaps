<?php
	session_start();
	include ('../include/db-connection.php');

	// Registration
	if ( isset($_POST['register']) AND $_POST['register'] == 'register' ) {

		$validation_errors = array(); // Empty array to collect validation errors


		// Email
		if ( empty($_POST['email']) ) {
			$validation_errors['error_type']['email'] = "Please enter your email address";
		}
		if ( ! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) { // Built-in PHP function which takes a string and a constant
			$validation_errors['error_type']['email'] = "Please enter a valid email address";
		}


		// Username
		if ( empty($_POST['userid']) ) {
			$validation_errors['error_type']['userid'] = "Please enter a username";
		}


		// Password
		if ( empty($_POST['password']) ) {
			$validation_errors['error_type']['password'] = "Please enter a password";
		}
		if ( strlen($_POST['password']) < 6 OR ( strlen($_POST['password']) > 20 ) ) {
			$validation_errors['error_type']['password'] = "Please enter a password between 6 and 20 characters";
		}

		if ( empty($_POST['confirm_password']) ) {
			$validation_errors['error_type']['confirm_password'] = "Please confirm your password";
		}


		// Birth date
		if ( empty($_POST['birthday']) ) {
			$validation_errors['error_type']['birthday'] = "Please enter your birth date";
		}


		// Gender
		if ( empty($_POST['gender']) ) {
			$validation_errors['error_type']['gender'] = "Please enter your gender";
		}


		// Zip/Postal Code
		if ( empty($_POST['zipcode']) ) {
			$validation_errors['error_type']['zipcode'] = "Please enter your zip or postal code";
		}


		// Captcha
		if ( empty($_POST['captcha']) ) {
			$validation_errors['error_type']['captcha'] = "Please type in the Captcha text";
		}


		// Terms of Service
		if ( empty($_POST['tos']) ) {
			$validation_errors['error_type']['tos'] = "Please check the box agreeing to the Musiclaps terms of service";
		}


		// if( count($validation_errors) > 0 ) {
		// 	$_SESSION['errors'] = $validation_errors;
		// 	header('location: ../include/modals/registration-full.php');
		// 	exit();
		// } else {
		// 	$_SESSION['success'] = "You have successfully registered for Musiclaps";
		// 	header('location: ../include/user-menu.php');
		// 	exit();
		// }


		if ( isset($validation_errors['error_type']) ) {
			
			$html = "";
			
			if ( isset($validation_errors['error_type']['email']) ) {
				$html .= "<h4 class='musiclaps-blue error-message'>" . $validation_errors['error_type']['email'] . "</h4>";
			}
			
			// if ( isset($validation_errors['error_type']['userid']) ) {
			// 	$html .= "<h4 class='musiclaps-blue error-message'>" . $validation_errors['error_type']['userid'] . "</h4>";
			// }

			// if ( isset($validation_errors['error_type']['password']) ) {
			// 	$html .= "<h4 class='musiclaps-blue error-message'>" . $validation_errors['error_type']['password'] . "</h4>";
			// }

			// if ( isset($validation_errors['error_type']['confirm_password']) ) {
			// 	$html .= "<h4 class='musiclaps-blue error-message'>" . $validation_errors['error_type']['confirm_password'] . "</h4>";
			// }

			// if ( isset($validation_errors['error_type']['birthday']) ) {
			// 	$html .= "<h4 class='musiclaps-blue error-message'>" . $validation_errors['error_type']['birthday'] . "</h4>";
			// }

			// if ( isset($validation_errors['error_type']['gender']) ) {
			// 	$html .= "<h4 class='musiclaps-blue error-message'>" . $validation_errors['error_type']['gender'] . "</h4>";
			// }

			// if ( isset($validation_errors['error_type']['zipcode']) ) {
			// 	$html .= "<h4 class='musiclaps-blue error-message'>" . $validation_errors['error_type']['zipcode'] . "</h4>";
			// }

			// if ( isset($validation_errors['error_type']['captcha']) ) {
			// 	$html .= "<h4 class='musiclaps-blue error-message'>" . $validation_errors['error_type']['captcha'] . "</h4>";
			// }

			// if ( isset($validation_errors['error_type']['tos']) ) {
			// 	$html .= "<h4 class='musiclaps-blue error-message'>" . $validation_errors['error_type']['tos'] . "</h4>";
			// }

			$validation_errors['html'] = $html;
			$validation_errors['error_type_email'] = true;
			echo json_encode($validation_errors);
		}
	}

	// echo "POST INFO:<br>";
	// var_dump($_POST);

?>