<?php
class Db_object
{

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
    private static function get_data_by_query($sql)
    {
        global $database;
        $objects_arr = [];
        $rows = $database->query($sql);
        while ($row = $rows->fetch_assoc()) {
            $objects_arr[] = static::instantiate($row);
        }
        return $objects_arr;
    }
    public static function get_all() {
        $sql = "SELECT * FROM " . static::$db_table_name;
        return static::get_data_by_query($sql);
    }
    public static function get_by_id(int $id) {
        $sql = "SELECT * FROM " . static::$db_table_name . " WHERE id= {$id} LIMIT 1";
        return static::get_data_by_query($sql)[0];
    }
    public static function iterate_through_post(array $post):self 
    {
        global $database;
        $obj_props = static::$db_fields;
        $obj_array = [];
        foreach($post as $key => $value) {
            if(in_array($key,$obj_props)) {
               $obj_array[$key] = $database->conn->real_escape_string($value); 
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
                $props[$field] = $database->conn->real_escape_string($this->$field);
            }
        }
        return $props;
    }

    public function create(): bool
    {
        $props = $this->properties();
        global $database;
        $sql = "INSERT INTO " . static::$db_table_name . " (" . implode(', ', array_keys($props)). ")" 
                . " VALUES ('" . implode("', '", array_values($props)) . "')";
                print_r($sql);
        return $database->query($sql) ? true : false;
    }

}

?>