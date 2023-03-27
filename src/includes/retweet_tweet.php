<?php require_once ("/var/www/html/twitter-clone/src/functions/init.php");

if(isset($_GET['tweet'])) {
    $retweet = new Retweet();
    $retweet->setTweetId((int)$_GET['tweet']);
    $retweet->setUserId(Cookie::get('user_id'));

    $retweet->create();
//    TODO: if exist untweet
    redirect('index.php');
}
if(isset($_GET['untweet'])) {
    $retweet = Retweet::get_by_id($_GET['untweet']);
    $retweet->delete();
    reload();
}
?>