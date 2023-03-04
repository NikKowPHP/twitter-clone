<?php

use function PHPSTORM_META\type;

require_once('/var/www/html/twitter-clone/config/db_config.php');
class Database {
    public $pdo;
    protected $stmt;

    function __construct() {
        $this->open_connection();
    }
    public function open_connection() {

        try {
            $this->pdo = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection falied: " . $e->getMessage());
        }

    }
    public function execute_query(string $sql, array $params = array(), bool $return_data = false ):bool|array
    {
        try {
            $this->pdo->beginTransaction();
            $this->stmt = $this->pdo->prepare($sql);
            foreach($params as $key => $value) {
                $this->stmt->bindValue(":$key", $value);
            }
            $result = $this->stmt->execute();
            if($return_data && $result) {
                $result = $this->get_data($result);
            }
            $this->pdo->commit();
            $this->pdo = null;
            $this->stmt = null;
            return $result;

        } catch (PDOException $e) {
            $this->pdo->rollBack();
            die("ERROR: ". $e->getMessage());
        }
    }
    protected function get_data($result):array
    {
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
} 
$database = new Database();

?>