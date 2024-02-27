<?php
// Password to be encrypted for a .htpasswd file
$clearTextPassword = 'tony';

// Encrypt password
//$password = crypt($clearTextPassword, base64_encode($clearTextPassword));
$password = crypt($clearTextPassword);

// Print encrypted password
echo $password;

// base 64 encode
echo '<br>';
$str = 'tony';
echo 'This is base64_encode:  ';
echo base64_encode($str);

?>