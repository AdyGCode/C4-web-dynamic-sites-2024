<?php
$text = 'PHP rules!';

//$text contains the term PHP


//Any character can be used except letters, numbers or backslashes
if (preg_match('*PHP*', $text))
{
  $output = '$text contains the string &ldquo;PHP&rdquo;.';
}
else
{
  $output = '$text does not contain the string &ldquo;PHP&rdquo;.';
}

include 'output.html.php';
