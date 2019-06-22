<?php
use Code\Export\TxtExport;
use Code\Connection\Mysql\ConnectionMysql;

require __DIR__ . '/autoload.php';

$export = new TxtExport();
print $export->export();