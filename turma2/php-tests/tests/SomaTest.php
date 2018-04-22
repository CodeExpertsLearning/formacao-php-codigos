<?php
namespace App;

use App\Soma;

class SomaTest extends \PHPUnit_Framework_TestCase
{
	private $soma;

	public function setup()
	{
		$this->soma = new Soma();
	}

	public function testRealizaSoma()
	{
		$this->assertEquals($this->soma->calc(2, 5), 7);
	}

	public function testRealizaOutraSoma()
	{
		$this->assertEquals($this->soma->calc(2, 8), 10);
	}
}