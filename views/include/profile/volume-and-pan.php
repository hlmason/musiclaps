	<section class="row col-xs-12 volumeAndPan">
		<form class="project-form" action="" method="post">
			<div class="volume-and-pan sm"><!-- Only visible at viewport widths > 580px -->
				<span class="glyphicon glyphicon-volume-up"></span>
				<input class="slider" name="slider" type="range" min=0 max=100 value=0>
				<h4>100</h4><!-- Hard-coded placeholder -->

				<h4 class="left-to-right">L</h4>
				<input class="slider" name="slider" type="range" min=0 max=100 value=0>
				<h4>R</h4>

				<span class="glyphicon glyphicon-save"></span>
				<input class="save-volume-and-pan" type="submit" name="" value="Save">
			</div>

			<div class="volume-and-pan xs"><!-- Only visible at viewport widths <= 580px -->
				<div>
					<span class="glyphicon glyphicon-volume-up"></span>
					<input class="slider" name="slider" type="range" min=0 max=100 value=0>
					<h4>100</h4><!-- Hard-coded placeholder -->
				</div>

				<div>
					<h4 class="left-to-right">L</h4>
					<input class="slider" name="slider" type="range" min=0 max=100 value=0>
					<h4 class="right">R</h4>
				</div>

				<div>
					<span class="glyphicon glyphicon-save"></span>
					<input class="save-volume-and-pan" type="submit" name="" value="Save">
				</div>
			</div>
		</form>
	</section>