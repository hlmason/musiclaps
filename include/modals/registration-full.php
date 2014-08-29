<div class="modal fade" id="registrationFull" tabindex="-1" role="dialog" aria-labelledby="registrationFullLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
				<h2 class="modal-title registration-full-modal-heading" id="registrationFullLabel">Email Registration</h2>
			</div>
			
			<div class="modal-body" id="registration-full-modal-body">
				<form>
					
					<div>
						<label id="email-label" for="email"><span class="musiclaps-blue">*</span> Email Address</label>
						<input id="email" type="email" name="email">
					</div>
					
					<div>
						<label for="username"><span class="musiclaps-blue">*</span> Username</label>
						<input id="username" type="text" name="username">
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

					<div>
						<label id="birth-date-label-modal" for="birth_date"><span class="musiclaps-blue">*</span> Birth Date</label>
						<!-- Birth date form -->
						<?php
							include(ROOT_PATH . 'include/birth-date-form.php');
						?>
					<!-- End of birth date form -->

					<div>
						<label id="gender-label" for="gender"><span class="musiclaps-blue">*</span> Gender</label>
						<select>
							<option value=""></option>
							<option value="male">Male</option>
							<option value="female">Female</option>
							<option value="other">Other</option>
						</select>
					</div>
					
					<div>
						<label id="zip-label" for="zip"><span class="musiclaps-blue">*</span> Zip Code</label>
						<input id="zip" type="text" name="zip">
					</div>
					
					<div>
						<img id="captcha-img" src="<?php echo BASE_URL; ?>assets/images/nav-and-footer/captcha.png" alt="Captcha"><!-- Hard-coded placeholder -->
						<label for="captcha"><span class="musiclaps-blue">*</span> Please type in the text</label>
						<input id="captcha" type="text" name="captcha">
					</div>
					
					<div id="agree-checkbox">
						<input type="checkbox" name="agree" value="agree">&nbsp; I agree to the Musiclaps <a href="<?php echo BASE_URL; ?>terms/" target="blank">Terms of Use</a> and <a href="<?php echo BASE_URL; ?>privacy/" target="blank">Privacy Policy</a>.
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
