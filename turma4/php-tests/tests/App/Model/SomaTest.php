<?php
use App\Model\Soma;

use App\TestCase;

class SomaTest extends TestCase
{
    public function testSomaDoisNumeros()
    {
        $soma = new Soma();
        
        $this->assertEquals(4, $soma->somar(2, 2));
        $this->assertEquals(5, $soma->somar(2, 3));
    }

    /**
     * @expectedException Exception 
     * @expectedExceptionMessage Invalid Parameters!
     */
    public function testNaoPassagemDeParametrosPraMinhaSoma()
    {
         $soma = new Soma();

         $soma->somar(2);
         $soma->somar(null, 2);
         $soma->somar();
    }
}