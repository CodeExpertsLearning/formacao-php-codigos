<?php

require __DIR__ . '/Carro.php';

$carro = new Carro();
$carro->ano = 1990;
$carro->modelo = 'Corsa';
$carro->cor    = 'preto';

$carro2 = new Carro();
$carro2->ano = 2019;
$carro2->modelo = 'Corolla';
$carro2->cor    = 'prata';

$carro3 = new Carro(2000, 'qualquer', 'Pegeout');

print $carro->ligar();
print "\n";
print $carro->andar(30);
print "\n";
print $carro->desligar();
print "\n";

print $carro2->ligar();
print "\n";
print $carro2->andar(30);
print "\n";
print $carro2->desligar();
print "\n";

print $carro3->ligar();
print "\n";
print $carro3->andar(30);
print "\n";
print $carro3->desligar();
print "\n";
