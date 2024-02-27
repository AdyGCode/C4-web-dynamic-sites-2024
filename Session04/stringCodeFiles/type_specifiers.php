<!DOCTYPE html>
 <html lang="en">
  <head>
    <title>Type Specifiers in Action</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
  </head>
  <body>
    <h1>Type Specifiers in Action</h1>

<?php
$myNumber = 123.45;
printf( "Binary: %b<br/>", $myNumber );
printf( "Character: %c<br/>", $myNumber );
printf( "Decimal: %d<br/>", $myNumber );
printf( "Scientific: %e<br/>", $myNumber );
printf( "Float: %f<br/>", $myNumber );
printf( "Octal: %o<br/>", $myNumber );
printf( "String: %s<br/>", $myNumber );
printf( "Hex (lower case): %x<br/>", $myNumber );
printf( "Hex (upper case): %X<br/>", $myNumber );
?>

  </body>
</html>

