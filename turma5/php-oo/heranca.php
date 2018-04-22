<?php
//Heranca
class Car
{
	public $color;
	public $model;

	public function run()
	{
		return $this->model . ' is running...';
	}
}

class Fusca extends Car
{
	public $model = 'Fusca';
}

$car = new Fusca();
print $car->run();