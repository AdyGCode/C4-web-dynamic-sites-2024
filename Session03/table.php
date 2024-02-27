<!DOCTYPE html>
 <html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Variables</title>
	</head>
	<body> 
      
		<?php 
		$i=1;
		$y=1;
		$rowcolor = "#e7ad0f";
		$data="hello";
			echo '<table>';
				for($i ; $i <=3; $i++){
					echo '<tr>';
						for($y ; $y <=3; $y++){
							echo '<tr bgcolor="'.$rowcolor.'">';
							echo '<td>'.$data.'</td>';
						}
					echo '</tr>';
				}
			echo '</table>';

       ?>
	  
   </body>
</html>