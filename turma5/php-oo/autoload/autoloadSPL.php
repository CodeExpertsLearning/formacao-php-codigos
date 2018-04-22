<?php

function myAutoload($class)
{
    require __DIR__ . '/classes/' . $class . '.php';
}

spl_autoload_register('myAutoload');

$class =  new Ok('BMW', 2018);

print $class->getInfo();