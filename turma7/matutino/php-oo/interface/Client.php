<?php

class Client
{
    public function geraRemessa(ExportInterface $export)
    {
        print $export->export();
    }
}