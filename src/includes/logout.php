<?php require_once("src/functions/init.php") ?>
<?php 
if(!isset($_SESSION['user_id'])) {
    redirect("login_page.php");
}

?>