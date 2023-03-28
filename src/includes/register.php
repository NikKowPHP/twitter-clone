<?php
require_once("/var/www/html/twitter-clone/src/functions/init.php");
require_once("../functions/functions.php");

if (isset($_POST['register_submit'])) {
    $user = User::iterate_through_post($_POST);
    $user->token = bin2hex(openssl_random_pseudo_bytes(40));
    $user->encrypt_password();
    $user->active = 1;

    if($user->create()) {
        redirect("index.php");
    } else {
        reload();
    }


}
?>