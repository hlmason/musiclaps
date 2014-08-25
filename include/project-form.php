<div id="projectForm">

	<!-- Recording Player -->
	<div class="row col-xs-12 live-player-container">
		<iframe width="620" height="380" src="https://www.musiclaps.com/embed/player?songid=null" frameborder="0" scrolling="no"></iframe><!-- Placeholder -->
	</div>
	<!-- End of Recording Player -->

	<section class="row col-xs-12" id="project-form-header">
		<h3>Test</h3>
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
		<img id="audio-mixer" src="<?php echo BASE_URL; ?>assets/images/profile-pages/audio-mixer.jpg" alt="Audio mixer icon">
		<h4>$instrument name</h4><!-- Hard-coded placeholder -->
		<h5>$date project started</h5>

		<!-- Markup is backwards because elements are floated right -->
		<span class="glyphicon glyphicon-trash pull-right"></span>
		<select class="pull-right project-type">
			<option value="private">Private</option><!-- Hard-coded placeholder -->
		</select>
	</section>
	<section class="row col-xs-12" id="volume-and-pan">
		<span class="glyphicon glyphicon-volume-up"></span>
		<div id="slider"></div>
	</section>

</div>