<?php

//Estrutura de Controle Condicional

$nome = 'Formação PHP 1';

if($nome == 'Formação PHP') {
    print 'Curso ' . $nome;
} else if($nome == 'Formação PHP 1') {
    print 'SenãoSe: Curso ' . $nome;
} else {
    print 'Curso não é Formação PHP';
}
print '<hr>';

switch ($nome) {
    case 'Formação PHP':
        print 'Curso ' . $nome;
    break;

    case 'Formação PHP 1':
        print 'SenãoSe: Curso ' . $nome;
    break;
    
    default:
        print 'Curso não é Formação PHP';
    break;
}