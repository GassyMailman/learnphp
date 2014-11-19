<?php
class Database {
	private $connection;
	private $host;
	private $username;
	private $password
	private $database;
//__construct() is the method name for the constructor. The constructor is called on an object after it has been created, and is a good place to put initialisation code, etc.
	public function __construct($host, $username, $password, $database) {
		$this->host = $host;
		$this->username = $username;
		$this->password = $password;
		$this->database = $database;
	}
//a function is used to hold the repetitive code.
	public function openConnection() {
		$this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

//checked if we can establish a connection
		if($this->connection->connect_error){
			die("<p>Error: "  . $thsi->connection->connect_error . "</P>");
		}
	}
//(isset)--Determine if a variable is set and is not NULL. 
	public function closeConnection() {
		if(isset($this->connection)) {
			$this->connection->close();
		}
	}

	public function query($string) {

	}
}