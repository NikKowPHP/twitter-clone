<?php
require_once("/var/www/html/twitter-clone/src/functions/init.php");

if(isset($_GET['follow'])) {
    $user_id = $session->get_user_id();
    $follow = new Follow();
    $follow->set_user_id($session->get_user_id());
    $follow->set_following($_GET['follow']);
    if($follow->create()) {
        reload();
    }
}
if (isset($_GET['unfollow'])) {
    $user_id = $session->get_user_id();
    $follow = Follow::get_by_id($_GET['unfollow']);
    $follow->delete();
    reload();
}
?>