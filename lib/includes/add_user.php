<?php 

//NEW OO STYLE STUFF

require_once 'class.User.inc.php';

$message;

if (!empty($_POST)) {
	$user = new User (
		$_POST['first_name'] ? $_POST['first_name'] : NULL, 
		$_POST['last_name'] ? $_POST['last_name'] : NULL, 
		$_POST['password'] ? $_POST['password'] : NULL, 
		$_POST['confirm_password'] ? $_POST['confirm_password'] : NULL, 
		$_POST['email'] ? $_POST['email'] : NULL, 
		$_POST['experience'] ? $_POST['experience'] : NULL, 
		$_POST['equipment'] ? $_POST['equipment'] : NULL, 
		$_POST['city'] ? $_POST['city'] : NULL, 
		$_POST['state_province'] ? $_POST['state_province'] : NULL, 
		$_POST['country'] ? $_POST['country'] : NULL);
	$user->prep_user_info();
	$message = $user->create_user();
}

?>

<div class="sign_up_form">

<?php

	//Spits out missing and errors
	echo $message;
	
?>

<form method="post">

	<label for="first_name">First Name:</label>
	<input type="text" name="first_name" placeholder="First" class="required" value="<?php !empty($_POST) ? $user->display('first_name') : ''; ?>" >
	
	<label for="last_name">Last Name:</label>
	<input type="text" name="last_name" placeholder="Last" class="required" value="<?php !empty($_POST) ? $user->display('last_name') : '';?>" >
	
	<label for="email">E-mail:</label>
	<input type="email" name="email" placeholder="E-mail" class="required" value="<?php !empty($_POST) ? $user->display('email') : ''; ?>" >
	
	<label for="password">Password:</label>
	<input type="password" name="password" placeholder="Password" class="required" >
	
	<label for="password">Confirm Password:</label>
	<input type="password" name="confirm_password" placeholder="Confirm Password" class="required" >
	
	<label for="experience">Experience:</label>
	<select name="experience" class="required">
		<option value="No Experience">No Experience</option>
		<option value="Beginner">Beginner</option>
		<option value="Intermediate">Intermediate</option>
		<option value="Advanced">Advanced</option>
		<option value="Pro">Pro</option>
	</select>
	
	<label for="city">City:</label>
	<input type="text" name="city" placeholder="city" value="<?php !empty($_POST) ? $user->display('city') : ''; ?>">
	
	<label for="state_province">State/Province:</label>
	<input type="text" name="state_province" placeholder="State/Province" value="<?php !empty($_POST) ? $user->display('state') : ''; ?>">
	
	<label for="country">Country:</label>
	<?php require_once("countries.inc.php") ?>
	
	<input type="submit" value="Submit">
	
</form>

</div>
