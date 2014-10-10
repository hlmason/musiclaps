<?php
	// session_start();
	// echo "SERVER INFO<br>"; // All info on current page available from server
	// var_dump($_SERVER);
	// echo "REQUEST INFO:<br>";
	// var_dump($_REQUEST);
	// echo "GET INFO:<br>";
	// var_dump($_GET);
	// echo "POST INFO:<br>";
	var_dump($_POST);
	// echo "FILE INFO:<br>";
	// var_dump($_FILES);

	echo "COOKIE INFO<br>";
	var_dump($_COOKIE);
	echo "SESSION INFO<br>";
	var_dump($_SESSION);

	if ( isset($_POST['email']) ) {
		$_SESSION[''] = $_POST[''];
	}

?>