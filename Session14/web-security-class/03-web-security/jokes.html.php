<?php include_once $_SERVER['DOCUMENT_ROOT'] .
    '/web-security-class/03-web-security/includes/helpers.inc.php'; ?>
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
          <?php markdownout($joke['text']); ?>
          (by <a href="mailto:<?php htmlout($joke['email']); ?>"><?php
              htmlout($joke['name']); ?></a>)
        </p>
      </blockquote>
    <?php endforeach; ?>
	<a href="admin/"> Login </a>
  </body>
</html>
