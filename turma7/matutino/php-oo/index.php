<?php
require __DIR__ .'/Carro.php';

$carro = new Carro('branca', 1990, 'Corsa');
// $carro->ano    = 1990;
// $carro->modelo = 'Corsa';
// $carro->cor    = 'branca';

$carro->ligar();
print "\n";
$carro->andar(10);
print "\n";
$carro->desligar();

$carro2 = new Carro('preto', 2019, 'Corolla');

print "\n";
$carro2->ligar();
print "\n";
$carro2->andar(2000);
print "\n";
$carro2->desligar();

//var_dump($carro);