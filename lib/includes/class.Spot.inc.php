<?php

require_once 'class.Database.inc.php';

class Spot{

	//Attribute variables
    
    private $city;
    private $state;
    private $location;
    private $rating;
    private $review;
    private $creator;
    private $user;
    private $id;
    
    //Method variables
    
    private $average_rating;
    private $all_ratings;
    private $db;
    private $sql;
    private $count;
    private $total;
    
    public $number_of_rates;
    
    //Constructor: assigns attribute vars and initializes DB
    
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
    
    //Averages all ratings on line into one average rating
    
    public function average_rating() {
        //function to average spot ratings using ratings column
        
        $this->display_spot('rating');
        
        //get result of ratings in associative array
        $this->all_ratings = str_split($this->db->get_result('rating'),1);
        
        //average associative rating array 
        $this->count = count($this->all_ratings);
        foreach ($this->all_ratings as $value){
            $this->total = $this->total + $value; 
        }
        
        //UPDATE average_rating
        $this->average_rating = round(($this->total/$this->count));
        echo $this->average_rating;
        $this->sql = "UPDATE spot SET average_rating='$this->average_rating' WHERE id='$this->id'";
        $this->db->execute_sql($this->sql);    
    }
    
    //Creates the spot
    
    public function create_spot() {
        $this->sql = "INSERT INTO spot (city, state_province, location, rating, review, creator, user) VALUES ('$this->city', '$this->state', '$this->location', '$this->rating', '$this->review', '$this->creator', '$this->user')";
        $this->db->execute_sql($this->sql);
    }
    
    //For reviews and ratings
 
    public function r_spot($r) {
        $this->sql = "INSERT INTO spot $r VALUES '$this->$r'";
        $this->db->execute_sql($this->sql);
        $this->average_rating();
    }
    
    //Displays
    
    public function display_spot($request) {
       $this->sql = "SELECT $request FROM spot WHERE id='$this->id'";
       $this->db->retrieve_sql($this->sql);
       $this->db->get_result($this->id);
       
    }
    
   
}
?>

