<?php include ("include/mysql_connect.php");
	
	//unset the error
	unset($_SESSION['error']);
	
	//sets the error handling variable
	$_SESSION['error'] = "";
	
	if(! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
		$_SESSION['error'] .= "<p>Email is invalid!</p>";
	
	if(empty($_POST['first_name']))
		$_SESSION['error'] .= "<p>First Name is required!</p>";
	
	if(empty($_POST['last_name']))
		$_SESSION['error'] .= "<p>Last Name is required!</p>";
	
	if(empty($_POST['password']))
		$_SESSION['error'] .= "<p>Password is required!</p>";
	
	if($_POST['password'] != $_POST['confirm_password'])
		$_SESSION['error'] .= "<p>Confirm Password must be the same as Password!</p>";
	
	// check if there are errors
	if($_SESSION['error'])
		header( 'Location: registration.php' );
	else
	{
		$get_user_query = 'SELECT * FROM users WHERE email = "'. $_POST['email'] .'"';
		$get_user = mysql_query($get_user_query);
		$existing_user = mysql_fetch_assoc($get_user);
	
		//checks if the email address was already used
		if($existing_user)
		{	
			$_SESSION['error'] = "<p>Email already exist!</p>";
			header( 'Location: registration.php' );
		}
		//if email address is not yet in the database
		else
		{
			//query for inserting data into the database
			$insert_user_query = 'INSERT INTO users (password, first_name, last_name, email, created_at) 
						VALUES ("'. md5(mysql_real_escape_string($_POST['password'])).'",
								"'. mysql_real_escape_string($_POST['first_name']).'",
								"'. mysql_real_escape_string($_POST['last_name']).'",
								"'. mysql_real_escape_string($_POST['email']).'",
								"'. date('Y-m-d H:i:s') .'"
						)';
						
			$insert_user = mysql_query($insert_user_query);
			
			// automatically adds the session to the user
			$_SESSION['user'] = array(
				'id' =>  mysql_insert_id(),
				'first_name' => $_POST['first_name'],
				'last_name' => $_POST['last_name'],
				'email' => $_POST['email'],
			);
			
			//redirects to the message page
			header( 'Location: index.php' );
		}
	}
		

?>