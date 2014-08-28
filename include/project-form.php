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
		<select class="pull-right project-type">
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
			<select class="pull-right project-type">
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
			<label for="cover_song">Cover Song Composer <span class="normal">(Please credit non-original songs.)</span>
				<input class="save pull-right" type="submit" value="Save">
			</label>
			<input id="cover_song" type="text" name="cover_song">
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
				include(ROOT_PATH . 'include/genre-form.php');
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
						<div id="save-background-img-and-trash-container">
							<input class="save-background-img" type="submit" value="Save">
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
				<input type="submit" value="No Collab">
				<input type="submit" value="Open Collab">
				<input type="submit" value="Requesting Collab">
			</div>
		</div>
	</form>

</div>