<?php 
require __DIR__ . '/processa_form.php';

$data = $_POST;

exibeData($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Forms HTML</title>
</head>
<body>
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<form action="" method="post">
					<p>
						<label>Nome</label>
						<input type="text" name="name">
					</p>
					<p>
						<label>Preço</label>
						<input type="text" name="price">
					</p>
					<p>
						<label>Descrição</label>
						<textarea name="description" id="" cols="30" rows="10"></textarea>
					</p>
					<input type="submit" value="Salvar">
				</form>
				</div>
		</div>
	</div>
</body>
</html>