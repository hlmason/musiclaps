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
			<div class="row col-md-10 col-md-offset-1">				
					
				<div class="row col-xs-12 col-sm-9">

					<div class="row">	
						<div class="col-xs-1">
							<img id="avatar" src="<?php echo BASE_URL; ?>assets/images/profile-pg/female-avatar.png" alt="Placeholder for female Musiclaps user"><!-- Hard-coded placeholder -->
						</div>
						
						<div class="col-xs-11">
							<div class="row">
								<div class="col-xs-10 col-sm-4">
									<h2>$username</h2>
								</div>
								<div class="col-sm-4"></div>
								<div class="col-xs-2 col-sm-4">
									<h4>Edit Profile</h4>
								</div>
							</div>

							<div class="row col-xs-12">
								<h4>About me: </h4>
							</div>

							<div class="row col-xs-12">
								<ul>
									<li>Gender: $gender</li>
									<li>Genre: $genre</li>
								</ul>
							</div>

							<div class="row col-xs-12">
								<ul>
									<li>Location: $city, $state, $country</li>
									<li>Talent: $talent</li>
								</ul>
							</div>
						</div>
					</div>
				
				</div>	
				
				<div class="row col-xs-12 col-sm-3">
					<div id="profile-right"></div>
				</div>
				
			</div>
			<div class="col-md-1"></div>	
		</div>

	<?php
		include(ROOT_PATH . 'include/footer.php');
	?>