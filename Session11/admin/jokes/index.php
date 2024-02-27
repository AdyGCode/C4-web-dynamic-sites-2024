<?php

if (isset($_GET['add']))
{
  $pageTitle = 'New Joke';
  $action = 'addform';
  $text = '';
  $authorid = '';
  $id = '';
  $button = 'Add joke';

  //include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';
  
  include $_SERVER['DOCUMENT_ROOT'] . '/php-class/Session11/includes/db.inc.php';

  // Build the list of authors
  try
  {
    $result = $pdo->query('SELECT id, name FROM author');
  }
  catch (PDOException $e)
  {
    $error = 'Error fetching list of authors.';
    include 'error.html.php';
    exit();
  }

  foreach ($result as $row)
  {
    $authors[] = array('id' => $row['id'], 'name' => $row['name']);
  }

  // Build the list of categories
  try
  {
    $result = $pdo->query('SELECT id, name FROM category');
  }
  catch (PDOException $e)
  {
    $error = 'Error fetching list of categories.';
    include 'error.html.php';
    exit();
  }

  foreach ($result as $row)
  {
    $categories[] = array(
        'id' => $row['id'],
        'name' => $row['name'],
        'selected' => FALSE); //page 226
  }

  include 'form.html.php';
  exit();
}

if (isset($_GET['addform']))
{
  //include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';
  
  include $_SERVER['DOCUMENT_ROOT'] . '/php-class/Session11/includes/db.inc.php';

  if ($_POST['author'] == '')
  {
    $error = 'You must choose an author for this joke.
        Click &lsquo;back&rsquo; and try again.';
    include 'error.html.php';
    exit();
  }

  try
  {
    $sql = 'INSERT INTO joke SET
        joketext = :joketext,
        jokedate = CURDATE(),
        authorid = :authorid';
    $s = $pdo->prepare($sql);
    $s->bindValue(':joketext', $_POST['text']);
    $s->bindValue(':authorid', $_POST['author']);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Error adding submitted joke.';
    include 'error.html.php';
    exit();
  }

  $jokeid = $pdo->lastInsertId(); //page 230

  if (isset($_POST['categories']))
  {
    try
    {
      $sql = 'INSERT INTO jokecategory SET
          jokeid = :jokeid,
          categoryid = :categoryid';
      $s = $pdo->prepare($sql);

      foreach ($_POST['categories'] as $categoryid)
      {
        $s->bindValue(':jokeid', $jokeid);
        $s->bindValue(':categoryid', $categoryid);
        $s->execute();
      }
    }
    catch (PDOException $e)
    {
      $error = 'Error inserting joke into selected categories.';
      include 'error.html.php';
      exit();
    }
  }

  header('Location: .');
  exit();
}

if (isset($_POST['action']) and $_POST['action'] == 'Edit')
{
  //include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';
  
  include $_SERVER['DOCUMENT_ROOT'] . '/php-class/Session11/includes/db.inc.php';

  try
  {
    $sql = 'SELECT id, joketext, authorid FROM joke WHERE id = :id';
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $_POST['id']);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Error fetching joke details.';
    include 'error.html.php';
    exit();
  }
  $row = $s->fetch();

  $pageTitle = 'Edit Joke';
  $action = 'editform';
  $text = $row['joketext'];
  $authorid = $row['authorid'];
  $id = $row['id'];
  $button = 'Update joke';

  // Build the list of authors
  try
  {
    $result = $pdo->query('SELECT id, name FROM author');
  }
  catch (PDOException $e)
  {
    $error = 'Error fetching list of authors.';
    include 'error.html.php';
    exit();
  }

  foreach ($result as $row)
  {
    $authors[] = array('id' => $row['id'], 'name' => $row['name']);
  }

  // Get list of categories containing this joke
  try
  {
    //**** 1. Fetch records from jokecategory by grabbing all the IDs associated with the joke id *****
	$sql = 'SELECT categoryid FROM jokecategory WHERE jokeid = :id'; // page 227
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $id);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Error fetching list of selected categories.';
    include 'error.html.php';
    exit();
  }

  foreach ($s as $row)
  {
    //**** 2. Foreach loop stores all selected category IDs into an array ****
	$selectedCategories[] = $row['categoryid']; //page 228
  }

  // Build the list of all categories
  try
  {
    $result = $pdo->query('SELECT id, name FROM category');
  }
  catch (PDOException $e)
  {
    $error = 'Error fetching list of categories.';
    include 'error.html.php';
    exit();
  }

  foreach ($result as $row)
  {
    $categories[] = array(
        'id' => $row['id'],
        'name' => $row['name'],
		//**** 3. TRICK the list of ALL categories. Built in function (in_array) value either true or false ****
        'selected' => in_array($row['id'], $selectedCategories)); //page 228
  }

  include 'form.html.php';
  exit();
}

