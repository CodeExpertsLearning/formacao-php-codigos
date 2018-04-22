<?php
namespace CodeExperts;

use CodeExperts\Contract\Car;

class Up implements Car
{
	public function showInfo()
	{
		return __CLASS__;
	}
}