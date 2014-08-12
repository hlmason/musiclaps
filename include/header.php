<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Official Site of Musiclaps">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?php echo BASE_URL; ?>favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="228x228" href="<?php echo BASE_URL; ?>favicon-228.png">
	<link rel="apple-touch-icon-precomposed" sizes="195x195" href="<?php echo BASE_URL; ?>favicon-195.png">
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo BASE_URL; ?>favicon-152.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo BASE_URL; ?>favicon-144.png">
    <link rel="apple-touch-icon-precomposed" sizes="128x128" href="<?php echo BASE_URL; ?>favicon-128.png">
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo BASE_URL; ?>favicon-120.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo BASE_URL; ?>favicon-114.png">
    <link rel="apple-touch-icon-precomposed" sizes="96x96" href="<?php echo BASE_URL; ?>favicon-96.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo BASE_URL; ?>favicon-72.png">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo BASE_URL; ?>favicon-57.png">
    <link rel="apple-touch-icon-precomposed" sizes="48x48" href="<?php echo BASE_URL; ?>favicon-48.png">
	<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/stylesheets/main.css">
	<title>Musiclaps | <?php echo $pageTitle; ?></title>
	<!-- [if lt IE 9]> -->
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <!-- [endif] -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/javascripts/customized.bootstrap.min.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/javascripts/index.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/javascripts/wmuSlider.min.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/javascripts/header.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/javascripts/live-player.js"></script>
</head>
<body>

	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header"><!-- For Firefox and IE -->
	            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
	            </button>
				<a class="navbar-brand" href="<?php echo BASE_URL; ?>">
					<img src="<?php echo BASE_URL; ?>assets/images/nav-and-footer/musiclaps-logo.png" alt="Musiclaps logo">
				</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-left">
					<li><a class="<?php if ($page == "Music") { echo "active"; } ?>" href="https://www.musiclaps.com/play?m=rs&show=all&svv=new">Music</a></li>
					<li><a class="<?php if ($page == "People") { echo "active"; } ?>" href="#">People</a></li>
					<li><a class="<?php if ($page == "Our Story") { echo "active"; } ?>" href="https://www.musiclaps.com/play?about=us">Our Story</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a id="loginJS">Log in</a></li>
					<li><a id="registerJS">Register</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Register modal -->
	<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="registerLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span>
						<span class="sr-only">Close</span>
					</button>
					<h2 class="modal-title register-modal-heading" id="registerLabel">Register</h2>
				</div>

				<?php
					include(ROOT_PATH . 'include/social-network-login-modal.php');
				?>
				
				<div class="modal-footer" id="register-modal-footer">
					<input id="registerWithEmail" type="submit" value="Register with Email">
			    </div>

			</div>
		</div>
	</div>
	<!-- End of register modal -->

	<!-- Email registration modal -->
	<div class="modal fade" id="emailRegistration" tabindex="-1" role="dialog" aria-labelledby="emailRegistrationLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span>
						<span class="sr-only">Close</span>
					</button>
					<h2 class="modal-title email-registration-modal-heading" id="emailRegistrationLabel">Email Registration</h2>
				</div>
				
				<div class="modal-body" id="register-modal-body">
					<form>
						<div>
							<label for="first_name"><span class="musiclaps-blue">*</span> First Name</label>
							<input id="first_name" type="text" name="first_name">
						</div>
						<div>
							<label for="last_name"><span class="musiclaps-blue">*</span> Last Name</label>
							<input id="last_name" type="text" name="last_name">
						</div>
						<div>
							<label for="email"><span class="musiclaps-blue">*</span> Email Address</label>
							<input id="email" type="email" name="email">
						</div>
						<div>
							<label for="username"><span class="musiclaps-blue">*</span> Username</label>
							<input id="username" type="username" name="username">
						</div>
						<div>
							<label for="password"><span class="musiclaps-blue">*</span> Password</label>
							<input id="password" type="text" name="password">
						</div>
						<div>
							<label for="confirm_password"><span class="musiclaps-blue">*</span> Confirm Password</label>
							<input id="confirm_password" type="text" name="confirm_password">
						</div>
					</form>
				</div>
				
				<form>
					<div class="modal-footer" id="email-registration-modal-footer">
						<input type="submit" value="Register">
				    </div>
				</form>

			</div>
		</div>
	</div>
	<!-- End of email registration modal -->

	<!-- Login modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span>
						<span class="sr-only">Close</span>
					</button>
					<h2 class="modal-title login-modal-heading" id="loginLabel">Log in</h2>
				</div>

				<?php
					include(ROOT_PATH . 'include/social-network-login-modal.php');
				?>

				<form action="login.php" method="post">
					<div class="modal-body" id="login-modal-body">
						<input id="userid" type="text" name="userid" placeholder="Username">
						<input id="password" type="text" name="password" placeholder="Password">
						<div class="error-message">	
							<?= (! empty($_SESSION['login_error']) ? $_SESSION['login_error'] : '' ) ?>
						</div>
					</div>
					<div class="modal-footer">
						<a>Forgot Password</a>
						<input type="submit" value="Log in">
				    </div>
				</form>

			</div>
		</div>
	</div>
	<!-- End of login modal -->