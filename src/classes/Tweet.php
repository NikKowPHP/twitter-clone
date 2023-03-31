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

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
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
     * @return string|null
     */
    public function getBody(): ?string
    {
        return $this->body;
    }

    /**
     * @param string|null $body
     */
    public function setBody(?string $body): void
    {
        $this->body = $body;
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
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * @param string|null $date
     */
    public function setDate(?string $date): void
    {
        $this->date = $date;
    }


    public function get_retweets():int|array
    {
        return ($retweets = Retweet::get_all_by('tweet_id', $this->getId())) ? $retweets : 0;
    }
    public function get_retweets_count():?int
    {
        $retweets = $this->get_retweets();
        return ($retweets ? count($retweets): null);

    }
}
 ?>