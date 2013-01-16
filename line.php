<?php 
require_once 'lib/includes/class.Search.inc.php';
Search::search('line','id',$_GET['id']);

foreach(Search::$search_results as $result) {
	var_dump($result);
}

?>