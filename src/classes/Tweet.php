<?php 
class Tweet extends Db_object 
{
    protected string $db_table_name = "tweets";
    protected array $db_fields;

    public ?int $id;
    public ?int $user_id;
    public ?string $body;
    public ?string $image;
    public ?string $date;
    

}
 ?>