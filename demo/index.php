<?php
	require_once('../include/config.php');
	include(ROOT_PATH . 'include/header.php');
?>

	<title>Musiclaps | Demo</title>
	<script src="<?php echo BASE_URL; ?>js/demo.js"></script>
</head>
<body>

	<div class="modal fade" id="selectSong" tabindex="-1" role="dialog" aria-labelledby="selectSongLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span>
						<span class="sr-only">Close</span>
					</button>
					<h4 class="modal-title" id="selectSongLabel">Select a song!</h4>
				</div>
				<div class="modal-body">
					Select a song from our collection to get started!
					<!-- <p>Testing testing</p> -->
				</div>
			</div>
		</div>
	</div>

	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header"><!-- For Firefox and IE -->
	            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	            </button>
				<a class="navbar-brand" href="<?php echo BASE_URL; ?>">
					<img src="<?php echo BASE_URL; ?>img/nav-and-footer/musiclaps-logo-original-darker.png" alt="Musiclaps logo">
				</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-left">
					<li><a href="https://www.musiclaps.com/play?m=rs&show=all&svv=new">Music</a></li>
					<li><a href="#">People</a></li>
					<li><a href="https://www.musiclaps.com/play?about=us">Our Story</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="https://www.musiclaps.com/play?login=user">Log in</a></li>
					<li><a href="https://www.musiclaps.com/play?join=new&60BD52EBC3673E6C5196F3E1">Register</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div id="wrapper">

	</div>

	<?php
		include(ROOT_PATH . 'include/footer.php');
	?>