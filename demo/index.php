<?php
	require_once('../include/config.php');

	$pageTitle = 'Live Player';
	$page = 'Live Player';
	include(ROOT_PATH . 'include/header.php');
?>

	<!-- Welcome modal -->
	<div class="modal fade" id="wantDemo" tabindex="-1" role="dialog" aria-labelledby="wantDemoLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span>
						<span class="sr-only">Close</span>
					</button>
					<h4 class="modal-title" id="wantDemoLabel">Welcome to soundcheck !</h4>
				</div>
				<div class="modal-body">
					Would you like a walkthrough?<br><br>
					<form>
						<input type="radio" name="selection" value="yes">&nbsp; <span class="bold">Yes</span> please, I'm new to this<br>
						<input type="radio" name="selection" value="no">&nbsp; <span class="bold">No</span> thanks, I can figure it out<br>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- End of welcome modal -->

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
					<!-- <iframe width="560" height="315" src="//www.youtube.com/embed/MuCs5Z-MbA4" frameborder="0" allowfullscreen></iframe> -->
				</div>
			</div>
		</div>
	</div>
	<!-- End of video modal -->

	<!-- Select a song modal -->
	<div class="modal fade" id="selectSong" tabindex="-1" role="dialog" aria-labelledby="selectSongLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span>
						<span class="sr-only">Close</span>
					</button>
					<h4 class="modal-title" id="selectSongLabel"><span class="normal">First</span> select a song <span class="normal">from our sample music</span></h4>
				</div>
				<div class="modal-body">
					<ul>
						<li><a>Get Lucky</a> (Daft Punk)</li>
						<li><a>Somebody That I Used To Know</a> (Gotye)</li>
						<li><a>Rolling In The Deep</a> (Adele)</li>
						<li><a>Haven't Met You Yet</a> (Michael Buble)</li>
						<li><a>No One</a> (Alicia Keys)</li>
						<li><a>If I Ain't Got You</a> (Alicia Keys)</li>
						<li><a>Greatest Love Of All</a> (Whitney Houston)</li>
						<li><a>Let It Be</a> (The Beatles)</li>
						<li><a>Yesterday</a> (The Beatles)</li>
					</ul>
					<img class="pull-right" src="<?php echo BASE_URL; ?>img/demo-page/rainbow-music-notes.png" alt="Music notes of different colors">
				</div>
			</div>
		</div>
	</div>
	<!-- End of select a song modal -->

	<div id="wrapper">
		
			<div class="container">
				<div class="row col-xs-12" id="live-player-container">
					<iframe width="620" height="380" src="https://www.musiclaps.com/embed/player?songid=null" frameborder="0" scrolling="no"></iframe>
				</div>
			</div>
			
			<section id="recording-instructions">
				<h1 id="demo-header">Record in 3 steps:</h1>
				
				<!-- Step 1 -->
				<div class="container">
					<div class="row">
						<div class="col-xs-6 col-sm-5 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3 col-lg-offset-3">
							<h2>1. Click the <span class="red">REC</span> button (above).</h2>
						</div>
						<div class="col-xs-6 col-sm-5 col-md-4 col-lg-3" id="recording-buttons-img">
							<img src="<?php echo BASE_URL; ?>img/demo-page/recording-buttons.png" alt="Recording buttons">
						</div>
						<div class="col-sm-1 col-md-2 col-lg-3"></div>
					</div>
				</div>
				<!-- End of Step 1 -->
				
				<!-- Step 2 -->
				<div class="container">
					<div class="row">
						<div class="col-xs-6 col-sm-5 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3 col-lg-offset-3" id="allow-flash-instructions">
							<h2>2. <span class="green">Allow Flash</span> to run (so that the mic can record).</h2>
						</div>
						<div class="col-xs-6 col-sm-5 col-md-4 col-lg-3">
							<img src="<?php echo BASE_URL; ?>img/demo-page/allow-flash.png">
						</div>
						<div class="col-sm-1 col-md-2 col-lg-3"></div>
					</div>
				</div>
				<!-- End of Step 2 -->

				<!-- Step 3 -->
				<div class="container">
					<div class="row">
						<div class="col-xs-6 col-sm-5 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3 col-lg-offset-3" id="record-start-instructions">
							<h2>3. Click <span class="red">REC START</span> (above).</h2>
						</div>
						<div class="col-xs-6 col-sm-5 col-md-4 col-lg-3" id="recording-area-img">
							<img src="<?php echo BASE_URL; ?>img/demo-page/recording-area.png">
						</div>
						<div class="col-sm-1 col-md-2 col-lg-3"></div>
					</div>
				</div>
				<!-- End of Step 3 -->
			</section>

	</div>

	<?php
		include(ROOT_PATH . 'include/footer.php');
	?>