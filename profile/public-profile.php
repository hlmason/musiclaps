<?php
	require_once('../include/config.php');

	$pageTitle = 'Profile';
	
	include(ROOT_PATH . 'include/header.php');
	include(ROOT_PATH . 'include/db-connection.php');
	include(ROOT_PATH . 'controllers/get-profile.php');

?>

	<div id="wrapper">
		<div class="container">
			
			<nav class="row col-lg-10 col-lg-offset-1">
				<span class="glyphicon glyphicon-user glyphiconUser"></span>
				<h4 class="user-menu userMenu">User Menu</h4>
				<ul class="nav navbar-nav user-menu userMenu">
					<li class="first-list-item" id="profileLink">
						<a class="white" id="publicProfileLink" href="#">Profile</a>
					</li>
					<li>
						<a class="white-button-navigate-hover-js" id="collaborationsLink" href="#">Collaborations</a>
					</li>
					<li>
						<a class="white-button-navigate-hover-js" id="friendsLink" href="#">Friends</a>
					</li>
				</ul>
			</nav>
			<div class="col-lg-1"></div>
		
			<div class="row col-lg-10 col-lg-offset-1">				
					
				<div class="row col-xs-12 col-sm-8 profile-page">

					<div class="row" id="avatar-n-edit-profile">	
						<div class="col-xs-4 col-sm-3">
							<img class="avatar" src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user"><!-- Hard-coded placeholder -->
						</div>
						<div class="col-xs-8 col-sm-4">
							<h2 id="user-id">$userid</h2><!-- Hard-coded placeholder -->
						</div>
					</div>
						
					<div class="row">
						<div class="col-sm-3"></div>
						<div class="col-xs-12 col-sm-8" id="about-me">
							<h4>About me:</h4>
							<ul class="first-ul-profile-page">
								<li class="profile-page"><span class="glyphicon glyphicon-user"></span>&nbsp; $gender</li><!-- Hard-coded placeholder -->
								<li class="profile-page" id="glyphicon-home"><span class="glyphicon glyphicon-home"></span>&nbsp; $website</li><!-- Hard-coded placeholder -->
							</ul>
							<ul class="second-ul-profile-page">
								<li class="profile-page"><span class="glyphicon glyphicon-globe"></span>&nbsp; $city, $state, $country</li><!-- Hard-coded placeholder -->
							</ul>
						</div>
						<div class="col-sm-1"></div>
					</div>

					<!-- "Projects" -->
					<section id="publicProjects">
						<div class="row col-xs-12 public-projects-and-collaborations-container">
							
							<h4 class="my-public-projects-heading">Projects <span class="normal">($number)</span></h4><!-- Hard-coded placeholder / Note that this says "My Public Projects" on public-profile-logged-in.php -->

							<?php
								include(ROOT_PATH . 'include/profile/public-projects-and-collaborations.php');
							?>
					<!-- End of "Projects" -->


					<!-- "Collaborations" -->
					<section id="collaborationsJS">
						<div class="row col-xs-12 public-projects-and-collaborations-container">
							
							<h4 class="my-public-projects-heading">Collaborations <span class="normal">($number)</span></h4><!-- Hard-coded placeholder / Note that this says "My Collaborations" on public-profile-logged-in.php -->
						
							<?php
								include(ROOT_PATH . 'include/profile/public-projects-and-collaborations.php');
							?>
					<!-- End of "Collaborations" -->

				</div>		
				<div class="row col-xs-12 col-sm-4 profile-right-container">
					<section class="profile-right profile-page public-profile-page"><!-- profile/index.php does not contain the class name "public-profile-page" -->
						
						<div class="row first-row">
							<div class="col-xs-7 col-offset-xs-1">
								<h2>$#</h2><!-- Hard-coded placeholder -->
								<h5>listeners?</h5>
							</div>
							<div class="col-xs-3">
								<h2>$#</h2><!-- Hard-coded placeholder -->
								<h5>claps</h5>
							</div>
							<div class="col-xs-1"></div>
						</div>

						<div class="row col-xs-12" id="user-location-map-container">
							<h4>Location: </h4>
							<div id="user-location-map"></div><!-- Placeholder -->
						</div>

						<div class="row col-xs-12">
							<h4>Member since: </h4>
							<h5>$date joined</h5><!-- Hard-coded placeholder -->
						</div>

						<div class="row col-xs-12">
							<h4>Favorite Artists: </h4>
							<h5>$artists</h5><!-- Hard-coded placeholder -->
						</div>

						<div class="row col-xs-12">
							<h4>Favorite Songs: </h4>
							<h5>$songs</h5><!-- Hard-coded placeholder -->
						</div>

						<div class="row col-xs-12">
							<h4>Genre(s): </h4>
							<h5>$genre(s)</h5><!-- Hard-coded placeholder -->
						</div>

						<div class="row col-xs-12">
							<h4>Skill(s): </h4>
							<h5>$skill(s)</h5><!-- Hard-coded placeholder -->
						</div>

						<div class="row col-xs-12 last-row">
							<h4>Message: </h4>
							<h5>$message to other musicians</h5><!-- Hard-coded placeholder -->
						</div>

					</section>
				</div>	
			</div>
			<div class="col-lg-1"></div>	
		
		</div>

	<?php
		include(ROOT_PATH . 'include/footer-logged-in.php');
	?>