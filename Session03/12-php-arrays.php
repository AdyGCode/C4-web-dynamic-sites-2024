<!DOCTYPE html>
 <html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Arrays</title>
	</head>
	<body> 
		
		<?php 
			//PHP also allows you to use descriptive indexes. 
			$inventory = array("foodhamper"=>20, "bunches_of_roses"=>12, "glass_sets"=>15);
		?>	
			<p>The store has left in stock the following items: </p>
			<blockquote>
				<p>Food hampers: <?php echo $inventory["foodhamper"];?> </p>
				<p>Bunches of roses: <?php echo $inventory["bunches_of_roses"];?> </p>
				<p>Glass sets: <?php echo $inventory["glass_sets"];?> </p>
			</blockquote>
		
	  
   </body>
</html>