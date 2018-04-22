<?php

class User
{
    public static $name;

    /**
     * @return mixed
     */
    static public function getName()
    {
        return self::$name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        self::$name = $name;
    }
}

$user = new User();

$user->setName("Teste");

print User::getName();
