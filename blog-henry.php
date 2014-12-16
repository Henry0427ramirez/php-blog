<?php 
require_once(__DIR__ . "/controller/login-verify.php");
require_once(__DIR__ . "/view/header.php");
if (authenticateUser()) {
    require_once(__DIR__ . "/view/navigation.php");
}
require_once(__DIR__ . "/controller/create-db.php");
require_once(__DIR__ . "/view/footer.php");
require_once(__DIR__ . "/controller/read-posts.php");
?>
<!-- we seperated our html into headers and footers so when we code we can use the headers and footers for multiple files instead of writing the code out all the time.-->