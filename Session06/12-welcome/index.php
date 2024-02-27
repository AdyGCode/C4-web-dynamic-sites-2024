<?php
//This is the controller

//This line checks if any variable is sent, try adding ?firstname=Tony&lastname=Evans
if (!isset($_REQUEST['firstname']))
{
	include 'form.html.php';
}
else
{
	$firstName = $_REQUEST['firstname'];
	$lastName = $_REQUEST['lastname'];
	if ($firstName == 'Tony' and $lastName == 'Evans')
	{
		$output = 'Welcome, Lecturer!';
	}
	else
	{
		$output = 'Welcome to our website, ' .
				htmlspecialchars($firstName, ENT_QUOTES, 'UTF-8') . ' ' .
				htmlspecialchars($lastName, ENT_QUOTES, 'UTF-8') . '!';
	}

	include 'welcome.html.php';
}
