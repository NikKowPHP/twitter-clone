<?php

use function PHPSTORM_META\type;

require_once('C:\MAMP\htdocs\twitter-clone\config\db_config.php');
class Database {
    public $conn;


    function __construct() {
        $this->open_connection();

    }
    public function open_connection() {
        $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if($this->conn->connect_errno) {
            die("Connection failed: " . $this->conn->connect_errno);
        }
    }
    public function query(string $sql){
        if($result = $this->conn->query($sql)) {
            return $result;
        }

    }



} 
$database = new Database();

?>