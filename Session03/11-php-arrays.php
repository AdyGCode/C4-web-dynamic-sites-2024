<!DOCTYPE html>
 <html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Arrays</title>
	</head>
	<body> 
		
		<?php 
			//The "food hamper" is id 55, the roses, id 23 and the glass sets, id 30. 
			//$inventory = array(20,12,15);
			$inventory = array(55=>20, 23=>12, 30=>15);
		?>	
			<p>The store has left in stock the following items: </p>
			<blockquote>
				<!--<p>Food hampers: <?php echo $inventory[0];?> </p> -->
				<p>Food hampers: <?php echo $inventory[55];?> </p>
				<p>Bunches of roses: <?php echo $inventory[30];?> </p>
				<p>Glass sets: <?php echo $inventory[23];?> </p>
			</blockquote>
		
	  
   </body>
</html>