<?php
$text = 'PHP rules?';
//Start of string is P

//$text = 'What is PHP?';
//Start of string is W

//The term /PHP/ Matches 'PHP rules!' and 'What is PHP?' 

if (preg_match('/PHP/', $text))
{
  $output = '$text contains the string &ldquo;' . $text . '&rdquo;.';
}
else
{
  $output = '$text does not contain the string &ldquo;PHP&rdquo;.';
}

include 'output.html.php';
