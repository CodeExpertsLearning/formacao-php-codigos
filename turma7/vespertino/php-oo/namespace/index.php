<?php
use App\Connection\Types\MysqlConnection;
use App\Export\XlsExport;

require __DIR__ . '/vendor/autoload.php';

new MysqlConnection();
$export = new XlsExport();
print $export->export([]);