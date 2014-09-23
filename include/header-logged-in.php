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
	<script src="<?php echo BASE_URL; ?>assets/javascripts/profile/nav.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/javascripts/profile/index.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/javascripts/profile/new-project.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/javascripts/profile/projects-and-collabs.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/javascripts/profile/youtube.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/javascripts/profile/messages.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/javascripts/profile/groups.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/javascripts/profile/public-project.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/javascripts/profile/public-profile.js"></script>
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
	            <h4 data-toggle="collapse" data-target=".navbar-collapse">Menu</h4>
				<a class="navbar-brand" href="<?php echo BASE_URL; ?>index-logged-in.php">
					<img src="<?php echo BASE_URL; ?>assets/images/nav-and-footer/musiclaps-logo.png" alt="Musiclaps logo">
				</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-left">
					<li>
						<div class="dropdown">
							<a class="dropdown-toggle" id="musicDropdownMenu" data-toggle="dropdown">Music
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="musicDropdownMenu">
								<li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo BASE_URL; ?>new-arrivals/index-logged-in.php">New Arrivals</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo BASE_URL; ?>recommended/index-logged-in.php">Recommended</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo BASE_URL; ?>staff-picks/index-logged-in.php">Staff Picks</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo BASE_URL; ?>collaborations/index-logged-in.php">Collaborations</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo BASE_URL; ?>all-music/index-logged-in.php">All Music</a></li>
							</ul>
						</div>
					</li>
					<li>
						<div class="dropdown">
							<a class="dropdown-toggle" id="peopleDropdownMenu" data-toggle="dropdown">People
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="peopleDropdownMenu">
								<li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo BASE_URL; ?>players-wanted/index-logged-in.php">Players Wanted</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo BASE_URL; ?>under-construction-logged-in.php">Players Available</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo BASE_URL; ?>under-construction-logged-in.php">Collab Cafe</a></li>
							</ul>
						</div>
					</li>
					<li>
						<div class="dropdown">
							<a class="dropdown-toggle" id="ourStoryDropdownMenu" data-toggle="dropdown">Our Story
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="ourStoryDropdownMenu">
								<li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo BASE_URL; ?>under-construction-logged-in.php">Technology</a></li>
								<!-- <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo BASE_URL; ?>forum/index-logged-in.php">FAQs (Forum)</a></li> -->
								<li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo BASE_URL; ?>under-construction-logged-in.php">Company</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo BASE_URL; ?>under-construction-logged-in.php">Contact</a></li>
							</ul>
						</div>
					</li>
				</ul>

				<input id="search" type="text" name="search" placeholder="Search"><span class="glyphicon glyphicon-search"></span>
				
				<ul id="flags">
					<li><a><img id="usa-flag" src="<?php echo BASE_URL; ?>assets/images/nav-and-footer/usa-flag.jpg" alt="American flag"></a></li>
					<li><a><img src="<?php echo BASE_URL; ?>assets/images/nav-and-footer/japan-flag.jpg" alt="Japanese flag"></a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right" id="logged-in">
					<li id="welcome-user">Welcome &nbsp;<span class="musiclaps-blue"><a id="welcome-user-link" href="<?php echo BASE_URL; ?>profile/index.php">$firstname</a></span></li><!-- Hard-coded placeholder -->
					<li>
						<form action="<?php echo BASE_URL; ?>/logout.php" method="post">
							<input type="submit" value="Log out">
						</form>
					</li>
				</ul>
			</div>
		</div>
	</nav>
