<?php

class People
{
	private $name;
	private $age;

	public function __toString()
	{
		return "Object printed!";
	}
}

$people = new People();

print $people;