<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Malicious Code</title>
  </head>
  <body>
    <p>
		<?php
		$name = $_GET['name'];
		$name ='Trojan.Ransom.IcePol';
	  
		echo 'You\'ve been hacked and is now executing malicious code on your machine, ' . $name . '!\'<br>';		
		echo '<br><a href="http://www.bitdefender.com/resourcecenter/virus-encyclopedia/">View</a>';
		?>
		
    </p>
  </body>
</html>
