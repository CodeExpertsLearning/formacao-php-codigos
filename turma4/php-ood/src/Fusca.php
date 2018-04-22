<?php
namespace CodeExperts;

use CodeExperts\Contract\Car;

class Fusca implements Car
{
	public function showInfo()
	{
		return __CLASS__;
	}
}