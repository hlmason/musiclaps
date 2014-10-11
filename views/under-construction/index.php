<?php
	require_once('../../controllers/require/config.php');

	$page_title = 'Under Construction';
	
	include(ROOT_PATH . 'views/include/header.php');
?>

	<div id="wrapper">
		<div class="container" id="construction-page">

		<h1>
			Under Construction
		</h1>
		<h2>
			This Page Coming Soon!
		</h2>
		<a href="<?php echo BASE_URL; ?>"><span class="glyphicon glyphicon-home"></span></a>
		<div id="space-above-construction-stage"></div>

		<div class="container" id="stage">
			<div id="stage-inner">
			</div>
		</div>

		</div>

	<?php
		include(ROOT_PATH . 'views/include/footer.php');
	?>