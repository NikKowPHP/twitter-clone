<?php

use function PHPSTORM_META\type;

require_once('/var/www/html/twitter-clone/config/db_config.php');
class Database {
    public $pdo;


    function __construct() {
        $this->open_connection();

    }
    public function open_connection() {

        try {
            $this->pdo = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES);
            $this->pdo->beginTransaction();
        } catch (PDOException $e) {
            die("Connection falied: " . $e->getMessage());
        }

    }
    public function execute_query(string $sql, array $params = array() ){
        try {
            $stmt = $this->pdo->prepare($sql);
            foreach($params as $key => $value) {
                
            }

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