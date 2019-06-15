<?php 

class Carro
{
   public $cor;
   public $ano;
   public $modelo;
   
   public function __construct($cor, $ano, $modelo)
   {
       $this->cor = $cor;
       $this->ano = $ano;
       $this->modelo = $modelo;
   }

   public function __destruct()
   {
       //print 'Carro destruído...';
   }

   public function ligar()
   {
       print $this->modelo . ' ligado...';
   }

   public function andar($km)
   {
        for($i =0; $i <= $km; $i++) {
            print '.';
        }
   }

   public function desligar()
   {
       print $this->modelo . ' desligado...';
   }
} 