<?php
	require_once('../include/config.php');

	$pageTitle = 'New Project';
	$page = 'New Project';
	
	include(ROOT_PATH . 'include/header-logged-in.php');
	include(ROOT_PATH . 'include/db-connection.php');
	include(ROOT_PATH . 'controllers/get-profile.php');

?>
		
			<div class="row col-lg-10 col-lg-offset-1">				
					
				<div class="row col-xs-12 col-sm-9">

					<div class="row" id="recording-player-buttons">	
						<div class="col-xs-12">
							<button class="navigate" type="button">Recording Player</button>
							<button class="navigate" type="button">Upload MP3</button>
						</div>
					</div>
						
					<div class="row">
						<div class="col-xs-12">
							<div id="recording-player"></div><!-- Placeholder -->
						</div>
					</div>

				</div>
				<div class="row col-xs-12 col-sm-3">
					<div id="profile-right">
						
						<div class="row first-row">
							<div class="col-xs-7 col-offset-xs-1">
								<h2>$#</h2><!-- Hard-coded placeholder -->
								<h5>listeners?</h5>
							</div>
							<div class="col-xs-3">
								<h2>$#</h2><!-- Hard-coded placeholder -->
								<h5>claps</h5>
							</div>
							<div class="col-xs-1"></div>
						</div>

						<div class="row col-xs-12" id="map-container">
							<h4>Location: </h4>
							<div id="map"></div><!-- Placeholder -->
						</div>

						<div class="row col-xs-12">
							<h4>Member since: </h4>
							<h5>$date joined</h5><!-- Hard-coded placeholder -->
						</div>

						<div class="row col-xs-12">
							<h4>Genre(s): </h4>
							<h5>$genre(s)</h5><!-- Hard-coded placeholder -->
						</div>

						<div class="row col-xs-12">
							<h4>Skill(s): </h4>
							<h5>$skill(s)</h5><!-- Hard-coded placeholder -->
						</div>

						<div class="row col-xs-12 last-row">
							<h4>Message: </h4>
							<h5>$message to other musicians</h5><!-- Hard-coded placeholder -->
						</div>

					</div>
				</div>	
			</div>
			<div class="col-lg-1"></div>	
		</div>

	<?php
		include(ROOT_PATH . 'include/footer.php');
	?>