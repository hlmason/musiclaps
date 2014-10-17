<?php
	require_once('../../controllers/require/config.php');

	$page_title = 'Upload MP3';
	
	include(ROOT_PATH . 'models/new-db-connection.php');
	include(ROOT_PATH . 'views/include/header-logged-in.php');
	include(ROOT_PATH . 'views/include/profile/user-menu.php');

?>
		
			<div class="row col-lg-10 col-lg-offset-1">				
					
				<div class="row col-xs-12 col-md-9" id="new-project-page">

					<section class="upload-mp3-container">
						<div class="row">
							<div class="col-xs-6">
								<h4>Upload an MP3 file</h4>
								<h5>128-bit to 160-bit</h5>
								<h5>Note: <span class="normal">128-bit is recommended<span class="block"> (Uploads take longer with higher bit rates)</span></span></h5>
							</div>
							
							<div class="col-xs-6">
								<a href="http://solmire.com/" target="blank"><img src="<?php echo BASE_URL; ?>assets/images/profile-pages/midi-to-mp3.png" alt="Ad for MIDI to MP3 Online Converter"></a>
							</div>
						</div>
						
						<ul class="row col-xs-12">
							<li class="first-list-item">Type of Project</li>
							<li>
								<input id="new_project" type="radio" name="project_type" value="newProject">
								<label for="new_project">&nbsp;New Project</label>
							</li>
							<li>
								<input id="add_part" type="radio" name="project_type" value="addPart">
								<label for="add_part">&nbsp;Add Part</label>
							</li>
							<li>
								<input id="add_part_to_group" type="radio" name="project_type" value="addPartToGroup"> 
								<label for="add_part_to_group">&nbsp;Add Part to Group</label>
							</li>
						</ul>

						<form action="<?php echo BASE_URL; ?>controllers/profile/new-project/upload-mp3-controller.php" method="post">
							<section id="newProject">
								<div class="row col-xs-12">
									<label id="project-title-label" for="project_title_new_project">Project Title <span class="normal">(max 80 characters)</span></label>
									<input class="project-title-new-project" id="project_title_new_project" type="text" name="">
								</div>

								<div class="row col-xs-12">
									<label id="tempo-label" for="tempo">Tempo <span class="normal">(leave blank if unsure)</span></label>
									<input class="tempo" id="tempo" type="text" name="">
								</div>
							</section>

							<section id="addPart">
								<label id="select-project-label" for="select_project">Select Project</label>
								<select class="select-project" id="select_project" name="">
									<option value="test">$Project Title</option><!-- Hard-coded placeholder -->	
								</select>
							</section>

							<section class="add-part-to-group-container" id="addPartToGroup">
								<h4 class="row col-xs-12 red">You have not joined any groups.</h4><!-- Hard-coded placeholder -->	
							</section>

							<div class="row col-xs-12" id="select-instruments-container">
								<label id="instruments-label" for="instruments">Select Instrument</label><span class="glyphicon glyphicon-question-sign glyphicon glyphicon-question-sign-instruments" id="glyphiconQuestionSignInstrument"></span>
								<div class="select-instrument-explanation" id="selectInstrumentExplanation">If you are playing an instrument that is not on the list, please select “Other".</div>
								<select class="instruments" id="instruments" name="" size="6">
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
								<label id="comment-new-project-page-label" for="comment_new_project_page">Comment <span class="normal">(max 50 characters)</span></label>
								<input class="comment-new-project-page" id="comment_new_project_page" type="text" name="comment-new-project-page">
							</div>

							<section class="row col-xs-12 newProject" id="choose-project-img-container">
								<div class="row">
									<div class="col-xs-3">	
										<label for="choose_project_img">Project Image</label>
									</div>
									<div class="col-xs-5">
										<input id="choose_project_img" type="file" name="" value="Choose File">
									</div>
									<div class="col-xs-12 col-sm-4">	
										<h5>120(w) x 90(h) in jpg format</h5>
									</div>
								</div>
							</section>

							<section class="row col-xs-12" id="choose-mp3-file-container">
								<div class="col-xs-3">	
									<label for="choose_mp3">MP3 File</label>
								</div>
								<div class="col-xs-5">
									<input id="choose_mp3" type="file" name="" value="Choose File">
								</div>
								<div class="col-xs-12 col-sm-4">	
									<h5>Max Size 10MB</h5>
								</div>
							</section>

							<div class="row col-xs-12" id="upload-project-container">
								<input type="submit" name="" value="Upload Project">
							</div>
						</form>
					</section>

				</div>
				<?php
					include(ROOT_PATH . 'views/include/profile/recommended.php');
				?>	
			</div>
			<div class="col-lg-1"></div>	
		
		</div>

	<?php
		include(ROOT_PATH . 'views/include/footer-logged-in.php');
	?>