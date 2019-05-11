<?php

/**
 * Aritmeticos (+, -, *, /, %)
 */

print 10 + 10;
print '<hr>';
/**
 * Comparação (
 * ==, 
 * !=, ===, !==, 
 * >=, <=)
 */
$num1 = 10;
$num2 = 10;
print $num1 == $num2;
print '<hr>';
print $num1 === $num2;

/**
 * Lógicos 
 * OR ||, NOT !,
 * AND &&
 */
$num1 = 10;
$num2 = 20;

$num3 = 40;
$num4 = 45;

print $num1 == $num2 || $num3 == $num4;

print '<hr>';
print $num1 == 10 && $num4 == 40;

print '<hr>';
print !($num1 == 20);