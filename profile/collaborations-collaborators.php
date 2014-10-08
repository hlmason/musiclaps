<?php
	require_once('../include/config.php');

	$page_title = 'Collaborators';
	
	include(ROOT_PATH . 'include/header-logged-in.php');
	include(ROOT_PATH . 'include/db-connection.php');
	include(ROOT_PATH . 'controllers/get-profile.php');
	include(ROOT_PATH . 'include/profile/user-menu.php');

?>
		
			<div class="row col-lg-10 col-lg-offset-1">				
					
				<div class="row col-xs-12 col-md-9" id="collaborators-page">

					<div class="collaborators-container">
						<label for="collab_type" id="collab-label">Sort by</label>
						<select id="collab_type" name="">
							<option value="all_collab">All</option>
							<option value="open_collab">Open Collab</option>
							<option value="requesting_collab">Requesting Collab</option>
						</select>

						<div class="table-scroll-x-axis">
							<table class="row col-xs-12">
								<thead>
									<tr class="thead-tr">
										<th>Project Owner</th>
										<th>Joined</th>
										<th>Project Title</th>
										<th>Collab</th>
										<th>Instrument</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><!-- Hard-coded placeholder -->
											<a href="<?php echo BASE_URL; ?>profile/public-profile-logged-in.php"><img src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user">
											<span class="username">$username</span></a>
										</td>
										<td>$date</td><!-- Hard-coded placeholder -->
										<td>$project title</td><!-- Hard-coded placeholder -->
										<td>$type of collab</td><!-- Hard-coded placeholder -->
										<td>$instrument</td><!-- Hard-coded placeholder -->
										<td>
											<a href="<?php echo BASE_URL; ?>profile/messages.php"><span class="glyphicon glyphicon-envelope"></span></a>
										</td>
									</tr>
									<tr>
										<td><!-- Hard-coded placeholder -->
											<a href="<?php echo BASE_URL; ?>profile/public-profile-logged-in.php"><img src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user">
											<span class="username">$username</span></a>
										</td>
										<td>$date</td><!-- Hard-coded placeholder -->
										<td>$project title</td><!-- Hard-coded placeholder -->
										<td>$type of collab</td><!-- Hard-coded placeholder -->
										<td>$instrument</td><!-- Hard-coded placeholder -->
										<td>
											<a href="<?php echo BASE_URL; ?>profile/messages.php"><span class="glyphicon glyphicon-envelope"></span></a>
										</td>
									</tr>
									<tr>
										<td><!-- Hard-coded placeholder -->
											<a href="<?php echo BASE_URL; ?>profile/public-profile-logged-in.php"><img id="avatar" src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user">
											<span class="username">$username</span></a>
										</td>
										<td>$date</td><!-- Hard-coded placeholder -->
										<td>$project title</td><!-- Hard-coded placeholder -->
										<td>$type of collab</td><!-- Hard-coded placeholder -->
										<td>$instrument</td><!-- Hard-coded placeholder -->
										<td>
											<a href="<?php echo BASE_URL; ?>profile/messages.php"><span class="glyphicon glyphicon-envelope"></span></a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
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