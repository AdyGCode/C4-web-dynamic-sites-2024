<?php
function html($text)
{
  return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

function htmlout($text)
{
  echo html($text);
}

function markdown2html($text)
{
  $text = html($text);

  // strong emphasis
  $text = preg_replace('/__(.+?)__/s', '<strong>$1</strong>', $text); //Double underscores - example: __Hello__
  $text = preg_replace('/\*\*(.+?)\*\*/s', '<strong>$1</strong>', $text); //Double star - example: **Hello**

  // emphasis
  $text = preg_replace('/_([^_]+)_/', '<em>$1</em>', $text); //Single underscores - example: _Hello_
  $text = preg_replace('/\*([^\*]+)\*/', '<em>$1</em>', $text); //Single star - example: *Hello*

  // Convert Windows (\r\n) to Unix (\n)
  $text = str_replace("\r\n", "\n", $text); // The Enter key Windows (\n) to Unix conversion carriage return (\r\n)
  // Convert Macintosh (\r) to Unix (\n)
  $text = str_replace("\r", "\n", $text); // The Enter key Mac (\n) to Unix conversion carriage return (\r)

  // Paragraphs
  $text = '<p>' . str_replace("\n\n", '</p><p>', $text) . '</p>'; // Double Enter key will insert paragraph tags - example: <p>Hello</p>
  // Line breaks
  $text = str_replace("\n", '<br>', $text); // Single Enter key will insert break tag - <br>

  // [linked text](link URL)
  $text = preg_replace(
      '/\[([^\]]+)]\(([-a-z0-9._~:\/?#@!$&\'()*+,;=%]+)\)/i',
'<a href="$2">$1</a>', $text); // [Square] brackets for text and (Round) brackets for hyperlink - example: [Markdown] (https://www.markdownguide.org/)

  return $text;
}

function markdownout($text)
{
  echo markdown2html($text);
}
