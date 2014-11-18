<?php
   require_once(__DIR__ . "/../model/config.php");
?>
<h1>Create Blog Post</h1>

<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
	<div>
	   <label for="title">Title: </label>
	   <input type="text" name="title" />
	   <!--used this to create a title-->
	</div>
	<div>
	   <label for="post">Post: </label>
	   <textarea name="post"></textarea>
	   <!--used this to create a post box that expands-->
	</div>
	<div>
	   <button type="submit">Submit</button>
	   <!-- our submit button to submit our posts -->
	</div>
</form>