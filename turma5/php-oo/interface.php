<?php

interface Export
{
	public function doExport();
}

class Xml implements Export
{
	public function doExport()
	{
		return 'Exporting to Xml';
	}
}

class Json implements Export
{
	public function doExport()
	{
		return 'Exporting to Json';
	}
}

class Word implements Export
{
	public function doExport()
	{
		return 'Exporting to Word';
	}
}

class Excell implements Export
{
	public function doExport()
	{
		return 'Exporting to Excell';
	}
}

class Client
{
	private $exporter;

	public function __construct(Export $exporter)
	{
		$this->exporter = $exporter;
	}

	public function doExport()
	{
		return $this->exporter->doExport();
	}
}

$exporter = new Excell();

$export = new Client($exporter);

print $export->doExport();