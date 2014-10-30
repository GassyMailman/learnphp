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
		$query = $connection->query("CREATE DATABASE $database");
//output a message if database is created
		if($query)  {
			echo "Successfully created a database: " . $database;
		}
	}
//exicute if database already exist
	else {
		echo "Database already exists";
	}

//Creates a table for blog post
$query = $connection->query("CREATE TABLE posts ("
//increment the id of the post
 . "id int(11) NUT NULL AUTO_INCREMENT,"
//title of the psot
 . "title varchar(255) NOT NULL,"
// wont let id and title be empty
 . "post text NOT NULL,"
//will be used to hook the posts together later
 . "PRIMARY KEY (id))");

	$connection->close();