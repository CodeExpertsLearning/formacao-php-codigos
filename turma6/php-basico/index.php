<?php
/**
 * Hello World
 */
print '<h1>Hello World</h1>';

/**
 * Variaveis
 */
$name = 'Nanderson';
//print $name;

/**
 * Concatenação com .
 */
//print 'Hello, ' . $name;
//print "Hello, $name";

//Comentário de 1 linha
# Comentário de 1 linha

/**
 * Tipos Básicos
 */
$a = 10;
print gettype($a);
print '<br>';

$a = "10";
print gettype($a);
print '<br>';

$a = 10.9;
print gettype($a);
print '<br>';

$a = false;
print gettype($a);
print '<br>';

$a = [10, 11, 12];
print gettype($a);
print '<br>';

$a = new stdClass();
print gettype($a);
print '<br>';