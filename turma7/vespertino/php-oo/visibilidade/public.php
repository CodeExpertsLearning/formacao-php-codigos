<?php

class Produto {
    public $nome;
    public $preco;
    public $qtd;
}

$produto = new Produto();
$produto->nome  = 'Notebook Dell';
$produto->preco = 9.90;
$produto->qtd   = 10;

print $produto->nome;