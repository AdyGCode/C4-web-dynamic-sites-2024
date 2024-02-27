<!-- ****************************************** 1 . Using the Helpers file for htmlspecialchars *** -->
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/php-class/session11/includes/helpers.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Manage Authors</title>
  </head>
  <body>
    <h1>Manage Authors</h1>
    <p><a href="?add">Add new author</a></p> <!-- *** 2. Link sends query string (?add) to contoller *** -->
    <ul>
      <?php foreach ($authors as $author): ?>
        <li>
          <form action="" method="post"> <!-- *** 3. Empty action, form will either be edit or delete *** -->
            <div>
              <?php htmlout($author['name']); ?> <!-- *** 4. Use the htmlout function to output username safely *** -->
              <input type="hidden" name="id" value="<?php
                  echo $author['id']; ?>">
              <input type="submit" name="action" value="Edit"> <!-- *** 5. Two buttons have same name attribute *** -->
              <input type="submit" name="action" value="Delete">
            </div>
          </form>
        </li>
      <?php endforeach; ?>
    </ul>
    <p><a href="..">Return to JMS home</a></p>
  </body>
</html>
