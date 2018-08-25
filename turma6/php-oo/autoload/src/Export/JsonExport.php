<?php
namespace Export;

use Export\Contracts\IExport;

class JsonExport implements IExport
{
	public function export()
	{
		return 'Json exported';
	}

	public function toArray()
	{
		return 'Teste';
	}
}