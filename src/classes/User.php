<?php 

class User {
    protected static string $db_table_name = "users";
    protected static array $db_fields = ['username', 'password', 'email'];
    public ?int $id;
    public ?string $username;
    public ?string $password;
    public ?string $email;

}
?>