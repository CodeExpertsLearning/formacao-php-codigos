<?php
namespace App;

use App\Soma;

class SomaTest extends \PHPUnit_Framework_TestCase
{
    private $soma;

    public function setUp()
    {
        $this->soma = new Soma();
    }

    public function testSomaDoisNumeros()
    {
        $this->assertEquals(22, $this->soma->somar(10, 12));
        $this->assertEquals(12, $this->soma->somar(10, 2));
        $this->assertEquals(10, $this->soma->somar(5, 5));
    }

    /**
     * @expectedException Exception
     * @expectedExceptionMessage Parametro Invalido...
     */
    public function testParametrosInvalidos()
    {
        $this->soma->somar();
    }
}