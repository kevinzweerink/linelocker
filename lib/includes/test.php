<?php

include_once 'class.Database.inc.php';

$db = new Database();
$sql = "INSERT into users (first_name, last_name, username, password, city, email, state_province, country, experience) VALUES ('test', 'test', 'test', 'testing', 'test', 'test', 'test', 'test', 'test')";

echo $sql;
$db->execute_sql($sql);



?>

hello