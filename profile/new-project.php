<?php
	require_once('../include/config.php');

	$pageTitle = 'New Project';
	$page = 'New Project';
	
	include(ROOT_PATH . 'include/header-logged-in.php');
	include(ROOT_PATH . 'include/db-connection.php');
	include(ROOT_PATH . 'controllers/get-profile.php');

?>
		
			<div class="row col-lg-10 col-lg-offset-1">				
					
				<div class="row col-xs-12 col-sm-9">

					<div class="row" id="recording-player-buttons">	
						<div class="col-xs-12">
							<button class="navigate musiclaps-blue" id="recordingPlayer" type="button">Recording Player</button>
							<button class="navigate button-navigate-hover" id="uploadMP3" type="button">Upload MP3</button>
						</div>
					</div>
					
					<!-- Recording Player -->
					<div class="row">
						<div class="col-xs-12">
							<div id="recording-player"></div><!-- Placeholder -->
						</div>
					</div>
					<!-- End of Recording Player -->


					<!-- Upload MP3 -->
					<section id="uploadMP3Container">
						<div class="row">
							<div class="col-xs-6">
								<h4>Upload an MP3 file only</h4>
								<h5>Bit rate: 128 bit - 160 bit</h5>
							</div>
							
							<div class="col-xs-6">
								<a href="http://solmire.com/" target="blank"><img src="<?php echo BASE_URL; ?>assets/images/profile-pg/midi-to-mp3.png" alt="Ad for MIDI to MP3 Online Converter"></a>
							</div>
						</div>
						
						<div class="row col-xs-12">
							<h5>Note: 128 bit is the recommended value.  Upload takes longer with higher bit rates</h5>
						</div>
						
						<ul class="row col-xs-12">
							<li>Type of Project</li>
							<li>New Project</li>
							<li>Add Part</li>
							<li>Add Part in Group</li>
						</ul>

						<form>
							<div class="row col-xs-12">
								<label for="instruments">Select Instrument</label>
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
								<label for="comment">Comment (max 50 characters)</label>
								<input id="comment" type="comment" name="comment">
							</div>

							<div class="row">
								<div class="col-xs-4">	
										<h5>MP3 File</h5>
								</div>
								<div class="col-xs-4">
									<input id="choose_file" type="submit" value="Choose File">&nbsp; <span>No file chosen</span>
								</div>
								<div class="col-xs-4">	
										<h5>Max Size 10MB</h5>
								</div>
							</div>

							<div class="row col-xs-12">
								<input id="upload_project" type="submit" value="Upload Project">
							</div>
						</form>
					</section>
					<!-- End of Upload MP3 -->

				</div>
				<div class="row col-xs-12 col-sm-3">
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