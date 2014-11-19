<?php
	$path = "/learnphp/";	
	//information for blog (varibles) Now located here and not database.
	$host = "localhost";
	$username = "root";
	$password = "root";
	$database = "blog_db";	
//allows you to accses the closeConnection and openConnection vars. in Database
	$connection = new Database($host, $username, $password,,$database);