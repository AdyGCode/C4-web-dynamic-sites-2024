<?php
$text = 'PHP rules?';
//Start of string is P

//$text = 'What is PHP?';
//Start of string is W

//The caret is the start of the string
//The . means any character
//The * means 0 or more of the preceding character
if (preg_match('/^PHP.*/', $text))
{
  $output = '$text contains the string &ldquo;' . $text . '&rdquo;.';
}
else
{
  $output = '$text does not contain the string &ldquo;PHP&rdquo;.';
}

include 'output.html.php';
