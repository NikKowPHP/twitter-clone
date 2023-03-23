<?php
declare(strict_types=1);

class Session {

    public static function start():bool
    {
        if(session_status() == PHP_SESSION_NONE) {
            return session_start();
        }
        return false;
    }

    public static function regenerate(bool $delete_old_session = true):bool
    {
        self::start();
        return session_regenerate_id($delete_old_session);
    }

    public static function set(string $key, string|int $value): void
    {
        self::start();
        $_SESSION[$key] = $value;
    }

    public static function exists($key):bool
    {
        self::start();
        return isset($_SESSION[$key]);
    }
    public static function get(string $name, $default = null)
    {
        return $_SESSION[$name] ?? $default;
    }

    public static function remove($key):void
    {
        self::start();
        unset($_SESSION[$key]);
    }

    public static function destroy(): void
    {
        self::start();
        session_destroy();
    }
}

?>