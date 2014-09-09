	<div id="wrapper">
		<div class="container">
			
			<nav class="row col-lg-10 col-lg-offset-1" id="nav-registered-user">
				<ul class="nav navbar-nav">
					<li><a class="<?php if ($page == "Profile") { echo "active"; } ?>" href="<?php echo BASE_URL; ?>profile/">Profile</a></li>
					<li><a class="<?php if ($page == "New Project") { echo "active"; } ?>" href="<?php echo BASE_URL; ?>profile/new-project.php">New Project</a></li>
					<li><a class="<?php if ($page == "Projects") { echo "active"; } ?>" href="<?php echo BASE_URL; ?>profile/projects.php">Projects</a></li>
					<li><a class="<?php if ($page == "Collaborations") { echo "active"; } ?>" href="<?php echo BASE_URL; ?>profile/collaborations.php">Collaborations</a></li>
					<li><a class="<?php if ($page == "YouTube") { echo "active"; } ?>" href="#">YouTube</a></li>
					<li><a class="<?php if ($page == "Messages") { echo "active"; } ?>" href="<?php echo BASE_URL; ?>profile/messages.php">Messages</a></li>
					<li><a class="<?php if ($page == "Groups") { echo "active"; } ?>" href="<?php echo BASE_URL; ?>profile/groups.php">Groups</a></li>
					<li><a class="<?php if ($page == "Favorites") { echo "active"; } ?>" href="<?php echo BASE_URL; ?>profile/favorites.php">Favorites</a></li>
				</ul>
			</nav>
			<div class="col-lg-1"></div>