<?php
require_once ("/var/www/html/twitter-clone/src/functions/init.php");
if(isset($_POST['edit_photo_submit'])) {
    $user = User::get_by_id(Cookie::get('user_id'));
    if($_FILES['background-image']['error'] == 0) {
        $background_image = new File_handler(file: $_FILES['background-image']);
        $user->setBackgroundImage($background_image->get_name());
        $background_image->write(ROOT.DS."images");
    }
    if($_FILES['user-image']['error'] == 0) {
        $user_image = new File_handler(file: $_FILES['user-image']);
        $user->setImage($user_image->get_name());
        $user_image->write(ROOT.DS."images");
    }
    $user->setUsername($_POST['username']);
    $user->setBio($_POST['bio']);
    $user->setLocation($_POST['location']);
    $user->setWebsite($_POST['website']);
//      TODO:  ITERATE THROUGH POST WITH SETTERS;
    $user->update();
    redirect("profile.php");



}

?>