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
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>css/main.css">
	<title>Musiclaps | <?php echo $pageTitle; ?></title>
	<!-- [if lt IE 9]> -->
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <!-- [endif] -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="<?php echo BASE_URL; ?>js/customized.bootstrap.min.js"></script>
	<script src="<?php echo BASE_URL; ?>js/index.js"></script>
	<script src="<?php echo BASE_URL; ?>js/wmuSlider.min.js"></script>
	<script src="<?php echo BASE_URL; ?>js/header.js"></script>
	<script src="<?php echo BASE_URL; ?>js/live-player.js"></script>
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
					<img src="<?php echo BASE_URL; ?>img/nav-and-footer/musiclaps-logo.png" alt="Musiclaps logo">
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
					<h2 class="modal-title register-modal-header" id="registerLabel">Register</h2>
				</div>
				<div class="modal-body" id="register-modal-body">
					<form>
						<div>
							<label for="first_name">First Name</label>
							<input id="first_name" type="text" name="first_name" tabindex="1">
						</div>
						<div>
							<label for="last_name">Last Name</label>
							<input id="last_name" type="text" name="last_name" tabindex="2">
						</div>
						<div>
							<label for="email">Email Address</label>
							<input type="email" id="email" name="email" tabindex="3">
						</div>
						<div>
							<label for="password">Password</label>
							<input id="password" type="text" name="password" tabindex="4">
						</div>
						<div>
							<label for="confirm_password">Confirm Password</label>
							<input id="confirm_password" type="text" name="confirm_password" tabindex="5">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- End of register modal -->

	<!-- Login modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span>
						<span class="sr-only">Close</span>
					</button>
					<h2 class="modal-title login-modal-header" id="loginLabel">Log in</h2>
				</div>

				<!-- Visible at viewport widths >= 768px -->
				<div class="modal-body" id="sn-login-modal-body">
					<h4>Login using:</h4>
					<ul>
						<!-- TODO: Edit markup for functional login -->
						<li><a><img id="facebook-icon" src="<?php echo BASE_URL; ?>img/nav-and-footer/facebook-icon.png" alt="Facebook icon"></a></li>
						<li><a><img id="twitter-icon" src="<?php echo BASE_URL; ?>img/nav-and-footer/twitter-icon.png" alt="Twitter icon"></a></li>
						<li><a><img id="google-icon" src="<?php echo BASE_URL; ?>img/nav-and-footer/google-icon.jpg" alt="Google icon"></a></li>
						<li><a><img id="microsoft-icon" src="<?php echo BASE_URL; ?>img/nav-and-footer/microsoft-icon.jpg" alt="Microsoft icon"></a></li>
					</ul>
				</div>

				<!-- TODO: Make this look better at viewport widths closer to 767px  -->
				<!-- Visible at viewport widths <= 767px -->
				<div class="modal-body" id="sn-login-modal-body-sm">
					<ul>
						<!-- TODO: Edit markup for functional login -->
						<li class="first-list-item"><form><img id="facebook-icon" src="<?php echo BASE_URL; ?>img/nav-and-footer/facebook-icon.png" alt="Facebook icon"><input type="submit" value="Log in with Facebook"></form></li>
						<li><form><img id="twitter-icon" src="<?php echo BASE_URL; ?>img/nav-and-footer/twitter-icon.png" alt="Twitter icon"><input type="submit" value="Log in with Twitter"></form></li>
						<li><form><img id="google-icon" src="<?php echo BASE_URL; ?>img/nav-and-footer/google-icon.jpg" alt="Google icon"><input type="submit" value="Log in with Google"></form></li>
						<li><form><img id="microsoft-icon" src="<?php echo BASE_URL; ?>img/nav-and-footer/microsoft-icon.jpg" alt="Microsoft icon"><input type="submit" value="Log in with Microsoft"></form></li>
					</ul>
				</div>

				<form>
					<div class="modal-body" id="login-modal-body">
							<input type="email" id="email" name="email" placeholder="Email Address" label="Email Address">
							<input id="password" type="text" name="password" placeholder="Password">
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

<?php
	$date = date_default_timezone_set('America/Los_Angeles'); // Required to use PHP date() function
?>
