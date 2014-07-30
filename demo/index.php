<?php
	require_once('../include/config.php');

	$pageTitle = 'Demo';
	$page = 'Demo';
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
					<h4 class="modal-title" id="wantDemoLabel">Welcome to soundcheck</h4>
				</div>
				<div class="modal-body">
					Would you like a practice run?<br><br>
					<form>
						<input type="radio" name="selection" value="yes">&nbsp; <span class="bold">Yes</span>, please walk me through it<br>
						<input type="radio" name="selection" value="no">&nbsp; <span class="bold">No</span> thanks, I'm ok without one<br>
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
					<iframe width="560" height="315" src="//www.youtube.com/embed/MuCs5Z-MbA4" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
	<!-- End of video modal -->

	<div id="wrapper">
		
		<div class="container">
			<div id="live-player-container" class="row col-xs-12">
				<iframe width="620" height="380" src="https://www.musiclaps.com/embed/player?songid=null" frameborder="0" scrolling="no"></iframe>
			</div>
		</div>

	</div>

	<?php
		include(ROOT_PATH . 'include/footer.php');
	?>