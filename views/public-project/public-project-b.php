<?php
	require_once('../../controllers/require/config.php');

	$page_title = 'Project Name'; // Hard-coded placeholder
	
	include(ROOT_PATH . 'views/include/header.php');

?>

	<div id="wrapper">
		<div class="container">

			<?php
				include(ROOT_PATH . 'views/include/user-menu-b.php');
			?>

			<div class="row col-lg-10 col-lg-offset-1">				
					
				<div class="row col-xs-12 col-md-9 public-profile-b-page">

					<!-- Recording Player -->
					<div class="row col-xs-12 live-player-container">
						<iframe width="620" height="380" src="https://www.musiclaps.com/embed/player?songid=null" frameborder="0" scrolling="no"></iframe><!-- Placeholder -->
					</div>
					<!-- End of Recording Player -->


					<section class="row col-xs-12 public-project-header">
						<h3>Project Title</h3><!-- Hard-coded placeholder -->
					</section>
					
					<section class="row col-xs-12 public-project-info">	
						<div class="row col-xs-4 col-sm-2">
							<a href="<?php echo BASE_URL; ?>views/profile/public-profile.php"><img class="avatar" src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user"></a>
						</div>

						<div class="row col-xs-7 col-sm-6">
							<section class="username-and-number-of-songs">
								<a href="<?php echo BASE_URL; ?>views/profile/public-profile.php"><h4>$username</h4></a><!-- Hard-coded placeholder -->
								<h5>$# Songs</h5><!-- Hard-coded placeholder -->
							</section>
							
							<div class="youtube-links">
								<a class="first-link" href="#"><img src="<?php echo BASE_URL; ?>assets/images/profile-pages/link-to-youtube-icon.jpg" alt="Link to YouTube icon"></a><!-- Hard-coded placeholder -->
								<a href="#"><img src="<?php echo BASE_URL; ?>assets/images/profile-pages/link-to-youtube-icon-gray.png" alt="Link to YouTube icon"></a><!-- Hard-coded placeholder -->
								<a href="#"><img src="<?php echo BASE_URL; ?>assets/images/profile-pages/link-to-youtube-icon-gray.png" alt="Link to YouTube icon"></a><!-- Hard-coded placeholder -->
							</div>
						</div>

						<div class="row col-xs-1 col-sm-4">
							<section class="number-of-listens">
								<h2>#</h2>
								<h5>listens</h5>
							</section>
						</div>
					</section>
					
					<section class="row col-xs-12">
						<div class="clapping-hands-and-favorites-container public-project-info">
							<img class="clapping-hands" src="<?php echo BASE_URL; ?>assets/images/public-project-pages/clapping-hands.png" alt="1 pair of clapping hands">
							<h4 id="number-of-claps-public-project-b-page"># claps</h4><!-- Hard-coded placeholder -->
							
							<!-- <span class="glyphicon glyphicon-thumbs-up"></span> -->

							<span class="glyphicon glyphicon-heart"></span>
							<h4 class="favorites"># favorites</h4><!-- Hard-coded placeholder -->
						</div>
					</section>


					<section class="row col-xs-12">
						<div class="public-project-info" id="project-details-container">
							<h3>Project Details</h3><span class="glyphicon glyphicon-envelope" id="glyphiconEnvelope"></span>
							<!-- Register or login modal -->
							<?php
								include(ROOT_PATH . 'views/include/modals/register-or-login.php');
							?>
							<!-- End of register or login modal -->

							<div class="row">
								<div class="col-xs-4">
									<h4>Genre</h4>
									<h4>BPM</h4>
									<h4>Status</h4>
									<h4>License</h4>
								</div>
								<div class="col-xs-4" id="project-details">
									<h4>None specified</h4><!-- Hard-coded placeholder -->
									<h4>Unknown</h4><!-- Hard-coded placeholder -->
									<h4><span class="glyphicon glyphicon-ok"></span> Open collab</h4><!-- Hard-coded placeholder -->
									<img id="cover-song-public-project-b-page" src="<?php echo BASE_URL; ?>assets/images/public-project-pages/cover-song.png" alt="Cover song icon"><!-- Hard-coded placeholder -->
								</div>
								<div class="col-xs-4">
									<h4 class="project-img">Project image</h4>
									<img class="project-img" src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="Project image"><!-- Hard-coded placeholder -->
								</div>
							</div>
						</div>
					</section>

					<section class="row col-xs-12">
						<div class="public-project-info" id="likes-container">
							<h3>Who Likes this Project</h3>
							<a href="<?php echo BASE_URL; ?>views/profile/public-profile.php"><img class="avatar" src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user"></a><!-- Hard-coded placeholder -->
						</div>
					</section>

				</div>
				<div class="row col-xs-12 col-md-3 profile-right-container public-profile-b-page">
					<section class="profile-right profile-page public-profile-b-page"><!-- views/profile/index.php does not contain the class name "public-profile-page" -->
						
						<div class="row first-row">
							<div class="col-xs-121">
								<h3>Project Overview</h3><!-- Hard-coded placeholder -->
							</div>
						</div>

						<div class="row col-xs-12 user-location-map-container">
							<h3>Location: </h3>
							<div class="user-location-map"></div><!-- Placeholder -->
							<a href="<?php echo BASE_URL; ?>views/profile/public-profile.php"><img class="avatar" src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user"></a><!-- Hard-coded placeholder -->
						</div>

					</section>
				</div>
			</div>
			<div class="col-lg-1"></div>
		
		</div>

	<?php
		include(ROOT_PATH . 'views/include/footer.php');
	?>