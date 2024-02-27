<?php
$text = 'What is PHP?';

//This is a pattern modifier. Will match PHP, php, pHp
if (preg_match('/pHp/i', $text))
{
  $output = '$text contains the string &ldquo;PHP&rdquo;.';
}
else
{
  $output = '$text does not contain the string &ldquo;PHP&rdquo;.';
}

include 'output.html.php';
