<?php

class Remessa
{
    public function gerarRemessa(ExportInterface $exporter)
    {
        //logica de busca remessa
        return $exporter->export();
    }
}