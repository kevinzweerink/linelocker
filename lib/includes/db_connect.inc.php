<?php
/* Connect to an ODBC database using driver invocation */
$dsn = 'mysql:dbname=linelocker;host=localhost';
$user = 'root';
$password = 'root';

$connection = new PDO($dsn, $user, $password);

?>