<?php

require_once 'class.Database.inc.php'


class Line {
	
	private $city;
	private $state;
	private $length;
	private $type;
	private $width;
	private $creator;
	private $users;
	private $equipment_accounted;
	private $equipment_needed;
	private $date;
	private $time;
	private $message;
	
	private $db = new Database();
	
	public function __construct($city, $state, $length, $type, $width, $creator, $users, $equipment_accounted, $equipment_needed, $date, $time, $message) {
		$this->city                = $city;
		$this->state               = $state;
		$this->length              = $length;
		$this->type                = $type;
		$this->width               = $width;
		$this->creator             = $creator;
		$this->users               = $users;
		$this->equipment_accounted = $equipment_accounted;
		$this->equipment_needed    = $equipment_needed;
		$this->date                = $date;
		$this->time                = $time;
		$this->message             = $message;
		
	}
	
	public function create_line() {
	
		$sql = "INSERT INTO line (city, state, length, type, width, creator, users, equipment_accounted, equipment_needed, date, time, message) VALUES ('$city', '$state', '$length', '$type', '$width', '$creator', '$users', '$equipment_accounted', '$equipment_needed', '$message')";
		$this->db->execute_sql($sql);
		
			
	}
	
	public function edit_line() {
		
		//Uses Database class (unfinished) to change parameters of the line.
		
	}
	
	public function rate_line() {
		
		//Takes a line that is past expiration date and adds it to the spots table,
		//also removes it from the lines table
		
	}	
	
}


?>