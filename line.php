<?php 
require_once 'lib/includes/class.Search.inc.php';
Search::search('line','id',$_GET['id']);

?>
<!DOCTYPE html>
<head>
<title>Line in <?php echo Search::$search_results['city']; ?> on <?php echo Search::$search_results['date']; ?></title>
<link href="css/style.css" rel="stylesheet">

<script type="text/javascript" src="//use.typekit.net/syj2rgx.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>

<body>

<h1>Line in <?php echo Search::$search_results['city']; ?> on <?php echo Search::$search_results['date']; ?></h1>





</body>