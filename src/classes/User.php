<?php
declare(strict_types=1);

class User extends Db_object{
    protected static string $db_table_name = "users";
    protected static array $db_fields = ['username', 'password', 'email', 'token', 'active', 'image', 'background_image', 'bio', 'location', 'website'];
    public ?int $id;
    public ?string $username;
    public ?string $password;
    public ?string $email;
    public ?string $token;
    public ?bool $active;
    public ?string $image;
    public ?string $background_image;
    public ?string $bio;
    public ?string $location;
    public ?string $website;

   public function encrypt_password():void
    {
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
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

    public function is_following($channel_id):bool
    {
        $followings_arr = $this->get_following();
        if($followings_arr != 0) {
            foreach($followings_arr as $following_obj) {
                if ($following_obj->following == $channel_id) {
                    return true;
                }
            }
        }
        return false;
    }
}
?>