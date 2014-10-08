	<div id="wrapper">
		<div class="container">
			
			<nav class="row col-lg-10 col-lg-offset-1">
				<span class="glyphicon glyphicon-user glyphiconUser"></span>
	            <h4 class="user-menu userMenu">User Menu</h4>
				<ul class="nav navbar-nav user-menu userMenu">
					<li class="first-list-item">
						<a class="
							<?php 
								if ($page_title == "My Profile") { 
									echo "active"; 
								} 
							?>" href="<?php echo BASE_URL; ?>profile/">My Profile
						</a>
					</li>
					
					<li id="new-project">
						<a class="
							<?php 
								if ($page_title == "Recording Player" ) { 
									echo "active"; 
								} else if ($page_title == "Upload MP3") { 
									echo "active"; } 
							?>" id="newProjectLink">New Project<span class="caret" id="newProjectCaret"></span>
						</a>
						<ul class="dropdown-menu" id="newProjectDropdownMenu" aria-labelledby="newProjectDropdownMenu">
							<li class="dropdown-menu-list-item">
								<a class="dropdown-menu-link 
									<?php 
										if ($page_title == "Recording Player") { 
											echo "active"; 
										} 
									?>" id="recordingPlayerLink">Recording Player
								</a>
							</li>
							<li class="dropdown-menu-list-item">
								<a class="dropdown-menu-link 
									<?php 
										if ($page_title == "Upload MP3") { 
											echo "active"; 
										} 
									?>" id="uploadMP3Link">Upload MP3
								</a>
							</li>
						</ul>
					</li>
					
					<li id="my-projects">
						<a class="
							<?php 
								if ($page_title == "In Progress/Private Projects") { 
									echo "active"; 
								} else if ($page_title == "Public Projects") { 
									echo "active"; 
								} else if ($page_title == "Group Projects") { 
									echo "active"; 
								} else if ($page_title == "Audition Projects") { 
									echo "active"; 
								} else if ($page_title == "Lyrics") { 
									echo "active"; 
								} 
							?>" id="myProjectsLink">My Projects<span class="caret" id="myProjectsCaret"></span>
						</a>
						<ul class="dropdown-menu" id="myProjectsDropdownMenu" aria-labelledby="myProjectsDropdownMenu">
							<li class="dropdown-menu-list-item">
								<a class="dropdown-menu-link 
									<?php 
										if ($page_title == "In Progress/Private Projects") { 
											echo "active"; 
										} 
									?>" id="inProgressPrivateLink">In Progress / Private
								</a>
							</li>
							<li class="dropdown-menu-list-item">
								<a class="dropdown-menu-link 
									<?php 
										if ($page_title == "Public Projects") { 
											echo "active"; 
										} 
									?>" id="publicLink">Public
								</a>
							</li>
							<li class="dropdown-menu-list-item">
								<a class="dropdown-menu-link 
									<?php 
										if ($page_title == "Group Projects") { 
											echo "active"; 
										} 
									?>" id="groupLink">Group
								</a>
							</li>
							<li class="dropdown-menu-list-item">
								<a class="dropdown-menu-link 
									<?php 
										if ($page_title == "Audition Projects") { 
											echo "active"; 
										} 
									?>" id="auditionLink">Audition
								</a>
							</li>
							<li class="dropdown-menu-list-item">
								<a class="dropdown-menu-link 
									<?php 
										if ($page_title == "Lyrics") { 
											echo "active"; 
										} 
									?>" id="lyricsLink">Lyrics
								</a>
							</li>
						</ul>
					</li>
					
					<li id="collaborations">
						<a class="
							<?php 
								if ($page_title == "Open Collab Projects") { 
									echo "active"; 
								} else if ($page_title == "Requesting Collab Projects") { 
									echo "active"; 
								} else if ($page_title == "Collaborators") { 
									echo "active"; 
								} 
							?>" id="collaborationsLink">Collaborations<span class="caret" id="collaborationsCaret"></span>
						</a>
						<ul class="dropdown-menu" id="collaborationsDropdownMenu" aria-labelledby="collaborationsDropdownMenu">
							<li class="dropdown-menu-list-item">
								<a class="dropdown-menu-link 
									<?php 
										if ($page_title == "Open Collab Projects") { 
											echo "active"; 
										} 
									?>" id="openCollabLink">Open Collab
								</a>
							</li>
							<li class="dropdown-menu-list-item">
								<a class="dropdown-menu-link 
									<?php 
										if ($page_title == "Requesting Collab Projects") { 
											echo "active"; 
										} 
									?>" id="requestingCollabLink">Requesting Collab
								</a>
							</li>
							<li class="dropdown-menu-list-item">
								<a class="dropdown-menu-link 
									<?php 
										if ($page_title == "Collaborators") { 
											echo "active"; 
										} 
									?>" id="collaboratorsLink">Collaborators
								</a>
							</li>
						</ul>
					</li>
					
					<li>
						<a class="
							<?php 
								if ($page_title == "YouTube") { 
									echo "active"; 
								} 
							?>" href="<?php echo BASE_URL; ?>profile/youtube.php">YouTube
						</a>
					</li>
					
					<li>
						<a class="
							<?php 
								if ($page_title == "Messages") { 
									echo "active"; 
								} 
							?>" href="<?php echo BASE_URL; ?>profile/messages.php">Messages
						</a>
					</li>
					
					<li>
						<a class="
							<?php 
								if ($page_title == "Groups") { 
									echo "active"; 
								} 
							?>" href="<?php echo BASE_URL; ?>profile/groups.php">Groups
						</a>
					</li>
					
					<li>
						<a class="
							<?php 
								if ($page_title == "Favorites") { 
									echo "active"; 
								} 
							?>" href="<?php echo BASE_URL; ?>profile/favorites.php">Favorites
						</a>
					</li>
				</ul>
			</nav>
			<div class="col-lg-1"></div>