<?php
namespace App\Export;

class XlsExport implements ExportInterface
{
    public function export(array $data = array())
    {
        return 'Xls Exportado...';
    }
}