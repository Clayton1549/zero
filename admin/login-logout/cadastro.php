<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Adimin</title>
	<link rel="stylesheet" type="text/css" href="../../bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/img.css">
	<link rel="shortcut icon" href="../../images/icones/engrenagem.png">
</head>
<body>
	<div class="container">
      <h1 class="text-info">Digite o número</h1>
      <form action="../login-logout/cadAdmin.php" method="post" class="form-signin">
      	<label for="numero">Número:</label>
      	<input type="numero" name="numero" class="form-control" required autofocus>
      	<br>
      	<div class="checkbox mb-3">
      		<label><input type="checkbox" name="checar" required> Click aqui </label>
      	</div>
      	<input type="submit" name="enviar" value="Enviar" class="btn btn-primary">
      </form> 
    </div>
	<script src="../../jQuery/jquery.js"></script>
	<script src="../../bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>