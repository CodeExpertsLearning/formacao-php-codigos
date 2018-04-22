<?php
use PHPUnit\Framework\TestCase;
use Code\Soma;
use Code\SomaService;

class SomaServiceTest extends TestCase
{
    public function testSomaViaService()
    {
        $somaService = new SomaService($this->getSomaMock());

        $this->assertEquals(5, $somaService->fazSoma(3, 2));
    }

    private function getSomaMock()
    { 
        $mock = $this->getMockBuilder(Soma::class)
                     ->setMethods(['somar'])
                     ->getMock();
        
        $mock->expects($this->any())
                 ->method('somar')
                 ->will($this->returnValue(5));
        
        return $mock;
    }
}