<?php
//define constants for db_host, db_user, db_pass, and db_database
//adjust the values below to match your database settings
define('DB_HOST', '50.18.152.255');
define('DB_USER', 'mc1q2wlaps');
define('DB_PASS', 'go0530go'); //set DB_PASS as 'root' if you're using mac
define('DB_DATABASE', 'musiclaps'); //make sure to set your database

//connect to database host
$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);

//make sure connection is good or die
if ($connection->connect_error) 
{
    die("Failed to connect to MySQL: (" . $connection->connect_error . ") " . $connection->connect_error);
}


//used when expecting multiple results
function fetch_all($query)
{
	$data = array();
	global $connection;
	$result = $connection->query($query);
	 
	//while($row = $result->fetch_assoc())
	while($row = mysqli_fetch_assoc($result)) 
	{
		$data[] = $row;
	}
	return $data;
}

//use when expecting a single result
function fetch_record($query)
{
	global $connection;
	$result = $connection->query($query);
	return mysqli_fetch_assoc($result);
	//return $result->fetch_assoc();
}

//use to run INSERT/DELETE/UPDATE, queries that don't return a value
//notice this function returns a value.  This value will be equal to the ID of the most recent query item 
//ran by your PHP code.
function run_mysql_query($query)
{
	global $connection;
 	$result = $connection->query($query);
 	return $connection->insert_id;
}

?>