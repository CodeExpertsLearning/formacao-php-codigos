<?php
namespace LojaApp\Http;

class Flash
{
    public static function add($key, $message)
    {
        Session::add($key, $message);
    }

    public static function has($key)
    {
        return Session::has($key);
    }

    public static function get($key)
    {
        $message = Session::get($key);

        Session::remove($key);

        return $message;
    }
}