	<div id="wrapper">
		<div class="container">
			
			<nav class="row col-lg-10 col-lg-offset-1">
				<span class="glyphicon glyphicon-user glyphiconUser"></span>
	            <h4 class="user-menu userMenu">User Menu</h4>
				<ul class="nav navbar-nav user-menu userMenu">
					<li class="first-list-item">
						<a class="<?php if ($page == "My Profile") { echo "active"; } ?>" href="<?php echo BASE_URL; ?>profile/">My Profile</a>
					</li>
					<li id="new-project">
						<a class="<?php if ($page == "Recording Player" ) { echo "active"; } ?> <?php if ($page == "Upload MP3") { echo "active"; } ?>" id="newProjectLink">New Project
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu" id="newProjectDropdownMenu" aria-labelledby="newProjectDropdownMenu">
							<li class="dropdown-menu-list-item"><a class="dropdown-menu-link <?php if ($page == "Recording Player") { echo "active"; } ?>" id="recordingPlayerLink">Recording Player</a></li>
							<li class="dropdown-menu-list-item"><a class="dropdown-menu-link <?php if ($page == "Upload MP3") { echo "active"; } ?>" id="uploadMP3Link">Upload MP3</a></li>
						</ul>
					</li>
					<li id="my-projects">
						<a class="<?php if ($page == "My Projects") { echo "active"; } ?>" href="<?php echo BASE_URL; ?>profile/my-projects.php">My Projects
							<span class="caret"></span>
						</a>
					</li>
					<li id="collaborations">
						<a class="<?php if ($page == "Collaborations") { echo "active"; } ?>" href="<?php echo BASE_URL; ?>profile/collaborations.php">Collaborations
							<span class="caret"></span>
						</a>
					</li>
					<li>
						<a class="<?php if ($page == "YouTube") { echo "active"; } ?>" href="<?php echo BASE_URL; ?>profile/youtube.php">YouTube</a>
					</li>
					<li>
						<a class="<?php if ($page == "Messages") { echo "active"; } ?>" href="<?php echo BASE_URL; ?>profile/messages.php">Messages</a>
					</li>
					<li>
						<a class="<?php if ($page == "Groups") { echo "active"; } ?>" href="<?php echo BASE_URL; ?>profile/groups.php">Groups</a>
					</li>
					<li>
						<a class="<?php if ($page == "Favorites") { echo "active"; } ?>" href="<?php echo BASE_URL; ?>profile/favorites.php">Favorites</a>
					</li>
				</ul>
			</nav>
			<div class="col-lg-1"></div>