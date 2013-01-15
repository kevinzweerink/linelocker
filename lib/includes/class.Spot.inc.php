<?php

require_once 'class.Database.inc.php';
require_once 'class.Line.inc.php';

class Spot extends Line{
    
    private $rating;
    private $review;
    private $average_rating;
    
    public function __construct($city, $state, $location, $rating, $review, $creator, $user){
        parent::$this->city     = $city;
        parent::$this->state    = $state;
        parent::$this->location = $location;
        $this->rating           = $rating;
        $this->review           = $review;
        parent::$this->creator 	= $creator;
        parent::$this->user     = $user;
    }
    
    private function average_rating() {
        
    }
    
    public function create_spot() {
        $this->sql = "INSERT INTO spot (city, state_province, location, rating, review, creator, user) VALUES ('$this->city', '$this->state', '$this->location', '$this->rating', '$this->review', '$this->creator', '$this->user')";
        $this->db->execute_sql($this->sql);
    }
        
    public function rate_review_spot($r) {
        //rate and or review spot
        $this->sql = "INSERT INTO spot $r VALUES '$this->$r'";
        $this->db->execute_sql($this->sql);
        
        $this->average_rating();
    }

    
    public function display_spot() {
        
    }
}
?>

hello