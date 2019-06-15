<?php

class Carro
{
    public $ano;
    public $cor;
    public $modelo;
    
    public function __construct($ano = null, $cor = null, $modelo = null)
    {
        $this->ano = $ano;
        $this->cor = $cor;
        $this->modelo = $modelo;
    }

    public function __destruct()
    {
        print "\n Classe destruída...";
    }

    public function ligar()
    {
        return $this->modelo . ' ligado';
    }
    public function andar($km)
    {
        for($i = 0; $i <= $km; $i++) {
            print '.';
        }
    }
    public function desligar()
    {
        return  $this->modelo . ' desligado';
    }
}