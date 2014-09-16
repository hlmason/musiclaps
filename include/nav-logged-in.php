	<div id="wrapper">
		<div class="container">
			
			<nav class="row col-lg-10 col-lg-offset-1">
				<ul class="nav navbar-nav" id="nav-logged-in">
					<li class="first-list-item">
						<a class="<?php if ($page == "My Profile") { echo "active"; } ?>" href="<?php echo BASE_URL; ?>profile/">My Profile</a>
					</li>
					
					<li id="second-list-item">
						<a class="<?php if ($page == "New Project") { echo "active"; } ?>" href="<?php echo BASE_URL; ?>profile/new-project.php">New Project</a>
					</li>
					
					<li>
						<a class="<?php if ($page == "My Projects") { echo "active"; } ?>" href="<?php echo BASE_URL; ?>profile/my-projects.php">My Projects</a>
					</li>
					
					<li>
						<a class="<?php if ($page == "Collaborations") { echo "active"; } ?>" href="<?php echo BASE_URL; ?>profile/collaborations.php">Collaborations</a>
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
					
					<li id="last-list-item">
						<a class="<?php if ($page == "Favorites") { echo "active"; } ?>" href="<?php echo BASE_URL; ?>profile/favorites.php">Favorites</a>
					</li>
				</ul>
			</nav>
			<div class="col-lg-1"></div>