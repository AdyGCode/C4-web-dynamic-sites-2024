<?php

if (isset($_GET['addjoke']))
{
  include 'form.html.php';
  exit();
}

try
{
  $pdo = new PDO('mysql:host=localhost;dbname=ijdb', 'root', '');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include 'error.html.php';
  exit();
}

if (isset($_POST['joketext']))
{
  try
  {
    $sql = 'INSERT INTO joke SET
        joketext = :joketext,
        jokedate = CURDATE()';
    $s = $pdo->prepare($sql);
    $s->bindValue(':joketext', $_POST['joketext']);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Error adding submitted joke: ' . $e->getMessage();
    include 'error.html.php';
    exit();
  }

  header('Location: .');
  exit();
}

if (isset($_GET['deletejoke']))
{
  try
  {
    $sql = 'DELETE FROM joke WHERE id = :id';
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $_POST['id']);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Error deleting joke: ' . $e->getMessage();
    include 'error.html.php';
    exit();
  }

  header('Location: .');
  exit();
}
//Modified to use a Join query - To use both tables as if it is one.
try
{
  $sql = 'SELECT joke.id, joketext, name, email
      FROM joke INNER JOIN author
        ON authorid = author.id';
  $result = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error fetching jokes: ' . $e->getMessage();
  include 'error.html.php';
  exit();
}

foreach ($result as $row) //Change the while to a foreach
{
  $jokes[] = array(
    'id' => $row['id'],
    'text' => $row['joketext'],
    'name' => $row['name'],  // Add name to the Array
    'email' => $row['email'] // Add email to the Array
  );						// See Joke html to display author email
}

include 'jokes.html.php';
