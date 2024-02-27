<?php
//$text = 'I love PHP';
//Start of string is P

$text = 'What is PHP?';
//Start of string is W

//The dollar sign /PHP$/ Matches 'I love PHP' but not 'What is PHP?' 

if (preg_match('/PHP$/', $text))
{
  $output = '$text contains the string &ldquo;' . $text . '&rdquo;.';
}
else
{
  $output = '$text does not contain the string &ldquo;' .$text . '&rdquo;.';
}

include 'output.html.php';
