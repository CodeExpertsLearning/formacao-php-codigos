<?php
namespace Export\Contracts;

interface IExport
{
	public function export();
	public function toArray();
}