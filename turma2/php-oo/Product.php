<?php 

class Product implements ProductInterface
{
	private $pdo;
	private $data = [];

	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}

	public function __set($key, $value)
	{
	    $this->data[$key] = $value;
	}

	public function __get($key)
	{
		if(isset($this->data[$key]))
			return $this->data[$key];
	}


	public function save()
	{
		$sql = 'INSERT INTO products(id, name, description, slug, thumb, created_at, updated_at) values(NULL, :name, :description, :slug, :thumb, now(), now())';

		$insert = $this->pdo->prepare($sql);

		foreach($this->data as $key => $v){
			print $v . ' type is '. gettype($v) . '<hr>';
			$insert->bindValue(':' . $key, $v, gettype($v) == 'string'? PDO::PARAM_STR : PDO::PARAM_STR);
		}

		if($insert->execute()) {
			return "Inserido com sucesso!";
		}
	}
}



