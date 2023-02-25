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

}

?>