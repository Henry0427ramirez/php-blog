<?php
   $title = filter_input(INPUT_POST,"title",FILTER_SANITIZE_STRING) ;
   //filter the title from hackers
   $post = filter_input(INPUT_POST,"post",FILTER_SANITIZE_STRING) ;
   //stops hackers from taking our stuff

   echo "<p>Title: $title</p>";
   //echoing out our filters
   echo "<p>Post: $post</p>";
   //echoing out our filters