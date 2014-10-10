<?php
	require_once('../../controllers/require/config.php');

	$page_title = 'Collaborations';
	
	include(ROOT_PATH . 'include/header-logged-in.php');
?>

	<div id="wrapper">
		<div class="container" id="collaborations-page">

			<h1>Collaborations</h1>

			<div class="row col-xs-12 col-sm-9">
				<?php
					include(ROOT_PATH . 'include/public-project-listings-logged-in.php');
				?>
			</div>

			<div class="row col-sm-3 ads-container"><!-- Only visible at viewport widths > 767px -->
				<img class="first-img" src="<?php echo BASE_URL; ?>assets/images/ads/sample-ad-1.jpg" alt="Advertisement"><!-- Placeholder -->
				<img src="<?php echo BASE_URL; ?>assets/images/ads/sample-ad-2.jpg" alt="Advertisement"><!-- Placeholder -->
				<img src="<?php echo BASE_URL; ?>assets/images/ads/sample-ad-3.jpg" alt="Advertisement"><!-- Placeholder -->
			</div>

		</div>

	<?php
		include(ROOT_PATH . 'include/footer-logged-in.php');
	?>