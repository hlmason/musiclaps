<!-- Express registration per Bart's request.  Not sure where/how this is going to be integrated. -->
<div class="modal fade" id="registrationExpress" tabindex="-1" role="dialog" aria-labelledby="registrationExpressLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
				<h2 class="modal-title registration-express-modal-heading" id="registrationExpressLabel">Email Registration</h2>
			</div>
			
			<div class="modal-body" id="registration-express-modal-body">
				<form>

					<div>
						<label for="email"><span class="musiclaps-blue">*</span> Email Address</label>
						<input id="email" type="email" name="email">
					</div>
					
					<div>
						<label for="username"><span class="musiclaps-blue">*</span> Username</label>
						<input id="username" type="username" name="username">
					</div>
					
					<div>
						<label for="password"><span class="musiclaps-blue">*</span> Password <span class="glyphicon glyphicon-question-sign"></span></label>
						<div id="password-req">&nbsp; At least 1 letter and number</div>
						<input id="password" type="text" name="password">
					</div>
					
					<div>
						<label for="confirm_password"><span class="musiclaps-blue">*</span> Confirm Password</label>
						<input id="confirm_password" type="password" name="confirm_password">
					</div>
					
				</form>
			</div>
			
			<div class="modal-footer registration-modal-footer">
				<form>
					<input type="submit" value="Register">
				</form>
			 </div>

		</div>
	</div>
</div>
