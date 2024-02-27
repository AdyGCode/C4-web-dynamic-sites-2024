<?php include_once $_SERVER['DOCUMENT_ROOT'] .
    '/php-class/Session10/08-jokes-helpers/includes/helpers.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>List of Jokes</title>
  </head>
  <body>
    <p><a href="?addjoke">Add your own joke</a></p>
    <p>Here are all the jokes in the database:</p>
    <?php foreach ($jokes as $joke): ?>
      <form action="?deletejoke" method="post">
        <blockquote>
          <p>
<!-- Added this--><?php htmlout($joke['text']); ?> <!--Calls function helpers page 181-->
            <input type="hidden" name="id" value="<?php
                echo $joke['id']; ?>">
            <input type="submit" value="Delete">
 <!-- Added this-->(by <a href="mailto:<?php htmlout($joke['email']); ?>"><?php
                htmlout($joke['name']); ?></a>)<!--Calls function helpers-->
          </p>
        </blockquote>
      </form>
    <?php endforeach; ?>
  </body>
</html>
