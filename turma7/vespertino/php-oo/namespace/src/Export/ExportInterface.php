<?php
namespace App\Export;

interface ExportInterface
{
    public function export(array $data = array());
}