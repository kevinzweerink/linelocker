<?php

include_once 'class.Database.inc.php';

$db = new Database();
$sql = $db->format_statement('insert','users', array('one','two'), array('three','four'));

echo $sql;



?>

hello