<?php
   require_once(__DIR__ . "/../model/config.php");
?>

<h1>Register</h1>

<form method="post" action="<?php echo $path . "controller/create-user.php"; ?>"> 
    <div>
    	<label for="email">Email:</label>
    	<input type="text" name="email" />
    	<!-- for the users email-->
    </div>

    <div>
    	<label for="username">Username:</label>
    	<input type="text" name="username" />
    	<!-- the users name -->
    </div>

    <div>
    	<label for="password">password:</label>
    	<input type="password" name="password" />
    	<!--the password nut its private so the user doesnt see it -->
    </div>

    <div>
    	<button type="submit">Submit</button>
    	<!--to submit the post-->
    </div>
</form>