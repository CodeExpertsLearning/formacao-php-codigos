<?php

class Conta
{
    private $saldo;

    public function depositar($valor)
    {
        $this->saldo += $valor;
    }


    public function sacar($valor)
    {
        $this->saldo -= $valor;
    }


    public function verSaldo()
    {
        return $this->saldo;
    }
}