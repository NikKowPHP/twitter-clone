<?php 
require_once("/var/www/html/twitter-clone/src/functions/init.php");

if(isset($_POST['create_tweet'])) {
    $file = new File_handler($_FILES['image']);
   echo $file->write(ROOT.DS."images");
    
    $tweet = Tweet::iterate_through_post($_POST);
    $tweet->image = $file->get_name();
    $tweet->user_id = $_GET['user_id'];
    $tweet->date = date('Y-m-d H:i:s');
    $tweet->create();
    redirect("index.php");
}

?>