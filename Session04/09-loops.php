<!DOCTYPE html>
 <html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Loops</title>
	</head>
	<body> 
		<p>The while loop to do table colours</p>

		<p>Table with alternating row colours. The second column is the row  
		number for reference.</p> 

		<table> 

		<?php 
		
		$i = 1;
		
		echo '<table>';

		
		while ($i <= 12)
		{ 
			if ($i % 2 != 0) # An odd row 
				$rowColor = "#00FFFF"; 
			else # An even row 
				$rowColor = "#E2F4EA"; 
   
			echo '<tr bgcolor="' . $rowColor . '"><td>Row ', $i , '</td></tr>'; 
		$i++; # Increment our row counter 
		} 
		
		echo '</table>';
		
		?> 
		</table>
	  
   </body>
</html>