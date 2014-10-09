<?php
	require_once('../include/config.php');

	$page_title = 'Recording Player';
	
	include(ROOT_PATH . 'include/header-logged-in.php');
	include(ROOT_PATH . 'include/db-connection.php');
	include(ROOT_PATH . 'controllers/get-profile.php');
	include(ROOT_PATH . 'include/profile/user-menu.php');

?>
		
			<div class="row col-lg-10 col-lg-offset-1">				
					
				<div class="row col-xs-12 col-md-9" id="new-project-page">
					
					<div class="row">
						<div class="col-xs-12">
							<div id="recording-player"></div><!-- Placeholder -->
						</div>
					</div>

				</div>
				<?php
					include(ROOT_PATH . 'include/profile/recommended.php');
				?>	
			
			</div>
			<div class="col-lg-1"></div>	
		
		</div>

	<?php
		include(ROOT_PATH . 'include/footer-logged-in.php');
	?>