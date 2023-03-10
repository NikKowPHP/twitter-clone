<?php 
session_start();

class Session {
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
    public function set_user_id($user_id)
    {
        $_SESSION['user_id'] = $user_id;
        $this->user_id = $_SESSION['user_id'];
    }
    public function get_user_id():?int
    {
        return $this->user_id;
    }


    public function set_message($message):void
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
        return isset($this->user_id) ? true: false;
    }
}
$session = new Session();

?>