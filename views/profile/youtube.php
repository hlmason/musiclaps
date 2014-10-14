<?php
	require_once('../../controllers/require/config.php');

	$page_title = 'YouTube';
	
	include(ROOT_PATH . 'models/new-db-connection.php');
	include(ROOT_PATH . 'views/include/header-logged-in.php');
	include(ROOT_PATH . 'views/include/profile/user-menu.php');

?>
			<div class="row col-lg-10 col-lg-offset-1">				
					
				<div>
					<div class="row col-xs-12 col-md-9 youtube-page">

						<div class="row">
							<!-- "YouTube Player" -->
							<section class="col-xs-12 col-md-7" id="youtube-player-etc">
								<div id="youtube-player"></div><!-- Placeholder -->
							<!-- End of "YouTube Player" -->
							</section>

							<div class="col-xs-12 col-md-5">
								<div id="youtube-settings">
									<form action="<?php echo BASE_URL; ?>controllers/profile/youtube-controller.php" method="post">
										<div>
											<input id="new_youtube_connection" type="radio" name="youtube_connection" value="new">
											<label id="new-youtube-connection-label" for="new_youtube_connection">New</label>
										 	
										 	<input id="edit_youtube_connection" type="radio" name="youtube_connection" value="edit">
										 	<label for="edit_youtube_connection">Edit</label>
										</div>

										<div>
											<label id="youtube-id-label" for="youtube_id"><span class="musiclaps-blue">*</span> YouTube ID <span class="glyphicon glyphicon-question-sign"></span></label>
											<div class="youtube-id-req" id="youTubeIdReq">The YouTube ID is the group of letters and numbers <strong>at the end</strong> of the YouTube URL (following the equal sign)</div>
											<input class="youtube-id" id="youtube_id" type="text" name="uid">
										</div>
										
										<input id="view_youtube_vid" type="submit" value="View Youtube Video">
										
										<img src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="YouTube video image"><!-- Hard-coded placeholder -->
										
										<input id="link-to-project" type="submit" name="" value="Link Video to Your Project">
									</form>
								</div>
							</div>
						</div>

						<div class="row col-xs-12" id="info-below-youtube-player">
							<img src="<?php echo BASE_URL; ?>assets/images/profile-pages/link-to-youtube-icon.jpg" alt="YouTube icon">
							<h4>**You can add up to 3 YouTube videos per project</h4>
						</div>

						<div class="row col-xs-12 youtube-page-form" id="newYouTubeConnectionForm">
							<form action="<?php echo BASE_URL; ?>controllers/profile/youtube-controller.php" method="post">
								<div class="sm"><!-- Only visible at viewport widths > 580px -->
									<label for="select_project_new_sm">Select Project</label>
									<select id="select_project_new_sm" name="">
										<option value="sound">$Project Title</option><!-- Hard-coded placeholder -->
									</select>

									<label id="name-label" for="name_sm">Name</label>
									<input class="name" id="name_sm" type="text" name="">

									<input id="save_name" type="submit" name="" value="Save">
								</div>
								
								<div class="xs"><!-- Only visible at viewport widths <= 580px -->
									<div>
										<label for="select_project_new_xs">Select Project</label>
										<select id="select_project_new_xs">
											<option value="sound">$Project Title</option><!-- Hard-coded placeholder -->
										</select>
									</div>

									<div>
										<label id="name-label" for="name_xs">Name</label>
										<input class="name" id="name_xs" type="text" name="">

										<input id="save_name" type="submit" name="" value="Save">
									</div>
								</div>
							</form>
						</div>

						<div class="row col-xs-12 youtube-page-form" id="editYouTubeConnectionForm">
							<form action="<?php echo BASE_URL; ?>controllers/profile/youtube-controller.php" method="post">
								<label for="select_project_edit">Select Project</label>
								<select id="select_project_edit">
									<option value="sound">$Project Title</option><!-- Hard-coded placeholder -->
								</select>

								<input id="edit_name" type="submit" value="Edit">
							</form>
						</div>
					
					</div>


					<div class="row col-md-3 youtube-page">
						<section class="profile-right" id="youtube-vids">
							<h4>Other YouTube Videos</h4>
							<img src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="YouTube video image"><!-- Hard-coded placeholder -->
							<img src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="YouTube video image"><!-- Hard-coded placeholder -->
							<img src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="YouTube video image"><!-- Hard-coded placeholder -->
							<img src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="YouTube video image"><!-- Hard-coded placeholder -->
							<img src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="YouTube video image"><!-- Hard-coded placeholder -->
							<img src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="YouTube video image"><!-- Hard-coded placeholder -->
							<img src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="YouTube video image"><!-- Hard-coded placeholder -->
							<img src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="YouTube video image"><!-- Hard-coded placeholder -->
							<img src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="YouTube video image"><!-- Hard-coded placeholder -->
							<img src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="YouTube video image"><!-- Hard-coded placeholder -->
							<img src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="YouTube video image"><!-- Hard-coded placeholder -->
							<img src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="YouTube video image"><!-- Hard-coded placeholder -->
						</section>
					</div>

				</div>

			</div>
			<div class="col-lg-1"></div>

		</div>

	<?php
		include(ROOT_PATH . 'views/include/footer-logged-in.php');
	?>