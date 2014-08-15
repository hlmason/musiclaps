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
						<div class="col-xs-8 col-sm-5">
							<h2 id="user-id">$userid</h2>
						</div>
						<div class="col-xs-8 col-sm-4">
							<a><h4 id="edit-profile"><span class="glyphicon glyphicon-pencil"></span> Edit Profile</h4></a>
						</div>
					</div>
						
					<div class="row">
						<div class="col-sm-3"></div>
						<div class="col-xs-12 col-sm-8" id="about-me">
							<h4>About me:</h4>
							<ul class="first-ul-profile-page">
								<li class="profile-page"><span class="glyphicon glyphicon-user"></span>&nbsp; $gender</li><!-- Hard-coded placeholder -->
								<li class="profile-page pull-right"><span class="glyphicon glyphicon-music"></span>&nbsp; $genre</li><!-- Hard-coded placeholder -->
							</ul>
							<ul class="second-ul-profile-page">
								<li class="profile-page"><span class="glyphicon glyphicon-globe"></span>&nbsp; $city, $state, $country</li><!-- Hard-coded placeholder -->
								<li class="profile-page pull-right"><span class="glyphicon glyphicon-star"></span>&nbsp; $talent</li><!-- Hard-coded placeholder -->
							</ul>
						</div>
						<div class="col-sm-1"></div>
					</div>

					<div class="row col-xs-12">
						<form class="profile-page">
							<div>
								<label for="birthdate">Birth Date</label>
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
								<span class="block"><input type="checkbox" name="alternative">&nbsp; Alternative</span>
								<span class="block"><input type="checkbox" name="anime">&nbsp; Anime</span>
								<span class="block"><input type="checkbox" name="asian_pop">&nbsp; Asian Pop</span>
								<span class="block"><input type="checkbox" name="blues">&nbsp; Blues</span>
								<span class="block"><input type="checkbox" name="bossa_nova">&nbsp; Bossa Nova</span>
								<span class="block"><input type="checkbox" name="children">&nbsp; Children</span>
								<span class="block"><input type="checkbox" name="classical">&nbsp; Classical</span>
								<span class="block"><input type="checkbox" name="country">&nbsp; Country</span>
								<span class="block"><input type="checkbox" name="dance">&nbsp; Dance</span>
								<span class="block"><input type="checkbox" name="disco">&nbsp; Disco</span>
								<span class="block"><input type="checkbox" name="easy_listening">&nbsp; Easy Listening</span>
								<span class="block"><input type="checkbox" name="electronic">&nbsp; Electronic</span>
								<span class="block"><input type="checkbox" name="enka">&nbsp; Enka</span>
								<span class="block"><input type="checkbox" name="european">&nbsp; European</span>
								<span class="block"><input type="checkbox" name="folk">&nbsp; Folk</span>
								<span class="block"><input type="checkbox" name="funk">&nbsp; Funk</span>
								<span class="block"><input type="checkbox" name="fusion">&nbsp; Fusion</span>
								<span class="block"><input type="checkbox" name="gospel">&nbsp; Gospel</span>
								<span class="block"><input type="checkbox" name="hip_hop">&nbsp; Hip Hop</span>
								<span class="block"><input type="checkbox" name="indie_pop">&nbsp; Indie Pop</span>
								<span class="block"><input type="checkbox" name="jazz">&nbsp; Jazz</span>
								<span class="block"><input type="checkbox" name="latin">&nbsp; Latin</span>
								<span class="block"><input type="checkbox" name="new_age">&nbsp; New Age</span>
								<span class="block"><input type="checkbox" name="opera">&nbsp; Opera</span>
								<span class="block"><input type="checkbox" name="pop">&nbsp; Pop</span>
								<span class="block"><input type="checkbox" name="rnb">&nbsp; R&B</span>
								<span class="block"><input type="checkbox" name="rap">&nbsp; Rap</span>
								<span class="block"><input type="checkbox" name="reggae">&nbsp; Reggae</span>
								<span class="block"><input type="checkbox" name="rock">&nbsp; Rock</span>
								<span class="block"><input type="checkbox" name="samba">&nbsp; Samba</span>
								<span class="block"><input type="checkbox" name="soul">&nbsp; Soul</span>
								<span class="block"><input type="checkbox" name="techno">&nbsp; Techno</span>
								<span class="block"><input type="checkbox" name="world">&nbsp; World</span>
							</div>
						</form>
					</div>

					<div class="row col-xs-12">
						<form class="profile-page">
							<label for="skills">Skills</label>
							<div id="skills">
								<span class="block"><input type="checkbox" name="arrangement">&nbsp; Arrangement</span>
								<span class="block"><input type="checkbox" name="banjo">&nbsp; Banjo</span>
								<span class="block"><input type="checkbox" name="bass">&nbsp; Bass</span>
								<span class="block"><input type="checkbox" name="cello">&nbsp; Cello</span>
								<span class="block"><input type="checkbox" name="clarinet">&nbsp; Clarinet</span>
								<span class="block"><input type="checkbox" name="drums">&nbsp; Drums</span>
								<span class="block"><input type="checkbox" name="fiddle">&nbsp; Fiddle</span>
								<span class="block"><input type="checkbox" name="flute">&nbsp; Flute</span>
								<span class="block"><input type="checkbox" name="acoustic_guitar">&nbsp; Acoustic Guitar</span>
								<span class="block"><input type="checkbox" name="electric_guitar">&nbsp; Electric Guitar</span>
								<span class="block"><input type="checkbox" name="harmonica">&nbsp; Harmonica</span>
								<span class="block"><input type="checkbox" name="keyboard">&nbsp; Keyboard</span>
								<span class="block"><input type="checkbox" name="lyrics">&nbsp; Lyrics</span>
								<span class="block"><input type="checkbox" name="mandolin">&nbsp; Mandolin</span>
								<span class="block"><input type="checkbox" name="okarina">&nbsp; Okarina</span>
								<span class="block"><input type="checkbox" name="percussion">&nbsp; Percussion</span>
								<span class="block"><input type="checkbox" name="piano">&nbsp; Piano</span>
								<span class="block"><input type="checkbox" name="saxophone">&nbsp; Saxophone</span>
								<span class="block"><input type="checkbox" name="trombone">&nbsp; Trombone</span>
								<span class="block"><input type="checkbox" name="trumpet">&nbsp; Trumpet</span>
								<span class="block"><input type="checkbox" name="ukulele">&nbsp; Ukulele</span>
								<span class="block"><input type="checkbox" name="viola">&nbsp; Viola</span>
								<span class="block"><input type="checkbox" name="violin">&nbsp; Violin</span>
								<span class="block"><input type="checkbox" name="vocals">&nbsp; Vocals</span>
								<span class="block"><input type="checkbox" name="other">&nbsp; Other</span>
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
						<form class="profile-page" id="upload-avatar">
							<label for="upload_avatar">Your Image</label>
							<div class="row col-xs-12">
								<div class="row">
									<div class="col-xs-5 col-sm-4">
										<img class="upload-avatar" src="<?php echo BASE_URL; ?>assets/images/profile-pg/female-avatar.png" alt="Placeholder for female Musiclaps user"><!-- Hard-coded placeholder -->
									</div>
									<div class="col-xs-7 col-sm-8" id="upload-avatar">	
										<ul><!-- TODO: Make this look better at viewport widths closer to 767px  -->
											<li>Upload Your Image (120 x 120 is best)</li>
											<li><input id="choose_file" type="submit" value="Choose File">&nbsp; <span class="smaller-font-size">No file chosen</span></li><!-- Hard-coded placeholder -->
										</ul>
									</div>
								</div>
							</div>
						</form>
					</div>

				</div>		
				<div class="row col-xs-12 col-sm-4">
					<div id="profile-right"></div>
				</div>
				
			</div>
			<div class="col-lg-1"></div>	
		</div>

	<?php
		include(ROOT_PATH . 'include/footer.php');
	?>