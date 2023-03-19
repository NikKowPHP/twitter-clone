<?php
declare(strict_types=1);
class Cookie
{
    private string $username;
    private string $password;

    /**
     * @param string $username
     * @param string $password
     */
    public function __construct(string $username, string $password)
    {
        $this->username = $username;
        $this->password = $password;
        $this->set_cookie();
    }


    private function set_cookie() {
        $expire = time() + (30 * 24 * 60 * 60);
        setcookie('username', $this->username, $expire, '/');
        setcookie('password', $this->password, $expire, '/');
    }
}

?>