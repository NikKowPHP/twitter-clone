<?php
class Authentication
{
    public function login(string $email, string $password):bool
    {
        $sql = "SELECT * FROM users WHERE email = '$this->email'";
        $user = User::get_data_by_query($sql)[0];
        if(!$user || !password_verify($password, $user->password)) {
            return false;
        }
        Session::set(key:'user_id', value:$user->id);
        Cookie::set('remember_me', $user->id, time() + (30 * 24 * 60 * 60));
        return true;

    }
    public function logout()
    {
        Session::remove('user_id');
        Cookie::remove('remember_me');
    }
    public function is_logged_in()
    {
        return Session::exists('user_id');
    }

}

?>