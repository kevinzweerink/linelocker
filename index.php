<?php
		if ($_POST['logout']) {
		
			unset($_COOKIE[session_name()]);
			session_destroy();
			
		}
?>

<?php if (!isset($_COOKIE[session_name()])) {
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