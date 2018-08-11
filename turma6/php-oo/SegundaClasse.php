<?php

class SegundaClasse extends PrimeiraClasse
{
	public function showClassName()
	{
		$this->setName('Teste');
		return $this->getName() . ' ' . __CLASS__;
	}
}