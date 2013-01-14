<?php

include_once 'class.Database.inc.php';

$db = new Database();
$sql = $db->format_statement('insert','users', array('first_name','last_name','username','password','city','email','state_province','country','experience'), array('test','test','test','testing','test','test','test','test','test'));
echo $sql;
$db->execute_sql($sql);



?>

hello