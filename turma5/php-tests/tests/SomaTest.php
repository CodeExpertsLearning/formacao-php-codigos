<?php
use PHPUnit\Framework\TestCase;

use Code\Soma;

class SomaTest extends TestCase
{
    public function testSomaDoisNumerosERetornaResultadoX()
    {
        $soma = new Soma();
        $result = $soma->somar(3, 5);

        $this->assertEquals(8, $result);

        $soma = new Soma();
        $result = $soma->somar(3, 10);

        $this->assertEquals(13, $result);
        
        $result = (new Soma())->somar(30, 5);

        $this->assertEquals(35, $result);
    }

    /**
     * @expectedException Exception
     * @expectedExceptionMessage Informe dois numeros pra soma
     */
    public function testFalhaAoNaoPassarUmValor()
    {
        $soma = new Soma();
        $result = $soma->somar(30);
    }
}