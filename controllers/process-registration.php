<?php
	session_start();
	include ('../include/db-connection.php');

	// Registration
	if ( isset($_POST['register']) AND $_POST['register'] == 'register' ) {

		$errors = array(); // Empty array to collect validation errors


		// Email
		if (empty($_POST['email']) ) {
			$errors[] = "Please enter your email address";
		}
		if ( ! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) { // Built-in PHP function which takes a string and a constant
			$errors[] = "Please enter a valid email address";
		}


		// Username
		if (empty($_POST['userid']) ) {
			$errors[] = "Please enter a username";
		}


		// Password
		if (empty($_POST['password']) ) {
			$errors[] = "Please enter a password";
		}
		if ( strlen($_POST['password']) < 6 OR ( strlen($_POST['password']) > 20 ) ) {
			$errors[] = "Please enter a valid password between 6 and 20 characters";
		}

		if (empty($_POST['confirm_password']) ) {
			$errors[] = "Please confirm your password";
		}


		// Birth date
		if (empty($_POST['birthday']) ) {
			$errors[] = "Please enter your birth date";
		}


		// Gender
		if (empty($_POST['gender']) ) {
			$errors[] = "Please enter your gender";
		}


		// Zip/Postal Code
		if (empty($_POST['zipcode']) ) {
			$errors[] = "Please enter your zip or postal code";
		}


		// Captcha
		if (empty($_POST['captcha']) ) {
			$errors[] = "Please type in the Captcha text";
		}


		// Terms of Service
		if (empty($_POST['tos']) ) {
			$errors[] = "Please check the box agreeing to the Musiclaps terms of service";
		}


		if( count($errors) > 0 ) {
			$_SESSION['errors'] = $errors;
			header('location: ../include/modals/registration-full.php');
			exit();
		} else {
			$_SESSION['success'] = "You have successfully registered for Musiclaps";
			header('location: ../include/user-menu.php');
			exit();
		}


	}

	echo "POST INFO:<br>";
	var_dump($_POST);

?>

// <?php
// // This goes on a view page
// 	session_start();
	
// 	if (isset ($_SESSION['errors']) ) {
// 		foreach ( $_SESSION['errors'] as $error) {
// 			echo "<h5> $error </h5>";
// 			unset( $_SESSION['errors']);
// 		}
// 	}
// ?>

// <?php
// // This goes on a view page
// 	session_start();

// 	if (isset ($_SESSION['success']) ) {
// 		echo "<h5> You have successfully registered for Musiclaps! </h5>";
// 		unset( $_SESSION['success']);
// 	} else {
// 		header('location:' . BASE_URL);
// 		exit();
// 	}
// ?>