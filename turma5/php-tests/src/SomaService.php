<?php
namespace Code;

class SomaService 
{
    private $soma;

    public function __construct(Soma $soma)
    {
        $this->soma = $soma;
    }

    public function fazSoma($num1, $num2)
    {   
        return $this->soma->somar($num1, $num2);
    }
}