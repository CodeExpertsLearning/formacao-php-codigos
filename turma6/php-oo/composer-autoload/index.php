<?php
use DNET\Export\XmlExport;
use DNET\Export\JsonExport;
use DNET\ExportVendor\XmlExport as Xml;

require __DIR__ . '/vendor/autoload.php';

$xml = new XmlExport();
print $xml->export();

$json = new JsonExport();
print $json->export();

$xml = new Xml();
print $xml->export();