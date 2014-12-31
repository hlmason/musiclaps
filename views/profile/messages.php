<?php
	require_once('../../controllers/require/config.php');

	$page_title = 'Messages';
	
	include(ROOT_PATH . 'views/include/header-logged-in.php');
	include(ROOT_PATH . 'views/include/profile/user-menu.php');

?>

			<div class="row col-lg-10 col-lg-offset-1">				
					
				<div class="row col-xs-12 col-md-9" id="messages-page">

					<section class="row col-xs-12" id="messages-header">
						<a href="<?php echo BASE_URL; ?>views/profile/messages.php">
							<span class="glyphicon glyphicon-envelope"></span>
							<h3>Messages</h3>
						</a>
						<a href="<?php echo BASE_URL; ?>views/profile/messages.php">
							<span class="glyphicon glyphicon-refresh"></span>
						</a>
						<a href="#">
							<span class="glyphicon glyphicon-arrow-up"></span>
						</a>
						<button class="white-button-navigate-hover-js" type="button" id="addFriendButton">Add New Friend</button>
					</section>

					<!-- Hidden upon page load -->
					<div class="add-friend-container row col-xs-12" id="addFriendContainer">
						<form action="" method="post">
							<label for="add_friend">Member's Username</label>
							<input class="add-friend-field" id="add_friend" type="text" name="">
							<input class="add-friend-submit" type="submit" name="" value="Add">
						</form>
					</div>

					<div class="friends-container row col-xs-12" id="friendsContainer">
						<div class="row col-xs-12">
							<div class="username-and-img">
								<img class="first-img" src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user"><!-- Hard-coded placeholder -->
								<h5 class="first-h5 username">$username</h5><!-- Hard-coded placeholder -->
								<span class="glyphicon glyphicon-trash" id="glyphiconTrash"></span>
							</div>
							<div class="username-and-img">
								<img src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user"><!-- Hard-coded placeholder -->
								<h5 class="username">$username</h5><!-- Hard-coded placeholder -->
								<span class="glyphicon glyphicon-trash" id="glyphiconTrash"></span>
							</div>
							<div class="username-and-img">
								<img src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user"><!-- Hard-coded placeholder -->
								<h5 class="username">$username</h5><!-- Hard-coded placeholder -->
								<span class="glyphicon glyphicon-trash" id="glyphiconTrash"></span>
							</div>
							<div class="username-and-img">
								<img src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user"><!-- Hard-coded placeholder -->
								<h5 class="username">$username</h5><!-- Hard-coded placeholder -->
								<span class="glyphicon glyphicon-trash" id="glyphiconTrash"></span>
							</div>
							<div class="username-and-img">
								<img src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user"><!-- Hard-coded placeholder -->
								<h5 class="username">$username</h5><!-- Hard-coded placeholder -->
								<span class="glyphicon glyphicon-trash" id="glyphiconTrash"></span>
							</div>
							<div class="username-and-img">
								<img src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user"><!-- Hard-coded placeholder -->
								<h5 class="username">$username</h5><!-- Hard-coded placeholder -->
								<span class="glyphicon glyphicon-trash" id="glyphiconTrash"></span>
							</div>
						</div>

						<div class="row col-xs-12">
							<div class="username-and-img">
								<img class="first-img" src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user"><!-- Hard-coded placeholder -->
								<h5 class="first-h5 username">$username</h5><!-- Hard-coded placeholder -->
								<span class="glyphicon glyphicon-trash" id="glyphiconTrash"></span>
							</div>
							<div class="username-and-img">
								<img src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user"><!-- Hard-coded placeholder -->
								<h5 class="username">$username</h5><!-- Hard-coded placeholder -->
								<span class="glyphicon glyphicon-trash" id="glyphiconTrash"></span>
							</div>
							<div class="username-and-img">
								<img src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user"><!-- Hard-coded placeholder -->
								<h5 class="username">$username</h5><!-- Hard-coded placeholder -->
								<span class="glyphicon glyphicon-trash" id="glyphiconTrash"></span>
							</div>
							<div class="username-and-img">
								<img src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user"><!-- Hard-coded placeholder -->
								<h5 class="username">$username</h5><!-- Hard-coded placeholder -->
								<span class="glyphicon glyphicon-trash" id="glyphiconTrash"></span>
							</div>
							<div class="username-and-img">
								<img src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user"><!-- Hard-coded placeholder -->
								<h5 class="username">$username</h5><!-- Hard-coded placeholder -->
								<span class="glyphicon glyphicon-trash" id="glyphiconTrash"></span>
							</div>
							<div class="username-and-img">
								<img src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user"><!-- Hard-coded placeholder -->
								<h5 class="username">$username</h5><!-- Hard-coded placeholder -->
								<span class="glyphicon glyphicon-trash" id="glyphiconTrash"></span>
							</div>
						</div>
					</div>

					<!-- Hidden upon page load -->
					<section class="messages-container" id="messagesContainer">
						<div class="row"> 
							<div class="col-xs-3">
								<h5>06/17/2013 at 4:42pm</h5><!-- Hard-coded placeholder -->
								<a href="<?php echo BASE_URL; ?>views/profile/">
									<a href="<?php echo BASE_URL; ?>views/profile/public-profile-logged-in.php"><img src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user"><!-- Hard-coded placeholder -->
									<h5 class="first-h5">$username</h5></a><!-- Hard-coded placeholder -->
								</a>
							</div>
							
							<div class="col-xs-9 messages-container">
								<div id="existing-message"></div><!-- Hard-coded placeholder -->
							</div>
						</div>

						<section class="row col-xs-12">
							<form action="" method="post">
								<span class="glyphicon glyphicon-pencil"></span>
								<label for="compose_message">Message to $username</label><!-- Hard-coded placeholder -->
								<textarea id="compose_message" name="compose_message"></textarea>
								<input class="send-message" type="submit" name="" value="Send">
							</form>
						</section>
					</section>
				</div>
				<?php
					include(ROOT_PATH . 'views/include/profile/recommended.php');
				?>		
			</div>
			<div class="col-lg-1"></div>	
		
		</div>

	<?php
		include(ROOT_PATH . 'views/include/footer-logged-in.php');
	?>