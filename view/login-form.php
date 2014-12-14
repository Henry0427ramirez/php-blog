<?php
    require_once(__DIR__ . "/../model/config.php");
?>

<h1>Login</h1>

<form> 
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