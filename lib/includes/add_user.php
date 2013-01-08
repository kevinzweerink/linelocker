<?php 

//ini_set('display_errors',1); 
//error_reporting(E_ALL);

//Checks the email

function validEmail($email) {
	$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
	if (preg_match($regex, $email)) {
		return true;
	} else {
		return false;
	}
}

//If form has been submitted

if ($_POST) {

	//Establish missing and errors containers

	$missing = array();
	$errors = array();
	
	//Check required fields, validate, and push errors and missing to arrays.
	
	if (!$_POST['first_name']) {
		array_push($missing, "First Name");
	}
	
	if (!$_POST['last_name']) {
		array_push($missing, "Last Name");
	}
	
	if (!$_POST['password']) {
		array_push($missing, "Password");
	} else {
		$length = mb_strlen($_POST['password'], 'UTF-8');
		if ($length < 6) {
			array_push($errors, "Passwords must be at least 6 characters long");
		}
		if (!($_POST['password'] == $_POST['confirm_password'])) {
			array_push($errors, "Passwords must match");
		}
	}
	
	if ($_POST['email']) {
		if (!validEmail($_POST[email])) {
			array_push($errors, "Invalid E-mail Address");
		}
	} else {
		array_push($missing, "E-mail");
	}
	
	if (!$_POST['experience']) {
		array_push($missing, "Experience");
	} else {
		
	}
	
	//Set easier name variables
	
	$first_name = (isset($_POST['first_name'])) ? $_POST['first_name'] : '';
	$last_name = (isset($_POST['last_name'])) ? $_POST['last_name'] : '';
	$username = strtolower($first_name).strtolower($last_name);
	$email = (isset($_POST['email'])) ? $_POST['email'] : '';
	$experience = (isset($_POST['experience'])) ? $_POST['experience'] : '';
	$password = (isset($_POST['password'])) ? sha1($_POST['password']) : '';
	$country = (isset($_POST['country'])) ? $_POST['country'] : '';
	$state_province = (isset($_POST['state_province'])) ? $_POST['state_province'] : '';
	$city = (isset($_POST['city'])) ? $_POST['city'] : '';
	
	//If all is clear, go ahead and add to database
	
	if (!$missing && !$errors) {
		require_once('db_connect.inc.php');
		$query = "INSERT INTO users (first_name, last_name, username, password, experience, email, country, state_province, city)
VALUES ('$first_name', '$last_name', '$username', '$password', '$experience', '$email', '$country', '$state_province', '$city')";
		$connection->beginTransaction();
		$connection->exec($query);
		$connection->commit();
	}
}

?>

<div class="sign_up_form">

<?php

	//Spits out missing and errors
	
	if (!empty($missing)) {
		echo "<p>Please fill out the fields for: ";
			foreach ($missing as $item) {
				echo $item;
				echo ", ";
			}
		echo "</p>";
	}
	
	foreach ($errors as $message) {
		echo "<p>";
		echo $message;
		echo "</p>";
	}
?>

<form method="post">

	<label for="first_name">First Name:</label>
	<input type="text" name="first_name" placeholder="First" class="required" value="<?php echo $first_name ?>">
	
	<label for="last_name">Last Name:</label>
	<input type="text" name="last_name" placeholder="Last" class="required" value="<?php echo $last_name ?>">
	
	<label for="email">E-mail:</label>
	<input type="email" name="email" placeholder="E-mail" class="required" value="<?php echo $email ?>">
	
	<label for="password">Password:</label>
	<input type="password" name="password" placeholder="Password" class="required">
	
	<label for="password">Confirm Password:</label>
	<input type="password" name="confirm_password" placeholder="Confirm Password" class="required">
	
	<label for="experience">Experience:</label>
	<select name="experience" class="required">
		<option value="No Experience">No Experience</option>
		<option value="Beginner">Beginner</option>
		<option value="Intermediate">Intermediate</option>
		<option value="Advanced">Advanced</option>
		<option value="Pro">Pro</option>
	</select>
	
	<label for="city">City:</label>
	<input type="text" name="city" placeholder="city">
	
	<label for="state_province">State/Province:</label>
	<input type="text" name="state_province" placeholder="State/Province">
	
	<label for="country">Country:</label>
	<?php require_once("countries.inc.php") ?>
	
	<input type="submit" value="Submit">
	
</form>

</div>
