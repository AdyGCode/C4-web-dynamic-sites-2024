<?php
try //wrong user name and the $e variable display, this time a wrong database name
{
  $pdo = new PDO('mysql:host=localhost;dbname=ijd', 'dbuser', 'password');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $output = 'Unable to connect to the database server.' . $e->getMessage();;
  include 'output.html.php';
  exit();
}

$output = 'Database connection established.';
include 'output.html.php';
