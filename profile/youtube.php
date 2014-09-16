<?php
	require_once('../include/config.php');

	$pageTitle = 'YouTube';
	$page = 'YouTube';
	
	include(ROOT_PATH . 'include/header-logged-in.php');
	include(ROOT_PATH . 'include/db-connection.php');
	include(ROOT_PATH . 'controllers/get-profile.php');
	include(ROOT_PATH . 'include/nav-logged-in.php');

?>
			<div class="row col-lg-10 col-lg-offset-1">				
					
				<div>
					<div class="row col-xs-12 col-sm-9">

						<!-- "YouTube Player" -->
						<div class="row">
							<div class="col-xs-12 col-sm-7">
								<div id="youtube-player"></div><!-- Placeholder -->
							</div>
							<div class="col-xs-12 col-sm-5">
								<div id="youtube-settings">
									<div>
										<input id="youtube_new" type="radio" name="youtube_type" value="new"><span class="radio-label first-radio-label"> New</span>
									 	<input id="youtube_edit" type="radio" name="youtube_type" value="edit"><span class="radio-label"> Edit</span>
									</div>

									<div>
										<label for="youtube_link"><span class="musiclaps-blue">*</span> YouTube ID <span class="glyphicon glyphicon-question-sign"></span></label>
										<div class="youtube-id-req" id="youTubeIdReq">The YouTube ID is comprised of the letters and numbers at the end of the YouTube URL following the equal sign</div>
										<input id="youtube_link" type="text" name="youtube_link">
									</div>
									
									<input class="submit" type="submit" value="Upload Youtube Video">
									
									<img src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="YouTube video image"><!-- Hard-coded placeholder -->
									
									<input class="submit" type="submit" value="Link to Your Sound">
								</div>
							</div>
						</div>
						<!-- End of "YouTube Player" -->
					
					</div>


					<div class="row col-xs-12 col-sm-3">
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