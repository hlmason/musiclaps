<?php
	require_once('../include/config.php');

	$pageTitle = 'Projects';
	$page = 'Projects';
	
	include(ROOT_PATH . 'include/header-logged-in.php');
	include(ROOT_PATH . 'include/db-connection.php');
	include(ROOT_PATH . 'controllers/get-profile.php');
	include(ROOT_PATH . 'include/nav-logged-in.php');

?>
		
			<div class="row col-lg-10 col-lg-offset-1">				
					
				<div id="projectsContainers">
					<div class="row col-xs-12 col-sm-9">

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


				<div class="lyrics-container" id="lyricsProjectContainer">
					<div class="row col-xs-12 col-sm-9">
						<!-- Projects nav buttons -->
						<?php
							include(ROOT_PATH . 'include/profile/projects-nav.php');
						?>
						<!-- End of projects nav buttons -->

						<section class="row">
							<!-- Recording Player -->
							<div class="row col-xs-12 live-player-container">
								<iframe width="620" height="380" src="https://www.musiclaps.com/embed/player?songid=null" frameborder="0" scrolling="no"></iframe><!-- Placeholder -->
							</div>
							<!-- End of Recording Player -->
						</section>
					</div>

					<div class="row col-xs-12 col-sm-3">
						<select>
							<option value="select_sound">Select Sound</option><!-- Hard-coded placeholder -->
						</select>
					</div>
				</div>

			</div>
			<div class="col-lg-1"></div>	
		
		</div>

	<?php
		include(ROOT_PATH . 'include/footer-logged-in.php');
	?>