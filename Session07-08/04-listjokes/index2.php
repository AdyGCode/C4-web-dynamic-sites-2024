<?php
try
{
  $pdo = new PDO('mysql:host=localhost;dbname=ijdb', 'dbuser', 'password');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include 'error.html.php';
  exit();
}

try
{
  $sql = 'SELECT joketext FROM joke';
  $result = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error fetching jokes: ' . $e->getMessage();
  include 'error.html.php';
  exit();
}
//Tidier version can be a foreach loop
//while ($row = $result->fetch())
foreach ($result as $row)	
{
  $jokes[] = $row['joketext'];
}

include 'jokes.html.php';
