<?php
	ini_set('error_reporting', E_ALL);
	error_reporting(-1);
	
	//Establish missing and errors containers
	
	$missing = array();
	$errors = array();
	
	//Checks if form was submitted
	
	if ($_POST) {
	
		//Sets username and password variables for future use
	
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		//Checks if username was set
	
		if ($_POST['username']) {
		
			//Converts First Last to firstlast
			
			$username = str_replace(" ", "", $username);
			$username = strtolower($username);
						
		} else {
		
			//If no username entered, 
			
			array_push($missing, 'username');
		}
		
		if ($_POST['password']) {
		
			$password = sha1($_POST['password']);
			
		} else {
			array_push($missing, 'password');
		}
	
		if (!$missing) {
			require_once('lib/includes/db_connect.inc.php');
			if ($connection) { 
		        $stmt = $connection->prepare("SELECT * FROM users WHERE username=:username AND password=:pword");
		        $stmt->bindParam(':username',$username);
		        $stmt->bindParam(':pword',$password);
		        $stmt->execute();
		        
		        if ($stmt->rowCount() > 0) {
		        	$lifetime = 60 * 60 * 24;
					session_start();
					setcookie(session_name(),$username,time()+$lifetime);
			        header ('Location: index.php');
		        }
			}
		}
	
	}
	






?>
<!DOCTYPE html>

<html>
<head>
    <title>Linelocker</title>
    
    <?php include("lib/includes/analytics.inc.php") ?>
    <script type="text/javascript" src="//use.typekit.net/syj2rgx.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <div class="login_container">
            <img class="login_logo" src="assets/login_logo.png">   
            <h1>Linelocker</h1>
            <form method="post">
            <?php 
            if ($missing || $errors) {
	            if ($missing) {
		            echo "<p>Please fill out ";
		            foreach ($missing as $missed) {
			            echo $missed." ";
		            }
		            echo "</p>";
	            }
	            
	            if ($errors) {
		            foreach ($errors as $error) {
			            echo $error;
		            }
	            }
            }
            ?>
                <input type="text" name="username" placeholder="Name">
                <input type="password" name="password" placeholder="Password">
                <input type="submit" name="submit" value="Sign In">
            </form>
        </div> <!-- login_container-->
        
        <div class="info_container">
            <p>Connect with other slackliners, find spots, share equipment.</p>
            <a href="tour.php"><div class="arrow_button">
                Take A Tour
            </div> </a><!-- arrow-button -->
            <a href="register.php"><div class="arrow_button">
                Register Now
            </div></a> <!-- arrow-button -->
        </div> <!-- info_container -->
      

    </div> <!-- wrapper -->
</body>
</html>
