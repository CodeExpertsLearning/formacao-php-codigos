<?php
namespace App;

use App\Subtracao;

class SubtracaoTest extends \PHPUnit_Framework_TestCase
{
	private $subtracao;

	public function setup()
	{
		$this->subtracao = new Subtracao();
	}

	public function testRealizaSubtracao()
	{
		$this->assertEquals($this->subtracao->calc(5, 2), 3);
	}
}