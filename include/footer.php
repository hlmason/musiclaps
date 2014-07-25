		
		<div class="space-above-footer"></div>
	</div>

	<footer class="navbar-default">
		<div class="container">
			<a class="navbar-brand" href="<?php echo BASE_URL; ?>">
				<img class="navbar-brand-img-js" src="<?php echo BASE_URL; ?>img/nav-and-footer/musiclaps-logo-original-darker.png" alt="Musiclaps logo">&nbsp; &copy; <?php echo date('Y'); ?>
			</a>
			<ul class="nav navbar-nav navbar-left">
				<li><a class="<?php if ($page == "About") { echo "active"; } ?>" href="https://www.musiclaps.com/play?about=us">About</a></li>
				<li><a class="<?php if ($page == "Press") { echo "active"; } ?>" href="#">Press</a></li>
				<li><a class="<?php if ($page == "Contact") { echo "active"; } ?>" href="https://www.musiclaps.com/play?contact=us">Contact</a></li>
				<li><a class="<?php if ($page == "Privacy") { echo "active"; } ?>" href="https://www.musiclaps.com/play?service=policy">Privacy</a></li>
				<li><a class="<?php if ($page == "Terms") { echo "active"; } ?>" href="https://www.musiclaps.com/play?service=terms">Terms</a></li>
				<li><a class="<?php if ($page == "FAQs") { echo "active"; } ?>" href="https://www.musiclaps.com/play?faq=view">FAQs</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="https://www.facebook.com/Musiclaps" target="blank"><img id="facebook-icon" src="<?php echo BASE_URL; ?>img/nav-and-footer/facebook-icon.png" alt="Facebook icon"></a></li>
				<li><a href="https://twitter.com/musiclaps" target="blank"><img id="twitter-icon" src="<?php echo BASE_URL; ?>img/nav-and-footer/twitter-icon.png" alt="Twitter icon"></a></li>
				<li><a href="https://www.youtube.com/user/Musiclaps" target="blank"><img id="youtube-icon" src="<?php echo BASE_URL; ?>img/nav-and-footer/youtube-icon.png" alt="YouTube icon"></a></li>
			</ul>
		</div>
	</footer>
	<script src="http://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
	<script>
		  WebFont.load({
		    google: {
		      families: ['Roboto Condensed', 'Roboto', 'Allerta Stencil' ]
		    }
		  });
	</script>
	<script src="<?php echo BASE_URL; ?>js/demo.js"></script>
</body>
</html>