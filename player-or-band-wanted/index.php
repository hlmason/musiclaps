<?php
	require_once('../include/config.php');

	$pageTitle = 'Player or Band Wanted';
	$page = 'Player or Band Wanted';
	
	include(ROOT_PATH . 'include/header.php');
?>

	<div id="wrapper">
		<div class="container" id="player-or-band-wanted-page">

			<div id="player-or-band-wanted-container">

				<div class="row">
					<div class="col-xs-1"></div>

					<div class="col-xs-10">
						<section id="categories-container">
							<div class="categories">
								<h4 class="first-h4">Karaoke</h4>
								<img src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="#"><!-- Placeholder -->
								<h4 class="last-h4">0</h4>
							</div>

							<div class="categories">
								<h4>Band Members</h4>
								<img src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="#"><!-- Placeholder -->
								<h4 class="last-h4">1</h4>
							</div>

							<div class="categories">
								<h4>Arrangers</h4>
								<img src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="#"><!-- Placeholder -->
								<h4 class="last-h4">0</h4>
							</div>

							<div class="categories">
								<h4>Lyric Writers</h4>
								<img src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="#"><!-- Placeholder -->
								<h4 class="last-h4">0</h4>
							</div>

							<div class="categories">
								<h4>Composers</h4>
								<img src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="#"><!-- Placeholder -->
								<h4 class="last-h4">0</h4>
							</div>

							<div class="categories">
								<h4>Others</h4>
								<img src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="#"><!-- Placeholder -->
								<h4 class="last-h4">1</h4>
							</div>
						</section>
					</div>	

					<div class="col-xs-1"></div>
				</div>

				<div class="row">
					<div class="col-xs-1"></div>
				 
				 	<section class="col-xs-10">
						<h4 id="karaoke">Karaoke Song Request</h4>
						<button type="button">Post New Request</button>
					</section>

					<div class="col-xs-1"></div>
				</div>

				<section class="row col-xs-12" id="noListingsContainer">
					<h4 class="no-listings" id="noListings">Currently there are no listings</h4>
				</section>

			</div>

		</div>

	<?php
		include(ROOT_PATH . 'include/footer.php');
	?>