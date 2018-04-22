<?php

interface People
{
    public function getName();
}

class Programmer implements People
{
    public function getName()
    {
        print "I'm Programmer";
    }
}

$prog = new Programmer();
$prog->getName();