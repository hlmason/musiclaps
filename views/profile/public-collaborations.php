<?php
	require_once('../../controllers/require/config.php');

	$page_title = 'Collaborations'; // Hard-coded placeholder
	
	include(ROOT_PATH . 'views/include/header.php');

?>

	<div id="wrapper">
		<div class="container">
			
			<?php
				include(ROOT_PATH . 'views/include/user-menu-b.php');
			?>
		
			<div class="row col-lg-10 col-lg-offset-1">				
					
				<div class="row col-xs-12 col-sm-8 profile-page">

					<div class="row" id="avatar-n-edit-profile">	
						<div class="col-xs-5 col-sm-3">
							<img class="avatar" src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user"><!-- Hard-coded placeholder -->
						</div>
						<div class="col-xs-7 col-sm-4">
							<h2 id="user-id">$userid</h2><!-- Hard-coded placeholder -->
						</div>
					</div>
						
					<div class="row">
						<div class="col-sm-3"></div>
						<div class="col-xs-12 col-sm-8" id="about-me">
							<h4>About me:</h4>
							<ul class="first-ul-profile-page">
								<li class="profile-page"><span class="glyphicon glyphicon-user"></span>&nbsp; $gender</li><!-- Hard-coded placeholder -->
								<li class="profile-page" id="glyphicon-home"><span class="glyphicon glyphicon-home"></span>&nbsp; $website</li><!-- Hard-coded placeholder -->
							</ul>
							<ul class="second-ul-profile-page">
								<li class="profile-page"><span class="glyphicon glyphicon-globe"></span>&nbsp; $city, $state, $country</li><!-- Hard-coded placeholder -->
							</ul>
						</div>
						<div class="col-sm-1"></div>
					</div>

					<section class="row col-xs-12 public-projects-and-collaborations-container">
						
						<h4 class="my-public-projects-heading">Collaborations <span class="normal">($number)</span></h4><!-- Hard-coded placeholder / Note that this says "My Public Projects" on public-profile-logged-in.php -->

						<div class="row col-xs-12">
							
							<div class="row">
								<section class="col-xs-12 col-md-6 public-projects-and-collaborations">
									<div class="row col-xs-6 col-sm-4 col-md-6">
										<a href="<?php echo BASE_URL; ?>views/profile/public-project-b.php"><img class="projectImg" src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="Project image"></a><!-- Hard-coded placeholder -->
									</div>
									<div class="row col-xs-6 col-sm-8 col-md-6">
										<a href="<?php echo BASE_URL; ?>views/profile/public-project-b.php"><h4>$project title</h4></a><!-- Hard-coded placeholder -->
										<h5>$#### Plays</h5><!-- Hard-coded placeholder -->
									</div>
								</section>

								<section class="col-xs-12 col-md-6 public-projects-and-collaborations">
									<div class="row col-xs-6 col-sm-4 col-md-6">
										<a href="<?php echo BASE_URL; ?>views/profile/public-project-b.php"><img class="projectImg" src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="Project image"></a><!-- Hard-coded placeholder -->
									</div>
									<div class="row col-xs-6 col-sm-8 col-md-6">
										<a href="<?php echo BASE_URL; ?>views/profile/public-project-b.php"><h4>$project title</h4></a><!-- Hard-coded placeholder -->
										<h5>$#### Plays</h5><!-- Hard-coded placeholder -->
									</div>
								</section>
							</div>
						
						</div>

					</section>

				</div>		
				<div class="row col-xs-12 col-sm-4 profile-right-container">
					<section class="profile-right profile-page public-profile-page"><!-- views/profile/index.php does not contain the class name "public-profile-page" -->
						
						<div class="row first-row">
							<div class="col-xs-7 col-offset-xs-1">
								<h2>$#</h2><!-- Hard-coded placeholder -->
								<h5>listeners?</h5>
							</div>
							<div class="col-xs-3">
								<h2>$#</h2><!-- Hard-coded placeholder -->
								<h5>claps</h5>
							</div>
							<div class="col-xs-1"></div>
						</div>

						<div class="row col-xs-12 user-location-map-container">
							<h4>Location: </h4>
							<div class="user-location-map"></div><!-- Placeholder -->
						</div>

						<div class="row col-xs-12">
							<h4>Member since: </h4>
							<h5>$date joined</h5><!-- Hard-coded placeholder -->
						</div>

						<div class="row col-xs-12">
							<h4>Favorite Artists: </h4>
							<h5>$artists</h5><!-- Hard-coded placeholder -->
						</div>

						<div class="row col-xs-12">
							<h4>Favorite Songs: </h4>
							<h5>$songs</h5><!-- Hard-coded placeholder -->
						</div>

						<div class="row col-xs-12">
							<h4>Genre(s): </h4>
							<h5>$genre(s)</h5><!-- Hard-coded placeholder -->
						</div>

						<div class="row col-xs-12">
							<h4>Skill(s): </h4>
							<h5>$skill(s)</h5><!-- Hard-coded placeholder -->
						</div>

						<div class="row col-xs-12 last-row">
							<h4>Message: </h4>
							<h5>$message to other musicians</h5><!-- Hard-coded placeholder -->
						</div>

					</section>
				</div>	
			</div>
			<div class="col-lg-1"></div>	
		
		</div>

	<?php
		include(ROOT_PATH . 'views/include/footer-logged-in.php');
	?>