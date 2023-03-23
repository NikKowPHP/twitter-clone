<?php require_once('src/functions/init.php'); ?>
<?php Authentication::is_logged_in() ? $user = User::get_by_id(Cookie::get('user_id')): redirect('login_page.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.cdnfonts.com/css/chirp-2" rel="stylesheet" />
    <link rel="stylesheet" href="./styles/general.css" />
    <link rel="stylesheet" href="./styles/header.css" />
    <link rel="stylesheet" href="./styles/sidebar.css" />
    <link rel="stylesheet" href="./styles/main.css" />
    <link rel="stylesheet" href="./styles/aside.css" />
    <link rel="stylesheet" href="./styles/profile.css" />
    <title>Document</title>
  </head>
  <body>