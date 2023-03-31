<?php
declare(strict_types=1);

class Cookie
{
    private static int $expire =  604800;

    public static function get(string $name, $default = null)
    {
        return $_COOKIE[$name] ?? $default;
    }

    public static function set(string $key, string|int $value, bool $is_positive): bool
    {
        return setcookie($key, (string)$value, self::expiration($is_positive), '/');
    }
    public static function has(string $name): bool
    {
        return isset($_COOKIE[$name]);
    }
    public static function remove(string $name): bool
    {
        if(self::has($name)) {
            unset($_COOKIE[$name]);
            return self::set($name, '', false);
        }
        return false;
    }
    private static function expiration(bool $is_positive = true):int
    {
        return $is_positive ? time() + static::$expire : time() - static::$expire;
    }

    public static function exists(string $key): bool
    {
        return isset($_COOKIE['user_id']) ? true : false;
    }


}

?>