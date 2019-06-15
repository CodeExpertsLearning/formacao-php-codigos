<?php

class Pessoa
{
    public $nome;
    public $profissao;
    public $idade;

    public function __construct($nome, $profissao)
    {
        $this->nome = $nome;
        $this->profissao = $profissao;
    }

    public function mostrarNome()
    {
        return $this->nome;
    }
    public function mostrarProfissao()
    {
        return $this->profissao;
    }
    public function mostrarIdade()
    {
        return $this->idade;
    }
}