<?php
	require_once('../include/config.php');

	$pageTitle = 'Projects';
	$page = 'Projects';
	
	include(ROOT_PATH . 'include/header-logged-in.php');
	include(ROOT_PATH . 'include/db-connection.php');
	include(ROOT_PATH . 'controllers/get-profile.php');

?>
		
			<div class="row col-lg-10 col-lg-offset-1">				
					
				<div class="row col-xs-12 col-sm-9">

					<div class="row" id="projects-buttons">	
						<div class="col-xs-12">
							<button class="navigate musiclaps-dark-gray musiclaps-blue first-button" id="inProgressPrivateButton" type="button">In Progress / Private</button>
							<button class="navigate button-navigate-hover-js" id="publicButton" type="button">Public</button>
							<button class="navigate button-navigate-hover-js" id="groupButton" type="button">Group</button>
							<button class="navigate button-navigate-hover-js" id="auditionButton" type="button">Audition</button>
							<button class="navigate button-navigate-hover-js" id="lyricsButton" type="button">Lyrics</button>
						</div>
					</div>

					<div class="row col-xs-12">
						
					</div>

				</div>
				<div class="row col-xs-12 col-sm-3">
					<div class="profile-right new-project-page">
						
						<div class="row col-xs-12">
							<h3>Recommended</h3>
						</div>

						<div class="row col-xs-12 first-row">
							<h4 id="first-h4">Free Guitar Amp Simulator for Mac and Windows</h4>
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
		include(ROOT_PATH . 'include/footer.php');
	?>