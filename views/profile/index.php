<?php
	require_once('../../controllers/require/config.php');

	$page_title = 'My Profile';
	
	include(ROOT_PATH . 'models/db-connection.php');
	include(ROOT_PATH . 'views/include/header-logged-in.php');
	include(ROOT_PATH . 'views/include/profile/user-menu.php');

?>
		
			<div class="row col-lg-10 col-lg-offset-1">				
					
				<div class="row col-xs-12 col-sm-8 profile-page">

					<div class="row" id="avatar-n-edit-profile">	
						<div class="col-xs-5 col-sm-3">
							<img class="avatar" src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user"><!-- Hard-coded placeholder -->
						</div>
						<div class="col-xs-7 col-sm-4">
							<h2 id="user-id">$userid</h2><!-- Hard-coded placeholder -->
						</div>
						<div class="col-xs-7 col-sm-5" id="edit-save-profile"><!-- views/profile/public-profile.php does not contain this part because it does not contain the form -->
							<a>
								<h4 class="edit-profile" id="editProfile"><span class="glyphicon glyphicon-edit"></span>&nbsp; Edit Profile</h4>
							</a>
							<form class="profile-page" action="<?php echo BASE_URL; ?>controllers/profile/index-controller.php" method="post">
								<h4 class="save-profile" id="saveProfile">
									<span class="glyphicon glyphicon-save"></span>
									<input type="submit" value="Save"> | &nbsp;
								</h4>
							</form>
							<a>
								<h4 class="dont-save-profile" id="dontSaveProfile">Don't Save &nbsp;<span class="glyphicon glyphicon-remove-circle"></span></h4>
							</a>
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

					<!-- "My Public Projects" -->
					<section id="myPublicProjects">
						<section class="row col-xs-12 public-projects-and-collaborations-container">
							
							<h4 class="my-public-projects-heading">My Public Projects <span class="normal">($number)</span></h4>

							<div class="row col-xs-12">
								
								<div class="row">
									<section class="col-xs-12 col-md-6 public-projects-and-collaborations">
										<div class="row col-xs-6 col-sm-4 col-md-6">
											<a href="<?php echo BASE_URL; ?>views/profile/public-project-logged-in.php"><img class="projectImg" src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="Project image"></a><!-- Hard-coded placeholder -->
										</div>
										<div class="row col-xs-6 col-sm-8 col-md-6">
											<a href="<?php echo BASE_URL; ?>views/profile/public-project-logged-in.php"><h4>$project title</h4></a><!-- Hard-coded placeholder -->
											<h5>$#### Plays</h5><!-- Hard-coded placeholder -->
										</div>
									</section>

									<section class="col-xs-12 col-md-6 public-projects-and-collaborations">
										<div class="row col-xs-6 col-sm-4 col-md-6">
											<a href="<?php echo BASE_URL; ?>views/profile/public-project-logged-in.php"><img class="projectImg" src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="Project image"></a><!-- Hard-coded placeholder -->
										</div>
										<div class="row col-xs-6 col-sm-8 col-md-6">
											<a href="<?php echo BASE_URL; ?>views/profile/public-project-logged-in.php"><h4>$project title</h4></a><!-- Hard-coded placeholder -->
											<h5>$#### Plays</h5><!-- Hard-coded placeholder -->
										</div>
									</section>
								</div>
							
							</div>

						</section>
					</section>
					<!-- End of "My Public Projects" -->


					<!-- "My Profile" --> <!-- views/profile/public-profile.php does not contain this section -->
					<section id="myProfile">
						<div class="row col-xs-12">

							<h4 id="my-profile">My Profile</h4>
							<div class="progress">
						  		<div class="progress-bar" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
						  			5% Complete
						  		</div><!-- Hard-coded placeholder -->
							</div>

							<form class="profile-page" action="<?php echo BASE_URL; ?>controllers/profile/index-controller.php" method="post">
								<div class="row">
									<div class="col-xs-12 col-lg-6">
										<label id="birth-date-label-profile" for="birth_date_profile_page">Birth Date</label>
										<select class="birth-date-field" id="birth_date_profile_page">
											<!-- Birth date form -->
										<?php
											include(ROOT_PATH . 'views/include/birth-date-form.php');
										?>
									<!-- End of birth date form -->
									<div class="col-xs-12 col-lg-6">
										<label for="zip">Zip/Postal Code</label>
										<input id="zip" type="text" name="zipcode">
									</div>
								</div>

								<div class="row">
									<div class="col-xs-12 col-lg-6">
										<label for="website_url">Website URL</label>
										<input class="website-url" id="website_url" type="text" name="website">
									</div>
									<div class="col-xs-12 col-lg-6">
										<label for="website_title">Website Title</label>
										<input class="website-url" id="website_title" type="text" name="site_title">
									</div>
								</div>

								<div class="row">
									<div class="col-xs-12 col-lg-6">
										<label for="fav_artists">Favorite Artists</label>
										<textarea id="fav_artists" name=""></textarea>
									</div>
									<div class="col-xs-12 col-lg-6">
										<label for="fav_songs">Favorite Songs</label>
										<textarea id="fav_songs" name=""></textarea>
									</div>
								</div>

								<div class="row">
									<div class="col-xs-12 col-lg-6">
										<label>Genre <span class="normal">(select one or more)</span></label>
										<div id="genre-form-profile">
											<!-- Genre form -->
											<?php
												include(ROOT_PATH . 'views/include/profile/genre-form.php');
											?>
										<!-- End of genre form -->
									</div>
									<div class="col-xs-12 col-lg-6">
										<label>Skills <span class="normal">(select one or more)</span></label>
										<div id="skills">
											<span><input type="checkbox" name="accordion">&nbsp; Accordion</span>
											<span><input type="checkbox" name="arrangement">&nbsp; Arrangement</span>
											<span><input type="checkbox" name="banjo">&nbsp; Banjo</span>
											<span><input type="checkbox" name="bass">&nbsp; Bass</span>
											<span><input type="checkbox" name="castanets">&nbsp; Castanets</span>
											<span><input type="checkbox" name="cello">&nbsp; Cello</span>
											<span><input type="checkbox" name="clarinet">&nbsp; Clarinet</span>
											<span><input type="checkbox" name="conga">&nbsp; Conga</span>
											<span><input type="checkbox" name="contrabass">&nbsp; Contrabass</span>
											<span><input type="checkbox" name="drums">&nbsp; Drums</span>
											<span><input type="checkbox" name="fiddle">&nbsp; Fiddle</span>
											<span><input type="checkbox" name="flute">&nbsp; Flute</span>
											<span><input type="checkbox" name="acoustic_guitar">&nbsp; Acoustic Guitar</span>
											<span><input type="checkbox" name="classical_guitar">&nbsp; Classical Guitar</span>
											<span><input type="checkbox" name="electric_guitar">&nbsp; Electric Guitar</span>
											<span><input type="checkbox" name="semi_acoustic_guitar">&nbsp; Semi-Acoustic Guitar</span>
											<span><input type="checkbox" name="harmonica">&nbsp; Harmonica</span>
											<span><input type="checkbox" name="harp">&nbsp; Harp</span>
											<span><input type="checkbox" name="horn">&nbsp; Horn</span>
											<span><input type="checkbox" name="keyboard">&nbsp; Keyboard</span>
											<span><input type="checkbox" name="lyrics">&nbsp; Lyrics</span>
											<span><input type="checkbox" name="mandolin">&nbsp; Mandolin</span>
											<span><input type="checkbox" name="maraca">&nbsp; Maraca</span>
											<span><input type="checkbox" name="marimba">&nbsp; Marimba</span>
											<span><input type="checkbox" name="metallophone">&nbsp; Metallophone</span>
											<span><input type="checkbox" name="oboe">&nbsp; Oboe</span>
											<span><input type="checkbox" name="ocarina">&nbsp; Ocarina</span>
											<span><input type="checkbox" name="organ">&nbsp; Organ</span>
											<span><input type="checkbox" name="percussion">&nbsp; Percussion</span>
											<span><input type="checkbox" name="piano">&nbsp; Piano</span>
											<span><input type="checkbox" name="piccolo">&nbsp; Piccolo</span>
											<span><input type="checkbox" name="recorder">&nbsp; Recorder</span>
											<span><input type="checkbox" name="alto_saxophone">&nbsp; Alto Saxophone</span>
											<span><input type="checkbox" name="baritone_saxophone">&nbsp; Baritone Saxophone</span>
											<span><input type="checkbox" name="soprano_saxophone">&nbsp; Soprano Saxophone</span>
											<span><input type="checkbox" name="tenor_saxophone">&nbsp; Tenor Saxophone</span>
											<span><input type="checkbox" name="shakuhachi">&nbsp; Shakuhachi</span>
											<span><input type="checkbox" name="shamisen">&nbsp; Shamisen</span>
											<span><input type="checkbox" name="tambourine">&nbsp; Tambourine</span>
											<span><input type="checkbox" name="timpani">&nbsp; Timpani</span>
											<span><input type="checkbox" name="triangle">&nbsp; Triangle</span>
											<span><input type="checkbox" name="trombone">&nbsp; Trombone</span>
											<span><input type="checkbox" name="trumpet">&nbsp; Trumpet</span>
											<span><input type="checkbox" name="ukulele">&nbsp; Ukulele</span>
											<span><input type="checkbox" name="viola">&nbsp; Viola</span>
											<span><input type="checkbox" name="violin">&nbsp; Violin</span>
											<span><input type="checkbox" name="vocals">&nbsp; Vocals</span>
											<span><input type="checkbox" name="wadaiko">&nbsp; Wadaiko</span>
											<span><input type="checkbox" name="xylophone">&nbsp; Xylophone</span>
											<span><input type="checkbox" name="other">&nbsp; Other</span>
										</div>
									</div>
								</div>

								<div>
									<label for="message">Message</label>
									<textarea id="message" name="message" placeholder="Your message to other musicians"></textarea>
								</div>

								<div class="row">
									<div class="col-xs-12 col-lg-6">
										<label for="change_username">Change Username</label>
										<input class="change-username" id="change_username" type="text" name="change_username">
									</div>
									<div class="col-xs-12 col-lg-6">
										<input id="change-password" type="submit" name="change_password" value="Change Password">
									</div>
								</div>

								<div id="choose-avatar-container">
									<label for="upload_avatar">Your Image</label>
									<div class="row col-xs-12">
										<div class="row">
											<div class="col-xs-6 col-sm-4">
												<img src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user"><!-- Hard-coded placeholder -->
											</div>
											<div class="col-xs-6 col-sm-8" id="upload-avatar">	
												<ul><!-- TODO: Edit markup for functional login and make this look better at viewport widths closer to 767px and 400px -->
													<li><span class="bold">Upload Your Image</span> (120 x 120 recommended)</li>
													<li><input type="file" name="choose_avatar_file" value="Choose File"></li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<div id="save-profile-container">
									<input id="save-profile" type="submit" name="save_profile" value="Save Profile">
								</div>
							</form>
							
						</div>
					</section>
					<!-- End of "My Profile" -->

				</div>		
				<div class="row col-xs-12 col-sm-4 profile-right-container">
					<section class="profile-right profile-page">
						
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

						<div class="row col-xs-12 user-location-map-container">
							<h4>Location: </h4>
							<div class="user-location-map"></div><!-- Placeholder -->
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
		include(ROOT_PATH . 'views/include/footer-logged-in.php');
	?>