<?php
namespace App;

class TestCase extends \PHPUnit_Framework_TestCase
{
    protected $conn;

    public function setUp()
    {
        $this->conn = new \PDO('sqlite::memory:');
        $this->conn->exec("
			CREATE TABLE IF NOT EXISTS 'products' (
				'id' INTEGER PRIMARY KEY,
				'name' TEXT,
				'created_at' TIMESTAMP,
				'updated_at' TIMESTAMP
			);
		");
    }

    public function tearDown()
    {
        $this->conn->exec("DROP TABLE products");
    }

}