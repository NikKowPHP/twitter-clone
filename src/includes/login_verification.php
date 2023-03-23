<?php
require_once("../functions/init.php");

if(isset($_POST['login_submit']))
   if(Authentication::login($_POST['email'], $_POST['password'])) {
    Session::set('is_logged_in', 'email or password are wrong');
       redirect('index.php');
   }else {
       Session::set('is_logged_in', 'email or password are wrong');
       redirect('login_page.php');
   }
?>