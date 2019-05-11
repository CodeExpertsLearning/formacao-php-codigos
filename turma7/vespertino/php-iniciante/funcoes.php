<?php

function exibirNome($nome = 'Fulano', $idade = 10) {
    return $nome . ' ' .  $idade;
}

function view($conteudo) {
    return '<h1>' . $conteudo . '</h1>';
}

$nome = view(exibirNome());

print $nome;

print '<hr>';
print exibirNome();
