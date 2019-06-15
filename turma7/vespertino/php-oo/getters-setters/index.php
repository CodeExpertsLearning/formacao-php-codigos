<?php
require __DIR__ . '/Produto.php';

$produto = new Produto();

$produto->setNome('Mousepad');
$produto->setPreco(19.90);
$produto->setDescricao('Descrição aqui...');
$produto->setQtd(30);

// Chain Methods
// $produto->setNome('Mousepad')
//         ->setPreco(19.90)
//         ->setDescricao('Descrição aqui...')
//         ->setQtd(30);

print $produto->getNome() . ' custa R$ ' 
      . number_format($produto->getPreco(), 2, ',', '.');

