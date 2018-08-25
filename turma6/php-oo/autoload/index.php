<?php

use Export\Contracts\IExport;
use Export\XmlExport;
use Export\JsonExport;
use ExportVendor\XmlExport as Xml;

require __DIR__ . '/autoload.php';
//
//$xml = new XmlExport();
//print $xml->export();
//
//$json = new JsonExport();
//print $json->export();
//
//$xml = new Xml();
//print $xml->export();

//Uso de Interface
class Client
{
	private $export;

	public function __construct(IExport $export)
	{
		$this->export = $export;
	}

	public function doExport()
	{
		return $this->export->export();
	}
}

$json = new JsonExport();
$client = new Client($json);

print $client->doExport();