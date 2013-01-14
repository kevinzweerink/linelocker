<?php

require_once 'class.Database.inc.php';

class User {
    private $first_name;
    private $last_name;
    private $username;
    private $password;
    private $id;
    private $email;
    private $experience;
    private $equipment;
    private $city;
    private $state;
    private $country;
    
    private $display_name;
    
    private $db;
    private $sql;
    
    public function __construct ($first_name, $last_name, $username, $password, $email, $experience, $equipment=NULL, $city, $state, $country) {
        $this->first_name   = $first_name;
        $this->last_name    = $last_name;
        $this->username     = $username;
        $this->password     = $password;
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
    
     public function delete_user() {
        
    }

}
?>