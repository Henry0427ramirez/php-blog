<?php

require_once(__DIR__ . "/../database/database.php");
/*directory of the file. If used inside an include, the 
directory of the included file is returned. */
$connection = new mysqli($host,$username,$password);
/*$host(the server) $username(name of host) password(server password) */
if($connection->connect_error) {
	die("Error: " . $connection->connection_error);
}

$exists = $connection->select_db($database);
/* this is used to see if the database exists*/
if(!$exists) {
	$query = $connection->query("CREATE DATABASE $database");
    /*this is used to create a database.*/

    if ($query) {
    	echo "Successfully created database;" . $database;
    }
}
else {
    echo "Database already exists. ";
    /*to let us know that the database exists*/
}

$query = $connection->query("CREATE TABLE posts ("
	//creates id's for posts.
	. "id int(11) NOT NULL AUTO_INCREMENT, "
	// title is a string of 255 characters.
	. "title varchar(255) NOT NULL,"
	// creates posts column.
	. "post text NOT NULL,"
	// telling thr post text that the primary key is id.
	. "PRIMARY KEY (id))");

$connection->close();