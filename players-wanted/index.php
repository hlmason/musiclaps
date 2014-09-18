<?php
	require_once('../include/config.php');

	$pageTitle = 'Players Wanted';
	$page = 'Players Wanted';
	
	include(ROOT_PATH . 'include/header.php');
?>

	<div id="wrapper">
		<div class="container">

			<div id="players-wanted-container">

				<div class="row">
					<div class="col-xs-1"></div>

					<div class="col-xs-10">
						<section id="categories-container">
							<div class="categories" id="karaokeContainer">
								<h4>Karaoke</h4>
								<img src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="#"><!-- Placeholder -->
								<h4 class="last-h4">0</h4>
							</div>

							<div class="categories" id="bandMembersContainer">
								<h4>Band Members</h4>
								<img src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="#"><!-- Placeholder -->
								<h4 class="last-h4">1</h4>
							</div>

							<div class="categories" id="arrangersContainer">
								<h4>Arrangers</h4>
								<img src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="#"><!-- Placeholder -->
								<h4 class="last-h4">0</h4>
							</div>

							<div class="categories" id="lyricsContainer">
								<h4>Lyric Writers</h4>
								<img src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="#"><!-- Placeholder -->
								<h4 class="last-h4">0</h4>
							</div>

							<div class="categories" id="composersContainer">
								<h4>Composers</h4>
								<img src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="#"><!-- Placeholder -->
								<h4 class="last-h4">0</h4>
							</div>

							<div class="categories" id="othersContainer">
								<h4>Other</h4>
								<img src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="#"><!-- Placeholder -->
								<h4 class="last-h4">1</h4>
							</div>
						</section>
					</div>	

					<div class="col-xs-1"></div>
				</div>

				<div class="row">
					<div class="col-xs-1"></div>
				 
				 	<section class="col-xs-10" id="karaokeSongsRequestedContainer">
						<h3 class="wanted">Karaoke Songs Wanted</h3>
						<button class="postNewRequest" type="button">Post New Request</button>
					</section>

					<section class="col-xs-10" id="bandMembersWantedContainer">
						<h3 class="wanted">Band Members Wanted</h3>
						<button class="postNewRequest" type="button">Post New Request</button>
					</section>

					<section class="col-xs-10" id="arrangersWantedContainer">
						<h3 class="wanted">Arrangers Wanted</h3>
						<button class="postNewRequest" type="button">Post New Request</button>
					</section>

					<section class="col-xs-10" id="lyricWritersWantedContainer">
						<h3 class="wanted">Lyric Writers Wanted</h3>
						<button class="postNewRequest" type="button">Post New Request</button>
					</section>

					<section class="col-xs-10" id="composersWantedContainer">
						<h3 class="wanted">Composers Wanted</h3>
						<button class="postNewRequest" type="button">Post New Request</button>
					</section>

					<section class="col-xs-10" id="othersWantedContainer">
						<h3 class="wanted">Others Wanted</h3>
						<button class="postNewRequest" type="button">Post New Request</button>
					</section>

					<section class="row col-xs-12" id="noListingsContainer">
						<h4 class="no-listings" id="noListings">Currently there are no listings</h4>
					</section>

					<div class="col-xs-1"></div>
				</div>

				<div class="row">
					<div class="col-xs-2"></div>
					
					<div class="col-xs-8">
						<section id="newRequestContainer">
							<div id="glyphicon-and-h4-title">
								<span class="glyphicon glyphicon-pencil"></span>
								<h4 id="new-request">&nbsp; New Request</h4>
							</div>
							
							<div class="new-request-container">
								<div>
									<label id="request-title-label" for="request_title">Title</label>
									<input id="request_title" type="text" name="request_title">
								</div>
								
								<div>
									<label for="request_description">Description</label>
									<textarea id="request_description" name="request_description"></textarea>
								</div>

								<input class="post-request" type="submit" value="Post">
							</div>
						</section>
					</div>
					
					<div class="col-xs-2"></div>
				</div>

			</div>

		</div>

	<?php
		include(ROOT_PATH . 'include/footer.php');
	?>