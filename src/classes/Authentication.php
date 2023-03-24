<?php
class Authentication
{
    public static function login(string $email, string $password):bool
    {
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $user = User::get_data_by_query($sql)[0];
        if(!$user || !password_verify($password, $user->password)) {
            return false;
        }
        Session::regenerate();
        Session::set(key:'user_id', value:$user->id);

        Cookie::set('user_id', $user->id, true);
        return true;
    }
    public static function logout():void
    {
        Session::destroy();
        Cookie::remove('user_id');
    }
    public static function is_logged_in():bool
    {
        return Cookie::exists('user_id');
    }

}

?>