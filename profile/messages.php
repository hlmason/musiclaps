<?php
	require_once('../include/config.php');

	$pageTitle = 'Messages';
	$page = 'Messages';
	
	include(ROOT_PATH . 'include/header-logged-in.php');
	include(ROOT_PATH . 'include/db-connection.php');
	include(ROOT_PATH . 'controllers/get-profile.php');
	include(ROOT_PATH . 'include/nav-logged-in.php');

?>









	<?php
		include(ROOT_PATH . 'include/footer-logged-in.php');
	?>