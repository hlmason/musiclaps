<?php
	require_once('../include/config.php');

	$pageTitle = 'New Project';
	$page = 'New Project';
	
	include(ROOT_PATH . 'include/header-logged-in.php');
	include(ROOT_PATH . 'include/db-connection.php');
	include(ROOT_PATH . 'controllers/get-profile.php');
	include(ROOT_PATH . 'include/nav-logged-in.php');

?>
		
			<div class="row col-lg-10 col-lg-offset-1">				
					
				<div class="row col-xs-12 col-sm-9">

<!-- 					<div class="row" id="new-project-buttons">	
						<div class="col-xs-12">
							<button class="navigate musiclaps-dark-gray musiclaps-blue" id="recordingPlayerButton" type="button">Recording Player</button>
							<button class="navigate button-navigate-hover-js" id="uploadMP3Button" type="button">Upload MP3</button>
						</div>
					</div> -->
					
					<!-- "Recording Player" -->
					<div class="row" id="recordingPlayer">
						<div class="col-xs-12">
							<div id="recording-player"></div><!-- Placeholder -->
						</div>
					</div>
					<!-- End of "Recording Player" -->


					<!-- "Upload MP3" form - hidden upon page load -->
					<section class="upload-mp3-container" id="uploadMP3Container">
						<div class="row">
							<div class="col-xs-6">
								<h4>Upload an MP3 file</h4>
								<h5>128-bit to 160-bit</h5>
								<h5>Note: <span class="normal">128-bit is recommended<span class="block"> Uploads take longer with higher bit rates</span></span></h5>
							</div>
							
							<div class="col-xs-6">
								<a href="http://solmire.com/" target="blank"><img src="<?php echo BASE_URL; ?>assets/images/profile-pages/midi-to-mp3.png" alt="Ad for MIDI to MP3 Online Converter"></a>
							</div>
						</div>
						
						<ul class="row col-xs-12">
							<li class="first-list-item">Type of Project</li>
							<li><input type="radio" name="project_type" value="newProject">&nbsp; New Project</li>
							<li><input type="radio" name="project_type" value="addPart">&nbsp; Add Part</li>
							<li><input type="radio" name="project_type" value="addPartToGroup">&nbsp; Add Part to Group</li>
						</ul>

						<form>
							<section id="newProject">
								<div class="row col-xs-12">
									<label id="project-title-label" for="project_title">Project Title <span class="normal">(max 80 characters)</span></label>
									<input id="project_title" type="text" name="project_title">
								</div>

								<div class="row col-xs-12">
									<label id="tempo-label" for="tempo">Tempo <span class="normal">(leave blank if unsure)</span></label>
									<input id="tempo" type="text" name="tempo">
								</div>
							</section>

							<section id="addPart">
								<label id="select-sound-label" for="select_sound">Select Your Sound</label>
								<select id="select-sound">
									<option value="test">Test</option>
								</select>
							</section>

							<section class="add-part-to-group-container" id="addPartToGroup">
								<h4 class="row col-xs-12 red">You have not joined any groups.</h4><!-- Hard-coded placeholder -->	
							</section>

							<div class="row col-xs-12">
								<label id="instruments-label" for="instruments">Select Instrument</label>
								<select id="instruments" size="6">
									<span><option value="arrangement">&nbsp; Accordion</option></span>
									<span><option value="banjo">&nbsp; Banjo</option></span>
									<span><option value="bass">&nbsp; Bass</option></span>
									<span><option value="castanets">&nbsp; Castanets</option></span>
									<span><option value="cello">&nbsp; Cello</option></span>
									<span><option value="clarinet">&nbsp; Clarinet</option></span>
									<span><option value="conga">&nbsp; Conga</option></span>
									<span><option value="contrabass">&nbsp; Contrabass</option></span>
									<span><option value="drums">&nbsp; Drums</option></span>
									<span><option value="fiddle">&nbsp; Fiddle</option></span>
									<span><option value="flute">&nbsp; Flute</option></span>
									<span><option value="acoustic_guitar">&nbsp; Acoustic Guitar</option></span>
									<span><option value="classical_guitar">&nbsp; Classical Guitar</option></span>
									<span><option value="electric_guitar">&nbsp; Electric Guitar</option></span>
									<span><option value="semi_acoustic_guitar">&nbsp; Semi-Acoustic Guitar</option></span>
									<span><option value="harmonica">&nbsp; Harmonica</option></span>
									<span><option value="harp">&nbsp; Harp</option></span>
									<span><option value="horn">&nbsp; Horn</option></span>
									<span><option value="keyboard">&nbsp; Keyboard</option></span>
									<span><option value="lyrics">&nbsp; Lyrics</option></span>
									<span><option value="mandolin">&nbsp; Mandolin</option></span>
									<span><option value="maraca">&nbsp; Maraca</option></span>
									<span><option value="marimba">&nbsp; Marimba</option></span>
									<span><option value="metallophone">&nbsp; Metallophone</option></span>
									<span><option value="oboe">&nbsp; Oboe</option></span>
									<span><option value="ocarina">&nbsp; Ocarina</option></span>
									<span><option value="organ">&nbsp; Organ</option></span>
									<span><option value="percussion">&nbsp; Percussion</option></span>
									<span><option value="piano">&nbsp; Piano</option></span>
									<span><option value="piccolo">&nbsp; Piccolo</option></span>
									<span><option value="recorder">&nbsp; Recorder</option></span>
									<span><option value="alto_saxophone">&nbsp; Alto Saxophone</option></span>
									<span><option value="baritone_saxophone">&nbsp; Baritone Saxophone</option></span>
									<span><option value="soprano_saxophone">&nbsp; Soprano Saxophone</option></span>
									<span><option value="tenor_saxophone">&nbsp; Tenor Saxophone</option></span>
									<span><option value="shakuhachi">&nbsp; Shakuhachi</option></span>
									<span><option value="shamisen">&nbsp; Shamisen</option></span>
									<span><option value="tambourine">&nbsp; Tambourine</option></span>
									<span><option value="timpani">&nbsp; Timpani</option></span>
									<span><option value="triangle">&nbsp; Triangle</option></span>
									<span><option value="trombone">&nbsp; Trombone</option></span>
									<span><option value="trumpet">&nbsp; Trumpet</option></span>
									<span><option value="ukulele">&nbsp; Ukulele</option></span>
									<span><option value="viola">&nbsp; Viola</option></span>
									<span><option value="violin">&nbsp; Violin</option></span>
									<span><option value="vocals">&nbsp; Vocals</option></span>
									<span><option value="wadaiko">&nbsp; Wadaiko</option></span>
									<span><option value="xylophone">&nbsp; Xylophone</option></span>
									<span><option value="other">&nbsp; Other</option></span>
								</select>
							</div>

							<div class="row col-xs-12">
								<label id="comment-new-project-page-label" for="comment-new-project-page">Comment <span class="normal">(max 50 characters)</span></label>
								<input id="comment-new-project-page" type="text" name="comment-new-project-page">
							</div>

							<section class="newProject" id="choose-project-img-container">
								<div class="row">
									<div class="col-xs-4">	
										<h4>Project Image</h4>
									</div>
									<div class="col-xs-4">
										<input id="choose_project_img" type="submit" value="Choose File">&nbsp; <span>No file chosen</span>
									</div>
									<div class="col-xs-4">	
										<h5>120(w) x 90(h) in jpg format</h5>
									</div>
								</div>
							</section>

							<div class="row" id="choose-mp3-file-container">
								<div class="col-xs-4">	
									<h4>MP3 File</h4>
								</div>
								<div class="col-xs-4">
									<input id="choose_mp3_file" type="submit" value="Choose File">&nbsp; <span>No file chosen</span>
								</div>
								<div class="col-xs-4">	
									<h5>Max Size 10MB</h5>
								</div>
							</div>

							<div class="row col-xs-12" id="upload-project-container">
								<input id="upload_project" type="submit" value="Upload Project">
							</div>
						</form>
					</section>
					<!-- End of "Upload MP3" form -->

				</div>
				<?php
					include(ROOT_PATH . 'include/profile/recommended.php');
				?>	
			</div>
			<div class="col-lg-1"></div>	
		
		</div>

	<?php
		include(ROOT_PATH . 'include/footer-logged-in.php');
	?>