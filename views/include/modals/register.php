<div class="modal fade" id="registerJS" tabindex="-1" role="dialog" aria-labelledby="registerLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			
			<div class="modal-header" id="register-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
				<h2 class="modal-title register-modal-heading" id="registerLabel">Register</h2>
			</div>

			<?php
				include(ROOT_PATH . 'views/include/modals/social-network-login.php');
			?>
			
			<div class="modal-footer" id="register-modal-footer">
				<button id="registrationFullJS" type="button">Register with Email</button>
		    </div>

		</div>
	</div>
</div>
