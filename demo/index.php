<?php
	require_once('../include/config.php');

	$pageTitle = 'Demo';
	$page = 'Demo';
	include(ROOT_PATH . 'include/header.php');
?>

	<div class="modal fade" id="selectSong" tabindex="-1" role="dialog" aria-labelledby="selectSongLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span>
						<span class="sr-only">Close</span>
					</button>
					<h4 class="modal-title" id="selectSongLabel">Select a song!</h4>
				</div>
				<div class="modal-body">
					Select a song from our collection to get started!
					<!-- <p>Testing testing</p> -->
				</div>
			</div>
		</div>
	</div>

	<div id="wrapper">

	</div>

	<?php
		include(ROOT_PATH . 'include/footer.php');
	?>