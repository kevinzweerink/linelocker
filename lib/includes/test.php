<?php

require_once 'class.Line.inc.php';

$city = "Richmond";
$state = "Virginia";
$length = '50';
$type = "Standard";
$width = "1 inch";
$creator = "Kevin Zweerink";
$users = "This guy";
$equipment_accounted = "Everything necessary";
$equipment_needed = "none";
$date = "Yesterday";
$time = "now";
$message = "loser";

$line = new Line($city, $state, $length, $type, $width, $creator, $users, $equipment_accounted, $equipment_needed, $date, $time, $message);
$line->create_line();



?>

hello

