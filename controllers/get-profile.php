<?php	

	try {
		$results = $db->query('SELECT firstname, picture, gender, city, state, country, talent FROM user');
	} catch (Exception $e) {
		echo '<h1 class="db-error-message">Data could not be retrieved.</h1>';
	}

	// echo '<pre>';
	// var_dump($results->fetchAll(PDO::FETCH_ASSOC));
	$profile_results = $results->fetchAll(PDO::FETCH_ASSOC);

?>