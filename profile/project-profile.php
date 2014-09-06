<?php
	require_once('../include/config.php');

	$pageTitle = 'Project Name';
	$page = 'Project Name';
	
	include(ROOT_PATH . 'include/header-logged-in.php');
	include(ROOT_PATH . 'include/db-connection.php');
	include(ROOT_PATH . 'controllers/get-profile.php');

?>

	<div id="wrapper">
		<div class="container">

			<div class="row col-lg-10 col-lg-offset-1">				
					
				<div class="row col-xs-12 col-sm-9">

				<!-- Recording Player -->
					<div class="row col-xs-12 live-player-container">
						<iframe width="620" height="380" src="https://www.musiclaps.com/embed/player?songid=null" frameborder="0" scrolling="no"></iframe><!-- Placeholder -->
					</div>
					<!-- End of Recording Player -->

					<section class="row col-xs-12" id="project-profile-header">
						<h3>Project Title</h3><!-- Hard-coded placeholder -->
					</section>
					<section class="row col-xs-12" id="project-profile-info">	
						<div class="row col-xs-6">
							<img class="avatar" src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user">
							
							<section id="username-and-number-of-songs">
								<a href="<?php echo BASE_URL; ?>profile/"><h4>$username</h4></a><!-- Hard-coded placeholder -->
								<h5>$# Songs</h5><!-- Hard-coded placeholder -->
							</section>
							
							<div id="youtube-links">
								<a id="first-link" href="#"><img src="<?php echo BASE_URL; ?>assets/images/profile-pages/link-to-youtube-icon.jpg" alt="Link to YouTube icon"></a>
								<a href="#"><img src="<?php echo BASE_URL; ?>assets/images/profile-pages/link-to-youtube-icon.jpg" alt="Link to YouTube icon"></a>
								<a href="#"><img src="<?php echo BASE_URL; ?>assets/images/profile-pages/link-to-youtube-icon.jpg" alt="Link to YouTube icon"></a>
							</div>
						</div>

						<div class="row col-xs-6">
							<section id="number-of-listens">
								<h4>#</h4>
								<h5>listens</h5>
							</section>
							<section class="type-of-collab-container">
								<span class="glyphicon glyphicon-ok glyphiconOk requestingCollabGlyphicon"></span>
								<h5 class="first-h5 requestingCollab">Requesting Collab</h5>

								<span class="glyphicon glyphicon-ok glyphiconOk openCollabGlyphicon"></span>
								<h5 class="openCollab">Open Collab</h5>

								<span class="glyphicon glyphicon-ok glyphiconOk noCollabGlyphicon"></span>
								<h5 class="noCollab">No Collab</h5>
							</section>
						</div>
					</section>					

					<section class="row col-xs-12">

					</section>

				</div>
				<?php
					include(ROOT_PATH . 'include/profile/recommended.php');
				?>		
			</div>
			<div class="col-lg-1"></div>	
		
		</div>

	<?php
		include(ROOT_PATH . 'include/footer-logged-in.php');
	?>