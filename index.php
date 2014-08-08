<?php
	require_once('include/config.php');

	$pageTitle = 'Play with the World Today';
	include(ROOT_PATH . 'include/header.php');
?>

	<div id="wrapper">

		<h1 class="landing-page">
			Online <a href="https://www.musiclaps.com/play?m=rs&show=all&svv=collab">Music Collaboration</a> Made Simple
		</h1>
		<h1 class="landing-page">
			...Just Log in and Start Recording
		</h1>
		<div id="landing-page-hero">
			<div id="musical-notes-map"></div>
			<script>musicianSilhouetteRandomizer()</script><!-- Randomly rotates through silhouette images of musicians on landing page -->
		</div>
		
		<div class="container" id="stage">
			<div id="stage-inner">
				<div class="row">
					<div id="soundcheck" class="col-sm-4">
						<a href="<?php echo BASE_URL; ?>live-player/">Soundcheck</a><!-- Visible at viewport widths >= 768px -->
					</div>
					<div class="col-sm-4">
						<p>
							<sup>...</sup><!-- Visible at viewport widths >= 1118px -->
							<sup></sup><!-- Visible at viewport widths <= 1117px -->
							&nbsp;&nbsp;&nbsp;Click on any button to start&nbsp;&nbsp;&nbsp;
							<sup>...</sup><!-- Visible at viewport widths >= 1118px -->
							<sup></sup><!-- Visible at viewport widths <= 1117px -->
						</p>
					</div>
					<div id="record-demo" class="col-sm-4">
						<a href="<?php echo BASE_URL; ?>live-player/">Record a Demo</a><!-- Visible at viewport widths >= 768px -->
					</div>
				</div>
				<div class="row">		
					<ul>
						<li><a href="<?php echo BASE_URL; ?>live-player/"><img src="<?php echo BASE_URL; ?>img/landing-pg/play-btn.png" alt="Play button"></a></li>
						<li><a href="<?php echo BASE_URL; ?>live-player/"><img src="<?php echo BASE_URL; ?>img/landing-pg/pause-btn.png" alt="Pause button"></a></li>
						<li><a href="<?php echo BASE_URL; ?>live-player/"><img src="<?php echo BASE_URL; ?>img/landing-pg/stop-btn.png" alt="Stop button"></a></li>
						<li><a href="<?php echo BASE_URL; ?>live-player/"><img src="<?php echo BASE_URL; ?>img/landing-pg/record-btn.png" alt="Record button"></a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="container wmuSlider">
		    <div class="row wmuSliderWrapper">
		    	<article>
		            <img src="img/sample-album-covers/electric-ladyland.jpg">
		            <img src="img/sample-album-covers/in-a-sentimental-mood.jpg">
		            <img src="img/sample-album-covers/miseducation-of-lauryn-hill.jpg">
		            <img src="img/sample-album-covers/suburbs.jpg">
		            <img src="img/sample-album-covers/21.jpg">
		        </article>
		    	<article>
		            <img src="img/sample-album-covers/at-folsom-prison.jpg">
		            <img src="img/sample-album-covers/help.png">
		            <img src="img/sample-album-covers/fire-of-unknown-origin.jpg">
		            <img src="img/sample-album-covers/bodyguard.jpg">
		            <img src="img/sample-album-covers/mandatory-fun.jpg">
		        </article>
		        <article>
		            <img src="img/sample-album-covers/dark-side-of-the-moon.jpg">
		            <img src="img/sample-album-covers/dreamboat-annie.jpg">
		            <img src="img/sample-album-covers/rumours.jpg">
		            <img src="img/sample-album-covers/damn-the-torpedoes.jpg">
		            <img src="img/sample-album-covers/nebraska.jpg">
		        </article>
		        <article>
		        	<img src="img/sample-album-covers/lungs.jpg">
		            <img src="img/sample-album-covers/colour-the-small-one.jpg">
		            <img src="img/sample-album-covers/im-over-it.jpg">
		            <img src="img/sample-album-covers/holy-fire.jpg">
		            <img src="img/sample-album-covers/mobius-strips.jpg">
		        </article>
		    </div>
		</div>
		<script>
			var options = { slideshow: false, animation: 'slide' };
			$('.wmuSlider').wmuSlider(options);
		</script>

		<section id="who-we-are">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-1">
						<h2>Who We Are</h2>
						<p><!-- Keep to approximately 45-75 characters per line -->
							Welcome to our <span class="text-shadow">online music collaboration</span> platform. Here, more than anywhere else on Earth, you can easily and securely listen to and <span>record music while collaborating</span>! Music is not sold here, but the musical collaboration which happens here increases its potential to reach, inspire, and maybe even sell more.<br><br>

							Experience <span>more than one-way sharing</span> here. Text communication is optional - let your music and voice do the talking. Have a conversation with melody and rhythm instead of words. Connect with anyone worldwide in the powerful language of music!
						</p>
						<ul>
							<li class="first-list-item"><a href="https://www.youtube.com/watch?v=MuCs5Z-MbA4">Tutorial</a></li>
							<li><a href="https://www.musiclaps.com/play?faq=view">FAQs</a></li>
						</ul>
					</div>
					<div class="col-md-4">
						<img src="<?php echo BASE_URL; ?>img/landing-pg/collaborate.png" alt="Silhouette of two people with music notes between them">
					</div>
					<div class="col-md-1"></div>
				</div>
			</div>
		</section>

		<section id="backstage">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-1">					
						<h2>Backstage</h2>
						<p><!-- Keep to approximately 45-75 characters per line -->
							Music collaboration would not exist without people.  You will find these individuals here in our backstage section.
						</p>
						<ul>
							<li class="first-list-item"><a>Find a gig</a></li>
							<li><a>Find a player</a></li>
							<li><a>Read or post a blog</a></li>
							<li><a>Post a gig, question, or killer riff!</a></li>
						</ul>
					</div>
					<div class="col-md-4">
						<img src="<?php echo BASE_URL; ?>img/landing-pg/backstage.png" alt="Backstage pass">
					</div>
					<div class="col-md-1"></div>
				</div>
			</div>
		</section>

		<section id="music-ed">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-1">					
						<h2>Music Education</h2>
						<ul>
							<li class="first-list-item"><a>Little Kids rock song of the week!</a></li>
							<li><a>Rockstar GarageBand Composition</a></li>
							<li><a>Online Video Teacher-Private Lessons</a></li>
						</ul>
					</div>
					<div class="col-md-4">
						<img src="<?php echo BASE_URL; ?>img/landing-pg/music-book.png" alt="Book with music note">
					</div>
					<div class="col-md-1"></div>
				</div>
			</div>
		</section>

		<section id="contests-and-auditions">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-1">					
						<h2>Contests and Auditions</h2>
						<ul>
							<li class="first-list-item"><a href="contests/musiclaps-contest.pdf" target="blank">In-House Contest</a></li>
							<li><a href="contests/red-hot-chili-peppers.pdf" target="blank">Band Promotion Contest</a></li>
							<li><a>Content Dev Contest</a></li>
							<li><a>SpoofTube Contest</a></li>
							<li><a>Monday Open Mics</a></li>
							<li><a>Wednesday Battles</a></li>
						</ul>
					</div>
					<div class="col-md-4">
						<img src="<?php echo BASE_URL; ?>img/landing-pg/trophy.png" alt="Trophy">
					</div>
					<div class="col-sm-1"></div>
				</div>
			</div>
		</section>

		<?php
			include(ROOT_PATH . 'include/footer.php');
		?>