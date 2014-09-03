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


						<!-- Project form -->
						<?php
							include(ROOT_PATH . 'include/profile/project-form.php');
						?>
						<!-- End of project form -->


					<!-- "Change Sound Image" form -->
					<?php
						include(ROOT_PATH . 'include/profile/change-sound-img-form.php');
					?>
					<!-- End of "Change Sound Image" form -->

					<table class="row col-xs-12 table table-striped" id="collaborators-table">
						<thead>
							<tr>
								<th>Owner</th>
								<th>Joined</th>
								<th>Project Title</th>
								<th>Collab Type</th>
								<th>Instrument Added</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="first-data-cell"><!-- Hard-coded placeholder -->
									<img id="avatar" src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user">
									$username
								</td>
								<td>$date</td><!-- Hard-coded placeholder -->
								<td>$project title</td><!-- Hard-coded placeholder -->
								<td>$type of collab</td><!-- Hard-coded placeholder -->
								<td>$instrument</td><!-- Hard-coded placeholder -->
							</tr>
							<tr class="table-striped">
								<td><!-- Hard-coded placeholder -->
									<img id="avatar" src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user">
									$username
								</td>
								<td>$date</td><!-- Hard-coded placeholder -->
								<td>$project title</td><!-- Hard-coded placeholder -->
								<td>$type of collab</td><!-- Hard-coded placeholder -->
								<td>$instrument</td><!-- Hard-coded placeholder -->
							</tr>
							<tr>
								<td><!-- Hard-coded placeholder -->
									<img id="avatar" src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user">
									$username
								</td>
								<td>$date</td><!-- Hard-coded placeholder -->
								<td>$project title</td><!-- Hard-coded placeholder -->
								<td>$type of collab</td><!-- Hard-coded placeholder -->
								<td>$instrument</td><!-- Hard-coded placeholder -->
							</tr>
						</tbody>
					</table>

				</div>
				<div class="row col-xs-12 col-sm-3">
					<div class="profile-right projects-page">
						
						<div class="row col-xs-12">
							<h3>Recommended</h3>
						</div>

						<div class="row col-xs-12 first-row">
							<h4 class="first-h4">Free Guitar Amp Simulator for Mac and Windows</h4>
							<a href="http://www.synthtopia.com/content/2010/01/22/free-guitar-amp-simulator-for-mac-windows/" target="blank"><img src="<?php echo BASE_URL; ?>assets/images/profile-pages/free-guitar-amp-simulator.jpg" alt="Free Guitar Amp Simulator"></a>
						</div>

						<div class="row col-xs-12">
							<h4>Free AmpLion Guitar Amp Simulator </h4>
							<h5>ampLion Free gives you the opportunity to experience the quality of ampLion simulation. You gain free access to one of the most famous guitar amps ever made.</h5>
							<a href="https://www.macupdate.com/app/mac/40400/amplion-free" target="blank"><img src="<?php echo BASE_URL; ?>assets/images/profile-pages/free-amplion-simulator.jpg" alt="Free AmpLion Guitar Amp Simulator"></a>
						</div>

						<div class="row col-xs-12">
							<h4>Realtek High Definition Driver</h4>
							<h5>Realtek high definition (HD) audio drivers are now available, adding countless "driver customizations" and supporting a number of new Realtek chips.</h5>
							<a href="http://218.210.127.131/downloads/Default.aspx?Langid=1" target="blank"><img src="<?php echo BASE_URL; ?>assets/images/profile-pages/realtek-logo.gif" alt="RealTek logo"></a>
						</div>

					</div>
				</div>	
			</div>
			<div class="col-lg-1"></div>	
		
		</div>

	<?php
		include(ROOT_PATH . 'include/footer-logged-in.php');
	?>