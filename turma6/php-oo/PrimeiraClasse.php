<?php

class PrimeiraClasse
{
	private $name;

	public function getName()
	{
		return $this->name;
	}

	public function setName( $name )
	{
		$this->name = $name;
	}
	public function showName()
	{
		return $this->name . ' ' . $this->showOtherName();
	}

	public function showOtherName()
	{
		return 'OK';
	}
}