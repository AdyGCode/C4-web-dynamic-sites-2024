<?php
try //wrong user name and the $e variable display
{
  $pdo = new PDO('mysql:host=localhost;dbname=ijdb', 'dbuser1', 'password');
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
