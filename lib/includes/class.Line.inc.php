<?php

require_once 'class.Database.inc.php';


class Line {
	
	private $city;
	private $state;
	private $location;
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
	private $sql;
	
	private $db;
	
	public function __construct($city, $state, $location, $length, $type, $width, $creator, $users, $equipment_accounted, $equipment_needed, $date, $time, $message) {
		$this->city                = $city;
		$this->state               = $state;
		$this->location            = $location;
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
		$this->db 		           = new Database();	
	
	}
	
	public function create_line() {
	
		$this->sql = "INSERT INTO line (city, state_province, location, length, type, width, creator, users, equipment_accounted, equipment_needed, date, time, message) VALUES ('$this->city', '$this->state', '$this->location', '$this->length', '$this->type', '$this->width', '$this->creator', '$this->users', '$this->equipment_accounted', '$this->equipment_needed', '$this->date', '$this->time', '$this->message')";
		
		$this->db->execute_sql($this->sql);
				
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