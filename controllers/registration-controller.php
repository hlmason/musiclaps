<?php
	// session_start();
	include('../models/new-db-connection.php');

	// Registration
	if ( isset($_POST['register']) AND $_POST['register'] == 'register' ) {

		$validation_error_messages = array(); // Empty array to collect validation error messages


		// Email validation
		if ( empty($_POST['email']) ) {
			$validation_error_messages['validation_type']['email'] = "Please enter an email address";
		} elseif ( ! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) { // Built-in PHP function which takes a string and a constant
			$validation_error_messages['validation_type']['email'] = "Please enter a valid email address";
		} else {
			function check_duplicate_email($email_field) {
				$check_duplicate_email_query = "SELECT * FROM user WHERE email = '{$email_field}'";
				$result = fetch_record($check_duplicate_email_query); // The fetch_record function is defined in models/new-db-connection.php
				if ($result) {
					return true;
				} else {
					return false;
				}
			}
			if ( check_duplicate_email($_POST['email']) ) {
				$validation_error_messages['validation_type']['email'] = "Email address already exists";
			}
		}


		// Username validation
		if ( empty($_POST['userid']) ) {
			$validation_error_messages['validation_type']['userid'] = "Please enter a username";
		}


		// Password validation
		if ( empty($_POST['password']) ) {
			$validation_error_messages['validation_type']['password'] = "Please enter a password";
		} elseif ( strlen($_POST['password']) < 6 OR ( strlen($_POST['password']) > 20 ) ) {
			$validation_error_messages['validation_type']['password'] = "Please enter a password containing 6 to 20 characters";
		}


		// Confirm password validation
		if ( empty($_POST['confirm_password']) ) {
			$validation_error_messages['validation_type']['confirm_password'] = "Please confirm your password";
		} elseif ( ($_POST['confirm_password']) != ($_POST['password']) ) {
			$validation_error_messages['validation_type']['confirm_password'] = "Password confirmation is incorrect";
		}


		// Birth date validation
		if ( empty($_POST['birthday']) ) {
			$validation_error_messages['validation_type']['birthday'] = "Please enter your birth date";
		}


		// Gender validation
		if ( empty($_POST['gender']) ) {
			$validation_error_messages['validation_type']['gender'] = "Please enter your gender";
		}


		// Zip/Postal Code validation
		if ( empty($_POST['zipcode']) ) {
			$validation_error_messages['validation_type']['zipcode'] = "Please enter your zip or postal code";
		}


		// Captcha validation
		if ( empty($_POST['captcha']) ) {
			$validation_error_messages['validation_type']['captcha'] = "Please type in the Captcha text";
		}


		// Terms of Service validation
		if ( empty($_POST['tos']) ) {
			$validation_error_messages['validation_type']['tos'] = "Please check the box agreeing to the Musiclaps terms of service";
		}

		// if( count($validation_error_messages) > 0 ) {
		// 	$_SESSION['errors'] = $validation_error_messages;
		// 	header('location: ../views/include/modals/registration-full.php');
		// 	exit();
		// } else {
		// 	$_SESSION['success'] = "You have successfully registered for Musiclaps";
		// 	header('location: ../include/profile/user-menu.php');
		// 	exit();
		// }


		// Ajax
		if ( isset($validation_error_messages['validation_type']) ) {
			
			$html = "";
			
			if ( isset($validation_error_messages['validation_type']['email']) ) {
				$html .= "<h4 class='musiclaps-blue error-message'>" . $validation_error_messages['validation_type']['email'] . "</h4>";
			}
			
			if ( isset($validation_error_messages['validation_type']['userid']) ) {
				$html .= "<h4 class='musiclaps-blue error-message'>" . $validation_error_messages['validation_type']['userid'] . "</h4>";
			}

			if ( isset($validation_error_messages['validation_type']['password']) ) {
				$html .= "<h4 class='musiclaps-blue error-message'>" . $validation_error_messages['validation_type']['password'] . "</h4>";
			}

			if ( isset($validation_error_messages['validation_type']['confirm_password']) ) {
				$html .= "<h4 class='musiclaps-blue error-message'>" . $validation_error_messages['validation_type']['confirm_password'] . "</h4>";
			}

			if ( isset($validation_error_messages['validation_type']['birthday']) ) {
				$html .= "<h4 class='musiclaps-blue error-message'>" . $validation_error_messages['validation_type']['birthday'] . "</h4>";
			}

			if ( isset($validation_error_messages['validation_type']['gender']) ) {
				$html .= "<h4 class='musiclaps-blue error-message'>" . $validation_error_messages['validation_type']['gender'] . "</h4>";
			}

			if ( isset($validation_error_messages['validation_type']['zipcode']) ) {
				$html .= "<h4 class='musiclaps-blue error-message'>" . $validation_error_messages['validation_type']['zipcode'] . "</h4>";
			}

			if ( isset($validation_error_messages['validation_type']['captcha']) ) {
				$html .= "<h4 class='musiclaps-blue error-message'>" . $validation_error_messages['validation_type']['captcha'] . "</h4>";
			}

			if ( isset($validation_error_messages['validation_type']['tos']) ) {
				$html .= "<h4 class='musiclaps-blue error-message'>" . $validation_error_messages['validation_type']['tos'] . "</h4>";
			}

			$validation_error_messages['html'] = $html;
			$validation_error_messages['error'] = true;
			echo json_encode($validation_error_messages);
		}
	
	}

	// echo "POST INFO:<br>";
	// var_dump($_POST);

?>