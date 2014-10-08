<?php
	require_once('../include/config.php');

	$page_title = 'Lyrics';
	
	include(ROOT_PATH . 'include/header-logged-in.php');
	include(ROOT_PATH . 'include/db-connection.php');
	include(ROOT_PATH . 'controllers/get-profile.php');
	include(ROOT_PATH . 'include/profile/user-menu.php');

?>
		
			<div class="row col-lg-10 col-lg-offset-1">				

				<div class="lyrics-project-container" id="lyricsProjectContainer">
					<div class="row col-xs-12 col-md-9">

						<!-- Recording Player -->
						<div class="row col-xs-12 live-player-container">
							<iframe width="620" height="380" src="https://www.musiclaps.com/embed/player?songid=null" frameborder="0" scrolling="no"></iframe><!-- Placeholder -->
						</div>
						<!-- End of Recording Player -->

						<form action="<?php echo BASE_URL; ?>controllers/process-lyrics.php" method="post">
							<section class="row col-xs-12" id="lyrics-settings-sm"><!-- Only visible at viewport widths > 688px -->
								<div>
									<h4>Pause and scrolling speed</h4>
									<input class="save" type="submit" value="Save">
								</div>

								<!-- Markup is backwards because elements are floated right -->
								<p>3rd pause <input class="pause" type="text" name="3rd" placeholder="00.00"> to <input class="pause" type="text" name="3rd" placeholder="00.00"> speed <input class="speed" name="" type="text" placeholder="1"></p>

								<p>1st pause <input class="pause" type="text" name="1st" placeholder="00.00"> to <input class="pause" type="text" name="1st" placeholder="00.00"> speed <input class="speed" name="" type="text" placeholder="1"></p>

								<p>4th pause <input class="pause" type="text" name="4th" placeholder="00.00"> to <input class="pause" type="text" name="4th" placeholder="00.00"> speed <input class="speed" name=""type="text" placeholder="1"></p>

								<p>2nd pause <input class="pause" type="text" name="2nd" placeholder="00.00"> to <input class="pause" type="text" name="2nd" placeholder="00.00"> speed <input class="speed" name="" type="text" placeholder="1"></p>
							</section>

							<section class="row col-xs-12" id="lyrics-settings-xs"><!-- Only visible at viewport widths <= 688px -->
								<div>
									<h4>Pause and scrolling speed</h4>
									<input class="save" type="submit" name="" value="Save">
								</div>

								<!-- Markup is not backwards because elements are not floated right -->
								<p>1st pause <input class="pause" type="text" name="1st" placeholder="00.00"> to <input class="pause" type="text" name="1st" placeholder="00.00"> speed <input class="speed" name="" type="text" placeholder="1"></p>

								<p>2nd pause <input class="pause" type="text" name="2nd" placeholder="00.00"> to <input class="pause" type="text" name="2nd" placeholder="00.00"> speed <input class="speed" name="" type="text" placeholder="1"></p>

								<p>3rd pause <input class="pause" type="text" name="3rd" placeholder="00.00"> to <input class="pause" type="text" name="3rd" placeholder="00.00"> speed <input class="speed" name="" type="text" placeholder="1"></p>

								<p>4th pause <input class="pause" type="text" name="4th" placeholder="00.00"> to <input class="pause" type="text" name="4th" placeholder="00.00"> speed <input class="speed" name="" type="text" placeholder="1"></p>
							</section>
						</form>
					</div>

					<div class="row col-xs-12 col-md-3">
						<form action="<?php echo BASE_URL; ?>controllers/process-lyrics.php" method="post">
							<section id="lyrics-container-header">
								<label id="display-lyrics-title" for="select_project_lyrics_page">Display Lyrics</label>
								<select id="select_project_lyrics_page" name="">
									<option value="select_project">Select Project</option>
									<option value="project_title">$Project Title</option><!-- Hard-coded placeholder -->
									<option value="project_title">$Project Title</option><!-- Hard-coded placeholder -->
								</select>
							</section>
							<div id="lyrics-container-form">
								<div>
									<label id="title-label" for="title">Title</label>
									<input class="title" id="title" type="text" name="title">
								</div>
								<div>
									<label for="songwriter_or_composer">Songwriter(s) / Composer(s)</label>
									<input class="songwriter-or-composer" id="songwriter_or_composer" type="text" name="artist">
								</div>
								<div>
									<label for="lyrics">Lyrics</label>
									<textarea id="lyrics" name="lyrics"></textarea>
								</div>
								<input id="save_lyrics" type="submit" name="" value="Save">
							</div>
						</form>
					</div>
				</div>

			</div>
			<div class="col-lg-1"></div>	
		
		</div>

	<?php
		include(ROOT_PATH . 'include/footer-logged-in.php');
	?>