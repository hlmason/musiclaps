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
					<img src="<?php echo BASE_URL; ?>img/nav-and-footer/musiclaps-logo-original-darker.png" alt="Musiclaps logo">
				</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-left">
					<li><a class="<?php if ($page == "Music") { echo "active"; } ?>" href="https://www.musiclaps.com/play?m=rs&show=all&svv=new">Music</a></li>
					<li><a class="<?php if ($page == "People") { echo "active"; } ?>" href="#">People</a></li>
					<li><a class="<?php if ($page == "Our Story") { echo "active"; } ?>" href="https://www.musiclaps.com/play?about=us">Our Story</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="https://www.musiclaps.com/play?login=user">Log in</a></li>
					<li><a href="https://www.musiclaps.com/play?join=new&60BD52EBC3673E6C5196F3E1">Register</a></li>
				</ul>
			</div>
		</div>
	</nav>
