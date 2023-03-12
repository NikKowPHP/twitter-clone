<?php
require_once("/var/www/html/twitter-clone/src/functions/init.php");

if(isset($_POST['follow'])) {
    $user_id = $session->get_user_id();
    $follow = new Follow();
    $follow->set_user_id($session->get_user_id());
    $follow->set_following($_GET['following']);
    if($follow->create()) {
        redirect("index.php");
    }
}
?>