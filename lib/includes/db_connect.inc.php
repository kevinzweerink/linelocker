<?php
/* Connect to an ODBC database using driver invocation */
$dsn = 'mysql:dbname=linelocker;host=localhost';
$user = 'root';
$passcode = 'root';

$connection = new PDO($dsn, $user, $passcode);

?>