if (isset($_GET['editform']))
{
  //include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';
  
  include $_SERVER['DOCUMENT_ROOT'] . '/php-class/Session11/includes/db.inc.php';

  if ($_POST['author'] == '')
  {
    $error = 'You must choose an author for this joke.
        Click &lsquo;back&rsquo; and try again.';
    include 'error.html.php';
    exit();
  }

  try
  {
    $sql = 'UPDATE joke SET
        joketext = :joketext,
        authorid = :authorid
        WHERE id = :id';
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $_POST['id']);
    $s->bindValue(':joketext', $_POST['text']);
    $s->bindValue(':authorid', $_POST['author']);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Error updating submitted joke.';
    include 'error.html.php';
    exit();
  }

  try
  {
    $sql = 'DELETE FROM jokecategory WHERE jokeid = :id';
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $_POST['id']);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Error removing obsolete joke category entries.';
    include 'error.html.php';
    exit();
  }

  if (isset($_POST['categories']))
  {
    try
    {
      $sql = 'INSERT INTO jokecategory SET
          jokeid = :jokeid,
          categoryid = :categoryid';
      $s = $pdo->prepare($sql);

      foreach ($_POST['categories'] as $categoryid)
      {
        $s->bindValue(':jokeid', $_POST['id']);
        $s->bindValue(':categoryid', $categoryid);
        $s->execute();
      }
    }
    catch (PDOException $e)
    {
      $error = 'Error inserting joke into selected categories.';
      include 'error.html.php';
      exit();
    }
  }

  header('Location: .');
  exit();
}

if (isset($_POST['action']) and $_POST['action'] == 'Delete')
{
  //include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';
  
  include $_SERVER['DOCUMENT_ROOT'] . '/php-class/Session11/includes/db.inc.php';

  // Delete category assignments for this joke
  try
  {
    $sql = 'DELETE FROM jokecategory WHERE jokeid = :id';
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $_POST['id']);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Error removing joke from categories.';
    include 'error.html.php';
    exit();
  }

  // Delete the joke
  try
  {
    $sql = 'DELETE FROM joke WHERE id = :id';
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $_POST['id']);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Error deleting joke.';
    include 'error.html.php';
    exit();
  }

  header('Location: .');
  exit();
}
//Search bar code
if (isset($_GET['action']) and $_GET['action'] == 'search')
{
  //include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';
  
  include $_SERVER['DOCUMENT_ROOT'] . '/php-class/Session11/includes/db.inc.php';

  // The basic SELECT statement
  $select = 'SELECT id, joketext';
  $from   = ' FROM joke';
  $where  = ' WHERE TRUE';

  $placeholders = array();

  if ($_GET['author'] != '') // An author is selected
  {
    $where .= " AND authorid = :authorid";
    $placeholders[':authorid'] = $_GET['author'];
  }

  if ($_GET['category'] != '') // A category is selected
  {
    $from  .= ' INNER JOIN jokecategory ON id = jokeid';
    $where .= " AND categoryid = :categoryid";
    $placeholders[':categoryid'] = $_GET['category'];
  }

  if ($_GET['text'] != '') // Some search text was specified
  {
    $where .= " AND joketext LIKE :joketext";
    $placeholders[':joketext'] = '%' . $_GET['text'] . '%';
  }

  try
  {
    $sql = $select . $from . $where;
    $s = $pdo->prepare($sql);
    $s->execute($placeholders);
  }
  catch (PDOException $e)
  {
    $error = 'Error fetching jokes.';
    include 'error.html.php';
    exit();
  }

  foreach ($s as $row)
  {
    $jokes[] = array('id' => $row['id'], 'text' => $row['joketext']);
  }

  include 'jokes.html.php';
  exit();
}

// Display search form
//include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';

include $_SERVER['DOCUMENT_ROOT'] . '/php-class/Session11/includes/db.inc.php';

try
{
  $result = $pdo->query('SELECT id, name FROM author');
}
catch (PDOException $e)
{
  $error = 'Error fetching authors from database!';
  include 'error.html.php';
  exit();
}

foreach ($result as $row)
{
  $authors[] = array('id' => $row['id'], 'name' => $row['name']);
}

try
{
  $result = $pdo->query('SELECT id, name FROM category');
}
catch (PDOException $e)
{
  $error = 'Error fetching categories from database!';
  include 'error.html.php';
  exit();
}

foreach ($result as $row)
{
  $categories[] = array('id' => $row['id'], 'name' => $row['name']);
}

include 'searchform.html.php';
