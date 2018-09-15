<?php
namespace Calc;

use PHPUnit\Framework\TestCase;

class SubTest extends TestCase
{
     protected function assertPreConditions()
     {
     	$this->assertTrue(class_exists('\Calc\Sub'));
     }

     public function testDoSub()
     {
          $sub = new Sub(10, 9);

          $this->assertEquals(1, $sub->doSub());
     }

	/**
	 * @expectedException \Exception
	 * @expectedExceptionMessage Parameter invalid
	 */
	public function testSubWithInvalidParameter()
	{
		$sum = new Sum(30, null);
	}
}