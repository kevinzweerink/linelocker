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
	    <a href="home.php" class="homepage_link">
		<img src="assets/login_logo.png" class="header_logo" width="60em">
		<h1>linelocker</h1> 
	    </a>
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
	</header>
	
	<div class="line_container">
	    
	    <div class="line">
		<div class="line_header">
		    <ul>
			<li>date: 1/3/13</li>
			<li>time: 11am</li>
			<li>place: byrd Park</li>
		    </ul>
		</div> <!-- line_header -->
		<p>This is the line description.</p>
	    </div> <!-- line -->
	    
	    <div class="line">
		<div class="line_header">
		    <ul>
			<li>date: 1/3/13</li>
			<li>time: 11am</li>
			<li>place: byrd Park</li>
		    </ul>
		</div> <!-- line_header -->
		<p>This is the line description.</p>
	    </div> <!-- line -->
	    
	    <div class="line">
		<div class="line_header">
		    <ul>
			<li>date: 1/3/13</li>
			<li>time: 11am</li>
			<li>place: byrd Park</li>
		    </ul>
		</div> <!-- line_header -->
		<p>This is the line description.</p>
	    </div> <!-- line -->
	    
	    <div class="line">
		<div class="line_header">
		    <ul>
			<li>date: 1/3/13</li>
			<li>time: 11am</li>
			<li>place: byrd Park</li>
		    </ul>
		</div> <!-- line_header -->
		<p>This is the line description.</p>
	    </div> <!-- line -->
	    
	    <div class="line">
		<div class="line_header">
		    <ul>
			<li>date: 1/3/13</li>
			<li>time: 11am</li>
			<li>place: byrd Park</li>
		    </ul>
		</div> <!-- line_header -->
		<p>This is the line description.</p>
	    </div> <!-- line -->
	    <div class="line">
		<div class="line_header">
		    <ul>
			<li>date: 1/3/13</li>
			<li>time: 11am</li>
			<li>place: byrd Park</li>
		    </ul>
		</div> <!-- line_header -->
		<p>This is the line description.</p>
	    </div> <!-- line -->
	    
	    <div class="line">
		<div class="line_header">
		    <ul>
			<li>date: 1/3/13</li>
			<li>time: 11am</li>
			<li>place: byrd Park</li>
		    </ul>
		</div> <!-- line_header -->
		<p>This is the line description.</p>
	    </div> <!-- line -->
	    
	    <div class="line">
		<div class="line_header">
		    <ul>
			<li>date: 1/3/13</li>
			<li>time: 11am</li>
			<li>place: byrd Park</li>
		    </ul>
		</div> <!-- line_header -->
		<p>This is the line description.</p>
	    </div> <!-- line -->
	    
	    
	</div> <!-- line_container -->
    </div> <!-- wrapper -->
</body>
</html>
