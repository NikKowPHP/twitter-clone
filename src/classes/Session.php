<?php
declare(strict_types=1);
require_once("/var/www/html/twitter-clone/src/classes/Cookie.php");

class Session {
    private ?string $id;
    public bool $signed_in = false;
    private ?string $message;
    private ?int $user_id = null;

    function __construct() {
        session_start();
        $this->check_login();
        $this->check_message();
        $this->id = session_id();
    }
    private function check_login():bool
    {
        if(isset($_SESSION['user_id'])) {
            $this->user_id = $_SESSION['user_id'];
            $this->signed_in = true;
            return true;
        } else {
            unset($this->user_id);
            $this->signed_in = false;
            return false;
        }
    }
    private function check_message()
    {
        if(isset($_SESSION['message'])) {
            $this->message = $_SESSION['message'];
            unset($_SESSION['message']);
        } else {
            $this->message = "";
        }
    }

    /**
     * @return string|null
     */
    public function get_id(): ?string
    {
        return $this->id;
    }

    /**
     * @param string|null $id
     */
    public function set_id(?string $id): void
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
}
$session = new Session();

?>