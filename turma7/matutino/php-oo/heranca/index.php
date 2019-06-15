<?php 

require __DIR__ . '/Pessoa.php';
require __DIR__ . '/Programador.php';

$programador = new Programador();

$programador->setNome('Dev');

print $programador->getNome() 
        . ' é ' . $programador->getProfissao();