<?php
namespace App;

use PHPUnit\Framework\TestCase as PHPUnit;
use App\Model\Soma;

class TestCase extends PHPUnit
{
    protected function getSomaMock()
    {
        $somar = $this->getMockBuilder(Soma::class)
                      ->setMethods(['somar'])
                      ->getMock();

        $somar->expects($this->any())
              ->method('somar')
              //->with(
                //  $this->equalTo(1),
                  //$this->equalTo(2))
              ->will($this->returnValue(3));

        return $somar;
    }
}   