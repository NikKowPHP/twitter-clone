<?php
declare(strict_types=1);
require_once("/var/www/html/twitter-clone/src/classes/Session.php");
class Cookie
{
    private int $user_id;
    private string $session_id;

    /**
     * @param string $username
     * @param string $password
     * @param int $user_id
     */
    public function __construct(int $user_id)
    {
        global $session;
        $this->user_id= $user_id;
        $this->session_id = $session->getId();
        $this->set_cookie();
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->user_id;
    }

    /**
     * @param int $id
     */
    public function setUserId(int $user_id): void
    {
        $this->user_id = $user_id;
    }

    /**
     * @return int
     */
    public function getSessionId(): string
    {
        return $this->session_id;
    }

    /**
     * @param int $session_id
     */
    public function setSessionId(string $session_id): void
    {
        $this->session_id = $session_id;
    }



    private function set_cookie() {
        $expire = time() + (30 * 24 * 60 * 60);
        setcookie('user_id', (string)$this->user_id, $expire, '/');
        setcookie('session_id', $this->session_id, $expire, '/');
    }

}

?>