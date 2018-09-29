<?php
namespace Connection;

class Connection
{
	private static $instance;

	private function __construct() {}

	public static function getInstace()
	{
		if(!static::$instance) {
			$dsn = 'mysql:dbname=' . DB_NAME . ';host=' . DB_HOST;
			$pdo = new \PDO($dsn, DB_USER, DB_PASSWORD);
			$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
			static::$instance = $pdo;
		}

		return static::$instance;
	}
}