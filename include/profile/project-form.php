<div id="projectForm">

	<!-- Recording Player -->
	<div class="row col-xs-12 live-player-container">
		<iframe width="620" height="380" src="https://www.musiclaps.com/embed/player?songid=null" frameborder="0" scrolling="no"></iframe><!-- Placeholder -->
	</div>
	<!-- End of Recording Player -->


	<section class="row col-xs-12" id="project-form-header">
		<h3>Project Title</h3>
		<!-- Markup is backwards because elements are floated right -->
		<span class="glyphicon glyphicon-trash pull-right"></span>
		<select class="project-type pull-right">
			<option value="private">Private</option>
			<option value="public">Public</option>
			<option value="group">Group</option>
			<option value="audition">Audition</option>
		</select>
		<span class="glyphicon glyphicon-lock pull-right"></span>
		<span class="glyphicon glyphicon-repeat pull-right"></span>
	</section>

	
	<section class="row col-xs-12">
		<div id="project-info-bar">
			<h4 class="first-h4">$project #</h4><!-- Hard-coded placeholder -->
			<img class="audio-mixer" id="audioMixer" src="<?php echo BASE_URL; ?>assets/images/profile-pages/audio-mixer.jpg" alt="Audio mixer icon">
			<h4>$instrument name</h4><!-- Hard-coded placeholder -->
			<h5>$date project started</h5>

			<!-- Markup is backwards because elements are floated right -->
			<span class="glyphicon glyphicon-trash pull-right"></span>
			<select class="project-type pull-right">
				<option value="private">Private</option><!-- Hard-coded placeholder -->
			</select>
		</div>
	</section>
	<section class="row col-xs-12" id="volumeAndPan">
		<div id="volume-and-pan">
			<span class="glyphicon glyphicon-volume-up"></span>
			<div class="slider"></div>
			<h4>100</h4><!-- Hard-coded placeholder -->

			<h4 id="left-to-right">L</h4>
			<div class="slider"></div>
			<h4>R</h4>

			<span class="glyphicon glyphicon-save pull-right"></span>
			<input class="pull-right" id="save-volume-and-pan" type="submit" value="Save">
		</div>
	</section>


	<form id="in-progress-private">
		<div class="row col-xs-12">
			<label for="title">Title
				<input class="save pull-right" type="submit" value="Save">
			</label>
			<input id="title" type="text" name="title">
		</div>

		<div class="row col-xs-12">
			<label id="cover-song-label" for="cover_song">Cover Song
				<input class="cover-song-checkbox" type="checkbox" name="arrangement">
				<input class="save pull-right" type="submit" value="Save">
			</label>
			<input id="cover_song" type="text" name="cover_song" placeholder="Please credit the songwriter if it is not you.">
		</div>

		<div class="row col-xs-12">
			<label for="description">Description
				<input class="save pull-right" type="submit" value="Save">
			</label>
			<textarea id="description" name="description" placeholder="If you are requesting collaboration, you can mention which instrument(s) here."></textarea>
		</div>

		<label for="genre">Genre <span class="normal">(select one or more)</span></label>
		<div id="genre-form-projects">
			<!-- Genre form -->
			<?php
				include(ROOT_PATH . 'include/profile/genre-form.php');
			?>
		<!-- End of genre form -->

		<div class="row col-xs-12">
			<label for="search_tags">Search Tags
				<input class="save pull-right" type="submit" value="Save">
			</label>
			<textarea id="search_tags" name="search_tags" placeholder="Examples: Song Title, Genre, etc."></textarea>
		</div>

		<div class="row col-xs-12">
			<label for="scrolling_comment">Scrolling Comment
				<input class="save pull-right" type="submit" value="Save">
			</label>
			<textarea id="scrolling_comment" name="scrolling_comment"></textarea>
		</div>

		<div class="row col-xs-12">
			<label for="stage_background_img">Stage Background Image <span class="normal">(620w x 190h recommended)</span>
			</label>
		</div>
		<div class="row col-xs-12">
			<div class="row">
				<div class="col-xs-6">
					<div id="no-img-container">
						<h2>no image</h2>
					</div>
				</div>
				<div class="col-xs-6">
					<div id="upload-stage-background-img"></div>
					<div id="upload-stage-background-img-container">
						<input class="choose-file" id="choose_stage_background_img" type="submit" value="Choose File">&nbsp; <span>No file chosen</span>
						<div id="save-stage-background-img-and-trash-container">
							<input class="save-stage-background-img" type="submit" value="Save">
							<span class="glyphicon glyphicon-trash pull-right"></span>
						</div>
					</div>
				</div>
			</div>
		</div>

		<section class="row col-xs-12">
			<h4 id="type-of-collab">Type of Collaboration</h4>
		</section>
		<div class="row col-xs-12">
			<div id="type-of-collab-container">
				<div class="row">
					<div class="col-xs-4">
						<span class="glyphicon glyphicon-ok glyphiconOk" id="noCollabGlyphicon"></span>
						<button class="noCollab" type="button">No Collab</button>
					</div>
					<div class="col-xs-4">
						<span class="glyphicon glyphicon-ok glyphiconOk" id="openCollabGlyphicon"></span>
						<button class="openCollab" type="button">Open Collab</button>
					</div>
					<div class="col-xs-4">
						<span class="glyphicon glyphicon-ok glyphiconOk" id="requestingCollabGlyphicon"></span>
						<button class="requestingCollab" type="button">Requesting Collab</button>
					</div>
				</div>
			</div>
		</div>

		<section class="row col-xs-12">
			<h4 id="copyright">Copyright <span class="normal">(original songs only)</h4>
			<h4 class="red"><strong>Creative Commons licenses are irrevocable
			<span class="block">Please think carefully before choosing a CC license</strong></span></h4>
		</section>
		<div class="row col-xs-12">
			<ul id="copyright-types-container">
				<li class="row col-xs-12 first-list-item">
					<input type="radio" name="copyright_type" value="all_rights_reserved">
					<img id="all-rights-reserved" src="<?php echo BASE_URL; ?>assets/images/profile-pages/copyright/all-rights-reserved.gif" alt="Copyright symbol">
					<h4 class="first-h4">All Rights Reserved</h4>
				</li>
				<li class="row col-xs-12">
					<input type="radio" name="copyright_type" value="cc_by">
					<img src="<?php echo BASE_URL; ?>assets/images/profile-pages/copyright/cc-by.png" alt="Attribution symbol">
					<h4>Attribution</h4>
				</li>
				<li class="row col-xs-12">
					<input type="radio" name="copyright_type" value="cc_by_nd">
					<img src="<?php echo BASE_URL; ?>assets/images/profile-pages/copyright/cc-by-nd.png" alt="Attribution-NoDerivs symbol">
					<h4>Attribution - No Derivative Works</h4>
				</li>
				<li class="row col-xs-12">
					<input type="radio" name="copyright_type" value="cc_by_nc_sa">
					<img src="<?php echo BASE_URL; ?>assets/images/profile-pages/copyright/cc-by-nc-sa.png" alt="Attribution-NonCommercial-ShareAlike symbol">
					<h4>Attribution - NonCommercial - Share Alike</h4>
				</li>
				<li class="row col-xs-12">
					<input type="radio" name="copyright_type" value="cc_by_sa">
					<img src="<?php echo BASE_URL; ?>assets/images/profile-pages/copyright/cc-by-sa.png" alt="Attribution-ShareAlike symbol">
					<h4>Attribution - Share Alike</h4>
				</li>
				<li class="row col-xs-12">
					<input type="radio" name="copyright_type" value="cc_by_nc">
					<img src="<?php echo BASE_URL; ?>assets/images/profile-pages/copyright/cc-by-nc.png" alt="Attribution-NonCommercial symbol">
					<h4>Attribution - NonCommercial</h4>
				</li>
				<li class="row col-xs-12">
					<input type="radio" name="copyright_type" value="cc_by_nc_nd">
					<img src="<?php echo BASE_URL; ?>assets/images/profile-pages/copyright/cc-by-nc-nd.png" alt="Attribution-NonCommercial-NoDerivs symbol">
					<h4>Attribution - NonCommercial - No Derivative Works</h4>
				</li>
				<li class="row col-xs-12">
					<input type="radio" name="copyright_type" value="public_domain">
					<img src="<?php echo BASE_URL; ?>assets/images/profile-pages/copyright/public-domain.png" alt="Public Domain symbol">
					<h4>Public Domain</h4>
				</li>
			</ul>
		</div>
	</form>

</div>