<?php 
require_once("Session.php");

class User extends Db_object{
    protected static string $db_table_name = "users";
    protected static array $db_fields = ['username', 'password', 'email', 'token', 'active', 'image'];
    public ?int $id;
    public ?string $username;
    public ?string $password;
    public ?string $email;
    public ?string $token;
    public ?bool $active;
    public ?string $image;

   public function encrypt_password():void
    {
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
    }
    private function check_password(string $db_password):bool
     {
        return password_verify($this->password, $db_password);
    }

    public function check():bool
    {
        global $database;
        global $session;
        $sql = "SELECT * FROM users WHERE email = '$this->email'";
        if($db_user = User::get_data_by_query($sql)[0]) {
            if($this->check_password($db_user->password)) {
                $session->set_user_id($db_user->id);
                return true;
            } else {
                $session->set_message("wrong password");
                return false;
            }

        } else {
            $session->set_message("A user with this email does not exists");
            return false;
        }
    }
    public function get_following():int|array
    {
        return ($followings = Follow::get_all_by('user_id', $this->id)) ? $followings : 0;

    }
    public function get_followers(): int|array
    {
        return ($followers = Follow::get_all_by('following', $this->id)) ? $followers : 0;
    }
    public function get_following_count():int
    {
        return (is_int($this->get_following()) ? 0 : count($this->get_following()));
    }
    public function get_followers_count():int
    {
        return (is_int($this->get_followers()) ? 0 : count($this->get_followers()));
    }

}
?>