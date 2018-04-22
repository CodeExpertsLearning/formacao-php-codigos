<?php

function __autoload($class)
{
	require __DIR__ . '/class/' . $class . '.php';
}

$class = new Car();
print $class->getCar();