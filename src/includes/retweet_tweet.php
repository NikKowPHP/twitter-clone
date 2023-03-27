<?php require_once ("/var/www/html/twitter-clone/src/functions/init.php");

if(isset($_GET['tweet'])) {
    $retweet = new Retweet();
    $retweet->setTweetId((int)$_GET['tweet']);
    $retweet->setUserId(Cookie::get('user_id'));
    $retweet->create();
    redirect('index.php');
}
?>