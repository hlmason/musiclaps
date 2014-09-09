<?php
	require_once('../include/config.php');

	$pageTitle = 'Project Name';
	$page = 'Project Name';
	
	include(ROOT_PATH . 'include/header-logged-in.php');
	include(ROOT_PATH . 'include/db-connection.php');
	include(ROOT_PATH . 'controllers/get-profile.php');

?>

	<div id="wrapper">
		<div class="container">

			<div class="row col-lg-10 col-lg-offset-1">				
					
				<div class="row col-xs-12 col-sm-9">

				<!-- Recording Player -->
					<div class="row col-xs-12 live-player-container">
						<iframe width="620" height="380" src="https://www.musiclaps.com/embed/player?songid=null" frameborder="0" scrolling="no"></iframe><!-- Placeholder -->
					</div>
					<!-- End of Recording Player -->


					<section class="row col-xs-12" id="public-project-header">
						<h3>Project Title</h3><!-- Hard-coded placeholder -->
						<h5>Date Uploaded: <span class="normal">07/17/14</span></h5><!-- Hard-coded placeholder -->
					</section>
					
					<section class="row col-xs-12 public-project-info">	
						<div class="row col-xs-6">
							<img class="avatar" src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user">
							
							<section id="username-and-number-of-songs">
								<a href="<?php echo BASE_URL; ?>profile/"><h4>$username</h4></a><!-- Hard-coded placeholder -->
								<h5>$# Songs</h5><!-- Hard-coded placeholder -->
							</section>
							
							<div id="youtube-links">
								<a id="first-link" href="#"><img src="<?php echo BASE_URL; ?>assets/images/profile-pages/link-to-youtube-icon.jpg" alt="Link to YouTube icon"></a><!-- Hard-coded placeholder -->
								<a href="#"><img src="<?php echo BASE_URL; ?>assets/images/profile-pages/link-to-youtube-icon-gray.png" alt="Link to YouTube icon"></a><!-- Hard-coded placeholder -->
								<a href="#"><img src="<?php echo BASE_URL; ?>assets/images/profile-pages/link-to-youtube-icon-gray.png" alt="Link to YouTube icon"></a><!-- Hard-coded placeholder -->
							</div>
						</div>

						<div class="row col-xs-6">
							<section id="number-of-listens">
								<h2>#</h2>
								<h5 id="listens">listens</h5>
							</section>
						</div>
					</section>
					
					<section class="row col-xs-12">
						<div class="type-of-collab-container public-project-info">
							<span class="glyphicon first-glyphicon"></span><!-- Placeholder -->
							<h5>No Collab</h5>

							<span class="glyphicon glyphicon-ok"></span><!-- Hard-coded placeholder -->
							<h5>Open Collab</h5>

							<span class="glyphicon"></span><!-- Placeholder -->
							<h5>Requesting Collab</h5>

							<img id="cover-song" src="<?php echo BASE_URL; ?>assets/images/profile-pages/public-project/cover-song.png" alt="Cover song icon">
						</div>
					</section>


					<section class="row col-xs-12 public-project-info">
						<img id="clapping-hands" src="<?php echo BASE_URL; ?>assets/images/profile-pages/public-project/clapping-hands.png" alt="1 pair of clapping hands">
						<h4 id="number-of-claps"># claps</h4><!-- Hard-coded placeholder -->
						
						<!-- <span class="glyphicon glyphicon-thumbs-up"></span> -->

						<span class="glyphicon glyphicon-heart"></span>
						<h4 id="favorites"># favorites</h4><!-- Hard-coded placeholder -->
					</section>
					
					<div class="row col-xs-12 public-project-info">
						<img id="facebook-like-button" src="<?php echo BASE_URL; ?>assets/images/profile-pages/public-project/facebook-like-button.png" alt="Facebook 'like' button">
					</div>


					<div class="row col-xs-12">
						<div id="share-or-embed-buttons">
							<button class="navigate musiclaps-dark-gray musiclaps-blue" id="share" type="button">Share this Music</button>
							<button class="navigate button-navigate-hover-js" id="embed" type="button">Embed</button>
						</div>
					</div>

					<div class="row col-xs-12">
						<div class="share-to-social-networks-container" id="shareToSocialNetworksContainer">
							<img class="facebook-icon first-img" src="<?php echo BASE_URL; ?>assets/images/global/facebook-icon.png" alt="Facebook icon"><!-- Hard-coded placeholder -->
							<img class="twitter-<!-- Hard-coded placeholder -->icon" src="<?php echo BASE_URL; ?>assets/images/global/twitter-icon.png" alt="Twitter icon">
							<img class="google-icon" src="<?php echo BASE_URL; ?>assets/images/global/google-icon.jpg" alt="Google icon"><!-- Hard-coded placeholder -->
							<img id="reddit-icon" src="<?php echo BASE_URL; ?>assets/images/profile-pages/public-project/reddit-icon.gif" alt="Reddit icon"><!-- Hard-coded placeholder -->
							<img id="tumblr-icon" src="<?php echo BASE_URL; ?>assets/images/profile-pages/public-project/tumblr-icon.png" alt="Tumblr icon"><!-- Hard-coded placeholder -->
							<img id="pinterest-icon" src="<?php echo BASE_URL; ?>assets/images/profile-pages/public-project/pinterest-icon.png" alt="Pinterest icon"><!-- Hard-coded placeholder -->
							<img id="stumbleupon-icon" src="<?php echo BASE_URL; ?>assets/images/profile-pages/public-project/stumbleupon-icon.jpg" alt="Stumbleupon icon"><!-- Hard-coded placeholder -->

							<input type="text" value="https://www.musiclaps.com//play?songid=8a022c7833672178"><!-- Hard-coded placeholder -->
						</div>

						<!-- Hidden upon page load -->
						<div class="embed-container" id="embedContainer">
							<textarea>
								<iframe width="620" height="380" src="https://www.musiclaps.com//embed/player?songid=8a022c7833672178" frameborder="0" scrolling="no"></iframe><!-- Hard-coded placeholder -->
							</textarea>
						</div>
					</div>

					<section class="row col-xs-12" id="comment-container">
						<label for="comment-public-project-page">Post a Comment</label>
						<textarea name="comment-public-project"></textarea>
						<!-- Markup is backwards because elements are floated right -->
						<input type="submit" value="Post">
						<h4>500 characters remaining</h4><!-- Hard-coded placeholder -->
					</section>

				</div>
				<div class="row col-xs-12 col-sm-3">
					<div class="profile-right" id="public-project-page">
						<div class="row col-xs-12">
							<img src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="Project image"><!-- Hard-coded placeholder -->
						</div>
						<section class="row col-xs-12">
							<h4>$Project Name</h4><!-- Hard-coded placeholder -->
							<h5>User: <span class="normal">$username</span></h5><!-- Hard-coded placeholder -->
							<h5># Plays</h5><!-- Hard-coded placeholder -->
						</section>

						<div class="row col-xs-12">
							<img src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="Project image"><!-- Hard-coded placeholder -->
						</div>
						<section class="row col-xs-12">
							<h4>$Project Name</h4><!-- Hard-coded placeholder -->
							<h5>User: <span class="normal">$username</span></h5><!-- Hard-coded placeholder -->
							<h5># Plays</h5><!-- Hard-coded placeholder -->
						</section>

						<div class="row col-xs-12">
							<img src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="Project image"><!-- Hard-coded placeholder -->
						</div>
						<section class="row col-xs-12">
							<h4>$Project Name</h4><!-- Hard-coded placeholder -->
							<h5>User: <span class="normal">$username</span></h5><!-- Hard-coded placeholder -->
							<h5># Plays</h5><!-- Hard-coded placeholder -->
						</section>

						<div class="row col-xs-12">
							<img src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="Project image"><!-- Hard-coded placeholder -->
						</div>
						<section class="row col-xs-12">
							<h4>$Project Name</h4><!-- Hard-coded placeholder -->
							<h5>User: <span class="normal">$username</span></h5><!-- Hard-coded placeholder -->
							<h5># Plays</h5><!-- Hard-coded placeholder -->
						</section>
					</div>
				</div>		
			</div>
			<div class="col-lg-1"></div>	
		
		</div>

	<?php
		include(ROOT_PATH . 'include/footer-logged-in.php');
	?>