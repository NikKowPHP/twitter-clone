<?php
require_once("../functions/functions.php");

if (isset($_POST['register_submit'])) {
    $user = User::iterate_through_post($_POST);
    $user->token = bin2hex(openssl_random_pseudo_bytes(40));
    $user->encrypt_password();
    $user->active = 1;

    if ($user->create()) {
        $session->set_message("you have created a user");
        redirect("index.php");
    } else {
        $session->set_message("something went wrong");
    }

}
?>