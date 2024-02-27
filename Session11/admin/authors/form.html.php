<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/php-class/session11/includes/helpers.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php htmlout($pageTitle); ?></title> <!-- *** 1. Set the title and the H1 title *** -->
  </head>
  <body>
    <h1><?php htmlout($pageTitle); ?></h1> <!-- *** 2. Set the title and the H1 title *** -->
    <form action="?<?php htmlout($action); ?>" method="post"> <!-- *** 3. Sets the value passed in the query string *** -->
      <div>
        <label for="name">Name: <input type="text" name="name"
            id="name" value="<?php htmlout($name); ?>"></label> <!-- *** 4. Set the form field for author name *** -->
      </div>
      <div>
        <label for="email">Email: <input type="text" name="email"
            id="email" value="<?php htmlout($email); ?>"></label> <!-- *** 5. Set the form field for author email *** -->
      </div>
      <div>
        <input type="hidden" name="id" value="<?php htmlout($id); ?>"> <!-- *** 6. Set value of hidden field for author id *** -->
        <input type="submit" value="<?php htmlout($button); ?>"> <!-- *** 7. Set label of forms submit button *** -->
      </div>
    </form>
  </body>
</html>
