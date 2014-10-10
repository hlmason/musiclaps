<?php
	echo "SERVER INFO<br>"; // All info on current page available from server
	var_dump($_SERVER);
	echo "REQUEST INFO:<br>";
	var_dump($_REQUEST);
	echo "GET INFO:<br>";
	var_dump($_GET);
	echo "POST INFO:<br>";
	var_dump($_POST);
	echo "FILE INFO:<br>";
	var_dump($_FILES);
?>