<?php
		//Checks to see if the person just logged out - should stay at top of file probably
		
		if ($_POST['logout']) {
		
			unset($_COOKIE[session_name()]);
			session_destroy();
			
		}
?>

<?php 
//Checks for the session cookie, if none is available redirects
//to login page, otherwise shows (as of yet unwritten) home page.

if (!isset($_COOKIE[session_name()])) {
	header( 'Location: login.php' ) ;
} else { ?>
	<!DOCTYPE html>
	<head>
	<title>Linelocker</title>
	</head>
	
	<body>
	<form class="logout" method="post">
		<input type="Submit" value="logout" name="logout">
	</form>
	</body>
	
<?php } ?>