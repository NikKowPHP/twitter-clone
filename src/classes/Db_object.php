<?php
class Db_object
{
    protected string $db_table_name = '';
    protected array $db_fields = array();

    public function __construct()
    {
       $this->db_fields =  $this->get_db_fields();
       $this->db_table_name = $this->get_table_name();
        
    }
    protected function get_db_fields(): array
    {
        $sql = "describe ". $this->db_table_name; 
        global $database;
        
        $db_all_columns = $database->execute_query(sql:$sql, return_data: true);
        
        $db_columns = [];
        foreach($db_all_columns as $db_column) {
          if($db_column['Field'] != 'id') {

            $db_columns[] = $db_column['Field'];
          }
        }
        
       return $db_columns; 

    }
    protected function get_table_name():string
    {
        return strtolower(get_called_class()) . 's';
    }
    public function get_table_name_string():string
    {
        return $this->db_table_name;
    }
    public function get_db_fields_array(): array
    {
        return $this->db_fields;
    }
    protected function instantiate($db_row):void
    {
        
        foreach ($db_row as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }

    }
    public static function get_data_by_query(string $sql, array $params = array(), $return_data = true)
    {
        global $database;


        $objects_arr = [];
        $rows = $database->execute_query($sql, $params, $return_data);
            foreach($rows as $row) {

                $new_obj = static::create_object(); 
                $new_obj->instantiate($row);
                $objects_arr[] = $new_obj;
            }
        return $objects_arr;
    }
    protected static function create_object():static
    {
        return new static();
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
    public  function iterate_through_post(array $post):void 
    {
        $obj_props = $this->db_fields;
        $obj_array = [];
        foreach($post as $key => $value) {
            if(in_array($key,$obj_props)) {
               $this->$key = trim($value); 
            }
        }
        
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