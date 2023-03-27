<?php
class Retweet extends Db_object
{
    protected static string $db_table_name = "retweets";
    protected static array $db_fields = ['user_id', 'tweet_id'];
    public ?int $id;
    public ?int $user_id;
    public ?int $tweet_id;

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
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->user_id;
    }

    /**
     * @param int|null $user_id
     */
    public function setUserId(?int $user_id): void
    {
        $this->user_id = $user_id;
    }

    /**
     * @return int|null
     */
    public function getTweetId(): ?int
    {
        return $this->tweet_id;
    }

    /**
     * @param int|null $tweet_id
     */
    public function setTweetId(?int $tweet_id): void
    {
        $this->tweet_id = $tweet_id;
    }


}
