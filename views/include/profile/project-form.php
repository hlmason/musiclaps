<div id="projectForm">

	<!-- Recording Player -->
	<div class="row col-xs-12 live-player-container">
		<iframe width="620" height="380" src="//www.musiclaps.com/embed/player?songid=null" frameborder="0" scrolling="no"></iframe><!-- Placeholder -->
	</div>
	<!-- End of Recording Player -->


	<section class="row col-xs-12 project-form-header">
		<h3>Project Title</h3><!-- Hard-coded placeholder -->
		<!-- Markup is backwards because elements are floated right -->
		<span class="glyphicon glyphicon-trash"></span>
		<select class="project-type" name="">
			<option value="private">Private</option>
			<option value="public">Public</option>
			<option value="group">Group</option>
			<option value="audition">Audition</option>
		</select>
		<span class="glyphicon glyphicon-lock"></span>
		<span class="glyphicon glyphicon-repeat"></span>
	</section>

	
	<section class="row col-xs-12">
		<div class="project-info-bar">
			<h4 class="first-h4">$project #</h4><!-- Hard-coded placeholder -->
			<img class="audio-mixer audioMixer" src="<?php echo BASE_URL; ?>assets/images/profile-pages/audio-mixer.jpg" alt="Audio mixer icon">
			<h4>$instrument name</h4><!-- Hard-coded placeholder -->
			<h5>$date project started</h5>

			<!-- Markup is backwards because elements are floated right -->
			<span class="glyphicon glyphicon-trash"></span>
			<select class="project-type">
				<option value="private">Private</option><!-- Hard-coded placeholder -->
			</select>
		</div>
	</section>
	<!-- Volume and pan -->
	<?php
		include(ROOT_PATH . 'views/include/profile/volume-and-pan.php');
	?>
	<!-- End of volume and pan -->

	<div class="row col-xs-12">
		<form class="project-form" action="" method="post">
			<label for="project_title_project_form">Project Title
				<input class="save" type="submit" name="" value="Save">
			</label>
			<input class="project-title-project-form" id="project_title_project_form" type="text" name="">
		</form>
	</div>

	<div class="row col-xs-12">
		<form class="project-form" action="" method="post">
			<label id="cover-song-label">Cover Song
				<input class="cover-song-checkbox" type="checkbox" name="">
				<input class="save" type="submit" name="" value="Save">
			</label>
			<input class="credit-cover-song" id="credit_cover_song" type="text" name="" placeholder="Please credit the songwriter if it is not you.">
		</form>
	</div>

	<div class="row col-xs-12">
		<form class="project-form" action="" method="post">
			<label for="description">Description
				<input class="save" type="submit" name="" value="Save">
			</label>
			<textarea class="description" id="description" name="" placeholder="If you are requesting collaboration, you can mention which instrument(s) here."></textarea>
		</form>
	</div>

	<div class="row col-xs-12">
		<form class="project-form" action="" method="post">
			<label for="genre">Genre <span class="normal">(select one or more)</span>
				<input class="save" id="save-genre" type="submit" name="save_genre" value="Save">
			</label>
			<div id="genre-form-projects">
				<!-- Genre form -->
				<?php
					include(ROOT_PATH . 'views/include/profile/genre-form.php');
				?>
			<!-- End of genre form -->
		</form>
	</div>

	<div class="row col-xs-12">
		<form class="project-form" action="" method="post">
			<label for="search_tags">Search Tags
				<input class="save" type="submit" name="" value="Save">
			</label>
			<textarea class="search-tags" id="search_tags" name="" placeholder="Examples: Song Title, Genre, etc."></textarea>
		</form>
	</div>

	<div class="row col-xs-12">
		<form class="project-form" action="" method="post">
			<label for="scrolling_comment">Scrolling Comment
				<input class="save" type="submit" name="" value="Save">
			</label>
			<textarea id="scrolling_comment" name=""></textarea>
		</form>
	</div>

	<form class="project-form" action="" method="post" enctype="multipart/form-data">
		<div class="row col-xs-12">
			<label for="stage_background_img">Stage Background Image <span class="normal">(620w x 190h recommended)</span>
			</label>
		</div>
		<div class="row col-xs-12">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<div id="no-img-container">
						<h2>no image</h2>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6">
					<div id="upload-stage-background-img-container">
						<input class="choose-file" id="stage_background_img" type="file" name="" value="Choose File">
						<div id="save-stage-background-img-and-trash-container">
							<input id="save-stage-background-img" type="submit" name="" value="Save">
							<span class="glyphicon glyphicon-trash"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>

	<form class="project-form" action="" method="post">
		<section class="row col-xs-12">
			<h4 id="type-of-collab">Type of Collaboration</h4>
		</section>
		<div class="row col-xs-12">
			<div class="type-of-collab-container">
				<div class="row">
					<div class="col-xs-12 col-sm-4">
						<span class="glyphicon glyphicon-ok noCollabGlyphicon"></span>
						<input class="noCollab" type="submit" name="" value="No Collab">
					</div>
					<div class="col-xs-12 col-sm-4">
						<span class="glyphicon glyphicon-ok openCollabGlyphicon"></span>
						<input class="openCollab" type="submit" name="" value="Open Collab">
					</div>
					<div class="col-xs-12 col-sm-4">
						<span class="glyphicon glyphicon-ok requestingCollabGlyphicon"></span>
						<input class="requestingCollab" type="submit" name="" value="Requesting Collab">
					</div>
				</div>
			</div>
		</div>
	</form>

	<form class="project-form" action="" method="post">
		<section class="row col-xs-12">
			<h4 id="copyright">Copyright Type</h4>
			<h4 class="red">
				<strong>
					** Original songs only **
					<span class="block">If you want someone to collaborate with you, select a Creative Commons license.</span>
					<span class="block">Creative Commons licenses are irrevocable - please think carefully before choosing one.</span>
				</strong>
			</h4>
		</section>
		<div class="row col-xs-12">
			<ul id="copyright-types-container">
				<li class="row col-xs-12 first-list-item">
					<input type="radio" name="" value="cc_by">
					<img src="<?php echo BASE_URL; ?>assets/images/profile-pages/copyright/cc-by.png" alt="Attribution symbol">
					<h4>Attribution<span class="glyphicon glyphicon-question-sign" id="glyphiconQuestionSignCCBY"></span></h4>
					<div class="cc-description" id="CCBYDescription">This license lets others distribute, remix, tweak, and build upon your work, even commercially, as long as they credit you for the original creation. This is the most accommodating of licenses offered. Recommended for maximum dissemination and use of licensed materials. Source: <a href="//creativecommons.org/licenses/" target="blank">creativecommons.org/licenses</a></div>
				</li>
				<li class="row col-xs-12">
					<input type="radio" name="" value="cc_by_nd">
					<img src="<?php echo BASE_URL; ?>assets/images/profile-pages/copyright/cc-by-nd.png" alt="Attribution-NoDerivs symbol">
					<h4>Attribution - No Derivative Works<span class="glyphicon glyphicon-question-sign" id="glyphiconQuestionSignCCBYND"></span></h4>
					<div class="cc-description" id="CCBYNDDescription">This license allows for redistribution, commercial and non-commercial, as long as it is passed along unchanged and in whole, with credit to you. Source: <a href="//creativecommons.org/licenses/" target="blank">creativecommons.org/licenses</a></div>
				</li>
				<li class="row col-xs-12">
					<input type="radio" name="" value="cc_by_nc_sa">
					<img src="<?php echo BASE_URL; ?>assets/images/profile-pages/copyright/cc-by-nc-sa.png" alt="Attribution-NonCommercial-ShareAlike symbol">
					<h4>Attribution - NonCommercial - Share Alike<span class="glyphicon glyphicon-question-sign" id="glyphiconQuestionSignCCBYNCSA"></span></h4>
					<div class="cc-description" id="CCBYNCSADescription">This license lets others remix, tweak, and build upon your work non-commercially, as long as they credit you and license their new creations under the identical terms. Source: <a href="//creativecommons.org/licenses/" target="blank">creativecommons.org/licenses</a></div>
				</li>
				<li class="row col-xs-12">
					<input type="radio" name="" value="cc_by_sa">
					<img src="<?php echo BASE_URL; ?>assets/images/profile-pages/copyright/cc-by-sa.png" alt="Attribution-ShareAlike symbol">
					<h4>Attribution - Share Alike<span class="glyphicon glyphicon-question-sign" id="glyphiconQuestionSignCCBYSA"></span></h4>
					<div class="cc-description" id="CCBYSADescription">This license lets others remix, tweak, and build upon your work even for commercial purposes, as long as they credit you and license their new creations under the identical terms. This license is often compared to “copyleft” free and open source software licenses. All new works based on yours will carry the same license, so any derivatives will also allow commercial use. This is the license used by Wikipedia, and is recommended for materials that would benefit from incorporating content from Wikipedia and similarly licensed projects. Source: <a href="//creativecommons.org/licenses/" target="blank">creativecommons.org/licenses</a></div>
				</li>
				<li class="row col-xs-12">
					<input type="radio" name="" value="cc_by_nc">
					<img src="<?php echo BASE_URL; ?>assets/images/profile-pages/copyright/cc-by-nc.png" alt="Attribution-NonCommercial symbol">
					<h4>Attribution - NonCommercial<span class="glyphicon glyphicon-question-sign" id="glyphiconQuestionSignCCBYNC"></span></h4>
					<div class="cc-description" id="CCBYNCDescription">This license lets others remix, tweak, and build upon your work non-commercially, and although their new works must also acknowledge you and be non-commercial, they don’t have to license their derivative works on the same terms. Source: <a href="//creativecommons.org/licenses/" target="blank">creativecommons.org/licenses</a></div>
				</li>
				<li class="row col-xs-12">
					<input type="radio" name="" value="cc_by_nc_nd">
					<img src="<?php echo BASE_URL; ?>assets/images/profile-pages/copyright/cc-by-nc-nd.png" alt="Attribution-NonCommercial-NoDerivs symbol">
					<h4>Attribution - NonCommercial - No Derivative Works<span class="glyphicon glyphicon-question-sign" id="glyphiconQuestionSignCCBYNCND"></span></h4>
					<div class="cc-description" id="CCBYNCNDDescription">This license is the most restrictive of the six main Creative Commons licenses, only allowing others to download your works and share them with others as long as they credit you, but they can’t change them in any way or use them commercially. Source: <a href="//creativecommons.org/licenses/" target="blank">creativecommons.org/licenses</a></div>
				</li>
				<li class="row col-xs-12">
					<input type="radio" name="" value="public_domain">
					<img src="<?php echo BASE_URL; ?>assets/images/profile-pages/copyright/public-domain.png" alt="Public Domain symbol">
					<h4>Public Domain<span class="glyphicon glyphicon-question-sign" id="glyphiconQuestionSignPublicDomain"></span></h4>
					<div class="cc-description" id="PublicDomainDescription">The Public Domain Mark is recommended for works that are free of known copyright around the world. These will typically be very old works.  It is not recommended for use with works that are in the public domain in some jurisdictions if they also known to be restricted by copyright in others. Source: <a href="//creativecommons.org/about/pdm" target="blank">creativecommons.org/about/pdm</a></div>
				</li>
				<li class="row col-xs-12">
					<input type="radio" name="" value="all_rights_reserved">
					<img id="all-rights-reserved" src="<?php echo BASE_URL; ?>assets/images/profile-pages/copyright/all-rights-reserved.gif" alt="Copyright symbol">
					<h4 class="last-h4">All Rights Reserved</h4>
				</li>
			</ul>
		</div>
	</form>

</div>