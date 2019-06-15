<?php 

class Pessoa
{
    public $nome;

    public function mostrarNome()
    {
        print 'Meu nome é: ' . $this->nome;
    }
}

$pessoa = new Pessoa();
$pessoa->nome = 'nanderson castro';
$pessoa->mostrarNome();