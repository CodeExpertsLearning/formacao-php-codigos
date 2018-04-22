<?php
namespace CodeExperts;

use CodeExperts\Contract\Car;

class Gol implements Car
{
	public function showInfo()
	{
		return __CLASS__;
	}
}