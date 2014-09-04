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

					<section class="row col-xs-12" id="groups-container">
						<h4 class="first-h4">Group Name: <span class="normal">$Team XY</span></h4><!-- Hard-coded placeholder -->
						<h4>Project: 
							<?php
								include(ROOT_PATH . 'include/profile/group-project-listings-groups-pg.php');
							?><!-- Hard-coded placeholder -->
						</h4>
						<h4>Joined: <span class="normal">1 year ago</span></h4><!-- Hard-coded placeholder -->
						<h4 class="last-h4">Member(s): <span class="normal">UsernameA, UsernameB, UsernameC</span></h4><!-- Hard-coded placeholder -->
					</section>

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