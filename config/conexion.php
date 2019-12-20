<?php
	$serverName = "localhost";
	$database = "boot";
	$username = "adminboot";
	$password = "FD6VDWYRJPeZxhE7";


	$conex = new mysqli($serverName, $username, $password, $database);

	if (!$conex)
	{
		die("Connection failed: ". mysqli_connect_error());
	}
	echo "Connected succesfully";