<?php
abstract class Connection
{
	public function doConnection()
	{
		return 'Do connection';
	}

	abstract public function setConnection();
}

class Entity extends Connection
{
	public function setConnection()
	{
	}
}

$entity = new Entity();
$entity->doConnection();
