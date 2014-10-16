<?php
	require_once('../../controllers/require/config.php');

	$page_title = 'My Joined Collaborations';
	
	include(ROOT_PATH . 'views/include/header-logged-in.php');

?>

	<div id="wrapper">
		<div class="container">
			
			<?php
				include(ROOT_PATH . 'views/include/user-menu-b-logged-in.php');
			?>
		
			<div class="row col-lg-10 col-lg-offset-1">				
					
				<div class="row col-xs-12 col-sm-8 profile-page">

					<!-- Avatar and username div -->
					<?php
						include(ROOT_PATH . 'views/include/profile/avatar-and-username.php');
					?>
						<!-- End of "Avatar and username" div -->
					</div>
						
					<!-- "About me" div -->
					<?php
						include(ROOT_PATH . 'views/include/profile/about-me.php');
					?>
					<!-- End of "About me" div -->
					

					<section class="row col-xs-12 public-projects-and-collaborations-container">
						
						<h4 class="my-public-projects-heading">My Joined Collaborations <span class="normal">($number)</span></h4><!-- Hard-coded placeholder / Note that this says "Joined Collaborations" on joined-public-collaborations.php -->
					
						<div class="row col-xs-12">
							
							<div class="row">
								<!-- Project listings -->
								<?php
									include(ROOT_PATH . 'views/include/public-project/public-project-listings-b-logged-in.php');
								?>
								<!-- End of project listings -->
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