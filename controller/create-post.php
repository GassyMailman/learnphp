<?php
//location of database
require_once(__DIR__ . "/../model/config.php");

//Stores title and Filters it so its harder to hack
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
//Stores post and Filters it so its harder to hack	
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

$query = $connection->query("INSERT INTO posts SET title = '$title', post = '$post'");

if($query) {
	echo "<p>Successfully inserted post: $title</p>";
}
else {
	echo "<p>$connection->error</p>";
}
