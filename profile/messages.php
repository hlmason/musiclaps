<?php
	require_once('../include/config.php');

	$pageTitle = 'Messages';
	$page = 'Messages';
	
	include(ROOT_PATH . 'include/header-logged-in.php');
	include(ROOT_PATH . 'include/db-connection.php');
	include(ROOT_PATH . 'controllers/get-profile.php');
	include(ROOT_PATH . 'include/nav-logged-in.php');

?>

			<div class="row col-lg-10 col-lg-offset-1">				
					
				<div class="row col-xs-12 col-sm-9">

					<section class="row col-xs-12" id="messages-header">
						<a href="<?php echo BASE_URL; ?>profile/messages.php">
							<span class="glyphicon glyphicon-envelope"></span>
							<h3>Messages</h3>
						</a>
						<a href="<?php echo BASE_URL; ?>profile/messages.php">
							<span class="glyphicon glyphicon-refresh"></span>
						</a>
						<a href="#">
							<span class="glyphicon glyphicon-arrow-up"></span>
						</a>
						<button type="button" id="addFriendButton">Add New Friend</button>
					</section>

					<!-- Hidden upon page load -->
					<div class="add-friend-container row col-xs-12" id="addFriendContainer">
						<label id="add-friend-label" for="add_friend">Member's Username</label>
						<input class="add-friend-field" id="add_friend" type="text" name="add_friend">
						<input class="add-friend-submit" type="submit" value="Add">
					</div>

					<div class="friends-container row col-xs-12" id="friendsContainer">
						<div class="row col-xs-12">
							<div class="username-and-img">
								<img class="first-img" src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user"><!-- Hard-coded placeholder -->
								<h5 class="first-h5">$username</h5><!-- Hard-coded placeholder -->
								<span class="glyphicon glyphicon-trash" id="glyphiconTrash"></span><!-- Hard-coded placeholder -->
							</div>
							<div class="username-and-img">
								<img src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user"><!-- Hard-coded placeholder -->
								<h5>$username</h5><!-- Hard-coded placeholder -->
								<span class="glyphicon glyphicon-trash" id="glyphiconTrash"></span><!-- Hard-coded placeholder -->
							</div>
							<div class="username-and-img">
								<img src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user"><!-- Hard-coded placeholder -->
								<h5>$username</h5><!-- Hard-coded placeholder -->
								<span class="glyphicon glyphicon-trash" id="glyphiconTrash"></span><!-- Hard-coded placeholder -->
							</div>
							<div class="username-and-img">
								<img src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user"><!-- Hard-coded placeholder -->
								<h5>$username</h5><!-- Hard-coded placeholder -->
								<span class="glyphicon glyphicon-trash" id="glyphiconTrash"></span><!-- Hard-coded placeholder -->
							</div>
							<div class="username-and-img">
								<img src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user"><!-- Hard-coded placeholder -->
								<h5>$username</h5><!-- Hard-coded placeholder -->
								<span class="glyphicon glyphicon-trash" id="glyphiconTrash"></span><!-- Hard-coded placeholder -->
							</div>
							<div class="username-and-img">
								<img src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user"><!-- Hard-coded placeholder -->
								<h5>$username</h5><!-- Hard-coded placeholder -->
								<span class="glyphicon glyphicon-trash" id="glyphiconTrash"></span><!-- Hard-coded placeholder -->
							</div>
						</div>

						<div class="row col-xs-12">
							<div class="username-and-img">
								<img class="first-img" src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user"><!-- Hard-coded placeholder -->
								<h5 class="first-h5">$username</h5><!-- Hard-coded placeholder -->
								<span class="glyphicon glyphicon-trash" id="glyphiconTrash"></span><!-- Hard-coded placeholder -->
							</div>
							<div class="username-and-img">
								<img src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user"><!-- Hard-coded placeholder -->
								<h5>$username</h5><!-- Hard-coded placeholder -->
								<span class="glyphicon glyphicon-trash" id="glyphiconTrash"></span><!-- Hard-coded placeholder -->
							</div>
							<div class="username-and-img">
								<img src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user"><!-- Hard-coded placeholder -->
								<h5>$username</h5><!-- Hard-coded placeholder -->
								<span class="glyphicon glyphicon-trash" id="glyphiconTrash"></span><!-- Hard-coded placeholder -->
							</div>
							<div class="username-and-img">
								<img src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user"><!-- Hard-coded placeholder -->
								<h5>$username</h5><!-- Hard-coded placeholder -->
								<span class="glyphicon glyphicon-trash" id="glyphiconTrash"></span><!-- Hard-coded placeholder -->
							</div>
							<div class="username-and-img">
								<img src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user"><!-- Hard-coded placeholder -->
								<h5>$username</h5><!-- Hard-coded placeholder -->
								<span class="glyphicon glyphicon-trash" id="glyphiconTrash"></span><!-- Hard-coded placeholder -->
							</div>
							<div class="username-and-img">
								<img src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user"><!-- Hard-coded placeholder -->
								<h5>$username</h5><!-- Hard-coded placeholder -->
								<span class="glyphicon glyphicon-trash" id="glyphiconTrash"></span><!-- Hard-coded placeholder -->
							</div>
						</div>
					</div>

					<!-- Hidden upon page load -->
					<section class="messages-container" id="messagesContainer">
						<div class="row"> 
							<div class="col-xs-3">
								<h5>06/17/2013 at 4:42pm</h5><!-- Hard-coded placeholder -->
								<a href="<?php echo BASE_URL; ?>profile/">
									<img src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user"><!-- Hard-coded placeholder -->
									<h5 class="first-h5">$username</h5><!-- Hard-coded placeholder -->
								</a>
							</div>
							
							<div class="col-xs-9">
								<div id="existing-message"></div>
							</div>
						</div>

						<section class="row col-xs-12">
							<span class="glyphicon glyphicon-pencil"></span>
							<h4>message to $username</h4><!-- Hard-coded placeholder -->
							<textarea id="compose_message" name="compose_message"></textarea>
							<input class="send-message" type="submit" value="Send">
						</section>
					</section>
				</div>
				<?php
					include(ROOT_PATH . 'include/profile/recommended.php');
				?>		
			</div>
			<div class="col-lg-1"></div>	
		
		</div>

	<?php
		include(ROOT_PATH . 'include/footer-logged-in.php');
	?>