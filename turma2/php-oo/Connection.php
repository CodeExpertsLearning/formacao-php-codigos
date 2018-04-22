<?php 

class Connection
{
	private $host     = '127.0.0.1';
	private $db       = 'formacao_php';
	private $user     = 'root';
	private $password = '123456';

	public function getConnection()
	{
		$dsn = "mysql:dbname={$this->db};host={$this->host}";
		$user = $this->user;
		$password = $this->password;
		
		$pdo = new \PDO($dsn, $user, $password);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	

		return $pdo;
	}
}