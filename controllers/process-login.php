<?php
	require_once('../include/config.php');
	include('../include/new-db-connection.php');
	
	//selects using the user input 
	$get_user_query = 'SELECT * FROM user WHERE userid="'. $_POST['userid'] .'" AND password="'. md5($_POST['password']) .'"';
	$get_user = mysql_query($get_user_query);		
	$user = mysql_fetch_assoc($get_user);
	
	//checks if there is returned data from the database (checks if the login is correct)
	if($user)
	{
		unset($_SESSION['login_error']);
		
		$_SESSION['user'] = array(
			'id' => $user['id'],
			'first_name' => $user['firstname'],
			'last_name' => $user['lastname'],
			'userid' => $user['userid']
		);
		
		//redirects to the main page/home page
		header('location: ../views/profile/index.php');
	}
	//if login is incorrect, it will show this error message below
	else
	{
		$_SESSION['login_error'] = "<p>Username and Password do not match!</p>"; 
		
		//redirects to the sign in page and returns error
		header('location: ../views/profile/index.php') ; // TODO: fix these validations
	}
?>