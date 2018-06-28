<?php

	$servername = "localhost";
	$username = "tache";
	$password = "tache";
	$dbname= 'tache';

	// Create connection
	$bdd = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully";
?>