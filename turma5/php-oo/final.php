<?php

final class Car
{
	public function getCar()
	{
		return __CLASS__;
	}
}

$car = new Car();
$car->getCar();