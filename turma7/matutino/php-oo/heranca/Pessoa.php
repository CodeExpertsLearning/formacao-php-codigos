<?php

class Pessoa
{
    private $nome;
    private $idade;
    protected $profissao;
    
    public function __construct($idade)
    {
        $this->idade = $idade;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }
    
    public function setProfissao($profissao)
    {
        $this->profissao = $profissao;
    }

    public function getProfissao()
    {
        return $this->profissao;
    }
}