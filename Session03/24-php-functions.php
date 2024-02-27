<!DOCTYPE html>
 <html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Functions</title>
	</head>
	<body> 
		
		<?php

			function printvalue ($argument1) {
				echo 'the value of argument1 is: ' .$argument1;
			}
			
			$var1 = 6;
			$var2= 9;
			
			while ($var1 < $var2){
				printvalue($var1);
			$var1++;
			}
		?>

			
		
	  
   </body>
</html>