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
					
				<div class="row col-xs-12 col-sm-9">

					<div class="row" id="projects-buttons">	
						<div class="col-xs-12">
							<button class="navigate musiclaps-dark-gray musiclaps-blue first-button" id="privateProjectsButton" type="button">In Progress / Private</button>
							<button class="navigate button-navigate-hover-js" id="publicProjectsButton" type="button">Public</button>
							<button class="navigate button-navigate-hover-js" id="groupProjectsButton" type="button">Group</button>
							<button class="navigate button-navigate-hover-js" id="auditionProjectsButton" type="button">Audition</button>
							<button class="navigate button-navigate-hover-js" id="lyricsProjectsButton" type="button">Lyrics</button>
						</div>
					</div>

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
						include(ROOT_PATH . 'include/profile/group-project-listings.php');
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


					<!-- "Lyrics" -->
					<section class="row lyrics-projects-container" id="lyricsProjectsContainer">
					</section>
					<!-- "Lyrics" -->

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