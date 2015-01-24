<div class="modal fade" id="loginJS" tabindex="-1" role="dialog" aria-labelledby="loginLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">

			<div class="modal-header" id="login-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
				<h2 class="modal-title login-modal-heading" id="loginLabel">Log in</h2>
			</div>

			<?php
				include(ROOT_PATH . 'views/include/modals/social-network-login.php');
			?>

			<form action="<?php echo BASE_URL; ?>controllers/login-controller.php" method="post">
				<div class="modal-body" id="login-modal-body">
					<input type="text" name="userid" placeholder="Username">
					<input type="password" name="password" placeholder="Password">
					<div class="error-message">	

					</div>
				</div>
				<div class="modal-footer">
					<a>Forgot Password</a>
					<input type="submit" name="login" value="Log in">
			    </div>
			</form>

		</div>
	</div>
</div>
	