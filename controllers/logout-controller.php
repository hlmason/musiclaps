<?php 
	require_once('../controllers/require/config.php');
	
	session_start();
	
	session_destroy();
	
	// Redirect to landing page
	header('location:' . BASE_URL);
	exit();
?>