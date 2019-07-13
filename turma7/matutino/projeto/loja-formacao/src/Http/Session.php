<?php
namespace LojaApp\Http;

class Session
{
    private static function sessionStart()
    {
        if(session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function add($key, $value)
    {
        self::sessionStart();

        $_SESSION[$key] = $value;
    }

    public static function has($key)
    {
        self::sessionStart();
        
        return isset($_SESSION[$key]);
    }

    public static function get($key)
    {
        self::sessionStart();

        if(!isset($_SESSION[$key])) return null;

        return $_SESSION[$key];
    }

    public static function remove($key)
    {
        self::sessionStart();

        if(!isset($_SESSION[$key])) return null;

        unset($_SESSION[$key]);
    }

    public static function clearAll()
    {
        self::sessionStart();

        \session_destroy();
        $_SESSION = [];
    }
}