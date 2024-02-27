<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Query String Link Example</title>
  </head>
  <body>
    <p>
	<!--Demonstrate the code injection in the browser such as the <marquee> tag-->
	<!-- Demonstrate with link injection <a href="namehack.php?name=Hack">Hi, please click link to continue!</a> -->
      <?php
      $name = $_GET['name'];
      echo 'Welcome to our website, ' . $name . '!';
      ?>
    </p>
  </body>
</html>
