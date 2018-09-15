<?php
namespace Calc;

use PHPUnit\Framework\TestCase;

class SumTest extends TestCase
{
	public function testDoSum()
	{
		$sum = new Sum(10, 11);
		$this->assertEquals(21, $sum->doSum());

		$sum = new Sum(30, 32);
		$this->assertEquals(62, $sum->doSum());
	}

	/**
	 * @expectedException \Exception
	 * @expectedExceptionMessage Parameter invalid
	 */
	public function testSumWithInvalidParameter()
	{
		$sum = new Sum(30, null);
	}
}