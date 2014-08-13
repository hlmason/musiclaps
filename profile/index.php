<?php
	require_once('../include/config.php');

	$pageTitle = 'My Profile';
	$page = 'Profile';
	
	include(ROOT_PATH . 'include/header-logged-in.php');
	include(ROOT_PATH . 'include/db-connection.php');
	include(ROOT_PATH . 'controllers/get-profile.php');

?>

	<div id="wrapper">
		<div class="container">			
			<div class="row col-lg-10 col-lg-offset-1">				
					
				<div class="row col-xs-12 col-sm-8">

					<div class="row">	
						<div class="col-xs-4 col-sm-4">
							<img id="avatar" src="<?php echo BASE_URL; ?>assets/images/profile-pg/female-avatar.png" alt="Placeholder for female Musiclaps user"><!-- Hard-coded placeholder -->
						</div>
						<div class="col-xs-8 col-sm-5">
							<h2 class="profile-page">$userid</h2>
						</div>
						<div class="col-xs-8 col-sm-3">
							<a><h4 class="profile-page">Edit Profile</h4></a>
						</div>
					</div>
						
					<div class="row">
						<div class="col-sm-4"></div>
						<div class="col-xs-12 col-sm-7" id="about-me">
							<h4>About me:</h4>
							<ul>
								<li class="profile-page">Gender: $gender</li><!-- Hard-coded placeholder -->
								<li class="profile-page pull-right">Genre: $genre</li><!-- Hard-coded placeholder -->
							</ul>
							<ul>
								<li class="profile-page">Location: $city, $state, $country</li><!-- Hard-coded placeholder -->
								<li class="profile-page pull-right">Talent: $talent</li><!-- Hard-coded placeholder -->
							</ul>
						</div>
						<div class="col-sm-1"></div>
					</div>

				</div>	
				
				<div class="row col-xs-12 col-sm-4">
					<div id="profile-right"></div>
				</div>
				
			</div>
			<div class="col-lg-1"></div>	
		</div>

	<?php
		include(ROOT_PATH . 'include/footer.php');
	?>