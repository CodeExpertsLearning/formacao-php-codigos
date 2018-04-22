<?php 
namespace App\Service;

use App\Model\Soma;

class SomaService
{
    private $soma;

    public function __construct(Soma $soma)
    {
        $this->soma = $soma;
    }

    public function doSoma()
    {
        $args = func_get_args();

        return $this->soma->somar($args[0], $args[1]);
    }
}