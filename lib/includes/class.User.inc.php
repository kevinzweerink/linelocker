<?php

require_once 'class.Database.inc.php';

class User{
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
    
    public function __construct ($first_name, $last_name, $username, $password, $id,
                                 $email, $experience, $equipment, $city, $state, $country){
        $this->first_name   = $first_name;
        $this->last_name    = $last_name;
        $this->username     = $username;
        $this->password     = $password;
        $this->id           = $id;
        $this->email        = $email;
        $this->state        = $state;
        $this->country      = $country;
        $this->display_name = ucfirst($first_name)." ".ucfirst($last_name);
    }
    
    public function create_user() {
        
    }
    
     public function edit_user() {
        
    }
    
     public function delete_user() {
        
    }

}
?>