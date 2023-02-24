<?php

use function PHPSTORM_META\type;

require_once('./config/db_config.php');
class Database {
    public $conn;


    public function open_connection() {
        $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if($this->conn->connect_errno) {
            die("Connection failed: " . $this->conn->connect_errno);
        }
    }
    public function query(string $sql){
        $query = $this->conn->query($sql);
        return $this->confirm_query($query);

    }
    private function confirm_query($query) {
        if(!$query) {
            die("query failed " . $this->conn->error);
        } else {
            return $query;
        }
    }



} 
$database = new Database();

?>