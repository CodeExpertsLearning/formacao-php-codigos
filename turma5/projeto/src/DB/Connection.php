<?php
namespace Code\DB;

use \PDO;

class Connection
{
	/**
	 * @var String
	 */
	private static $instance;

	private function __construct(){}

	/**
	 * Realize connect with database
	 * @param array $data
	 */
	public static function getInstance(array $data = null)
	{

		if(null === self::$instance) {
			try {

				$dsn = 'mysql:host=' . $data['host'] . ';dbname=' . $data['database'];

				$con = new PDO($dsn, $data['user'], $data['password']);

				$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$con->exec("SET NAMES {$data['charset']};");

				self::$instance = $con;

			} catch(\PDOexception $e) {
//				$e->getMessage();
					return 'Sorry, not connect to database! :\'(';
			}
		}

		return self::$instance;
	}
}