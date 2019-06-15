<?php

class Automovel
{
    protected $nome;

     public function getNome()
    {
        return $this->nome;
    }
}

class Corsa extends Automovel
{
    protected $nome = 'Corsa';
    
}

$corsa = new Corsa();
print $corsa->getNome();