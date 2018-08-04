<?php

class SegundaClasse extends PrimeiraClasse
{
	public function showClassName()
	{
		return $this->getName() . ' ' . __CLASS__;
	}
}