<?php
use Animal\Dog;

require __DIR__ . '/vendor/autoload.php';

$dog = new Dog();
$dog->name = 'Bolinha';

print $dog->run();