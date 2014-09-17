<?php
	require_once('../include/config.php');

	$pageTitle = 'New Arrivals';
	$page = 'New Arrivals';
	
	include(ROOT_PATH . 'include/header.php');
?>

	<div id="wrapper">
		<div class="container" id="new-arrivals-page">

			<h1>New Arrivals</h1>

			<div class="row col-xs-9" id="public-project-listings">
				<div class="row">
					<div class="col-xs-2">
						<img class="projectImg" src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="Project image"><!-- Hard-coded placeholder -->
					</div>
					<div class="col-xs-6">
						<h3>$Project Title</h3><!-- Hard-coded placeholder -->
						<h4>$Username &nbsp;&nbsp;|&nbsp;&nbsp; $# plays &nbsp;&nbsp;|&nbsp;&nbsp; $Days/Months ago</h4><!-- Hard-coded placeholder -->
					</div>
					<div class="col-xs-4">
						<span class="glyphicon glyphicon-ok"></span>
						<h4 class="last-h4">Open collab</h4>
					</div>
				</div>
			</div>

			<div class="row col-xs-3 ads-container">
				<img class="first-img" src="<?php echo BASE_URL; ?>assets/images/ads/sample-ad-1.jpg" alt="Advertisement"><!-- Hard-coded placeholder -->
				<img src="<?php echo BASE_URL; ?>assets/images/ads/sample-ad-2.jpg" alt="Advertisement"><!-- Hard-coded placeholder -->
				<img src="<?php echo BASE_URL; ?>assets/images/ads/sample-ad-3.jpg" alt="Advertisement"><!-- Hard-coded placeholder -->
			</div>

		</div>

	<?php
		include(ROOT_PATH . 'include/footer.php');
	?>