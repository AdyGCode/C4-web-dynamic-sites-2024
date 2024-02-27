<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Query String Link Example</title>
  </head>
  <body>
    <p>
	<!--Demonstrate the code injection in the browser such as the <marquee> tag-->
	<!--Can also drop url code to go to other page <a href="namehack.php?name=Hack">Hi, please click link to continue!</a> -->
      <?php
      $name = $_GET['name'];
      echo 'Welcome to our website, ' .
          htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . '!'; //strips the html tag
      ?>
    </p>
  </body>
</html>
