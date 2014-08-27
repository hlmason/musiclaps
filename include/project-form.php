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

	
	<section class="row col-xs-12" id="project-info-bar">
		<h4 class="first-h4">$project #</h4><!-- Hard-coded placeholder -->
		<img class="audio-mixer" id="audioMixer" src="<?php echo BASE_URL; ?>assets/images/profile-pages/audio-mixer.jpg" alt="Audio mixer icon">
		<h4>$instrument name</h4><!-- Hard-coded placeholder -->
		<h5>$date project started</h5>

		<!-- Markup is backwards because elements are floated right -->
		<span class="glyphicon glyphicon-trash pull-right"></span>
		<select class="pull-right project-type">
			<option value="private">Private</option><!-- Hard-coded placeholder -->
		</select>
	</section>
	<section class="row col-xs-12 volume-and-pan" id="volumeAndPan">
		<span class="glyphicon glyphicon-volume-up"></span>
		<div class="slider"></div>
		<h4>100</h4><!-- Hard-coded placeholder -->

		<h4 id="left-to-right">L</h4>
		<div class="slider"></div>
		<h4>R</h4>

		<span class="glyphicon glyphicon-save pull-right"></span>
		<h4 class="pull-right">Save</h4>
	</section>


	<div id="in-progress-private">
		<div class="row col-xs-12">
			<label for="title">Title 		
				<span class="glyphicon glyphicon-save pull-right"></span>
				<h4 class="pull-right">Save</h4>
			</label>
			<input id="title" type="text" name="title">
		</div>

		<div class="row col-xs-12">
			<label for="cover_song">Cover Song Composer (Please credit non-original songs.)</label>
			<input id="cover_song" type="text" name="cover_song">
		</div>

		<div class="row col-xs-12">
			<label for="description">Description</label>
			<textarea id="description" name="description" placeholder="If you are requesting collaboration, you can mention which instrument(s) here."></textarea>
		</div>

		<div class="row col-xs-12">
			<label for="search_tags">Search Tags</label>
			<textarea id="search_tags" name="search_tags" placeholder="Examples: Song Title, Genre, etc."></textarea>
		</div>

		<div class="row col-xs-12">
			<label for="comment_display_text">Comment Display Text?</label>
			<textarea id="comment_display_text" name="comment_display_text"></textarea>
		</div>
	</div>

</div>