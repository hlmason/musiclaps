			<nav class="row col-lg-10 col-lg-offset-1">
				<span class="glyphicon glyphicon-user glyphiconUser"></span>
				<h4 class="user-menu userMenu">User Menu</h4>
				<ul class="nav navbar-nav user-menu userMenu">
					<li class="first-list-item">
						<a class=
							"<?php 
								if ($page_title == "Userid") { 
									echo "active"; 
								} 
							?>" href="<?php echo BASE_URL; ?>views/profile/public-profile-logged-in.php">Profile
						</a>
					</li>
					<li>
						<a class="
							<?php 
								if ($page_title == "My Collaborations") { 
									echo "active"; 
								} 
							?>" href="<?php echo BASE_URL; ?>views/profile/public-collaborations-logged-in.php">Collaborations
						</a>
					</li>
					<li>
						<a class="
							<?php 
								if ($page_title == "My Friends") { 
									echo "active"; 
								} 
							?>" href="<?php echo BASE_URL; ?>views/profile/friends-logged-in.php">Friends
						</a>
					</li>
				</ul>
			</nav>
			<div class="col-lg-1"></div>