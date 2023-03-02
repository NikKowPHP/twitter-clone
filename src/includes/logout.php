<?php require_once("../functions/init.php") ?>
<?php 
if(!isset($_SESSION['user_id'])) {
    redirect("login_page.php");
} else {
    $session->logout();
    redirect("login_page.php");
}


?>