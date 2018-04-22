<?php
namespace Code;

class Soma
{
    public function somar($num1 = null, $num2 = null)
    {
        if(is_null($num1)
        || is_null($num2)){
            throw new \Exception("Informe dois numeros pra soma");
        }
        
        return $num1 + $num2; 
    }  
}