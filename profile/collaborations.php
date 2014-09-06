<?php
	require_once('../include/config.php');

	$pageTitle = 'Collaborations';
	$page = 'Collaborations';
	
	include(ROOT_PATH . 'include/header-logged-in.php');
	include(ROOT_PATH . 'include/db-connection.php');
	include(ROOT_PATH . 'controllers/get-profile.php');
	include(ROOT_PATH . 'include/nav-logged-in.php');

?>
		
			<div class="row col-lg-10 col-lg-offset-1">				
					
				<div class="row col-xs-12 col-sm-9">

					<div class="row" id="collaborations-buttons">	
						<div class="col-xs-12">
							<button class="navigate musiclaps-dark-gray musiclaps-blue first-button" id="openCollabButton" type="button">Open Collab</button>
							<button class="navigate button-navigate-hover-js" id="requestingCollabButton" type="button">Requesting Collab</button>
							<button class="navigate button-navigate-hover-js" id="collaboratorsButton" type="button">Collaborators</button>
						</div>
					</div>

					<!-- "Open Collab" listings -->
					<?php
						include(ROOT_PATH . 'include/profile/open-collab-listings.php');
					?>
					<!-- End of "Open Collab" listings -->


					<!-- "Requesting Collab" listings -->
					<?php
						include(ROOT_PATH . 'include/profile/requesting-collab-listings.php');
					?>
					<!-- End of Requesting Collab listings -->


					<!-- "Change Sound Image" form -->
					<?php
						include(ROOT_PATH . 'include/profile/change-sound-img-form.php');
					?>
					<!-- End of "Change Sound Image" form -->

					<div class="collaborators-container" id="collaboratorsContainer">
						<label for="collab_type" id="collab-label">Sort by</label>
						<select>
							<option value="all_collab">All</option>
							<option value="open_collab">Open Collab</option>
							<option value="requesting_collab">Requesting Collab</option>
						</select>

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
										<img src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user">
										<span class="username">$username</span>
									</td>
									<td>$date</td><!-- Hard-coded placeholder -->
									<td>$project title</td><!-- Hard-coded placeholder -->
									<td>$type of collab</td><!-- Hard-coded placeholder -->
									<td>$instrument</td><!-- Hard-coded placeholder -->
									<td><a href="<?php echo BASE_URL; ?>profile/messages.php"><span class="glyphicon glyphicon-envelope"></span></a></td>
								</tr>
								<tr>
									<td><!-- Hard-coded placeholder -->
										<img src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user">
										<span class="username">$username</span>
									</td>
									<td>$date</td><!-- Hard-coded placeholder -->
									<td>$project title</td><!-- Hard-coded placeholder -->
									<td>$type of collab</td><!-- Hard-coded placeholder -->
									<td>$instrument</td><!-- Hard-coded placeholder -->
									<td><a href="<?php echo BASE_URL; ?>profile/messages.php"><span class="glyphicon glyphicon-envelope"></span></a></td>
								</tr>
								<tr>
									<td><!-- Hard-coded placeholder -->
										<img id="avatar" src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user">
										<span class="username">$username</span>
									</td>
									<td>$date</td><!-- Hard-coded placeholder -->
									<td>$project title</td><!-- Hard-coded placeholder -->
									<td>$type of collab</td><!-- Hard-coded placeholder -->
									<td>$instrument</td><!-- Hard-coded placeholder -->
									<td><a href="<?php echo BASE_URL; ?>profile/messages.php"><span class="glyphicon glyphicon-envelope"></span></a></td>
								</tr>
							</tbody>
						</table>
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