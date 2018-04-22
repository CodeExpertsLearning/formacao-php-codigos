<?php

class Carro
{
    private $model;
    private $year;

    public function __construct(string $model, int $year)
    {
        $this->model = $model;
        $this->year  = $year;       
    }

    public function getInfo()
    {
        return "Carro " . $this->model . ", ano " . $this->year;
    }
}