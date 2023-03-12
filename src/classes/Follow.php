<?php
class Follow extends Db_object
{
    protected static string $db_table_name = "follows";
    protected static array $db_fields = ['user_id', 'following'];
    public ?int $id;
    public ?int $user_id;
    public ?int $following;

    /**
     * @return int|null
     */
    public function get_user_id(): ?int
    {
        return $this->user_id;
    }

    /**
     * @param int|null $user_id
     */
    public function set_user_id(?int $user_id): void
    {
        $this->user_id = $user_id;
    }

    /**
     * @return int|null
     */
    public function get_following(): ?int
    {
        return $this->following;
    }

    /**
     * @param int|null $following
     */
    public function set_following(?int $following): void
    {
        $this->following = $following;
    }


}
