<?php

require_once 'class.Database.inc.php';

class Spot{
    
    private $city;
    private $state;
    private $location;
    private $rating;
    private $review;
    private $creator;
    private $user;
    
    private $average_rating;
    private $db;
    
    
    
    
    public function __construct($city, $state, $location, $rating, $review, $creator, $user){
        $this->city     = $city;
        $this->state    = $state;
        $this->location = $location;
        $this->rating   = $rating;
        $this->review   = $review;
        $this->creator 	= $creator;
        $this->user     = $user;
        $this->db       = new Database();
        
    }
    
    private function average_rating() {
        
    }
    
    public function create_spot() {
        $this->sql = "INSERT INTO spot (city, state_province, location, rating, review, creator, user) VALUES ('$this->city', '$this->state', '$this->location', '$this->rating', '$this->review', '$this->creator', '$this->user')";
        $this->db->execute_sql($this->sql);
    }
        
    public function review_spot() {
        
        $this->average_rating();
    }
    
    public function display_spot() {
        
    }
    
   
}
?>

hello