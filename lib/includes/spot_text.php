<?php
require_once 'class.Spot.inc.php';

$city = 'Richmond';
$state = 'VA';
$location = 'Byrd Park';
$rating = 4;
$review = "this is a nice place.";
$creator = "Brannon Dorsey";
$user = "Kevin Zweerink";

$Spot = new Spot();
$Spot->create_spot($city, $state, $location, $rating, $review, $creator, $user);
?>
