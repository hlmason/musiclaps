<div id="projectForm">

	<!-- Recording Player -->
	<div class="row col-xs-12 live-player-container">
		<iframe width="620" height="380" src="https://www.musiclaps.com/embed/player?songid=null" frameborder="0" scrolling="no"></iframe><!-- Placeholder -->
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
		<form class="project-form" action="<?php echo BASE_URL; ?>controllers/profile/project-form-controller.php" method="post">
			<label for="project_title_project_form">Project Title
				<input class="save" type="submit" name="" value="Save">
			</label>
			<input class="project-title-project-form" id="project_title_project_form" type="text" name="">
		</form>
	</div>

	<div class="row col-xs-12">
		<form class="project-form" action="<?php echo BASE_URL; ?>controllers/profile/project-form-controller.php" method="post">
			<label id="cover-song-label">Cover Song
				<input class="cover-song-checkbox" type="checkbox" name="">
				<input class="save" type="submit" name="" value="Save">
			</label>
			<input class="credit-cover-song" id="credit_cover_song" type="text" name="" placeholder="Please credit the songwriter if it is not you.">
		</form>
	</div>

	<div class="row col-xs-12">
		<form class="project-form" action="<?php echo BASE_URL; ?>controllers/profile/project-form-controller.php" method="post">
			<label for="description">Description
				<input class="save" type="submit" name="" value="Save">
			</label>
			<textarea class="description" id="description" name="" placeholder="If you are requesting collaboration, you can mention which instrument(s) here."></textarea>
		</form>
	</div>

	<div class="row col-xs-12">
		<form class="project-form" action="<?php echo BASE_URL; ?>controllers/profile/project-form-controller.php" method="post">
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
		<form class="project-form" action="<?php echo BASE_URL; ?>controllers/profile/project-form-controller.php" method="post">
			<label for="search_tags">Search Tags
				<input class="save" type="submit" name="" value="Save">
			</label>
			<textarea id="search_tags" name="" placeholder="Examples: Song Title, Genre, etc."></textarea>
		</form>
	</div>

	<div class="row col-xs-12">
		<form class="project-form" action="<?php echo BASE_URL; ?>controllers/profile/project-form-controller.php" method="post">
			<label for="scrolling_comment">Scrolling Comment
				<input class="save" type="submit" name="" value="Save">
			</label>
			<textarea id="scrolling_comment" name=""></textarea>
		</form>
	</div>

	<form class="project-form" action="<?php echo BASE_URL; ?>controllers/profile/project-form-controller.php" method="post" enctype="multipart/form-data">
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

	<form class="project-form" action="<?php echo BASE_URL; ?>controllers/profile/project-form-controller.php" method="post">
		<section class="row col-xs-12">
			<h4 id="type-of-collab">Type of Collaboration</h4>
		</section>
		<div class="row col-xs-12">
			<div class="type-of-collab-container">
				<div class="row">
					<div class="col-xs-4">
						<span class="glyphicon glyphicon-ok noCollabGlyphicon"></span>
						<input class="noCollab" type="submit" name="" value="No Collab">
					</div>
					<div class="col-xs-4">
						<span class="glyphicon glyphicon-ok openCollabGlyphicon"></span>
						<input class="openCollab" type="submit" name="" value="Open Collab">
					</div>
					<div class="col-xs-4">
						<span class="glyphicon glyphicon-ok requestingCollabGlyphicon"></span>
						<input class="requestingCollab" type="submit" name="" value="Requesting Collab">
					</div>
				</div>
			</div>
		</div>
	</form>

	<form class="project-form" action="<?php echo BASE_URL; ?>controllers/profile/project-form-controller.php" method="post">
		<section class="row col-xs-12">
			<h4 id="copyright">Copyright <span class="normal">(original songs only)</span></h4>
			<h4 class="red"><strong>Creative Commons licenses are irrevocable
			<span class="block">Please think carefully before choosing a CC license</strong></span></h4>
		</section>
		<div class="row col-xs-12">
			<ul id="copyright-types-container">
				<li class="row col-xs-12 first-list-item">
					<input type="radio" name="" value="all_rights_reserved">
					<img id="all-rights-reserved" src="<?php echo BASE_URL; ?>assets/images/profile-pages/copyright/all-rights-reserved.gif" alt="Copyright symbol">
					<h4 class="first-h4">All Rights Reserved</h4>
				</li>
				<li class="row col-xs-12">
					<input type="radio" name="" value="cc_by">
					<img src="<?php echo BASE_URL; ?>assets/images/profile-pages/copyright/cc-by.png" alt="Attribution symbol">
					<h4>Attribution</h4>
				</li>
				<li class="row col-xs-12">
					<input type="radio" name="" value="cc_by_nd">
					<img src="<?php echo BASE_URL; ?>assets/images/profile-pages/copyright/cc-by-nd.png" alt="Attribution-NoDerivs symbol">
					<h4>Attribution - No Derivative Works</h4>
				</li>
				<li class="row col-xs-12">
					<input type="radio" name="" value="cc_by_nc_sa">
					<img src="<?php echo BASE_URL; ?>assets/images/profile-pages/copyright/cc-by-nc-sa.png" alt="Attribution-NonCommercial-ShareAlike symbol">
					<h4>Attribution - NonCommercial - Share Alike</h4>
				</li>
				<li class="row col-xs-12">
					<input type="radio" name="" value="cc_by_sa">
					<img src="<?php echo BASE_URL; ?>assets/images/profile-pages/copyright/cc-by-sa.png" alt="Attribution-ShareAlike symbol">
					<h4>Attribution - Share Alike</h4>
				</li>
				<li class="row col-xs-12">
					<input type="radio" name="" value="cc_by_nc">
					<img src="<?php echo BASE_URL; ?>assets/images/profile-pages/copyright/cc-by-nc.png" alt="Attribution-NonCommercial symbol">
					<h4>Attribution - NonCommercial</h4>
				</li>
				<li class="row col-xs-12">
					<input type="radio" name="" value="cc_by_nc_nd">
					<img src="<?php echo BASE_URL; ?>assets/images/profile-pages/copyright/cc-by-nc-nd.png" alt="Attribution-NonCommercial-NoDerivs symbol">
					<h4>Attribution - NonCommercial - No Derivative Works</h4>
				</li>
				<li class="row col-xs-12">
					<input type="radio" name="" value="public_domain">
					<img src="<?php echo BASE_URL; ?>assets/images/profile-pages/copyright/public-domain.png" alt="Public Domain symbol">
					<h4>Public Domain</h4>
				</li>
			</ul>
		</div>
	</form>

</div>