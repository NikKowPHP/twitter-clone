<?php 
session_start();

class Session {
    private ?string $message;

    function __construct() {
        if(isset($_SESSION['message'])) {
            $this->message = $_SESSION['message'];
        } else {
            $this->message = null;
        }
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