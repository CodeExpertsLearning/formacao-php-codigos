<?php
namespace Export;

use Export\Contracts\IExport;

class XmlExport implements IExport
{
	public function export()
	{
		return 'XML exported!';
	}

	public function toArray()
	{

	}
}