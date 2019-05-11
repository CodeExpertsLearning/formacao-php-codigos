<?php 
//Array: Sintaxe Normal
$usuario = array('Nanderson', 28);

//Array: Sintaxe Reduzida
$usuario = ['Nanderson', 28];

print_r($usuario);
var_dump($usuario);

print "$usuario[0] têm $usuario[1] anos";

$usuario = [
    'nome' => 'Nanderson', 
    'idade' => 28,
];

print '<hr>';
print "{$usuario['nome']} 
       têm {$usuario['idade']} anos";