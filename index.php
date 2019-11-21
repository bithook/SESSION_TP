
<?php 
	session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Session
	</title>
 	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<!-- OUR BODY -->

	<!-- IF $_SESSION IS NOT ASSIGNED -->
	<?php if (!isset($_SESSION['username'])): ?>
		<form action="page1.php" method="POST">
			<h3 class="logo" style="float: none;">Pizza Mido</h3>
			what is your name : 
				<input type="text" name="username">
				<input type="submit" value="VALIDER">
		</form>
	<?php endif ?>

	<!-- IF $_SESSION IS ASSIGNED -->
	<?php if (isset($_SESSION['username'])): ?>
	 	<span class="logo"><?php echo $_SESSION['username'] ;?></span>
		<div class="clear"></div> <!-- clear float -->
		<span class="aurevoir">
			Thank you for your order. Aurevoir!
		</span>
	<?php endif ?>






</body>
</html>