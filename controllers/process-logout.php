<?php 
	require_once('../include/config.php');
	
	session_start();
	
	session_destroy();
	
	// Redirect to landing page
	header('location:' . BASE_URL);
	exit();
?>