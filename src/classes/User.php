<?php 

class User extends Db_object{
    protected static string $db_table_name = "users";
    protected static array $db_fields = ['username', 'password', 'email'];
    public ?int $id;
    public ?string $username;
    public ?string $password;
    public ?string $email;

   public function encrypt_password() {
        $blowfish_hash_format = "$2y$10$";
        $salt_length = 22;
        $salt = $this->generate_salt($salt_length);
        $formatted_salt = $blowfish_hash_format . $salt;
        $this->password = crypt($this->password, $formatted_salt);
    }
    protected function generate_salt($length) 
    {
        $random_str = md5(uniqid(mt_rand(), true));
        $base64_str = base64_encode($random_str);
        $modified_base64_str = str_replace('+', '.', $base64_str);
        $salt = substr($modified_base64_str,0, $length);
        return $salt;
    }
    public function password_check($password, $existing_hash) {
        $hash = crypt($password, $existing_hash);
        if($hash === $existing_hash) {
            return true;
        } else {
            return false;
        }
    }

}
?>