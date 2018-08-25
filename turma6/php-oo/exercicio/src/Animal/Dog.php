<?php
namespace Animal;

class Dog
{
	public $name;

	public function run()
	{
		return $this->name .
		       ' running...';
	}
}