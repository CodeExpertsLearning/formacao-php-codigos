<?php

class Car
{
    public $year;
    public $color;

    private function setColor($color)
    {
        $this->color = $color;
    }

    protected function setYear($year)
    {
        $this->year = $year;
    }
}

class Fusca extends Car
{
    public function getColor()
    {
//        $this->setColor("red");

        return $this->color;
    }
}

$fusca = new Fusca();
print $fusca->getColor();