<?php

class Car
{
	public $color;
	public $model;

	public function run()
	{
		return $this->model . ' is running...';
	}
}

$car = new Car();

$car->model = 'Fusca';

print $car->run();
