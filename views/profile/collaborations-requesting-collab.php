<?php
	require_once('../../controllers/require/config.php');

	$page_title = 'Requesting Collab Projects';
	
	include(ROOT_PATH . 'models/new-db-connection.php');
	include(ROOT_PATH . 'views/include/header-logged-in.php');
	include(ROOT_PATH . 'views/include/profile/user-menu.php');

?>
		
			<div class="row col-lg-10 col-lg-offset-1">				
					
				<div class="row col-xs-12 col-md-9 projects-container">

					<section class="row projects-container" id="requestingCollabContainer">
						<div class="col-xs-5 col-sm-3 col-md-3">
							<span class="glyphicon-pencil-container"><span class="glyphicon glyphicon-pencil glyphiconPencil"></span></span>
							<img class="projectImg" src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="Project image"><!-- Hard-coded placeholder -->
						</div>
					
						<div class="col-xs-7 col-sm-6 col-md-7">
							<h4>$project title</h4><!-- Hard-coded placeholder -->
							<h5>Upload Date: <span class="normal">$# days ago</span></h5><!-- Hard-coded placeholder -->
							<h5>Plays: <span class="normal">$# of plays</span></h5><!-- Hard-coded placeholder -->
							<h5 class="last-h5 xs">Requesting Collab <span class="glyphicon glyphicon-lock"></span></h5><!-- Only visible at viewport widths <= 767px -->
						</div>

						<div class="col-sm-3 col-md-2">
							<h5 class="last-h5 sm">Requesting Collab <span class="glyphicon glyphicon-lock"></span></h5><!-- Only visible at viewport widths > 767px -->
						</div>
					</section>

					<div id="requestingCollabForm">
						<!-- Recording Player -->
						<div class="row col-xs-12 live-player-container">
							<iframe width="620" height="380" src="https://www.musiclaps.com/embed/player?songid=null" frameborder="0" scrolling="no"></iframe><!-- Placeholder -->
						</div>
						<!-- End of Recording Player -->

						<section class="row col-xs-12 project-form-header requesting-collab-page">
							<h3>Project Title by <a href="<?php echo BASE_URL; ?>views/profile/">$username</a></h3><!-- Hard-coded placeholder -->
							<a href="<?php echo BASE_URL; ?>views/profile/collaborations.php"><span class="glyphicon glyphicon-repeat"></span></a>
						</section>
						
						<section class="row col-xs-12">
							<form action="<?php echo BASE_URL; ?>controllers/profile/project-form-controller.php" method="post">
								<div class="project-info-bar requesting-collab-page sm"><!-- Only visible at viewport widths > 731px -->
									<h4 class="first-h4">$project #</h4><!-- Hard-coded placeholder -->
									<h4>$instrument name</h4><!-- Hard-coded placeholder -->
									<h5>$date project started</h5>
									<span class="glyphicon glyphicon-volume-up"></span>
									<div class="slider"></div>
									<h4 class="last-h4">100</h4><!-- Hard-coded placeholder -->

									<!-- Markup is backwards because elements are floated right -->
									<span class="glyphicon glyphicon-trash"></span>
									<span class="glyphicon glyphicon-save"></span>
									<input class="save-volume" type="submit" value="Save">
								</div>
									
								<div class="project-info-bar requesting-collab-page xs"><!-- Only visible at viewport widths <= 731px -->
									<h4 class="first-h4">$project #</h4><!-- Hard-coded placeholder -->
									<h4>$instrument name</h4><!-- Hard-coded placeholder -->
									<h5>$date project started</h5>
									
									<div>
										<span class="glyphicon glyphicon-volume-up"></span>
										<div class="slider"></div>
										<h4 class="last-h4">100</h4><!-- Hard-coded placeholder -->
										<!-- Markup is backwards because elements are floated right -->
										<span class="glyphicon glyphicon-trash"></span>
										<span class="glyphicon glyphicon-save"></span>
										<input class="save-volume" type="submit" value="Save">
									</div>
								</div>
							</form>
						</section>
					</div>

					<section class="noListings">
						<h4>You currently have no projects in this category</h4>
					</section>

					<!-- "Change Sound Image" form -->
					<?php
						include(ROOT_PATH . 'views/include/profile/change-sound-img-form.php');
					?>
					<!-- End of "Change Sound Image" form -->

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