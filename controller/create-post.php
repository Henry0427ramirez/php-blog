<?php

   require_once(__DIR__ . "/../model/database.php");

   $connection = new mysqli($host, $username, $password, $database);
   //your storing th connection from create-db into the create-post

   $title = filter_input(INPUT_POST,"title",FILTER_SANITIZE_STRING);
   //filter the title from hackers
   $post = filter_input(INPUT_POST,"post",FILTER_SANITIZE_STRING);
   //stops hackers from taking our stuff
   
   $query = $connection->query("INSERT INTO posts SET title = '$title', post = '$post'");
   if($query) {
      echo "<p>Successfully inserted post: $title</p>"; 
      //to tell us if our post works
   }
   else {
   	  echo "<p>$connection->error</p>";
      // tells us theres an error 
   }

   $connection->close();
   