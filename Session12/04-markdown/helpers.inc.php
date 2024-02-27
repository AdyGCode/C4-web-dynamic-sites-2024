<?php
function html($text)
{
  return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

function htmlout($text)
{
  echo html($text);
}

/*
Page 247 of text

Tutorial 12

As you may recall, we’re aiming in this chapter to make it easier for non-HTMLsavvy
users to add formatting to the jokes on our website. For example, if a user
puts asterisks around a word in the text of a joke (for example, 'Knock *knock*…'),
we’d like to display that joke with HTML emphasis tags around that word (Knock
<em>knock</em>…').

Page 247

We can detect the presence of plain-text formatting such as this in a joke’s text using
preg_match with the regular expression syntax we’ve just learned; however, what
we need to do is pinpoint that formatting and replace it with appropriate HTML
tags. To achieve this, we need to look at another regular expression function offered
by PHP: preg_replace.

Page 248

Markdown is a text-to-HTML conversion tool for web writers.
Markdown allows you to write using an easy-to-read, easy-to-write
plain-text format, then convert it to structurally valid XHTML (or
HTML).*/

function markdown2html($text)
{
  $text = html($text);

  // emphasis
  $text = preg_replace('/_([^_]+)_/', '<em>$1</em>', $text);
  $text = preg_replace('/\*([^\*]+)\*/', '<em>$1</em>', $text);
  
  // strong emphasis
  $text = preg_replace('/__(.+?)__/s', '<strong>$1</strong>', $text);
  $text = preg_replace('/\*\*(.+?)\*\*/s', '<strong>$1</strong>', $text);

  // Convert Windows (\r\n) to Unix (\n)
  $text = str_replace("\r\n", "\n", $text);
  // Convert Macintosh (\r) to Unix (\n)
  $text = str_replace("\r", "\n", $text);

  // Paragraphs
  $text = '<p>' . str_replace("\n\n", '</p><p>', $text) . '</p>';
  // Line breaks
  $text = str_replace("\n", '<br>', $text);

  // [linked text](link URL)
  $text = preg_replace(
      '/\[([^\]]+)]\(([-a-z0-9._~:\/?#@!$&\'()*+,;=%]+)\)/i',
      '<a href="$2">$1</a>', $text);

  return $text;
}

function markdownout($text)
{
  echo markdown2html($text);
}
