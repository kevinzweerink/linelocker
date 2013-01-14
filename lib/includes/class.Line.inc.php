<?php

require_once 'class.Database.inc.php'


class Line {
	
	private $location;
	private $length;
	private $type;
	private $width;
	private $users;
	private $equipment_accounted;
	private $equipment_needed;
	private $date;
	private $time;
	
	public function __construct($location, $length, $type, $width, $users, $equipment_accounted, $equipment_needed) {
		$this->location            = $location;
		$this->length              = $length;
		$this->type                = $type;
		$this->width               = $width;
		$this->users               = $users;
		$this->equipment_accounted = $equipment_accounted;
		$this->equipment_needed    = $equipment_needed;
	}
	
	public function create_line() {
	
		//Uses Database class (unfinished) to add the line to the database
			
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