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
        $this->user_id = $_SESSION['user_id'];
        $_SESSION['user_id'] = $user_id;
    }

    public function set_message($message):void
    {
        $this->message = $message;
        $_SESSION['message'] = $message;
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
}
$session = new Session();

?>