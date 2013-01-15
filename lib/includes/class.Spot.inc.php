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
    private $id;
    
    private $average_rating;
    private $db;
    
    public function __construct($city, $state, $location, $rating, $review, $creator, $user, $id){
        $this->city     = $city;
        $this->state    = $state;
        $this->location = $location;
        $this->rating   = $rating;
        $this->review   = $review;
        $this->creator 	= $creator;
        $this->user     = $user;
        $this->id       = $id;
        $this->db       = new Database();
        
    }
    
    private function average_rating() {
        
        $this->sql = "SELECT rating FROM spot WHERE id='$this->id'";
        $this->db->execute_sql($this->sql);
        $this->fetch = fetch_assoc($this->sql);
        
        
        $this->all_ratings = explode(' ', $this->ratings_string){
            
        }
        foreach (){
            
        }
    }
    
    public function create_spot() {
        $this->sql = "INSERT INTO spot (city, state_province, location, rating, review, creator, user) VALUES ('$this->city', '$this->state', '$this->location', '$this->rating', '$this->review', '$this->creator', '$this->user')";
        $this->db->execute_sql($this->sql);
    }
 
        public function rate_review_spot($r) {
        
        $this->sql = "INSERT INTO spot $r VALUES '$this->$r'";
        $this->db->execute_sql($this->sql);
        
        $this->average_rating();
    }
    
    public function display_spot($request) {
       $this->sql = "SELECT $request FROM spot WHERE id='$this->id'";
       $this->db->execute_sql($this->sql);
    }
    
   
}
?>

hello