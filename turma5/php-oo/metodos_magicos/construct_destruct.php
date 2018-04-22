<?php

class People
{
	private $name;
	private $age;

	public function __construct()
	{
		print __CLASS__;
	}

	public function __destruct()
	{
		print __METHOD__;
	}
}

$people = new People();

print $people;