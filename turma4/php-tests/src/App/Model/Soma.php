<?php 
namespace App\Model;

class Soma
{
    public function somar($num1 = null, $num2 = null)
    {
        if(is_null($num1)
        ||  is_null($num2)) {
            throw new \Exception("Invalid Parameters!");
        }
        
        return $num1 + $num2;
    }
}