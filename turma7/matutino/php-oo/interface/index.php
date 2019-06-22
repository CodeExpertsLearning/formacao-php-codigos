<?php 

require __DIR__ . '/ExportInterface.php';
require __DIR__ . '/XlsExport.php';
require __DIR__ . '/TxtExport.php';
require __DIR__ . '/Client.php';

$export = new TxtExport();

$client = new Client();

$client->geraRemessa($export);
