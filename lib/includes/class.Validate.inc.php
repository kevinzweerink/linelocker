<?php

require_once 'class.User.inc.php';

class Validate{
   
    public function is_filled($input){
        !empty($_POST) ? $user->display($input) : '';
    }
}


?>