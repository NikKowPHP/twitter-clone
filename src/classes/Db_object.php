<?php
class Db_object
{
    protected static string $db_table_name;
    protected static array $db_fields;

    protected static function instantiate($db_row):static
    {
        $new_obj = new static();
        foreach ($db_row as $key => $value) {
            if (property_exists($new_obj, $key)) {
                $new_obj->$key = $value;
            }
        }
            return $new_obj;

    }
    public static function get_data_by_query(string $sql, array $params = array(), $return_data = true)
    {
        global $database;


        $objects_arr = [];
        $rows = $database->execute_query(sql:$sql,params: $params, return_data: $return_data);
            foreach($rows as $row) {
                $objects_arr[] = static::instantiate($row);
            }
        return $objects_arr;
    }
    protected static function create_object():static
    {
        return new static();
    }
    public static function get_all() {
        $sql = "SELECT * FROM " . static::$db_table_name;
        return static::get_data_by_query($sql);
    }
    public static function get_by_id(int $id) {
        $params = array("id" => $id);
        $table  = static::$db_table_name; 
        $where = " WHERE id = :id ";
        $sql = "SELECT * FROM $table $where LIMIT 1";
        return static::get_data_by_query($sql, $params, true)[0];
    }
    public static function get_all_by(string $by, int|string $param, array $join = array()):array {
        $params = array($by => $param);
        $table = static::$db_table_name;
        $where = " WHERE $by = :$by";
        if(!empty($join)) {
            $join = $join['related_table'];
        }
//        TODO: JOIN users and tweets
        $sql = "SELECT * FROM $table $where";
        return static::get_data_by_query($sql, $params);
    }
    public  static function iterate_through_post(array $post):self
    {
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
    public function update(): bool
    {
        global $database;
        $table = static::$db_table_name;
        $columns = $this->properties();
        $update = "UPDATE $table SET ";
        $where = " WHERE id = $this->id";
        $set_clause = [];

        foreach($columns as $column => $value) {
            $set_clause[] = "$column = :$column";
        }
        $set_clause_string = implode(", ", $set_clause);
        $set_clause_string = rtrim($set_clause_string, ", ");

        $sql = $update . $set_clause_string . $where;
        return $database->execute_query(sql:$sql, params:$columns);
    }

}

?>