<?php

require_once 'lib/includes/class.Search.inc.php';

$user_location = 'Richmond';

Search::search('line','city',$user_location);

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
        <header>
        	<div class="left">
			    <a href="home.php" class="homepage_link">
					<img src="assets/login_logo.png" class="header_logo" width="60em">
					<h1>Linelocker</h1> 
			    </a>
        	</div>
        	<div class="right">
			    <form>
					<input type="text" name="search" placeholder="Search">
			    </form>
			    <div class="header_buttons">
					<a href="browse_by.php" class="browse">Browse By</a>
					<a href="new_line.php">+ Line</a>
			<?php //logged in user name
			    
			    $logged_in_username='brannondorsey'; //$_GET('logged_in_username');
			    $user_first = "Brannon"; //SHOW first_name FROM user WHERE username = $logged_in_username;
			    $user_last = "Dorsey"; //SHOW last_name FROM user WHERE username = $logged_in_username;
			    $logged_in_name = ucfirst($user_first).' '.ucfirst($user_last);
			    
			    //<a> string
			    echo "<a href='user.php?logged_in_username=$logged_in_username'
			    class='user_name' style='color: #303030; border: none; padding-left: 1em;'
			    >$logged_in_name</a>";
			?>
			<!-- <img src="assets/carabiner.png" class="carabiner"> -->
		    	</div> <!-- header_buttons -->
        	</div>
	</header>
	
	<div class="line_container">
	
		<?php 
		foreach (Search::$search_results as $result) { ?>
	    
	    <a href="line.php?id=<?php echo $result['id'] ?>">
	    <div class="line">
		<div class="line_header">
		    <ul>
			<li>Date: <?php echo $result['date']; ?></li>
			<li>time: <?php echo $result['time']; ?></li>
			<li>place: <?php echo $result['location']; ?></li>
		    </ul>
		</div> <!-- line_header -->
		<p><?php echo $result['message']; ?></p>
	    </div> <!-- line -->
	    </a>
	    
	    <?php } ?>
	    	    
	    
	</div> <!-- line_container -->
    </div> <!-- wrapper -->
</body>
</html>
