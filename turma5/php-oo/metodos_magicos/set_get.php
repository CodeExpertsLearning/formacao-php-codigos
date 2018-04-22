<?php

class People
{
	private $data = array();

	public function __set($key, $value)
	{
		$this->data[$key] = $value;
	}

	public function __get($key)
	{
		return $this->data[$key];
	}

	public function getData()
	{
		return json_encode($this->data);
	}
}

$people = new People();
$people->name = 'OK';
$people->age = 30;
print $people->getData();