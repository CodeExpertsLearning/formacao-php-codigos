<?php
namespace Code\DB;

abstract class Entity
{
	protected $data = [];

	protected $conn;

	protected $table;

	public function __construct(\PDO $conn)
	{
		$this->conn = $conn;
	}

	public function __get($value)
	{
		return $this->data[$value];
	}

	public function __set($name, $value)
	{
		$this->data[$name] = $value;
	}

	public function insert()
	{
		foreach($this->data as $key => $value) {
			$fields[] = $key;
			$bind[]   = ':' . $key;
		}

		$fields = implode(', ', $fields);
		$bind   = implode(', ', $bind);

		$sql = 'INSERT INTO 
                      ' . $this->table . '('.
		       $fields
		       . ', created_at, updated_at) 
                VALUES('. $bind .', now(), now())';

		$insert = $this->conn->prepare($sql);

		foreach($this->data as $k => $v) {
			$param = gettype($v) == 'string' ? \PDO::PARAM_STR :  \PDO::PARAM_INT;
			$insert->bindValue(':' . $k, $v, $param);
		}

		if(!$insert->execute())
			return false;

		return $this->conn->lastInsertId();
	}

	public function update()
	{
		if(!array_key_exists('id', $this->data)) {
			throw new \Exception('ID Not Found!');
		}

		$datasSql = '';

		foreach($this->data as $key => $value)
		{
			if($key != 'id')
				$datasSql .= $key . ' = ' . ':' . $key . ', ';
		}

		$datasSql = substr($datasSql, 0, -2);

		$sql = "UPDATE " . $this->table . " SET " . $datasSql . " WHERE id = :id";

		try{

			$update = $this->conn->prepare($sql);

			$update->bindValue(':id', $this->data['id'], \PDO::PARAM_INT);

			foreach($this->data as $key => $value){
				if($key != 'id') {
					$update->bindValue(':' . $key, $value, !is_int($value) ? \PDO::PARAM_STR : \PDO::PARAM_INT);
				}
			}

			return $update->execute();

		} catch(\PDOexception $e) {
			return false;
		}
	}

	public function where($clausule)
	{
		$sql = "SELECT * FROM " . $this->table . ' WHERE ';

		$where = '';
		foreach($clausule as $key => $value) {
			$where .= $key . ' = :' . $key . ', ';
		}
		$where = substr($where,0, -2);

		$select = $this->conn->prepare($sql . $where);

		foreach($clausule as $key => $value){
			$select->bindValue(':' . $key, $value, !is_int($value) ? \PDO::PARAM_STR : \PDO::PARAM_INT);
		}

		$select->execute();

		return $select->fetch(\PDO::FETCH_ASSOC);
	}

	public function findAll()
	{
		$sql = "SELECT * FROM " . $this->table;

		$all = $this->conn->query($sql);

		return $all->fetchAll(\PDO::FETCH_ASSOC);
	}

	public function find($id)
	{
		return $this->where(['id' => $id]);
	}
}