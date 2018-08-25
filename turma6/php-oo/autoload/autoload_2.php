<?php

/**
 * SPL - Standard PHP Library
 */
function autoload($class)
{
	require __DIR__ .'/class/' . $class . '.php';
}

spl_autoload_register('autoload');

new Car();
new Truck();