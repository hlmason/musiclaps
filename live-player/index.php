<?php
	require_once('../include/config.php');

	$pageTitle = 'Live Player';
	$page = 'Live Player';
	
	include(ROOT_PATH . 'include/header.php');
?>

	<!-- "Welcome to Soundcheck" modal -->
	<div class="modal fade" id="wantDemo" tabindex="-1" role="dialog" aria-labelledby="wantDemoLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span>
						<span class="sr-only">Close</span>
					</button>
					<h3 class="modal-title want-demo-heading" id="wantDemoLabel">Welcome to soundcheck !</h3>
				</div>
				<div class="modal-body" id="walkthrough">
					<h4>Would you like a walkthrough?<h4>
					<form>
						<span class="block"><input type="radio" name="selection" value="yes">&nbsp; <a class="yesOrNo" id="yes"><span class="bold">Yes</span> please, I'm new to this</a></span>
						<span class="block"><input type="radio" name="selection" value="no">&nbsp; <a class="yesOrNo" id="no"><span class="bold">No</span> thank you</a></span>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- End of "Welcome to Soundcheck" modal -->

	<!-- Video modal -->
	<div class="modal fade" id="demoVideo" tabindex="-1" role="dialog" aria-labelledby="demoVideoLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span>
						<span class="sr-only">Close</span>
					</button>
					<h4 class="modal-title" id="demoVideoLabel">Demo Video</h4>
				</div>
				<div class="modal-body">
					<iframe width="560" height="315" src="//www.youtube.com/embed/MuCs5Z-MbA4" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
	<!-- End of video modal -->

	<!-- "Select a song" modal -->
	<div class="modal fade" id="selectSong" tabindex="-1" role="dialog" aria-labelledby="selectSongLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span>
						<span class="sr-only">Close</span>
					</button>
					<h3 class="modal-title select-song-heading" id="selectSongLabel">Select a song <span>from our sample music</span></h3>
				</div>
				<div class="modal-body">
					<ul>
						<li><a>Let It Go</a> (Frozen)</li>
						<li><a>Get Lucky</a> (Daft Punk)</li>
						<li><a>Rolling In The Deep</a> (Adele)</li>
						<li><a>Haven't Met You Yet</a> (Michael Buble)</li>
						<li><a>If I Ain't Got You</a> (Alicia Keys)</li>
						<li><a>Come As You Are</a> (Nirvana)</li>
						<li><a>Greatest Love Of All</a> (Whitney Houston)</li>
						<li><a>Let It Be</a> (The Beatles)</li>
						<li><a>Yesterday</a> (The Beatles)</li>
					</ul>
					<img id="rainbow-music-notes" src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="Music notes of different colors">
				</div>
			</div>
		</div>
	</div>
	<!-- End of "Select a song" modal -->

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