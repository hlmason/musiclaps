<?php
	require_once('../../controllers/require/config.php');

	$page_title = 'Project Name'; // Hard-coded placeholder 
	
	include(ROOT_PATH . 'models/new-db-connection.php');
	include(ROOT_PATH . 'views/include/header-logged-in.php');

?>

	<div id="wrapper">
		<div class="container">

			<div class="row col-lg-10 col-lg-offset-2">				
					
				<div class="row col-xs-12 col-md-9">

					<!-- Recording Player -->
					<div class="row col-xs-12 live-player-container">
						<iframe width="620" height="380" src="https://www.musiclaps.com/embed/player?songid=null" frameborder="0" scrolling="no"></iframe><!-- Placeholder -->
					</div>
					<!-- End of Recording Player -->


					<section class="row col-xs-12 public-project-header">
						<a href="<?php echo BASE_URL; ?>views/public-project/project-details-logged-in.php"><h3 class="public-project-page">$Project Title</h3></a><!-- Hard-coded placeholder -->
						<h5>Date Uploaded: <span class="normal">07/17/14</span></h5><!-- Hard-coded placeholder -->
					</section>
					
					<section class="row col-xs-12 public-project-info">	
						<div class="row col-xs-4 col-sm-2">
							<a href="<?php echo BASE_URL; ?>views/profile/public-profile-logged-in.php"><img class="avatar" src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user"></a>
						</div>

						<div class="row col-xs-7 col-sm-6">
							<section class="username-and-number-of-songs">
								<a href="<?php echo BASE_URL; ?>views/profile/public-profile-logged-in.php"><h4>$username</h4></a><!-- Hard-coded placeholder -->
								<h5>$# songs</h5><!-- Hard-coded placeholder -->
							</section>
							
							<div class="youtube-links">
								<a class="first-link" href="#"><img src="<?php echo BASE_URL; ?>assets/images/profile-pages/link-to-youtube-icon.jpg" alt="Link to YouTube icon"></a><!-- Hard-coded placeholder -->
								<a href="#"><img src="<?php echo BASE_URL; ?>assets/images/profile-pages/link-to-youtube-icon-gray.png" alt="Link to YouTube icon"></a><!-- Hard-coded placeholder -->
								<a href="#"><img src="<?php echo BASE_URL; ?>assets/images/profile-pages/link-to-youtube-icon-gray.png" alt="Link to YouTube icon"></a><!-- Hard-coded placeholder -->
							</div>
						</div>

						<div class="row col-xs-1 col-sm-4">
							<section class="number-of-listens">
								<h2>#</h2>
								<h5>listens</h5>
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

							<img id="cover-song" src="<?php echo BASE_URL; ?>assets/images/public-project-pages/cover-song.png" alt="Cover song icon">
						</div>
					</section>


					<section class="row col-xs-12 public-project-info">
						<img class="clapping-hands" src="<?php echo BASE_URL; ?>assets/images/public-project-pages/clapping-hands.png" alt="1 pair of clapping hands">
						<h4 id="number-of-claps"># claps</h4><!-- Hard-coded placeholder -->
						
						<!-- <span class="glyphicon glyphicon-thumbs-up"></span> -->

						<span class="glyphicon glyphicon-heart"></span>
						<h4 class="favorites"># favorites</h4><!-- Hard-coded placeholder -->
					</section>
					
					<div class="row col-xs-12 public-project-info">
						<img id="facebook-like-button" src="<?php echo BASE_URL; ?>assets/images/public-project-pages/facebook-like-button.png" alt="Facebook 'like' button">
					</div>


					<div class="row col-xs-12">
						<div id="share-or-embed-buttons">
							<button class="navigate musiclaps-dark-gray" id="share" type="button">Share</button>
							<button class="navigate dark-button-navigate-hover-js" id="embed" type="button">Embed</button>
						</div>
					</div>

					<div class="row col-xs-12">
						<div class="share-to-social-networks-container" id="shareToSocialNetworksContainer">
							<img class="facebook-icon first-img" src="<?php echo BASE_URL; ?>assets/images/global/facebook-icon.png" alt="Facebook icon"><!-- Hard-coded placeholder -->
							<img class="twitter-<!-- Hard-coded placeholder -->icon" src="<?php echo BASE_URL; ?>assets/images/global/twitter-icon.png" alt="Twitter icon">
							<img class="google-icon" src="<?php echo BASE_URL; ?>assets/images/global/google-icon.jpg" alt="Google icon"><!-- Hard-coded placeholder -->
							<img id="reddit-icon" src="<?php echo BASE_URL; ?>assets/images/public-project-pages/reddit-icon.gif" alt="Reddit icon"><!-- Hard-coded placeholder -->
							<img id="tumblr-icon" src="<?php echo BASE_URL; ?>assets/images/public-project-pages/tumblr-icon.png" alt="Tumblr icon"><!-- Hard-coded placeholder -->
							<img id="pinterest-icon" src="<?php echo BASE_URL; ?>assets/images/public-project-pages/pinterest-icon.png" alt="Pinterest icon"><!-- Hard-coded placeholder -->
							<img id="stumbleupon-icon" src="<?php echo BASE_URL; ?>assets/images/public-project-pages/stumbleupon-icon.jpg" alt="Stumbleupon icon"><!-- Hard-coded placeholder -->

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
						<form action="<?php echo BASE_URL; ?>controllers/public-project-controller.php" method="post">
							<label for="comment_public_project_page">Post a Comment</label>
							<textarea id="comment_public_project_page" name=""></textarea>
							<!-- Markup is backwards because elements are floated right -->
							<input type="submit" value="Post">
							<h4>500 characters remaining</h4><!-- Hard-coded placeholder -->
						</form>
					</section>

				</div>
				<div class="row col-xs-12 col-md-3 public-project-page">
					<div class="profile-right public-project-page">
						<div class="row col-xs-12">
							<img src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="Project image"><!-- Hard-coded placeholder -->
						</div>
						<section class="row col-xs-12">
							<a href="<?php echo BASE_URL; ?>views/public-project/public-project-logged-in.php"><h4>$Project Name</h4></a><!-- Hard-coded placeholder -->
							<h5>User: <a href="<?php echo BASE_URL; ?>views/profile/public-profile-logged-in.php"><span class="normal">$username</span></a></h5><!-- Hard-coded placeholder -->
							<h5># Plays</h5><!-- Hard-coded placeholder -->
						</section>

						<div class="row col-xs-12">
							<img src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="Project image"><!-- Hard-coded placeholder -->
						</div>
						<section class="row col-xs-12">
							<a href="<?php echo BASE_URL; ?>views/public-project/public-project-logged-in.php"><h4>$Project Name</h4></a><!-- Hard-coded placeholder -->
							<h5>User: <a href="<?php echo BASE_URL; ?>views/profile/public-profile-logged-in.php"><span class="normal">$username</span></a></h5><!-- Hard-coded placeholder -->
							<h5># Plays</h5><!-- Hard-coded placeholder -->
						</section>

						<div class="row col-xs-12">
							<img src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="Project image"><!-- Hard-coded placeholder -->
						</div>
						<section class="row col-xs-12">
							<a href="<?php echo BASE_URL; ?>views/public-project/public-project-logged-in.php"><h4>$Project Name</h4></a><!-- Hard-coded placeholder -->
							<h5>User: <a href="<?php echo BASE_URL; ?>views/profile/public-profile-logged-in.php"><span class="normal">$username</span></a></h5><!-- Hard-coded placeholder -->
							<h5># Plays</h5><!-- Hard-coded placeholder -->
						</section>

						<div class="row col-xs-12">
							<img src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="Project image"><!-- Hard-coded placeholder -->
						</div>
						<section class="row col-xs-12">
							<a href="<?php echo BASE_URL; ?>views/public-project/public-project-logged-in.php"><h4>$Project Name</h4></a><!-- Hard-coded placeholder -->
							<h5>User: <a href="<?php echo BASE_URL; ?>views/profile/public-profile-logged-in.php"><span class="normal">$username</span></a></h5><!-- Hard-coded placeholder -->
							<h5># Plays</h5><!-- Hard-coded placeholder -->
						</section>
					</div>
				</div>		
			</div>
			<!-- <div class="col-lg-1"></div>	 -->
		
		</div>

	<?php
		include(ROOT_PATH . 'views/include/footer-logged-in.php');
	?>