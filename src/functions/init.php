<?php 
define("ROOT", "/var/www/html/twitter-clone");
define("DS", DIRECTORY_SEPARATOR);
define("CLASSES", ROOT . DS . 'src' . DS . 'classes');


require_once(CLASSES . DS . "Session.php");
require_once(CLASSES . DS . "Database.php");
require_once(CLASSES . DS . 'Db_object.php');
require_once(CLASSES . DS . 'User.php');
require_once(CLASSES . DS . 'File_handler.php');
require_once(CLASSES . DS . 'Tweet.php');
require_once(CLASSES . DS . 'Follow.php');
require_once(CLASSES . DS . 'Modal.php');
require_once(CLASSES . DS . 'Cookie.php');
require_once(CLASSES . DS . 'Authentication.php');
require_once(ROOT .DS."src".DS."functions".DS. "functions.php");
?>