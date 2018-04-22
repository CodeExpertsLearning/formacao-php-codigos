<?php

class Printer
{
	protected $model;

	public function setModel($model)
	{
		$this->model = $model;
	}

	public function getModel()
	{
		return 'Model is ' . $this->model;
	}
}
class Epson extends Printer
{
	public function getOther()
	{
		$this->model = 'OK';
	}
}
$printer = new Epson();

$printer->setModel('Epson');

print $printer->getModel();