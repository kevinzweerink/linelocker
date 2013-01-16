<?php

/*require_once 'class.User.inc.php';

$first_name = "Kevin";
$last_name = "Zweerink";
$username = "kevinzweerink";
$password = "secretpassword";
$email = "kevinzweerink@kevinzweerink.com";
$experience = "Intermediate";
$equipment = "Nothing";
$city = "Richmond";
$state = "VA";
$country = "United States";


$user = new User($first_name, $last_name, $username, $password, $email, $experience, $equipment, $city, $state, $country);
$user->create_user();*/

require_once 'class.Database.inc.php';

$statement = "SELECT first_name FROM users WHERE last_name='Zweerink'";

$connection = new Database();
$connection->execute_sql($statement);
$connection->return_result('first_name');



?>

hello