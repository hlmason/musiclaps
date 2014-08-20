<?php
	require_once('../include/config.php');

	$pageTitle = 'My Profile';
	$page = 'Profile';
	
	include(ROOT_PATH . 'include/header-logged-in.php');
	include(ROOT_PATH . 'include/db-connection.php');
	include(ROOT_PATH . 'controllers/get-profile.php');

?>

	<div id="wrapper">
		<div class="container">			
			<div class="row col-lg-10 col-lg-offset-1">				
					
				<div class="row col-xs-12 col-sm-8">

					<div class="row">	
						<div class="col-xs-4 col-sm-3">
							<img id="avatar" src="<?php echo BASE_URL; ?>assets/images/profile-pg/female-avatar.png" alt="Placeholder for female Musiclaps user"><!-- Hard-coded placeholder -->
						</div>
						<div class="col-xs-8 col-sm-4">
							<h2 id="user-id">$userid</h2><!-- Hard-coded placeholder -->
						</div>
						<div class="col-xs-8 col-sm-5">
							<a><h4 class="edit-profile" id="editProfile"><span class="glyphicon glyphicon-edit"></span> Edit Profile</h4></a>
							<a><h4 class="save-profile" id="saveProfile"><span class="glyphicon glyphicon-save"></span> Save &nbsp;&nbsp;|&nbsp;&nbsp; </h4></a>
							<a><h4 class="dont-save-profile" id="dontSaveProfile"> Don't Save <span class="glyphicon glyphicon-remove-circle"></span></h4></a>
						</div>
					</div>
						
					<div class="row">
						<div class="col-sm-3"></div>
						<div class="col-xs-12 col-sm-8" id="about-me">
							<h4>About me:</h4>
							<ul class="first-ul-profile-page">
								<li class="profile-page"><span class="glyphicon glyphicon-user"></span>&nbsp; $gender</li><!-- Hard-coded placeholder -->
								<li class="profile-page pull-right"><span class="glyphicon glyphicon-home"></span>&nbsp; $website</li><!-- Hard-coded placeholder -->
							</ul>
							<ul class="second-ul-profile-page">
								<li class="profile-page"><span class="glyphicon glyphicon-globe"></span>&nbsp; $city, $state, $country</li><!-- Hard-coded placeholder -->
							</ul>	
						</div>
						<div class="col-sm-1"></div>
					</div>

					<section id="myProfile">
						<div class="row col-xs-12">
							<h4 id="my-profile">My Profile</h4>
							<div class="progress">
						  		<div class="progress-bar" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
						  			5% Complete
						  		</div><!-- Hard-coded placeholder -->
							</div>
						</div>

						<div class="row col-xs-10">
							<form class="profile-page">
								<div>
									<label id="birthdate-label" for="birthdate">Birth Date</label>
									<input id="birthdate" type="date" name="birthdate">
								</div>
							</form>
						</div>

						<div class="row col-xs-12">
							<form class="profile-page">
								<div>
									<label for="website_url">Website URL</label>
									<input id="website_url" type="text" name="website_url">
								</div>
							</form>
						</div>

						<div class="row col-xs-12">
							<form class="profile-page">
								<div>
									<label for="website_title">Website Title</label>
									<input id="website_title" type="text" name="website_title">
								</div>
							</form>
						</div>

						<div class="row col-xs-12">
							<form class="profile-page">
								<label for="genre">Genre (select one or more)</label>
								<div id="genre">
									<span><input type="checkbox" name="alternative">&nbsp; Alternative</span>
									<span><input type="checkbox" name="anime">&nbsp; Anime</span>
									<span><input type="checkbox" name="asian_pop">&nbsp; Asian Pop</span>
									<span><input type="checkbox" name="blues">&nbsp; Blues</span>
									<span><input type="checkbox" name="bossa_nova">&nbsp; Bossa Nova</span>
									<span><input type="checkbox" name="children">&nbsp; Children</span>
									<span><input type="checkbox" name="classical">&nbsp; Classical</span>
									<span><input type="checkbox" name="country">&nbsp; Country</span>
									<span><input type="checkbox" name="dance">&nbsp; Dance</span>
									<span><input type="checkbox" name="disco">&nbsp; Disco</span>
									<span><input type="checkbox" name="easy_listening">&nbsp; Easy Listening</span>
									<span><input type="checkbox" name="electronic">&nbsp; Electronic</span>
									<span><input type="checkbox" name="enka">&nbsp; Enka</span>
									<span><input type="checkbox" name="european">&nbsp; European</span>
									<span><input type="checkbox" name="folk">&nbsp; Folk</span>
									<span><input type="checkbox" name="funk">&nbsp; Funk</span>
									<span><input type="checkbox" name="fusion">&nbsp; Fusion</span>
									<span><input type="checkbox" name="gospel">&nbsp; Gospel</span>
									<span><input type="checkbox" name="hip_hop">&nbsp; Hip Hop</span>
									<span><input type="checkbox" name="indie_pop">&nbsp; Indie Pop</span>
									<span><input type="checkbox" name="jazz">&nbsp; Jazz</span>
									<span><input type="checkbox" name="latin">&nbsp; Latin</span>
									<span><input type="checkbox" name="new_age">&nbsp; New Age</span>
									<span><input type="checkbox" name="opera">&nbsp; Opera</span>
									<span><input type="checkbox" name="pop">&nbsp; Pop</span>
									<span><input type="checkbox" name="rnb">&nbsp; R&B</span>
									<span><input type="checkbox" name="rap">&nbsp; Rap</span>
									<span><input type="checkbox" name="reggae">&nbsp; Reggae</span>
									<span><input type="checkbox" name="rock">&nbsp; Rock</span>
									<span><input type="checkbox" name="samba">&nbsp; Samba</span>
									<span><input type="checkbox" name="soul">&nbsp; Soul</span>
									<span><input type="checkbox" name="techno">&nbsp; Techno</span>
									<span><input type="checkbox" name="world">&nbsp; World</span>
								</div>
							</form>
						</div>

						<div class="row col-xs-12">
							<form class="profile-page">
								<label for="skills">Skills (select one or more)</label>
								<div id="skills">
									<span><input type="checkbox" name="arrangement">&nbsp; Accordion</span>
									<span><input type="checkbox" name="accordion">&nbsp; Arrangement</span>
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
							</form>
						</div>

						<div class="row col-xs-12">
							<form class="profile-page">
								<div>
									<label for="message">Message</label>
									<textarea id="message" name="message" placeholder="Your message to other musicians"></textarea>
								</div>
							</form>
						</div>

						<div class="row col-xs-12">
							<form class="profile-page" id="upload-avatar-container">
								<label for="upload_avatar">Your Image</label>
								<div class="row col-xs-12">
									<div class="row">
										<div class="col-xs-5 col-sm-4">
											<img src="<?php echo BASE_URL; ?>assets/images/profile-pg/female-avatar.png" alt="Placeholder for female Musiclaps user"><!-- Hard-coded placeholder -->
										</div>
										<div class="col-xs-7 col-sm-8" id="upload-avatar">	
											<ul><!-- TODO: Edit markup for functional login and make this look better at viewport widths closer to 767px and 400px -->
												<li>Upload Your Image (120 x 120 is best)</li>
												<li><input id="choose_file" type="submit" value="Choose File">&nbsp; <span>No file chosen</span></li><!-- Hard-coded placeholder -->
											</ul>
										</div>
									</div>
								</div>
							</form>
						</div>

						<div class="row col-xs-12">
							<form class="profile-page">
								<input id="save_profile" type="submit" value="Save Profile">
							</form>
						</div>					
					</section>

				</div>		
				<div class="row col-xs-12 col-sm-4">
					<div id="profile-right">
						
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

						<div class="row col-xs-12" id="map-container">
							<h4>Location: </h4>
							<div id="map"></div><!-- Placeholder -->
						</div>

						<div class="row col-xs-12">
							<h4>Member since: </h4>
							<h5>$date joined</h5><!-- Hard-coded placeholder -->
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

					</div>
				</div>	
			</div>
			<div class="col-lg-1"></div>	
		</div>

	<?php
		include(ROOT_PATH . 'include/footer.php');
	?>