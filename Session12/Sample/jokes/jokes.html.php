<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/php-class/session12/Sample/includes/helpers.inc.php'; ?>
	
	<!--Don't forget to change Server path -->
	
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>List of Jokes</title>
  </head>
  <body>
    <p>Here are all the jokes in the database:</p>
    <?php foreach ($jokes as $joke): ?>
      <blockquote>
        <p>
		<!-- This added at page 260 Public jokes list -->
          <?php markdownout($joke['text']); ?>
          (by <a href="mailto:<?php htmlout($joke['email']); ?>"><?php
              htmlout($joke['name']); ?></a>)
        </p>
      </blockquote>
    <?php endforeach; ?>
  </body>
</html>
