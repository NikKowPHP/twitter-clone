<?php 
function redirect(string $location) {
    header("Location:/twitter-clone/$location");
    exit();
}
function reload()
{
    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit();
}


?>