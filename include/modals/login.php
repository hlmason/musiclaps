<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
				<h2 class="modal-title login-modal-heading" id="loginLabel">Log in</h2>
			</div>

			<?php
				include(ROOT_PATH . 'include/modals/social-network-login.php');
			?>

			<form action="login.php" method="post">
				<div class="modal-body" id="login-modal-body">
					<input id="userid" type="text" name="userid" placeholder="Username">
					<input id="password" type="password" name="password" placeholder="Password">
					<div class="error-message">	
						<?= (! empty($_SESSION['login_error']) ? $_SESSION['login_error'] : '' ) ?>
					</div>
				</div>
				<div class="modal-footer">
					<a>Forgot Password</a>
					<input type="submit" value="Log in">
			    </div>
			</form>

		</div>
	</div>
</div>
	