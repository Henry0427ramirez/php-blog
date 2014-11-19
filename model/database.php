<?php
class Database {
	private $connection;
	private $host;
	private $username;
	private $password;
	private $database;
	//these variables will stay with us
	//these varibles will be hidden when people access the file
	//we use private to only access it here in this file

	public function __construct ($host, $username, $password, $database) {
		//these variables will disappear when the function is done.
       $this->host = $host;
       $this->username = $username;
       $this->password = $password;
       $this->database = $database;
	}
}