<?php
namespace Calc;


class Sub
{
	private $num1;
	private $num2;

	public function __construct($num1 = null, $num2 = null)
	{
		if(is_null($num1) || is_null($num2))
			throw new \Exception("Parameter invalid");

		$this->num1 = $num1;
		$this->num2 = $num2;
	}

	public function doSub()
	{
		return $this->num1 - $this->num2;
	}
}