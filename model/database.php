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
  
    public function openConnection(){
     //we want to establish a connection
    	$this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
    
        if($this->connection->connect_error) {
	    die("<p>Error: " . $this->connection->connection_error . "</p>");
        }
    }
    public function closeConnection(){
        if(isset($this->connection)){
            $this->connection->close();  
        }
    // to check if theres information in our call then closing it.
    }
    public function query($string){
        $this->openConnection();
    //we use the query to open the string then close it
        $query = $this->connection->query($string);

        $this->closeConnection();

        return $query;
    //to return the results of the query
    }
}

