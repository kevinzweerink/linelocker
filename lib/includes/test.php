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

error_reporting(E_ALL);

require_once 'class.Search.inc.php';

$user_location = "Richmond";

Search::search('line','city',$user_location);

foreach (Search::$search_results as $result) {
	echo "<p>Line Creator: ";
	echo $result['creator'];
	echo "</p>";
	
}





?>