<div class="sign_up_form">

<form>

	<label for="first_name">First Name:</label>
	<input type="text" name="first_name" placeholder="First" class="required">
	
	<label for="last_name">Last Name:</label>
	<input type="text" name="last_name" placeholder="Last" class="required">
	
	<label for="email">E-mail:</label>
	<input type="email" name="email" placeholder="E-mail" class="required">
	
	<label for="password">Password</label>
	<input type="password" name="last_name" placeholder="Password" class="required">
	
	<label for="country">Country:</label>
	<?php require_once("countries.inc.php") ?>
	
	<label for="state_province">State/Province</label>
	<input type="text" name="state_province" placeholder="State/Province">
	
	<label for="city">City</label>
	<input type="text" name="city" placeholder="city">
	
	<label for="phone_number">Phone Number</label>
	<input type="tel" name="telephone" placeholder="1-555-555-5555">
	
	<label for="phone_carrier">Phone Carrier</label>
	<select name="phone_carrier">
		<option value="Verizon" selected="selected">Verizon</option>
		<option value="AT&T">AT&T</option>
		<option value="T-Mobile">T-Mobile</option>
		<option value="Sprint">Sprint</option>
	</select>
	
	<p>We ask for your phone number so we can text you when people invite you to lines or join your lines. If you don't want that to happen, don't add your phone number, it's cool. Also text messages won't work outside of the U.S. or to non-major carriers.</p>
	
	<input type="submit" value="Submit">
	
</form>

</div>
