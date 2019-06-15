<?php

class Produto {
    protected $nome;
    public $preco;
    public $qtd;

    public function setarNome($nome)
    {
        $this->nome = $nome;
    }

    private function pegarNome()
    {
       return $this->nome;
    }
}

class Qualquer extends Produto
{
    public function Ok()
    {
        return $this->pegarNome();
    }
}

$produto = new Qualquer();
$produto->setarNome('Notebook Dell');
$produto->preco = 9.90;
$produto->qtd   = 10;

print $produto->Ok();
