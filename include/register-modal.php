<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="registerLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
				<h2 class="modal-title register-modal-heading" id="registerLabel">Register</h2>
			</div>

			<?php
				include(ROOT_PATH . 'include/social-network-login-modal.php');
			?>
			
			<div class="modal-footer" id="register-modal-footer">
				<input id="registerWithEmailJS" type="submit" value="Register with Email">
		    </div>

		</div>
	</div>
</div>
