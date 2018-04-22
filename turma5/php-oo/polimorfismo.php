<?php

class Printer
{
	protected $printer = '';

	public function toPrint()
	{
		return $this->printer . ' is printing...';
	}
}

class HP extends Printer
{
	protected $printer = 'HP';

	public function toPrint()
	{
		return $this->printer . ' is printing...';
	}
}

class Epson extends Printer
{
	protected $printer = 'Epson';

	public function toPrint()
	{
		return $this->printer . ' is printing...';
	}
}

$printer = new Epson();
print $printer->toPrint();