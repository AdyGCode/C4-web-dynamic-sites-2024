<?php
//$text = 'PHP rules?';
//Start of string is P

$text = 'What is PHP?';
//Start of string is W

//The caret is the start of the string
//The . means any character
//The * means 0 or more of the preceding character
if (preg_match('/^PHP.*/', $text))
{
  $output = '$text "PHP rules?" or "What is PHP?" contains the string &ldquo;' . $text . '&rdquo;.';
}
else
{
  $output = '$text "PHP rules?" or "What is PHP?" does not contain the string &ldquo;' . $text . '&rdquo;.';
}

include 'output.html.php';
