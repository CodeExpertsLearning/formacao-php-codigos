<?php 

require __DIR__ . '/IExport.php';
require __DIR__ . '/Json.php';
require __DIR__ . '/Xml.php';
require __DIR__ . '/Client.php';

$data = $_SERVER;

$exporter = new Json();
$exporter->setData($data);

$client = new Client($exporter);

print $client->doExport();