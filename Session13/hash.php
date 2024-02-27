<?php

$hashed = hash('crc32', 'Tony');
echo '<p>The crc32 hash is 8 characters and looks like this = ' .$hashed . '<p>';

$hashed = hash('md5', 'password');
echo '<p>The md5 hash is 32 characters and looks like this = ' .$hashed . '<p>';

$hashed = hash('md5', 'password'.'ijdb');
echo '<p>The md5 password crack = ' .$hashed . '<p>';

$hashed = hash('ripemd128', 'Tony');
echo '<p>The ripemd128 hash is 32 characters and looks like this = ' .$hashed . '<p>';

$hashed = hash('tiger128,3', 'Tony');
echo '<p>The tiger128,3 hash is 32 characters and looks like this = ' .$hashed . '<p>';

$hashed = hash('haval128,3', 'Tony');
echo '<p>The haval128,3 hash is 32 characters and looks like this = ' .$hashed . '<p>';

$hashed = hash('sha1', 'Tony');
echo '<p>The sha1 hash is 40 characters and looks like this = ' .$hashed . '<p>';

$hashed = hash('snefru', 'Tony');
echo '<p>The snefru hash is 64 characters and looks like this = ' .$hashed . '<p>';

$hashed = hash('gost', 'Tony');
echo '<p>The gost hash is 64 characters and looks like this = ' .$hashed . '<p>';

$hashed = hash('sha512', 'Tony');
echo '<p>The sha512 hash is 128 characters and looks like this = ' .$hashed . '<p>';

$hashed = hash('whirlpool', 'Tony');
echo '<p>The whirlpool hash is 128 characters and looks like this = ' .$hashed . '<p>';

?>