<?php
require_once 'class.Spot.inc.php';

$city = 'Richmond';
$state = 'VA';
$location = 'Byrd Park';
$rating = "1246325778636654";
$id = 15;
$review = "this is a nice place.";
$creator = "Brannon Dorsey";
$user = "Kevin Zweerink";

$Spot = new Spot($city, $state, $location, $rating, $review, $creator, $user, $id);
//$Spot->create_spot();
$Spot->average_rating();
?>
