<?php
	try {
		$db = new PDO('mysql:host=50.18.152.255;dbname=musiclaps','mc1q2wlaps','go0530go'); // Create object of PDO class
		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$db->exec('SET NAMES "utf8"'); // Defines character set to be used for sending data to/from database
	} catch(Exception $e) {
		echo "We're sorry, but a connection to the database could not be established.";
		exit;
	}
?>