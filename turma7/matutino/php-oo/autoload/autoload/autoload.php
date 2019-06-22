<?php

function myAutoload($class)
{
    require __DIR__ . '/class/' . $class . '.php';
}

spl_autoload_register('myAutoload');