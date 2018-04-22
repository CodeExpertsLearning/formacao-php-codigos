<?php

class Ok
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
        return "Ok " . $this->model . ", ano " . $this->year;
    }
}