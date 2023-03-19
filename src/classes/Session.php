<?php
declare(strict_types=1);
session_start();
require_once("/var/www/html/twitter-clone/src/classes/Cookie.php");

class Session {
    private ?string $id;
    private ?string $message;
    private ?int $user_id = null;

    function __construct() {
        if(isset($_SESSION['message'])) {
            $this->message = $_SESSION['message'];
        } else {
            $this->message = null;
        }
        if(isset($_SESSION['user_id'])) {

            $this->user_id = $_SESSION['user_id'];
        }
    }

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string|null $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    public function set_user_id(int $user_id)
    {
        $_SESSION['user_id'] = $user_id;
        $this->id = session_id();
        $this->user_id = $_SESSION['user_id'];
    }
    public function get_user_id():?int
    {
        return $this->user_id;
    }


    public function set_message(string $message):void
    {
        $_SESSION['message'] = $message;
        $this->message = $message;
    }

    public function get_message(): ?string
    {
        if(!is_null($this->message)) {
           $output = "<div class=\"message\">"; 
           $output .= htmlentities($this->message);
           $output .= "</div>";
           $this->message = null;
           return $output;
        } else {
            return null;
        }

    }
    public function logout():void
    {
        $this->message = null;
        $this->user_id = null;
        unset($_SESSION['message']);
        unset($_SESSION['user_id']);
    }
    public function logged_in():bool
    {
        return isset($_COOKIE['user_id']) ? true: false;
    }
}
$session = new Session();

?>