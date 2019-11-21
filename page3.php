<?php 
	// SESSION AND POST METHOD
		session_start();

		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$_SESSION['favfood'] = $_POST['favfood'];
			$_SESSION['favjus'] = $_POST['favjus'];
		}
	// END SESSION AND POST METHOD
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>final</title>
 	<link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>

<!-- BODY -->
 	 <span class="logo"><?php echo $_SESSION['username'] ;?></span>
 	<div class="clear"></div>
 	<h1>BSE7A WRRA777A</h1>
 	
 	<img src="img/food/<?php echo $_SESSION['favfood'] . ".jpg" ;?>" alt="<?php echo $_SESSION['favfood'] ?>" width="250" height="120">

 	<img src="img/jus/<?php echo $_SESSION['favjus'] . ".jpg" ;?>" alt="<?php echo $_SESSION['favjus'] ?>" width="250" height="120"><br>
 	<button>Retour <a href="index.php">index.php</a></button>

<!-- END BODY -->

 </body>
 </html>