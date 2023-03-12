<?php
class Follow extends Db_object
{
    protected static string $db_table_name = "follows";
    protected static array $db_fields = ['user_id', 'following'];
    public ?int $id;
    public ?int $user_id;
    public ?int $following;

}
