<?php
$text = 'PHP rules!';

//$text contains the term PHP


//Traditionally forward slashes are used, but  also the # can be used
if (preg_match('#PHP#', $text))
{
  $output = '$text contains the string &ldquo;PHP&rdquo;.';
}
else
{
  $output = '$text does not contain the string &ldquo;PHP&rdquo;.';
}

include 'output.html.php';
