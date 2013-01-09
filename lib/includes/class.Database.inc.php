<?php

echo "2";

include ('class.SqlFormatter.inc.php');

echo "3";

class Database {

	protected $user     = "root";
	protected $password = "root";
	protected $db       = "linelocker";
	protected $host     = "localhost";
	
	//protected $connection = mysqli_connect($host, $user, $password, $db);
	
	public function format_statement($operation, $table, $columns, $values) {
		$statement = new SqlFormatter($operation, $table, $columns, $values);
		$answer = $statement->getSQL();
		return $answer;
	}


}

?>