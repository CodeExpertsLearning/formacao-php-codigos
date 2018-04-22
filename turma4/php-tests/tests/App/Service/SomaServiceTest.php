<?php 
use App\TestCase;

use App\Service\SomaService;

class SomaServiceTest extends TestCase
{
    public function testSeServiceRealizaOperacoesDeSoma()
    {
        $somaMock = $this->getSomaMock();

        $somaService = new SomaService($somaMock);
        $result = $somaService->doSoma(1, 2);
        
        $this->assertEquals(3, $result);
    }
}