<!DOCTYPE html>
 <html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Arrays</title>
	</head>
	<body> 
      
		<?php 
			$inventory = array(20,12,15);
		?>	
			<p>The store has left in stock the following items: </p>
			<blockquote>
				<p>Food hampers: <?php echo $inventory[0];?> </p>
				<p>Bunches of roses: <?php echo $inventory[1];?> </p>
				<p>Glass sets: <?php echo $inventory[2];?> </p>
			</blockquote>
		
	  
   </body>
</html>