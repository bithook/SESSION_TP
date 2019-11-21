

<!-- PHP CODE -->
<?php session_start();

	if (isset($_POST['username'])) {
		$_SESSION['username'] = strtoupper($_POST['username']);
	}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>
 		Page1
 	</title>
 	<link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 	<span class="logo"><?php echo $_SESSION['username'] ;?></span>
 	<div class="clear"></div>
 	<p>
 		Hello 
 			<?php echo $_SESSION['username'] ;?>, 
 		Are you hungry
 			<button><a href="page2.php">YES</a></button>
 	</p>
 	<!-- hello git -->
 </body>
 </html>