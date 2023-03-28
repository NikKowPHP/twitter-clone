<?php
class Tweet extends Db_object
{
    protected static string $db_table_name = "tweets";
    protected static array $db_fields = ['user_id', 'body', 'image', 'date'];

    public ?int $id;
    public ?int $user_id;
    public ?string $body;
    public ?string $image;
    public ?string $date;
}
 ?>