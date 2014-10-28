<?php

require_once(__DIR__ . "/../database/database.php");
/*directory of the file. If used inside an include, the 
directory of the included file is returned. */
$connection = new mysqli($host,$username,$password);

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


$connection->close();