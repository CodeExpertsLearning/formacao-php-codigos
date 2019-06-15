<?php 

class Programador extends Pessoa
{
    protected $profissao = 'Programador';

    public function __construct()
    {
        parent::__construct(10);
    }
}