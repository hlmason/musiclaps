<?php
	require_once('../include/config.php');

	$pageTitle = 'My Profile';
	$page = 'Profile';
	
	include(ROOT_PATH . 'include/header-logged-in.php');
	include(ROOT_PATH . 'include/connection.php');
	include(ROOT_PATH . 'controllers/profile.php');

?>

	<div id="wrapper">
		
		<div class="container">
			
			<div class="row col-xs-12">
				
				<div class="col-xs-1">
					<?php 
						echo '<div>';
							echo $profile_result["firstname"];
						echo '</div>';
					?>
				</div>

				<div class="col-xs-2">
					<?php 
						echo '<div>';
							echo $profile_result["gender"];
							echo $profile_result["city"] . ',' . $profile_result["state"] . ',' . $profile_result["country"];
						echo '</div>';
					?>
				</div>



			</div>
		</div>

	<?php
		include(ROOT_PATH . 'include/footer.php');
	?>