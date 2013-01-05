<?php 

//ini_set('display_errors',1); 
//error_reporting(E_ALL);

function validEmail($email) {
	$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
	if (preg_match($regex, $email)) {
		return true;
	} else {
		return false;
	}
}


if ($_POST) {

	$missing = [];
	$errors = [];
	
	
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
	}
	
	if ($_POST['email']) {
		if (!validEmail($_POST[email])) {
			array_push($errors, "Invalid E-mail Address");
		}
	} else {
		array_push($missing, "E-mail");
	}
	
	$first_name = (isset($_POST['first_name'])) ? $_POST['first_name'] : '';
	$last_name = (isset($_POST['last_name'])) ? $_POST['last_name'] : '';
	$username = strtolower($first_name).strtolower($last_name);
	$email = (isset($_POST['email'])) ? $_POST['email'] : '';
	$passcode = (isset($_POST['password'])) ? $_POST['password'] : '';
	$country = (isset($_POST['country'])) ? $_POST['country'] : '';
	$state_province = (isset($_POST['state_province'])) ? $_POST['state_province'] : '';
	$city = (isset($_POST['city'])) ? $_POST['city'] : '';
	
	if (!$missing && !$errors) {
		require_once('db_connect.inc.php');
		$query = "INSERT INTO users (first_name, last_name, password, username, email, country, state_province, city)
VALUES ('$first_name', '$last_name', '$username', '$passcode', '$email', '$country', '$state_province', '$city')";
		$connection->beginTransaction();
		$connection->exec($query);
		$connection->commit();
	}
}

?>

<div class="sign_up_form">

<?php
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
	
	<label for="password">Password</label>
	<input type="password" name="password" placeholder="Password" class="required">
	
	<label for="country">Country:</label>
	<?php require_once("countries.inc.php") ?>
	
	<label for="state_province">State/Province:</label>
	<input type="text" name="state_province" placeholder="State/Province">
	
	<label for="city">City:</label>
	<input type="text" name="city" placeholder="city">
	
	<input type="submit" value="Submit">
	
</form>

</div>
