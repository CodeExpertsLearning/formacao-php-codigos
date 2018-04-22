<?php

class User
{
    public $name;
    public $email;
    public $password;

    public function showName()
    {
        return $this->name;
    }

    public function showEmail()
    {
        return $this->email;
    }
}

//$user = new User();

//print $user->showName();