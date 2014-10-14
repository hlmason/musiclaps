<?php
	require_once('../../controllers/require/config.php');

	$page_title = 'Favorites';
	
	include(ROOT_PATH . 'models/new-db-connection.php');
	include(ROOT_PATH . 'views/include/header-logged-in.php');
	include(ROOT_PATH . 'views/include/profile/user-menu.php');

?>
		
			<div class="row col-lg-10 col-lg-offset-1">				
					
				<div class="row col-xs-12 col-md-9 favorites-page">

					<div class="row">
						<div class="col-sm-12 col-md-6 favorites-page">
							<section class="row projects-container favorites-page first-listing">
								<div class="col-xs-5 col-sm-3 col-md-4">
									<a href="<?php echo BASE_URL; ?>views/public-project/public-project-logged-in.php"><img class="projectImg" src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="Project image"></a><!-- Hard-coded placeholder -->
								</div>
							
								<div class="col-xs-5 col-sm-6 col-md-6">
									<a href="<?php echo BASE_URL; ?>views/public-project/public-project-logged-in.php"><h4>$project title</h4></a><!-- Hard-coded placeholder -->
									<h5>By: <a href="<?php echo BASE_URL; ?>views/profile/public-profile-logged-in.php"><span class="normal">$username</span></a></h5><!-- Hard-coded placeholder -->
									<h5>Plays: <span class="normal">$# of plays</span></h5><!-- Hard-coded placeholder -->
								</div>

								<div class="col-xs-2 col-sm-3 col-md-2">
									<span class="glyphicon glyphicon-trash"></span>
								</div>
							</section>
						</div>
						
						<div class="col-sm-12 col-md-6 favorites-page">
							<section class="row projects-container favorites-page">
								<div class="col-xs-5 col-sm-3 col-md-4">
									<a href="<?php echo BASE_URL; ?>views/public-project/public-project-logged-in.php"><img class="projectImg" src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="Project image"></a><!-- Hard-coded placeholder -->
								</div>
							
								<div class="col-xs-5 col-sm-6 col-md-6">
									<a href="<?php echo BASE_URL; ?>views/public-project/public-project-logged-in.php"><h4>$project title</h4></a><!-- Hard-coded placeholder -->
									<h5>By: <a href="<?php echo BASE_URL; ?>views/profile/public-profile-logged-in.php"><span class="normal">$username</span></a></h5><!-- Hard-coded placeholder -->
									<h5>Plays: <span class="normal">$# of plays</span></h5><!-- Hard-coded placeholder -->
								</div>

								<div class="col-xs-2 col-sm-3 col-md-2">
									<span class="glyphicon glyphicon-trash"></span>
								</div>
							</section>
						</div>
					</div>

				</div>
				<?php
					include(ROOT_PATH . 'views/include/profile/recommended.php');
				?>	
			</div>
			<div class="col-lg-1"></div>	
		
		</div>

	<?php
		include(ROOT_PATH . 'views/include/footer-logged-in.php');
	?>