<?php

//Array com chaves numeradas
$usuario = array('Nanderson', 28);

// print_r($usuario);
// var_dump($usuario);

print $usuario[0];
print '<hr>';
// Array com chaves nomeadas ou associativo
$usuario2 = array(
    'nome' => 'Nanderson',
    'idade' => 28
);

//Array short syntax
$usuario2 = ['nome' => 'Nanderson', 'idade' => 28];

print $usuario2['nome'] . ' tem ' 
      . $usuario2['idade'] . ' anos';


print_r(count($usuario2));