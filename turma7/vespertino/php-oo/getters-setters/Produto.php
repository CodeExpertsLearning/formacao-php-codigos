<?php

class Produto
{
    private $nome;
    private $preco;
    private $qtd;
    private $descricao;
       
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getNome()
    {
        return $this->nome;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;

        return $this;
    }

   
    public function getQtd()
    {
        return $this->qtd;
    }
    public function setQtd($qtd)
    {
        $this->qtd = $qtd;

        return $this;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }
}