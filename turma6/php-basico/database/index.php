<?php
   require __DIR__ . '/crud.php';
   //HTML GET
   if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$result = insert($conn, $_POST);
		print $result;
   }
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Cadastro de Usuário</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<div class="col">
		<h1>Cadastro de Usuário</h1>
		<hr>
	</div>
	<div class="col">
		<form action="" method="post">
			<div class="form-group">
				<label>Nome Completo</label>
				<input type="text" class="form-control" name="nome">
			</div>

			<div class="form-group">
				<label>E-mail</label>
				<input type="text" class="form-control" name="email">
			</div>

			<div class="form-group">
				<label>Telefone</label>
				<input type="text" class="form-control" name="telefone">
			</div>
			<div class="form-group text-center">
				<input type="submit" class="btn btn-success btn-lg" name="salvar" value="Salvar">
			</div>
		</form>
	</div>
	<div class="col">
		<h1>Usuários</h1>
		<hr>
	</div>
	<div class="col">
		<table class="table table-striped">
			<thead>
			<tr>
				<th>Nome</th>
				<th>Email</th>
				<th>Telefone</th>
				<th>Criado em</th>
			</tr>
			</thead>
			<tbody>
				<?php foreach(select($conn) as $u): ?>
				<tr>
					<td><?=$u['nome'];?></td>
					<td><?=$u['email'];?></td>
					<td><?=$u['telefone'];?></td>
					<td><?=date('d/m/Y', strtotime($u['criado_em']));?></td>
				</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	</div>
</div>
</body>
</html>
