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
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>walkthrough/assets/css/tutorial.css"><!-- Julie's Captivate -->
	<title>Musiclaps | <?php echo $page_title; ?></title>
	<!-- [if lt IE 9]> -->
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <!-- [endif] -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/javascripts/customized.bootstrap.min.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/javascripts/index.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/javascripts/modal.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/javascripts/wmuSlider.min.js"></script>
	<script src="<?php echo BASE_URL; ?>walkthrough/assets/js/standard.js"></script><!-- Julie's Captivate -->
	<script src="<?php echo BASE_URL; ?>assets/javascripts/public-project.js"></script>
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
				<a class="navbar-brand" href="<?php echo BASE_URL; ?>">
					<img src="<?php echo BASE_URL; ?>assets/images/header-and-footer/musiclaps-logo.png" alt="Musiclaps logo">
				</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-left">
					<li>
						<div class="dropdown">
							<a class="dropdown-toggle 
								<?php 
									if ($page_title == "New Arrivals") { 
										echo "active"; 
									} else if ($page_title == "Recommended") { 
										echo "active"; 
									} else if ($page_title == "Staff Picks") { 
										echo "active"; 
									} else if ($page_title == "Collaborations") { 
										echo "active"; 
									} else if ($page_title == "All Music") { 
										echo "active"; 
									} 
								?>" id="musicDropdownLink" data-toggle="dropdown">Music<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" id="musicDropdownMenu" role="menu" aria-labelledby="musicDropdownLink">
								<li role="presentation">
									<a class="
										<?php 
											if ($page_title == "New Arrivals") { 
												echo "active"; 
											} 
										?>" role="menuitem" tabindex="-1" href="<?php echo BASE_URL; ?>views/new-arrivals/">New Arrivals
									</a>
								</li>
								<li role="presentation">
									<a class="
										<?php 
											if ($page_title == "Recommended") { 
												echo "active"; 
											} 
										?>" role="menuitem" tabindex="-1" href="<?php echo BASE_URL; ?>views/recommended/">Recommended
									</a>
								</li>
								<li role="presentation">
									<a class="
										<?php 
											if ($page_title == "Staff Picks") { 
												echo "active"; 
											} 
										?>" role="menuitem" tabindex="-1" href="<?php echo BASE_URL; ?>views/staff-picks/">Staff Picks
									</a>
								</li>
								<li role="presentation">
									<a class="
										<?php 
											if ($page_title == "Collaborations") { 
												echo "active"; 
											} 
										?>" role="menuitem" tabindex="-1" href="<?php echo BASE_URL; ?>views/collaborations/">Collaborations
									</a>
								</li>
								<li role="presentation">
									<a class="
										<?php 
											if ($page_title == "All Music") { 
												echo "active"; 
											} 
										?>" role="menuitem" tabindex="-1" href="<?php echo BASE_URL; ?>views/all-music/">All Music
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li>
						<div class="dropdown">
							<a class="dropdown-toggle
								<?php 
									if ($page_title == "Players Wanted") { 
										echo "active"; 
									} else if ($page_title == "Players Available") { 
										echo "active"; 
									} else if ($page_title == "Collab Cafe") { 
										echo "active";
									}
								?>" id="peopleDropdownLink" data-toggle="dropdown">People<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" id="peopleDropdownMenu" role="menu" aria-labelledby="peopleDropdownLink">
								<li role="presentation">
									<a class="
										<?php 
											if ($page_title == "Players Wanted") { 
												echo "active"; 
											} 
										?>" role="menuitem" tabindex="-1" href="<?php echo BASE_URL; ?>views/players-wanted/">Players Wanted
									</a>
								</li>
								<li role="presentation">
									<a class="
										<?php 
											if ($page_title == "Players Available") { 
												echo "active"; 
											} 
										?>" role="menuitem" tabindex="-1" href="<?php echo BASE_URL; ?>views/under-construction/">Players Available
									</a>
								</li>
								<li role="presentation">
									<a class="
										<?php 
											if ($page_title == "Collab Cafe") { 
												echo "active"; 
											} 
										?>" role="menuitem" tabindex="-1" href="<?php echo BASE_URL; ?>views/under-construction/">Collab Cafe
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li>
						<div class="dropdown">
							<a class="dropdown-toggle
								<?php 
									if ($page_title == "Technology") { 
										echo "active"; 
									} else if ($page_title == "Company") { 
										echo "active"; 
									} else if ($page_title == "Contact") { 
										echo "active";
									}
								?>" id="ourStoryDropdownLink" data-toggle="dropdown">Our Story<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" id="ourStoryDropdownMenu" role="menu" aria-labelledby="ourStoryDropdownLink">
								<li role="presentation">
									<a class="
										<?php if ($page_title == "Technology") { 
											echo "active"; } 
										?>" role="menuitem" tabindex="-1" href="<?php echo BASE_URL; ?>views/under-construction/">Technology
									</a>
								</li>
								<!-- <li role="presentation">
									<a class="
										<?php if ($page_title == "FAQs (Forum)") { 
												echo "active"; 
											} 
										?>" role="menuitem" tabindex="-1" href="<?php echo BASE_URL; ?>forum">FAQs (Forum)
									</a>
								</li> -->
								<li role="presentation">
									<a class="
										<?php if ($page_title == "Company") { 
												echo "active"; 
											} 
										?>" role="menuitem" tabindex="-1" href="<?php echo BASE_URL; ?>views/under-construction/">Company
									</a>
								</li>
								<li role="presentation">
									<a class="
										<?php 
											if ($page_title == "Contact") { 
												echo "active"; 
											} 
										?>" role="menuitem" tabindex="-1" href="<?php echo BASE_URL; ?>views/under-construction/">Contact
									</a>
								</li>
							</ul>
						</div>
					</li>
				</ul>

				<form class="search" action="<?php echo BASE_URL; ?>controllers/header-controller.php" method="get">
					<span class="glyphicon glyphicon-search" id="glyphiconSearch"></span><input class="search" id="searchJS" type="text" name="search" placeholder="Search">
				</form>
				
				<ul id="flags">
					<li><a><img id="usa-flag" src="<?php echo BASE_URL; ?>assets/images/header-and-footer/usa-flag.jpg" alt="American flag"></a></li>
					<li><a><img src="<?php echo BASE_URL; ?>assets/images/header-and-footer/japan-flag.jpg" alt="Japanese flag"></a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right" id="logged-out">
					<li><a class="loginJS">Log in</a></li>
					<li><a class="registerJS">Register</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Register modal -->
	<?php
		include(ROOT_PATH . 'views/include/modals/register.php');
	?>
	<!-- End of register modal -->


	<!-- Email registration modal -->
	<?php
		include(ROOT_PATH . 'views/include/modals/registration-full.php');
	?>
	<!-- End of email registration modal -->


	<!-- Login modal -->
	<?php
		include(ROOT_PATH . 'views/include/modals/login.php');
	?>
	<!-- End of login modal -->