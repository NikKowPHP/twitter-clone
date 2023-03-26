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

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * @param string|null $username
     */
    public function setUsername(?string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string|null $password
     */
    public function setPassword(?string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return bool|null
     */
    public function getActive(): ?bool
    {
        return $this->active;
    }

    /**
     * @param bool|null $active
     */
    public function setActive(?bool $active): void
    {
        $this->active = $active;
    }

    /**
     * @return string|null
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * @param string|null $image
     */
    public function setImage(?string $image): void
    {
        $this->image = $image;
    }

    /**
     * @return string|null
     */
    public function getBackgroundImage(): ?string
    {
        return $this->background_image;
    }

    /**
     * @param string|null $background_image
     */
    public function setBackgroundImage(?string $background_image): void
    {
        $this->background_image = $background_image;
    }

    /**
     * @return string|null
     */
    public function getBio(): ?string
    {
        return $this->bio;
    }

    /**
     * @param string|null $bio
     */
    public function setBio(?string $bio): void
    {
        $this->bio = $bio;
    }

    /**
     * @return string|null
     */
    public function getLocation(): ?string
    {
        return $this->location;
    }

    /**
     * @param string|null $location
     */
    public function setLocation(?string $location): void
    {
        $this->location = $location;
    }

    /**
     * @return string|null
     */
    public function getWebsite(): ?string
    {
        return $this->website;
    }

    /**
     * @param string|null $website
     */
    public function setWebsite(?string $website): void
    {
        $this->website = $website;
    }

}
?>