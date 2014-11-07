<?php
   $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
   //filters the input so people dont hack you also to sanitize the post
   $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
   //we have saved our inputs

   echo "<p>Title: $title</p>";
   echo "<p>Post: $post</p>";
   //we echoed them out to let us know the information was recieved.