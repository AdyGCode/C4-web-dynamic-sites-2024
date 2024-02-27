<?php
//$text = 'I love PHP';
//Start of string is I

//$text = 'What is PHP?';
//Start of string is W

$text = 'PHP';
//String is PHP

//The caret /^PHP$/ Matches 'PHP' and no other string. 

if (preg_match('/^PHP$/', $text))
{
  $output = '$text contains the string &ldquo;' . $text . '&rdquo;.';
}
else
{
  $output = '$text does not contain the string &ldquo;' .$text . '&rdquo;.';
}

include 'output.html.php';
