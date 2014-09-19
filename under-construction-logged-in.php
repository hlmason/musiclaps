<?php
	require_once('include/config.php');

	$pageTitle = 'Under Construction';
	
	include(ROOT_PATH . 'include/header-logged-in.php');
?>

	<div id="wrapper">
		<div class="container" id="construction-page">

		<h1>
			Under Construction
		</h1>
		<h2>
			This Page Coming Soon!
		</h2>
		<a href="<?php echo BASE_URL; ?>index-logged-in.php"><span class="glyphicon glyphicon-home"></span></a>
		<div id="space-above-construction-stage"></div>

		<div class="container" id="stage">
			<div id="stage-inner">
			</div>
		</div>

		</div>

	<?php
		include(ROOT_PATH . 'include/footer-logged-in.php');
	?>