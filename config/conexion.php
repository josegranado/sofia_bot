<?php
	$serverName = "localhost";
	$database = "id11448536_main";
	$username = "id11448536_admin";
	$password = "Zh8w47f97*";


	$conex = new mysqli($serverName, $username, $password, $database);

	if (!$conex)
	{
		die("Connection failed: ". mysqli_connect_error());
	}
	echo "Connected succesfully";