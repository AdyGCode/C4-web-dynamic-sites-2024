<!DOCTYPE html>
 <html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Tables with loops</title>
	</head>
	<body> 
      
		<?php
		$row = 4; //Dynamic number for rows
		$col = 3; // Dynamic number for columns
		echo "<table border='1'>";
			for($i=0;$i<$row;$i++){
				echo "<tr>";
					for($j=0;$j<$col;$j++){
						echo "<td>";
						echo $i+1,"",$j+1;
						echo "</td>";						
					}
				echo "</tr>";
			}
		echo "</table>";
		?>
	  
   </body>
</html>