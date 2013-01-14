<?php

require_once 'class.Database.inc.php';

class Notification {
	
	private $contents;
	private $from;
	private $to;
	private $invite;
	
	public function __construct($contents, $from, $to, $invite=false) {
		$this->contents  = $contents;
		$this->from      = $from;
		$this->to        = $to;
		$this->invite    = $invite;
	}
	
	public function create_notification() {
		
		//adds the notification to the intended recipients notifications column
		
	}
	
	public function check_notifications($user) {
		
		//returns an associative array of notifications
		
	}
	
	public function respond_notification($user) {
		
		//Add a notification to the original senders notification column
		
	}
	
	
	
	
	
	
}










?>