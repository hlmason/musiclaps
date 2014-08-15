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
						<div class="col-xs-4 col-sm-3">
							<img id="avatar" src="<?php echo BASE_URL; ?>assets/images/profile-pg/female-avatar.png" alt="Placeholder for female Musiclaps user"><!-- Hard-coded placeholder -->
						</div>
						<div class="col-xs-8 col-sm-5">
							<h2 id="user-id">$userid</h2>
						</div>
						<div class="col-xs-8 col-sm-4">
							<a><h4 id="edit-profile"><span class="glyphicon glyphicon-pencil"></span> Edit Profile</h4></a>
						</div>
					</div>
						
					<div class="row">
						<div class="col-sm-3"></div>
						<div class="col-xs-12 col-sm-8" id="about-me">
							<h4>About me:</h4>
							<ul class="first-ul-profile-page">
								<li class="profile-page"><span class="glyphicon glyphicon-user"></span> &nbsp;$gender</li><!-- Hard-coded placeholder -->
								<li class="profile-page pull-right"><span class="glyphicon glyphicon-music"></span> &nbsp;$genre</li><!-- Hard-coded placeholder -->
							</ul>
							<ul class="second-ul-profile-page">
								<li class="profile-page"><span class="glyphicon glyphicon-globe"></span> &nbsp;$city, $state, $country</li><!-- Hard-coded placeholder -->
								<li class="profile-page pull-right"><span class="glyphicon glyphicon-star"></span> &nbsp;$talent</li><!-- Hard-coded placeholder -->
							</ul>
						</div>
						<div class="col-sm-1"></div>
					</div>

					<div class="row col-xs-12">
						<form class="profile-page">
							<div>
								<label for="birthdate">Birth Date</label>
								<input class="profile-page" id="birthdate" type="date" name="birthdate">
							</div>
						</form>
					</div>

					<div class="row col-xs-12">
						<form class="profile-page">
							<div>
								<label for="website_url">Website URL</label>
								<input class="profile-page" id="website_url" type="text" name="website_url">
							</div>
						</form>
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