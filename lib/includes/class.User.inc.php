<?php

require_once 'class.Database.inc.php';

class User {

	//Attribute vars
	
    private $first_name;
    private $last_name;
    private $username;
    private $password;
    private $confirm;
    private $id;
    private $email;
    private $experience;
    private $equipment;
    private $city;
    private $state;
    private $country;
    public  $saved_form_data = array();
    public  $message;
    
    //Method vars
    
    private $validation_missing = array();
    private $validation_messages = array();
    private $user_info_ready = FALSE;
    
    private $display_name;
    
    //DB vars
    
    private $db;
    private $sql;
    
    //Assigns class vars plus initialized DB conn
    
    public function __construct ($first_name=NULL, $last_name=NULL, $password=NULL, $confirm=NULL, $email=NULL, $experience=NULL, $equipment=NULL, $city=NULL, $state=NULL, $country=NULL) {
        $this->first_name   = $first_name;
        $this->last_name    = $last_name;
        $this->username     = strtolower($first_name).strtolower($last_name);
        $this->password     = $password;
        $this->confirm      = $confirm;
        $this->email        = $email;
        $this->experience   = $experience;
        $this->equipment    = $equipment;
        $this->city         = $city;
        $this->state        = $state;
        $this->country      = $country;
        
        $this->display_name = ucfirst($first_name)." ".ucfirst($last_name);
        $this->db           = new Database();
    }
    
    //Creates user
    
    public function create_user() {
    
    	if ($this->user_info_ready) {
    
	    	$this->sql = "INSERT INTO users (first_name, last_name, username, password, email, experience, equipment, city, state_province, country) VALUES ('$this->first_name', '$this->last_name', '$this->username', '$this->password', '$this->email', '$this->experience', '$this->equipment', '$this->city', '$this->state', '$this->country')";
			
			$this->db->execute_sql($this->sql);
			
			return "Success";
		
		} else {
		
			return $this->message;
			
		}
    	
        
    }
    
    public function edit_user() {
        
    }
    
    //Formats form validation errors exports as p tags
    
    public function format_messages() {
	    if (!empty($this->validation_missing)) {
		    $this->message .= "<p>Please fill out the following fields:";
		    foreach ($this->validation_missing as $missing) {
			    $this->message .= " ".$missing;
		    }
		    $this->message .= ".</p>";
	    }
	    if (!empty ($this->validation_messages)) {
		    foreach ($this->validation_messages as $messages) {
			    $this->message .= "<p>";
			    $this->message .= $messages;
			    $this->message .= "</p>";
		    }
	    }
    }
    
    //Validates form
    
    public function prep_user_info() {
    
	    if (!$this->first_name) {
	    	array_push($this->validation_missing, 'first name');
	    } 
	    if (!$this->last_name) {
	    	array_push($this->validation_missing, 'last name');
	    } 
	    if (!$this->password) {
	    	array_push($this->validation_missing, 'password');
	    } 
	    if ($this->password !== $this->confirm) {
		    array_push($this->validation_messages, "Passwords don't match.");
	    } 
	    if (!$this->email) {
		    array_push ($this->validation_missing, 'email');
	    } 
	    if (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/',$this->email)) {
		    array_push ($this->validation_messages, 'Please use a valid e-mail.');
	    } 
	    if (!$this->city) {
		    array_push ($this->validation_missing, 'city');
	    } 
	    if (!$this->state) {
		    array_push ($this->validation_missing, 'state');
	    } 
	    if (!$this->country) {
		    array_push($this->validation_missing, 'country');
	    }
	    
	    if (!empty($this->validation_missing) || !empty($this->validation_messages)) {
		   	$this->format_messages();
	    } else {
		    $this->password = sha1($this->password);
		   	$this->user_info_ready = TRUE;
	    }
	  
    }
    
    //Displays anything from class
    
    public function display($arg) {
	    echo $this->$arg;
    }
    
    
    
    public function delete_user() {
        
    }

}
?>