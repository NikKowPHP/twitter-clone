<?php 
define("ROOT", "C:/MAMP/htdocs/twitter-clone");
define("DS", DIRECTORY_SEPARATOR);
define("CLASSES", ROOT . DS . 'src' . DS . 'classes');


require_once(CLASSES . DS . "Session.php");
require_once(CLASSES . DS . "Database.php");
require_once(CLASSES . DS . 'Db_object.php');
require_once(CLASSES . DS . 'User.php');
require_once(ROOT .DS."src".DS."functions".DS. "functions.php");
?>