<?php

class Client
{
    private $exporter; 

    public function __construct(IExport $exporter)
    {
        $this->exporter = $exporter;
    }

    public function doExport()
    {
        return $this->exporter->export();
    }
}