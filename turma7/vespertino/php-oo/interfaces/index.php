<?php

require __DIR__ . '/ExportInterface.php';
require __DIR__ . '/XlsExport.php';
require __DIR__ . '/CsvExport.php';
require __DIR__ . '/Remessa.php';

$export = new XlsExport();

$remessa = new Remessa();
print $remessa->gerarRemessa($export);
