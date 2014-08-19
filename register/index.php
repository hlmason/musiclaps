<?php
	require_once('../include/config.php');

	$pageTitle = 'Register';
	
	include(ROOT_PATH . 'include/header.php');
?>

	<div id="wrapper">
		<div class="container" id="registration-page">
			<div class="row col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">

				<form>
					<div>
						<label id="email-label" for="email"><span class="musiclaps-blue">*</span> Email Address</label>
						<input id="email" type="email" name="email">
					</div>
					<div>
						<label for="username"><span class="musiclaps-blue">*</span> Username</label>
						<input id="username" type="username" name="username">
					</div>
					<div>
						<label for="password"><span class="musiclaps-blue">*</span> Password</label>
						<input id="password" type="text" name="password">
					</div>
					<div>
						<label for="confirm_password"><span class="musiclaps-blue">*</span> Confirm Password</label>
						<input id="confirm_password" type="password" name="confirm_password">
					</div>
					<div>
						<label for="birthdate">Birth Date</label>
						<select class="birthdate">
							<option value=""></option>
							<option value="jan">Jan</option>
							<option value="feb">Feb</option>
							<option value="mar">Mar</option>
							<option value="apr">Apr</option>
							<option value="may">May</option>
							<option value="jun">Jun</option>
							<option value="jul">Jul</option>
							<option value="aug">Aug</option>
							<option value="sep">Sep</option>
							<option value="oct">Oct</option>
							<option value="nov">Nov</option>
							<option value="dec">Dec</option>
						</select> /
						<select>
							<option value=""></option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
						</select> /
						<select>
							<option value=""></option>
							<option value="2010">2010</option>
							<option value="2000">2000</option>
							<option value="1990">1990</option>
							<option value="1980">1980</option>
							<option value="1970">1970</option>
							<option value="1960">1960</option>
							<option value="1950">1950</option>
							<option value="1940">1940</option>
							<option value="1930">1930</option>
							<option value="1920">1920</option>
							<option value="1910">1910</option>
						</select>
					</div>
					<div>
						<label for="gender">Gender</label>
						<select>
							<option value=""></option>
							<option value="male">Male</option>
							<option value="female">Female</option>
							<option value="other">Other</option>
						</select>
					</div>
					<div>
						<label for="zip">Zip Code</label>
						<input id="zip" type="text" name="zip">
					</div>
					<div id="registration-full-submit">
						<input type="submit" value="Register">
			    	</div>
				</form>

			</div>			
			<div class="col-sm-1 col-md-2 col-lg-3"></div>	
		
		</div>

	<?php
		include(ROOT_PATH . 'include/footer.php');
	?>