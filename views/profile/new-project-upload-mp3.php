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

							<div class="row" id="select-part-container">
								<div class="col-xs-12 col-sm-6">
									<label id="parts-label" for="parts">Select a Part</label><span class="glyphicon glyphicon-question-sign glyphicon" id="glyphiconQuestionSignPart"></span>
									<div class="select-part-explanation" id="selectPartExplanation">If you are playing a part that is not on the list, please select “Other".</div>
									<select class="parts" id="parts" name="" size="6">
										<span><option class="accordionJS" value="arrangement">&nbsp; Accordion</option></span>
										<span><option class="banjoJS" value="banjo">&nbsp; Banjo</option></span>
										<span><option class="bassJS" value="bass">&nbsp; Bass</option></span>
										<span><option class="castanetsJS" value="castanets">&nbsp; Castanets</option></span>
										<span><option class="celloJS" value="cello">&nbsp; Cello</option></span>
										<span><option class="clarinetJS" value="clarinet">&nbsp; Clarinet</option></span>
										<span><option class="congasJS" value="congas">&nbsp; Congas</option></span>
										<span><option class="contrabassJS" value="contrabass">&nbsp; Contrabass</option></span>
										<span><option class="drumKit" value="drum_kit">&nbsp; Drums</option></span>
										<span><option class="fiddleJS" value="fiddle">&nbsp; Fiddle</option></span>
										<span><option class="fluteJS" value="flute">&nbsp; Flute</option></span>
										<span><option class="guitarAcoustic" value="guitar_acoustic">&nbsp; Guitar (Acoustic)</option></span>
										<span><option class="guitarAcousticElectric" value="guitar_acoustic_electric">&nbsp; Guitar (Acoustic-Electric)</option></span>
										<span><option class="guitarClassical" value="guitar_classical">&nbsp; Guitar (Classical) </option></span>
										<span><option class="guitarElectric1" value="guitar_electric_1">&nbsp; Guitar (Electric 1)</option></span>
										<span><option class="guitarElectric2" value="guitar_electric_2">&nbsp; Guitar (Electric 2)</option></span>
										<span><option class="guitarElectric3" value="guitar_electric_3">&nbsp; Guitar (Electric 3)</option></span>
										<span><option class="guitarElectric4" value="guitar_electric_4">&nbsp; Guitar (Electric 4)</option></span>
										<span><option class="guitarElectric5" value="guitar_electric_5">&nbsp; Guitar (Electric 5)</option></span>
										<span><option class="guitarElectric6" value="guitar_electric_6">&nbsp; Guitar (Electric 6)</option></span>
										<span><option class="guitarSemiAcoustic" value="guitar_semi_acoustic">&nbsp; Guitar (Semi-Acoustic)</option></span>
										<span><option class="harmonicaJS" value="harmonica">&nbsp; Harmonica</option></span>
										<span><option class="harpJS" value="harp">&nbsp; Harp</option></span>
										<span><option class="hornJS" value="horn">&nbsp; Horn</option></span>
										<span><option class="keyboard1JS" value="keyboard_1">&nbsp; Keyboard 1</option></span>
										<span><option class="keyboard2JS" value="keyboard_2">&nbsp; Keyboard 2</option></span>
										<span><option class="keyboard3JS" value="keyboard_3">&nbsp; Keyboard 3</option></span>
										<span><option class="lyricsJS" value="lyrics">&nbsp; Lyrics</option></span>
										<span><option class="mandolinJS" value="mandolin">&nbsp; Mandolin</option></span>
										<span><option class="maracasJS" value="maracas">&nbsp; Maracas</option></span>
										<span><option class="marimbaJS" value="marimba">&nbsp; Marimba</option></span>
										<span><option class="metallophoneJS" value="metallophone">&nbsp; Metallophone</option></span>
										<span><option class="melodicaJS" value="melodica">&nbsp; Melodica</option></span>
										<span><option class="mixerJS" value="mixer">&nbsp; Mixer</option></span>
										<span><option class="oboeJS" value="oboe">&nbsp; Oboe</option></span>
										<span><option class="ocarinaJS" value="ocarina">&nbsp; Ocarina</option></span>
										<span><option class="organJS" value="organ">&nbsp; Organ</option></span>
										<span><option class="otherJS" value="other">&nbsp; Other</option></span>
										<span><option class="percussionJS" value="percussion">&nbsp; Percussion</option></span>
										<span><option class="pianoElectric" value="piano_electric">&nbsp; Piano (Electric)</option></span>
										<span><option class="pianoGrand" value="piano_grand">&nbsp; Piano (Grand)</option></span>
										<span><option class="pianoUpright" value="piano_upright">&nbsp; Piano (Upright)</option></span>
										<span><option class="piccoloJS" value="piccolo">&nbsp; Piccolo</option></span>
										<span><option class="recorderAlto" value="recorder_alto">&nbsp; Recorder (Alto)</option></span>
										<span><option class="recorderSoprano" value="recorder_soprano">&nbsp; Recorder (Soprano)</option></span>
										<span><option class="saxAlto" value="sax_alto">&nbsp; Saxophone (Alto)</option></span>
										<span><option class="saxBaritone" value="sax_baritone">&nbsp; Saxophone (Baritone)</option></span>
										<span><option class="saxSoprano" value="sax_soprano">&nbsp; Saxophone (Soprano)</option></span>
										<span><option class="saxTenor" value="sax_tenor">&nbsp; Saxophone (Tenor)</option></span>
										<span><option class="shakuhachiJS" value="shakuhachi">&nbsp; Shakuhachi</option></span>
										<span><option class="shamisenJS" value="shamisen">&nbsp; Shamisen</option></span>
										<span><option class="tambourineJS" value="tambourine">&nbsp; Tambourine</option></span>
										<span><option class="timpaniJS" value="timpani">&nbsp; Timpani</option></span>
										<span><option class="triangleJS" value="triangle">&nbsp; Triangle</option></span>
										<span><option class="tromboneJS" value="trombone">&nbsp; Trombone</option></span>
										<span><option class="trumpet1JS" value="trumpet_1">&nbsp; Trumpet 1</option></span>
										<span><option class="trumpet2JS" value="trumpet_2">&nbsp; Trumpet 2</option></span>
										<span><option class="ukuleleJS" value="ukulele">&nbsp; Ukulele</option></span>
										<span><option class="violaJS" value="viola">&nbsp; Viola</option></span>
										<span><option class="violinJS" value="violin">&nbsp; Violin</option></span>
										<span><option class="mic1JS" value="vocals_1">&nbsp; Vocals 1</option></span>
										<span><option class="mic2JS" value="vocals_2">&nbsp; Vocals 2</option></span>
										<span><option class="mic3JS" value="vocals_3">&nbsp; Vocals 3</option></span>
										<span><option class="wadaikoJS" value="wadaiko">&nbsp; Wadaiko</option></span>
										<span><option class="xylophoneJS" value="xylophone">&nbsp; Xylophone</option></span>
									</select>
								</div>
								<div class="col-xs-12 col-sm-6">
									<img class="instrument instrumentJS accordionJS" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/accordion.png" alt="Accordion">
									<img class="instrument instrumentJS bassJS" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/bass.png" alt="Bass">
									<img class="instrument instrumentJS castanetsJS" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/castanets.png" alt="Castanets">
									<img class="instrument instrumentJS celloJS" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/cello.png" alt="Cello">
									<img class="instrument instrumentJS clarinetJS" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/clarinet.png" alt="Clarinet">
									<img class="instrument instrumentJS congasJS" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/congas.png" alt="Congas">
									<img class="instrument instrumentJS contrabassJS" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/contrabass.png" alt="Contrabass">
									<img class="instrument instrumentJS drumKit" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/drum-kit.png" alt="Drum kit">
									<img class="instrument instrumentJS fiddleJS" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/violin.png" alt="Fiddle">
									<img class="instrument instrumentJS fluteJS" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/flute.png" alt="Flute">
									<img class="instrument instrumentJS guitarAcoustic" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/guitar-acoustic.png" alt="Acoustic guitar">
									<img class="instrument instrumentJS guitarAcousticElectric" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/guitar-acoustic-electric.png" alt="Acoustic-electric Guitar">
									<img class="instrument instrumentJS guitarClassical" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/guitar-classical.png" alt="Classical Guitar">
									<img class="instrument instrumentJS guitarElectric1" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/guitar-electric-1.png" alt="Electric Guitar 1">
									<img class="instrument instrumentJS guitarElectric2" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/guitar-electric-2.png" alt="Electric Guitar 2">
									<img class="instrument instrumentJS guitarElectric3" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/guitar-electric-3.png" alt="Electric Guitar 3">
									<img class="instrument instrumentJS guitarElectric4" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/guitar-electric-4.png" alt="Electric Guitar 4">
									<img class="instrument instrumentJS guitarElectric5" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/guitar-electric-5.png" alt="Electric Guitar 5">
									<img class="instrument instrumentJS guitarElectric6" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/guitar-electric-6.png" alt="Electric Guitar 6">
									<img class="instrument instrumentJS guitarSemiAcoustic" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/guitar-semi-acoustic.png" alt="Semi-acoustic Guitar">
									<img class="instrument instrumentJS harmonicaJS" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/harmonica.png" alt="Harmonica">
									<img class="instrument instrumentJS harpJS" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/harp.png" alt="Harp">
									<img class="instrument instrumentJS hornJS" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/horn.png" alt="Horn">
									<img class="instrument instrumentJS keyboard1JS" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/keyboard-1.png" alt="Keyboard 1">
									<img class="instrument instrumentJS keyboard2JS" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/keyboard-2.png" alt="Keyboard 2">
									<img class="instrument instrumentJS keyboard3JS" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/keyboard-3.png" alt="Keyboard 3">
									<img class="instrument instrumentJS mandolinJS" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/mandolin.png" alt="Mandolin">
									<img class="instrument instrumentJS maracasJS" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/maracas.png" alt="Maracas">
									<img class="instrument instrumentJS marimbaJS" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/marimba.png" alt="Marimba">
									<img class="instrument instrumentJS melodicaJS" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/melodica.png" alt="Melodica">
									<img class="instrument instrumentJS metallophoneJS" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/metallophone.png" alt="Metallophone">
									<img class="instrument instrumentJS mixerJS" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/mixer.png" alt="Audio mixer">
									<img class="instrument instrumentJS oboeJS" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/oboe.png" alt="Oboe">
									<img class="instrument instrumentJS ocarinaJS" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/ocarina.png" alt="Ocarina">
									<img class="instrument instrumentJS organJS" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/organ.png" alt="Organ">
									<img class="instrument instrumentJS pianoElectric" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/piano-electric.png" alt="Electric piano">
									<img class="instrument instrumentJS pianoGrand" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/piano-grand.png" alt="Grand piano">
									<img class="instrument instrumentJS pianoUpright" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/piano-upright.png" alt="Upright piano">
									<img class="instrument instrumentJS piccoloJS" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/piccolo.png" alt="Piccolo">
									<img class="instrument instrumentJS recorderSoprano" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/recorder-soprano.png" alt="Soprano recorder">
									<img class="instrument instrumentJS recorderAlto" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/recorder-alto.png" alt="Alto recorder">
									<img class="instrument instrumentJS sopranoAlto" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/soprano-alto.png" alt="Soprano soprano">
									<img class="instrument instrumentJS saxAlto" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/sax-alto.png" alt="Alto saxophone">
									<img class="instrument instrumentJS saxBaritone" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/sax-baritone.png" alt="Baritone saxophone">
									<img class="instrument instrumentJS saxSoprano" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/sax-soprano.png" alt="Soprano saxophone">
									<img class="instrument instrumentJS saxTenor" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/sax-tenor.png" alt="Tenor saxophone">
									<img class="instrument instrumentJS shakuhachiJS" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/shakuhachi.png" alt="Shakuhachi">
									<img class="instrument instrumentJS shamisenJS" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/shamisen.png" alt="Shamisen">
									<img class="instrument instrumentJS tambourineJS" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/tambourine.png" alt="Tambourine">
									<img class="instrument instrumentJS timpaniJS" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/timpani.png" alt="Timpani">
									<img class="instrument instrumentJS triangleJS" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/triangle.png" alt="Triangle">
									<img class="instrument instrumentJS tromboneJS" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/trombone.png" alt="Trombone">
									<img class="instrument instrumentJS trumpet1JS" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/trumpet-1.png" alt="Trumpet 1">
									<img class="instrument instrumentJS trumpet2JS" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/trumpet-2.png" alt="Trumpet 2">
									<img class="instrument instrumentJS ukuleleJS" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/ukulele.png" alt="Ukulele">
									<img class="instrument instrumentJS violaJS" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/viola.png" alt="Viola">
									<img class="instrument instrumentJS violinJS" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/violin.png" alt="Violin">
									<img class="instrument instrumentJS mic1JS" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/mic-1.png" alt="Mic 1">
									<img class="instrument instrumentJS mic2JS" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/mic-2.png" alt="Mic 2">
									<img class="instrument instrumentJS mic3JS" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/mic-3.png" alt="Mic 3">
									<img class="instrument instrumentJS wadaikoJS" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/wadaiko.png" alt="Wadaiko">
									<img class="instrument instrumentJS xylophoneJS" src="<?php echo BASE_URL; ?>assets/images/profile-pages/instruments/xylophone.png" alt="Xylophone">
								</div>
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