<pre>

<?php 
require_once("../functions/init.php");

if(isset($_POST['login_submit'])) {
    $input_user = User::iterate_through_post($_POST);
    print_r($input_user);
    if($user_db = $input_user->check()) {
        redirect("index.php");
    }
}


?>
</pre>