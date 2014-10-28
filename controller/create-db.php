<?php

	require_once(__DIR__ . "/../model/database.php");

	$connection = new mysqli($host, $username, $password);

	if($connection->connect_error){
		die("Error: "  . $connection->connect_error);

	}

//selects this database and returns it true of not true
	$exists = $connection->select_db($database);

//query that gets applide to our local server
	if(!$exists) {
		$query = $connection->("CREATE DATABASE $database");
//output a message
		if($query)  {
			echo "Successfully created a database: " . $database:
		}
	}


//close conection so it ends
	$connection->close();