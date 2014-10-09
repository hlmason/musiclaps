<?php
	require_once('../include/config.php');

	$page_title = 'Groups';
	
	include(ROOT_PATH . 'include/header-logged-in.php');
	include(ROOT_PATH . 'include/db-connection.php');
	include(ROOT_PATH . 'controllers/get-profile.php');
	include(ROOT_PATH . 'include/profile/user-menu.php');

?>

			<div class="row col-lg-10 col-lg-offset-1">				
					
				<div class="row col-xs-12 col-md-9 groups-page">

					<section class="row col-xs-12" id="groups-header">
						<a href="<?php echo BASE_URL; ?>profile/groups.php">
							<h3>Groups</h3>
						</a>
						<button class="white-button-navigate-hover-js" id="createNewGroupButton" type="button">Create New Group</button>
					</section>

					<!-- Hidden upon page load -->
					<section class="row col-xs-12 create-new-group-container" id="createNewGroupContainer">
						<h4>Create a New Group</h4>
						<form action="<?php echo BASE_URL; ?>controllers/process-groups.php" method="post">
							<div>
								<label for="group_name">Group Name</label>
								<input class="group-name" id="group_name" type="text" name="group_name">
							</div>
							
							<div>
								<label for="select_project_groups_page">Select Project</label>
								<select id="select_project_groups_page" name="">
									<option value="project_title">$Project Title</option><!-- Hard-coded placeholder -->
								</select>
							</div>
							
							<div>
								<label for="add_member">Add Member (Username)</label>
								<textarea id="add_member" name="userid" placeholder="Example: April, James, Paul, etc."></textarea>
							</div>

							<div>
								<input class="save" type="submit" value="Save">
							</div>
						</form>
					</section>

					<section class="row col-xs-12 groups-container" id="groupsContainer">
						<h4 class="first-h4">Group Name: <span class="normal">$Team XY</span></h4><!-- Hard-coded placeholder -->
						<h4>Project: 
							<section class="row projects-container projectsContainer projects-container-groups-page" id="groupProjectsContainerGroupsPage">
								<div class="col-xs-6 col-sm-3">
									<span class="glyphicon-pencil-container"><span class="glyphicon glyphicon-pencil glyphiconPencil"></span></span>
									<img class="projectImg" src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="Project image"><!-- Hard-coded placeholder -->
								</div>
							
								<div class="col-xs-6 col-sm-6 col-md-7">
									<h4>$project title</h4><!-- Hard-coded placeholder -->
									<h5>By: <span class="normal">$username</span></h5><!-- Hard-coded placeholder -->
									<h5 class="last-h5 xs">Group <span class="glyphicon glyphicon-lock"></span></h5><!-- Only visible at viewport widths <= 767px -->
								</div>

								<div class="col-sm-3 col-md-2">
									<h5 class="last-h5 sm">Group <span class="glyphicon glyphicon-lock"></span></h5><!-- Only visible at viewport widths > 767px -->
								</div>
							</section>
						</h4>
						<h4>Joined: <span class="normal">1 year ago</span></h4><!-- Hard-coded placeholder -->
						<h4 class="last-h4">Member(s): <span class="normal">UsernameA, UsernameB, UsernameC</span></h4><!-- Hard-coded placeholder -->
					</section>
					

					<div id="groupForm">
					<!-- Recording Player -->
						<div class="row col-xs-12 live-player-container">
							<iframe width="620" height="380" src="https://www.musiclaps.com/embed/player?songid=null" frameborder="0" scrolling="no"></iframe><!-- Placeholder -->
						</div>
						<!-- End of Recording Player -->

						<section class="row col-xs-12 project-form-header">
							<h3>Project Title</h3><!-- Hard-coded placeholder -->
							<!-- Markup is backwards because elements are floated right -->
							<h4 class="project-type">Group</h4>
							<span class="glyphicon glyphicon-lock"></span>
							<span class="glyphicon glyphicon-repeat"></span>
						</section>

						<section class="row col-xs-12" id="youtube-link">
							<a href="#"><img src="<?php echo BASE_URL; ?>assets/images/profile-pages/link-to-youtube-icon.jpg" alt="Link to YouTube icon"></a>
						</section>						

						<section class="row col-xs-12">
							<div class="project-info-bar groups-page">
								<h4 class="first-h4">$project #</h4><!-- Hard-coded placeholder -->
								<img class="audio-mixer audioMixer" src="<?php echo BASE_URL; ?>assets/images/profile-pages/audio-mixer.jpg" alt="Audio mixer icon">
								<h4>$instrument name</h4><!-- Hard-coded placeholder -->
								<h5>$date project started</h5>

								<!-- Markup is backwards because elements are floated right -->
								<span class="glyphicon glyphicon-trash"></span>
								<select class="project-type">
									<option value="group">Group</option><!-- Hard-coded placeholder -->
									<option value="unlisted">Unlisted</option><!-- Hard-coded placeholder -->
								</select>
							</div>
						</section>
						<!-- Volume and pan -->
						<?php
							include(ROOT_PATH . 'include/profile/volume-and-pan.php');
						?>
						<!-- End of volume and pan -->
					</div>

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