<?php
	require_once('../include/config.php');

	$pageTitle = 'YouTube';
	$page = 'YouTube';
	
	include(ROOT_PATH . 'include/header-logged-in.php');
	include(ROOT_PATH . 'include/db-connection.php');
	include(ROOT_PATH . 'controllers/get-profile.php');
	include(ROOT_PATH . 'include/user-menu.php');

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
									<div>
										<input id="new_youtube_connection" type="radio" name="youtube_connection" value="new">
										<label id="new-youtube-connection-label" for="new_youtube_connection">New</label>
									 	
									 	<input id="edit_youtube_connection" type="radio" name="youtube_connection" value="edit">
									 	<label for="edit_youtube_connection">Edit</label>
									</div>

									<div>
										<label id="youtube-id-label" for="youtube_id"><span class="musiclaps-blue">*</span> YouTube ID <span class="glyphicon glyphicon-question-sign"></span></label>
										<div class="youtube-id-req" id="youTubeIdReq">The YouTube ID is the group of letters and numbers <strong>at the end</strong> of the YouTube URL (following the equal sign)</div>
										<input id="youtube_id" type="text" name="youtube_id">
									</div>
									
									<input id="view_youtube_vid" type="submit" value="View Youtube Video">
									
									<img src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="YouTube video image"><!-- Hard-coded placeholder -->
									
									<input id="link_to_project" type="submit" value="Link Video to Your Project">
								</div>
							</div>
						</div>

						<div class="row col-xs-12" id="info-below-youtube-player">
							<img src="<?php echo BASE_URL; ?>assets/images/profile-pages/link-to-youtube-icon.jpg" alt="YouTube icon">
							<h4>**You can add up to 3 YouTube videos per project</h4>
						</div>

						<div class="row col-xs-12 youtube-page-form" id="newYouTubeConnectionForm">
							<label for="select_project">Select Project</label>
							<select>
								<option value="sound">Europa Sax(1)</option><!-- Hard-coded placeholder -->
							</select>

							<label id="name-label" for="name">Name</label>
							<input id="name" type="text" name="name">

							<input id="save_name" type="submit" value="Save">
						</div>

						<div class="row col-xs-12 youtube-page-form" id="editYouTubeConnectionForm">
							<label for="select_project">Select Project</label>
							<select>
								<option value="sound">Europa Sax(1)</option><!-- Hard-coded placeholder -->
							</select>

							<input id="edit_name" type="submit" value="Edit">
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
		include(ROOT_PATH . 'include/footer-logged-in.php');
	?>