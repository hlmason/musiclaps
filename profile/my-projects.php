<?php
	require_once('../include/config.php');

	$pageTitle = 'My Projects';
	$page = 'My Projects';
	
	include(ROOT_PATH . 'include/header-logged-in.php');
	include(ROOT_PATH . 'include/db-connection.php');
	include(ROOT_PATH . 'controllers/get-profile.php');
	include(ROOT_PATH . 'include/user-menu.php');

?>
		
			<div class="row col-lg-10 col-lg-offset-1">				
					
				<div id="projectsContainers">
					<div class="row col-xs-12 col-md-9">

						<!-- Projects nav buttons -->
						<?php
							include(ROOT_PATH . 'include/profile/projects-nav.php');
						?>
						<!-- End of projects nav buttons -->


						<!-- "In Progress/Private" listings -->
						<?php
							include(ROOT_PATH . 'include/profile/private-project-listings.php');
						?>
						<!-- End of "In Progress/Private listings" -->


						<!-- "Public" listings -->
						<?php
							include(ROOT_PATH . 'include/profile/public-project-listings.php');
						?>
						<!-- End of "Public" listings -->


						<!-- "Group" listings -->
						<?php
							include(ROOT_PATH . 'include/profile/group-project-listings-projects-pg.php');
						?>
						<!-- End of "Group" listings -->


						<!-- "Audition" listings -->
						<?php
							include(ROOT_PATH . 'include/profile/audition-project-listings.php');
						?>
						<!-- End of "Audition" listings -->


							<!-- Project form -->
							<?php
								include(ROOT_PATH . 'include/profile/project-form.php');
							?>
							<!-- End of project form -->


						<!-- Change sound image form -->
						<?php
							include(ROOT_PATH . 'include/profile/change-sound-img-form.php');
						?>
						<!-- End of change sound image form -->

					</div>
					<?php
						include(ROOT_PATH . 'include/profile/recommended.php');
					?>
				</div>


				<div id="lyricsProjectContainer">
					<div class="row col-xs-12 col-sm-9">
						<!-- Projects nav buttons -->
						<?php
							include(ROOT_PATH . 'include/profile/projects-nav.php');
						?>
						<!-- End of projects nav buttons -->

						<!-- Recording Player -->
						<div class="row col-xs-12 live-player-container">
							<iframe width="620" height="380" src="https://www.musiclaps.com/embed/player?songid=null" frameborder="0" scrolling="no"></iframe><!-- Placeholder -->
						</div>
						<!-- End of Recording Player -->

						<section class="row col-xs-12" id="lyrics-settings">
							<div>
								<h4>Pause and scrolling speed</h4>
								<input class="save" type="submit" value="Save">
							</div>

							<!-- Markup is backwards because elements are floated right -->
							<p>3rd pause <input class="pause" type="text" placeholder="00.00"> to <input class="pause" type="text" placeholder="00.00"> speed <input class="speed" type="text" placeholder="1"></p>

							<p>1st pause <input class="pause" type="text" placeholder="00.00"> to <input class="pause" type="text" placeholder="00.00"> speed <input class="speed" type="text" placeholder="1"></p>

							<p>4th pause <input class="pause" type="text" placeholder="00.00"> to <input class="pause" type="text" placeholder="00.00"> speed <input class="speed" type="text" placeholder="1"></p>

							<p>2nd pause <input class="pause" type="text" placeholder="00.00"> to <input class="pause" type="text" placeholder="00.00"> speed <input class="speed" type="text" placeholder="1"></p>
						</section>
					</div>

					<div class="row col-xs-12 col-sm-3">
						<section id="lyrics-container-header">
							<h4>Display Lyrics</h4>
							<select>
								<option value="select_sound">Select Sound</option><!-- Hard-coded placeholder -->
							</select>
						</section>
						<div id="lyrics-container-form">
							<div>
								<label for="title">Title</label>
								<input id="title" type="text" name="title">
							</div>
							<div>
								<label for="songwriter_or_composer">Songwriter(s) / Composer(s)</label>
								<input id="songwriter_or_composer" type="text" name="songwriter_or_composer">
							</div>
							<div>
								<label for="lyrics">Lyrics</label>
								<textarea id="lyrics"></textarea>
							</div>
							<input id="save_lyrics" type="submit" value="Save">
						</div>
					</div>
				</div>

			</div>
			<div class="col-lg-1"></div>	
		
		</div>

	<?php
		include(ROOT_PATH . 'include/footer-logged-in.php');
	?>