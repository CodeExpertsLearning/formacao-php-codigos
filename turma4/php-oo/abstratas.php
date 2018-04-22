<?php

abstract class Carro
{
	public function ligar()
	{
		print 'Ligou';
	}

	abstract public function desligar();
}

class Fusca extends Carro
{
	public function desligar()
	{
		return __CLASS__ . ' - ok';
	}
}

$fusca = new Fusca();
$fusca->ligar();