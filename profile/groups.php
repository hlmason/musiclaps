<?php
	require_once('../include/config.php');

	$pageTitle = 'Groups';
	$page = 'Groups';
	
	include(ROOT_PATH . 'include/header-logged-in.php');
	include(ROOT_PATH . 'include/db-connection.php');
	include(ROOT_PATH . 'controllers/get-profile.php');
	include(ROOT_PATH . 'include/nav-logged-in.php');

?>

			<div class="row col-lg-10 col-lg-offset-1">				
					
				<div class="row col-xs-12 col-sm-9">

					<section class="row col-xs-12" id="groups-header">
						<a href="<?php echo BASE_URL; ?>profile/groups.php">
							<h3>Groups</h3>
						</a>
						<button type="button">Create New Group</button>
					</section>

					<section class="row col-xs-12 create-new-group-container" id="createNewGroupContainer">
						<h4>Create a New Group</h4>
						<form>
							<div>
								<label for="group_name">Group Name</label>
								<input id="group_name" type="text" name="group_name">
							</div>
							
							<div>
								<label for="select_sound">Select Sound</label>
								<select>
									<option value=""></option><!-- Hard-coded placeholder -->
								</select>
							</div>
							
							<div>
								<label for="add_member">Add Member (Username)</label>
								<textarea id="add_member" name="add_member" placeholder="Example: April, James, Paul, etc."></textarea>
							</div>
						</form>
					</section>

					<section class="row col-xs-12 groups-container" id="groupsContainer">
						<h4 class="first-h4">Group Name: <span class="normal">$Team XY</span></h4><!-- Hard-coded placeholder -->
						<h4>Project: 
							<?php
								include(ROOT_PATH . 'include/profile/group-project-listings-groups-pg.php');
							?><!-- Hard-coded placeholder -->
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
							<h3>Project Title</h3>
							<!-- Markup is backwards because elements are floated right -->
							<h4 class="project-type pull-right">Group</h4>
							<span class="glyphicon glyphicon-lock pull-right"></span>
							<span class="glyphicon glyphicon-repeat pull-right"></span>
						</section>

						<section class="row col-xs-12" id="youtube-link">
							<a href="#"><img src="<?php echo BASE_URL; ?>assets/images/profile-pages/link-to-youtube-icon.jpg" alt="Link to YouTube icon"></a>
						</section>						

						<section class="row col-xs-12">
							<div class="project-info-bar">
								<h4 class="first-h4">$project #</h4><!-- Hard-coded placeholder -->
								<img class="audio-mixer audioMixer" src="<?php echo BASE_URL; ?>assets/images/profile-pages/audio-mixer.jpg" alt="Audio mixer icon">
								<h4>$instrument name</h4><!-- Hard-coded placeholder -->
								<h5>$date project started</h5>

								<!-- Markup is backwards because elements are floated right -->
								<span class="glyphicon glyphicon-trash pull-right"></span>
								<select class="project-type pull-right">
									<option value="group">Group</option><!-- Hard-coded placeholder -->
									<option value="unlisted">Unlisted</option><!-- Hard-coded placeholder -->
								</select>
							</div>
						</section>
						<section class="row col-xs-12 volumeAndPan">
							<div class="volume-and-pan">
								<span class="glyphicon glyphicon-volume-up"></span>
								<div class="slider"></div>
								<h4>100</h4><!-- Hard-coded placeholder -->

								<h4 class="left-to-right">L</h4>
								<div class="slider"></div>
								<h4>R</h4>

								<span class="glyphicon glyphicon-save pull-right"></span>
								<input class="pull-right save-volume-and-pan" type="submit" value="Save">
							</div>
						</section>
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