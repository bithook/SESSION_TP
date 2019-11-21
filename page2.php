<?php 

	session_start();

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>
 		hello
 	</title>
 	<link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 	<span class="logo"><?php echo $_SESSION['username'] ;?></span>
 	<div class="clear"></div>
 	<h2>
 		CHOOSE YOUR FAVOURITE MEET :
 	</h2>
 	<form action="page3.php" method="POST">
 		<label name="favfood">FOOD</label>
 		<select name="favfood">
 			<option value="Nothing"></option>
 			<option value="pizza">pizza</option>
 			<option value="sandwich">sandwich</option>
 			<option value="humburger">humburger</option>
 			<option value="cheesburger">cheesburger</option>
 			<option value="viande hachée">viande hachée</option>
 			<option value="poulet grillé">poulet grillé</option>
 			<option value="poulet fritte">poulet fritte</option>
 		</select>
 		<label name="favfood">JUS</label>
 		<select name="favjus">
 			<option value="Nothing"></option>
 			<option value="Orange">Orange</option>
 			<option value="Avocado + Milk_Chake">Avocado + Milk_Chake</option>
 			<option value="Fraise_Orangier">Fraise_Orangier</option>
 			<option value="Za3za3">Za3za3</option>
 			<option value="Banane au chocolat">Banane au chocolat</option>
 			<option value="Grenade Limonade">Grenade Limonade</option>
 		</select>
 		<input type="submit" name="VALIDER">
 	</form>
 </body>
 </html>