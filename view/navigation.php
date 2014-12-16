<?php
require_once(__DIR__ . "/../model/config.php");
//used this to connect it to config to fix our path.
require_once(__DIR__ . "/../controller/login-verify.php"); 
 if(!authenticateUser()) {
       header("Location: " . $path . "blog-henry.php");
        die();
   }
?>
<nav>
   <ul>
   	  <li>
   	  	<a href="<?php echo $path . "post.php" ?>">Blog Post Form</a>
   	  	<!--a better way to fix connection path problems -->
   	  </li>
   </ul>
</nav>