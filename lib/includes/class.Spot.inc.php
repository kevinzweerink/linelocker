<?php
class Spot{
    
    private $location;
    private $rating;
    private $review;
    private $user;
    private $average_rating;
    
    
    public function __construct($location, $rating, $review, $user){
        $this->location = $location;
        $this->rating   = $rating;
        $this->review   = $review;
        $this->user     = $user;
    }
    
    private function average_rating() {
        
    }
    
    public function create_spot() {

    }
        
    public function review_spot() {
        
        $this->average_rating();
    }
    
    public function display_spot() {
        
    }
    
   
}
?>

hello