<!DOCTYPE html>
 <html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Strings</title>
	</head>
	<body> 
		<p><strong>Note: When you use PHP's convenient variable in a string format, there is a big difference between single and double quotation marks.</strong></p>

		<p><strong>Enclosing a string in single quotation marks, PHP uses the string exactly as typed.</strong></p>
		
		<p><strong>Enclosing a string in double quotation marks, PHP gives you a couple of extra features:</strong></p>
		
		<ul>
			<li>Any variable name within the string are parsed and replaced with the variables value, and</li>
			<li>Including any special characters in the string by escaping them.</li>
		</ul>
		
		<?php
			$heatComment = "very hot";
			
			print "Today is $heatComment";
				
			//In double quotes, variables are evaluated
		?>

			
		
	  
   </body>
</html>