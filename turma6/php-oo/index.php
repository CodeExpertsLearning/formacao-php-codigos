<?php

require __DIR__ . '/PrimeiraClasse.php';
require __DIR__ . '/SegundaClasse.php';

//$primeiraClasse = new PrimeiraClasse();
//$primeiraClasse->name = 'Lazaro 24';
//print $primeiraClasse->showName() . PHP_EOL;
//print $primeiraClasse->showOtherName();

$segundaClass = new SegundaClasse();
$segundaClass->setName('Teste');

print $segundaClass->showName() . PHP_EOL;
print $segundaClass->showClassName();

$segundaClassOtherInstance = new SegundaClasse();


// public
// protected
// private