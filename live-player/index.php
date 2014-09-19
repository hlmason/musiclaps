<?php
	require_once('../include/config.php');

	$pageTitle = 'Live Player';
	$page = 'Live Player';
	
	include(ROOT_PATH . 'include/header.php');
?>

	<?php
		include(ROOT_PATH . 'include/modals/welcome-to-soundcheck.php');
	?>

	<?php
		include(ROOT_PATH . 'include/modals/select-a-song.php');
	?>

	<div id="wrapper">
		
		<div class="container">
			<div class="row col-xs-12" id="live-player-container">
				<iframe width="620" height="380" src="https://www.musiclaps.com/embed/player?songid=null" frameborder="0" scrolling="no"></iframe><!-- Placeholder -->
			</div>
			<div class="row col-xs-11 col-xs-offset-1 col-sm-5 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3 col-lg-offset-3" id="select-song-container">
				<a id="selectSongJS">Select a song from our library</a>
			</div>
		</div>
		
		<section id="recording-instructions">
			<h1>Record in 3 steps:</h1>
			
			<!-- Step 1 -->
			<div class="container">
				<div class="row">
					<div class="col-xs-6 col-sm-5 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3 col-lg-offset-3">
						<h2><span>1. </span>Click the <span class="red">REC</span> button (above).</h2>
					</div>
					<div class="col-xs-6 col-sm-5 col-md-4 col-lg-3" id="recording-buttons-img">
						<img src="<?php echo BASE_URL; ?>assets/images/live-player-pg/recording-buttons.png" alt="Recording buttons">
					</div>
					<div class="col-sm-1 col-md-2 col-lg-3"></div>
				</div>
			</div>
			<!-- End of Step 1 -->
			
			<!-- Step 2 -->
			<div class="container">
				<div class="row">
					<div class="col-xs-6 col-sm-5 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3 col-lg-offset-3" id="allow-flash-instructions">
						<h2><span>2. </span><span class="green">Allow Flash</span>.<span class="block">(so that you can record).</span></h2>
					</div>
					<div class="col-xs-6 col-sm-5 col-md-4 col-lg-3" id="allow-flash-img">
						<img src="<?php echo BASE_URL; ?>assets/images/live-player-pg/allow-flash.png" alt="Pop-up">
					</div>
					<div class="col-sm-1 col-md-2 col-lg-3"></div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3" id="allow-flash-chrome-container">
						<p>We recommend using <a href="https://www.google.com/intl/en_us/chrome/browser/" target="blank">Google Chrome</a>.&nbsp; In Chrome, you may also need to click "Allow" at the top of the page:</p>
						<img src="<?php echo BASE_URL; ?>assets/images/live-player-pg/chrome-allow-flash.png" alt="Pop-up in Google Chrome">
					</div>
					<div class="col-sm-1 col-md-2 col-lg-3"></div>
				</div>

			</div>
			<!-- End of Step 2 -->

			<!-- Step 3 -->
			<div class="container">
				<div class="row">
					<div class="col-xs-6 col-sm-5 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3 col-lg-offset-3" id="record-start-instructions">
						<h2><span>3. </span>Click <span class="red">REC START</span> (above).</h2>
					</div>
					<div class="col-xs-6 col-sm-5 col-md-4 col-lg-3" id="recording-area-img">
						<img src="<?php echo BASE_URL; ?>assets/images/live-player-pg/recording-area.png" alt="Recording area of Live Player">
					</div>
					<div class="col-sm-1 col-md-2 col-lg-3"></div>
				</div>
			</div>
			<!-- End of Step 3 -->

			<div class="container" id="save-container">
				<button class="save" id="registerOrLoginJS" type="button">Save Recording</button>
			</div>

<!-- 			<div class="container" id="save-container">
				<button class="save" id="registrationExpressJS" type="button">Save Recording</button>
			</div> --> <!-- Express registration per Bart's request.  Not sure where/how this is going to be integrated. -->

			<!-- Register or login modal -->
			<?php
				include(ROOT_PATH . 'include/modals/register-or-login.php');
			?>
			<!-- End of register or login modal -->

			
			<!-- Express registration modal -->
			<?php
				// include(ROOT_PATH . 'include/modals/registration-express.php');
			?><!-- Express registration per Bart's request.  Not sure where/how this is going to be integrated. -->
			<!-- End of express registration modal -->

		</section>

	<?php
		include(ROOT_PATH . 'include/footer.php');
	?>