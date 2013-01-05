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
            <form>
                <input type="text" name="username" placeholder="Name">
                <input type="password" name="password" placeholder="Password">
                <input type="submit" name="submit" value="Sign In">
            </form>
        </div> <!-- login_container-->
        
        <div class="info_container">
            <p>Connect with other slackliners, find spots, share equipment.</p>
            <a href="tour.php">Take A Tour</a>
            <a href="register.php">Register Now</a>
        </div> <!-- info_container -->
      
            
    </div> <!-- wrapper -->
</body>
</html>
