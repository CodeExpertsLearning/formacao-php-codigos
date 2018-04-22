<?php
namespace App;

class Soma
{
    public function somar($num1 = null, $num2 = null)
    {
        if(is_null($num1)
        || is_null($num2)
        ) {
            throw new \Exception("Parametro Invalido...");
        }
        return $num1 + $num2;
    }
}