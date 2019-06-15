<?php 
class Conta 
{
    private $saldo;

    public function depositar($valor)
    {
        // $this->saldo = $this->saldo + $valor;
        $this->saldo += $valor;
    }

    public function sacar($valor)
    {
        $this->saldo -= $valor;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

}

$conta = new Conta();
$conta->depositar(10);
print $conta->getSaldo() . "\n";
$conta->depositar(10);
print $conta->getSaldo() . "\n";
$conta->sacar(10);
print $conta->getSaldo() . "\n";