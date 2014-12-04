<?php
   require_once(__DIR__ . "/../view/header.php");
   require_once(__DIR__ . "/../model/config.php");
   require_once(__DIR__ . "/../view/footer.php");
   //your storing th connection from create-db into the create-post

   $title = filter_input(INPUT_POST,"title",FILTER_SANITIZE_STRING);
   //filter the title from hackers
   $post = filter_input(INPUT_POST,"post",FILTER_SANITIZE_STRING);
   //stops hackers from taking our stuff
   $date = new DateTime('today');
   $time = new DateTime('America/Los_Angeles');
   
   $query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post'");
   if($query) {
      echo "<p>Successfully inserted post: $title</p>"; 
      //to tell us if our post works
      echo "Posted on: " . $date->format("M/D" . " " . "d/Y") .  " at " . $time->format("G:i");
   }
   else {
   	  echo "<p>" . $_SESSION["connection"]->error . "</p>";
      // tells us theres an error 
   }