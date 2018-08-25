<?php

function __autoload($class)
{
	require __DIR__ .'/class/' . $class . '.php';
}

new Car();
new Truck();