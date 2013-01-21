<?php

require_once 'class.Database.inc.php';


class Line {

	//Variables that are real attributes
	
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
	
	//Variables that are for method things
	
	private $line_info_ready=FALSE;
	private $error_messages;
	private $validation_messages = array();
	private $validation_missing = array();
	
	//Database variables
	
	private $sql;
	private $db;
	
	//Constructor - pass attributes to class, will set them and initialize DB
	
	public function __construct($city=NULL, $state=NULL, $location=NULL, $length=NULL, $type=NULL, $width=NULL, $creator=NULL, $equipment_accounted=NULL, $equipment_needed=NULL, $date=NULL, $time=NULL, $message=NULL) {
		$this->city                = $city;
		$this->state               = $state;
		$this->location            = $location;
		$this->length              = $length;
		$this->type                = $type;
		$this->width               = $width;
		$this->creator             = $creator;
		$this->equipment_accounted = $equipment_accounted;
		$this->equipment_needed    = $equipment_needed;
		$this->date                = $date;
		$this->time                = $time;
		$this->message             = $message;
		$this->db 		           = new Database();	
	
	}
	
	//Takes messages from form validation process and formats them to be output as html in p tags.
	
	public function format_messages() {
		if (!empty($this->validation_missing)) {
		    $this->error_messages .= "<p>Please fill out the following fields:";
		    foreach ($this->validation_missing as $missing) {
			    $this->error_messages .= " ".$missing;
		    }
		    $this->error_messages .= ".</p>";
	    }
	    if (!empty ($this->validation_messages)) {
		    foreach ($this->validation_messages as $messages) {
			    $this->error_messages .= "<p>";
			    $this->error_messages .= $messages;
			    $this->error_messages .= "</p>";
		    }
	    }
	}
	
	//Validates form info when creating a new line
	
	public function prep_line_info() {
    
	    if (!$this->city) {
	    	array_push($this->validation_missing, 'city');
	    } 
	    if (!$this->state) {
	    	array_push($this->validation_missing, 'state');
	    } 
	    if (!$this->location) {
	    	array_push($this->validation_missing, 'location');
	    } 
	    if (!$this->length) {
		    array_push ($this->validation_missing, 'length');
	    } 
	    if (!$this->type) {
		    array_push ($this->validation_missing, 'type');
	    } 
	    if (!$this->width) {
		    array_push ($this->validation_missing, 'width');
	    } 
	    if (!$this->equipment_accounted) {
		    array_push ($this->validation_missing, 'equipment accounted for');
	    } 
	    if (!$this->date) {
		    array_push($this->validation_missing, 'date');
	    }
	    if (!$this->time) {
		    array_push($this->validation_missing, 'time');
	    }
	    if (!$this->message) {
		    array_push($this->validation_missing, 'message');
	    }
	    
	    if (!empty($this->validation_missing) || !empty($this->validation_errors)) {
		   	$this->format_messages();
	    } else {
		   	$this->line_info_ready = TRUE;
	    }
	  
    }
    
    //Takes valid info for new line and inserts into DB via $this->db
	
	public function create_line() {
	
		if ($this->line_info_ready) {
	
		$this->sql = "INSERT INTO line (city, state_province, location, length, type, width, creator, users, equipment_accounted, equipment_needed, date, time, message) VALUES ('$this->city', '$this->state', '$this->location', '$this->length', '$this->type', '$this->width', '$this->creator', '$this->users', '$this->equipment_accounted', '$this->equipment_needed', '$this->date', '$this->time', '$this->message')";
		
		$this->db->execute_sql($this->sql);
		
		} else {
			return $this->error_messages;
		}
				
	}
	
	//Gets variables inside this class
	
	public function display($arg) {
	    echo $this->$arg;
    }
    
    //Has not been written yet.
    
	public function edit_line() {
		
		//Uses Database class (unfinished) to change parameters of the line.
		
	}
	
	//Also unwritten
	
	public function rate_line() {
		
		//Takes a line that is past expiration date and adds it to the spots table,
		//also removes it from the lines table
		
	}	
	
}


?>