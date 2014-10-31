<?php

require_once(__DIR__ . "/../database/database.php");
/*directory of the file. If used inside an include, the 
directory of the included file is returned. */
$connection = new mysqli($host,$username,$password);
/*$host(the server) $username(name of host) password(server password) */
if($connection->connect_error) {
	die("<p>Error: " . $connection->connection_error . "</p>");
}

$exists = $connection->select_db($database);
/* this is used to see if the database exists*/
if(!$exists) {
	$query = $connection->query("CREATE DATABASE $database");
    /*this is used to create a database.*/

    if ($query) {
    	echo "<p>Successfully created database;" . $database . "</p>";
    }
}
else {
    echo "<p>Database already exists.</p> ";
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

if ($query) {
	echo "Successfully created table: posts";
	//to let u know we created a table.
}
else{
	echo "<p>$connection->error</p>";
	/* the p tags are to put the statemnets in paragraphs
	in there own lines*/
}

$connection->close();