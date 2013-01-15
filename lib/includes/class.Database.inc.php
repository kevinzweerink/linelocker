<?php

class Database {

	protected $user     = "root";
	protected $password = "root";
	protected $db       = "linelocker";
	protected $host     = "localhost";
	public $result;
	protected $connection;
	
	public function execute_sql($query) {
		
		$this->connection = new mysqli($this->host, $this->user, $this->password, $this->db);
		$this->connection->query($query);
		$this->result = $this->connection->fetch_assoc();
		$this->connection->close();
	}

}

?>