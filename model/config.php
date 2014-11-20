<?php
  require_once(__DIR__ . "/database.php");
  $path = "/My-php-blog/";
  // this our new path to fixe some of our files.
  $host = "localhost";
  $username = "root";
  $password = "root";
  $database = "blog_db";

  $connection = new Database($host, $username, $password, $database);
  //$host(the server) $username(name of host) password(server password and our database) 
