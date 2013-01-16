<?php

require_once 'class.Database.inc.php';
class Search {

	public static $sql;
	public static $db;
	public static $search_results;

    public function __construct($display_name, $first_name, $last_name, $location, $equipment){
        $this->location = $location;
        $this->rating   = $rating;
        $this->review   = $review;
        $this->user     = $user;
    }
    
    //Find database info. Takes $type for line, user, spot etc, $filter for column and $key for value
    
    public static function search($table, $filter, $key){
        self::$sql = "SELECT * FROM line WHERE city='Richmond'";
        self::$db = new Database();
        self::$search_results = self::$db->get_all_results(self::$sql);
        
        var_dump(self::$search_results);
        
    }
}
?>

