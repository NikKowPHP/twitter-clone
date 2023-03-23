<?php require_once("../functions/init.php") ?>
<?php
if(Authentication::is_logged_in())  Authentication::logout();
redirect('login_page.php');


?>