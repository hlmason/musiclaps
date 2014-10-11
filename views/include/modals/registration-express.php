<!-- Express registration per Bart's request.  Not sure where/how this is going to be integrated. -->
<div class="modal fade" id="registrationExpress" tabindex="-1" role="dialog" aria-labelledby="registrationExpressLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			
			<div class="modal-header" id="registration-express-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
				<h2 class="modal-title registration-express-modal-heading" id="registrationExpressLabel">Email Registration</h2>
			</div>
			
			<form action="<?php echo BASE_URL; ?>controllers/registration-controller.php" method="post">	
				<div class="modal-body" id="registration-express-modal-body">
					<div>
						<label for="email"><span class="musiclaps-blue">*</span> Email Address</label>
						<input id="email" type="email" name="email">
					</div>
					
					<div>
						<label for="username"><span class="musiclaps-blue">*</span> Username</label>
						<input id="username" type="text" name="userid">
					</div>
					
					<div>
						<label for="password"><span class="musiclaps-blue">*</span> Password <span class="glyphicon glyphicon-question-sign"></span></label>
						<div class="password-req" id="passwordReq">Passwords must contain 6 to 20 characters and at least 1 letter and 1 number</div>
						<input id="password" type="password" name="password">
					</div>
					
					<div>
						<label for="confirm_password"><span class="musiclaps-blue">*</span> Confirm Password</label>
						<input id="confirm_password" type="password" name="confirm_password">
					</div>

					<div id="agree-checkbox">
						<input type="checkbox" name="tos" value="agree">&nbsp; I agree to the Musiclaps <a href="<?php echo BASE_URL; ?>views/terms/" target="blank">Terms of Use</a> and <a href="<?php echo BASE_URL; ?>views/privacy/" target="blank">Privacy Policy</a>.
					</div>
				</div>
				
				<div class="modal-footer registration-modal-footer">
					<input type="submit" value="Register">
				</div>
			</form>
		</div>
	</div>
</div>
