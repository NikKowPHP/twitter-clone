<?php
class Db_object
{
    protected static string $db_table_name = '';
    protected  static array $db_fields = array();

    public function __construct()
    {
        $sql = "describe ". static::$db_table_name; 
        global $database;
        $db_all_columns = $database->execute_query(sql:$sql, return_data: true);
        
        $db_columns = [];
        foreach($db_all_columns as $db_column) {
          if($db_column['Field'] != 'id') {

            $db_columns[] = $db_column['Field'];
          }
        }
        static::$db_fields = $db_columns;
    }
    private static function instantiate($db_row)
    {
        $calling_class = get_called_class();
        $obj = new $calling_class;
        foreach ($db_row as $key => $value) {
            if (property_exists($obj, $key)) {
                $obj->$key = $value;
            }
        }
        return $obj;

    }
    public static function get_data_by_query(string $sql, array $params = array(), $return_data = true)
    {
        global $database;
        $objects_arr = [];
        $rows = $database->execute_query($sql, $params, $return_data);
            foreach($rows as $row) {
                $objects_arr[] = static::instantiate($row);
            }
        return $objects_arr;
    }
    public static function get_all() {
        $sql = "SELECT * FROM " . static::$db_table_name;
        // TODO: finish changing methods to pdo
        return static::get_data_by_query($sql);
    }
    public static function get_by_id(int $id) {
        $params = array("id" => $id);
        $table  = static::$db_table_name;
        $where = " WHERE id = :id ";
        $sql = "SELECT * FROM $table $where LIMIT 1";
        return static::get_data_by_query($sql, $params, true);
    }
    public static function iterate_through_post(array $post):self 
    {
        global $database;
        $obj_props = static::$db_fields;
        $obj_array = [];
        foreach($post as $key => $value) {
            if(in_array($key,$obj_props)) {
               $obj_array[$key] = trim($value); 
            }
        }
        return static::instantiate($obj_array);
    }
    protected function properties(): array
    {
        global $database;
        $props = [];
        foreach(static::$db_fields as $field) {
            if(property_exists($this, $field)) {
                $props[$field] = $this->$field;
            }
        }
        return $props;
    }

    public function create(): bool
    {
        global $database;
        $table = static::$db_table_name;
        $props = $this->properties();
        $columns = implode(", ", array_keys($props));
        $placeholders = ":" . implode(", :", array_keys($props));
        $sql = "INSERT INTO $table ($columns) VALUES ($placeholders)";
        return $database->execute_query($sql, $props);
    }

}

?>