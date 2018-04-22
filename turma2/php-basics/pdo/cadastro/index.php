<?php 
    session_start();
    $msg = isset($_SESSION['msg']) ? $_SESSION['msg'] : null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastro de Produtos</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
	<div class="row">
		<div class="container">
		    <?php if($msg): unset($_SESSION['msg']); ?>
				<div class="alert alert-success">
					<?=$msg;?>
				</div>
		    <?php endif;?>
			<form method="post" action="/cadastro/save.php">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Nome</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nome do Produto" name="name">
			  </div>
			 <div class="form-group">
			    <label for="exampleInputEmail1">Price</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Preço do Produto" name="price">
			  </div>
 
			  <button type="submit" class="btn btn-default">Cadastrar</button>
			</form>
		</div>
	</div>
</body>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>