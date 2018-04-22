<?php

// require __DIR__ . '/class/Car.php';
// function __autoload($class)
// {
//     require __DIR__ . '/class/' . $class . '.php';
// }

function myAutoload($class)
{
    require __DIR__ . '/class/' . $class . '.php';
}

spl_autoload_register('myAutoload');


new User();