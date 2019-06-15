<?php

require __DIR__ . '/Pessoa.php';
require __DIR__ . '/Programador.php';
require __DIR__ . '/Gestor.php';

$programador = new Programador();
// $programador->nome = 'Teste';
// $programador->idade = 30;
// $programador->profissao = 'Programador';

print $programador->mostrarNome();