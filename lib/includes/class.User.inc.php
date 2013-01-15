<?php

require_once 'class.Database.inc.php';

class User {
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
    
    private $validation_missing = array();
    private $validation_messages = array();
    
    private $display_name;
    
    private $db;
    private $sql;
    
    public function __construct ($first_name, $last_name, $username, $password, $confirm, $email, $experience, $equipment=NULL, $city, $state, $country) {
        $this->first_name   = $first_name;
        $this->last_name    = $last_name;
        $this->username     = strtolower($first_name).strtolower($last_name);
        $this->password     = $password;
        $this->confirm      = $confirm
        $this->email        = $email;
        $this->experience   = $experience;
        $this->equipment    = $equipment;
        $this->city         = $city;
        $this->state        = $state;
        $this->country      = $country;
        
        $this->display_name = ucfirst($first_name)." ".ucfirst($last_name);
        $this->db           = new Database();
    }
    
    public function create_user() {
    
    	$this->sql = "INSERT INTO users (first_name, last_name, username, password, email, experience, equipment, city, state_province, country) VALUES ('$this->first_name', '$this->last_name', '$this->username', '$this->password', '$this->email', '$this->experience', '$this->equipment', '$this->city', '$this->state', '$this->country')";
		
		$this->db->execute_sql($this->sql);
    	
        
    }
    
    public function edit_user() {
        
    }
    
    public function prep_user_info() {
	    if (!$this->first_name) {
	    	array_push($this->validation_missing, 'first name');
	    } else if (!$this->last_name) {
	    	array_push($this->validation_missing, 'last name');
	    } else if (!$this->password) {
	    	array_push($this->validation_missing, 'password');
	    } else if ($this->password != $this->confirm) {
		    array_push($this->validation_errors, "Passwords don't match.");
	    } else if (!this->email) {
		    array_push ($this->validation_missing, 'email');
	    } else if (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/',$this->email) {
		    array_push ($this->validation_errors, 'Please use a valid e-mail.');
	    } else if ()
	    
	    
	    
	    
    }
    
    
    
    public function delete_user() {
        
    }

}
?>