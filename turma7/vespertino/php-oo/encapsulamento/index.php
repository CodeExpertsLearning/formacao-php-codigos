<?php

require __DIR__ . '/Conta.php';

$conta = new Conta();

$conta->depositar(10);
print $conta->verSaldo();
print "\n";

$conta->depositar(10);
print $conta->verSaldo();
print "\n";

$conta->sacar(10);
print $conta->verSaldo();
print "\n";