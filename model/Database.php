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
//calls connection so we dont have to repeet the code through out the pages.
	public function openConnection() {
		$this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);


		if($connection->connect_error){
			die("<p>Error: "  . $connection->connect_error . "</P>");
		}
	}

	public function closeConnection() {

	}

	public function query($string) {

	}
}