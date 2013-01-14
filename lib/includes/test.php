<?php

require_once 'class.User.inc.php';

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
$user->create_user();



?>

hello

