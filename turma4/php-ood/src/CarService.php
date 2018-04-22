<?php
namespace CodeExperts;

use CodeExperts\Contract\Car;

class CarService
{
	private $car;

	public function __construct(Car $car)
	{
		$this->car = $car;
	}

	public function run()
	{
		return $this->car->showInfo();
	}
}