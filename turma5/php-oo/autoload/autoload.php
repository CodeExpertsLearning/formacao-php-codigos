<?php
//Será depreciado na versão 7.2
function __autoload($class)
{
    require __DIR__ . '/classes/' . $class . '.php';
}

$class =  new Ok('BMW', 2018);

print $class->getInfo();