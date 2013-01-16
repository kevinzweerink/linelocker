<?php

class Database {

	protected $user     = "root";
	protected $password = "root";
	protected $db       = "linelocker";
	protected $host     = "localhost";
	protected $result;
	protected $connection;
	
	public function execute_sql($query) {
	
		$this->connection = new mysqli($this->host, $this->user, $this->password, $this->db);
		$this->connection->query($query);
		$this->connection->close();
	}
	
	public function retrieve_sql($query) {
	
		$this->connection = new mysqli($this->host, $this->user, $this->password, $this->db);
		$this->result = $this->connection->query($query)->fetch_assoc();
		$this->connection->close();
		
	}
	
	public function get_result($key) {
		return $this->result[$key];
	}

}

?>