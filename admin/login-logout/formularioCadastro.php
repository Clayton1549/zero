<!DOCTYPE html>
 <html lang="pt-BR">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Cadastro</title>
 	<link rel="stylesheet" type="text/css" href="../../bootstrap/bootstrap.min.css">
 	<link rel="stylesheet" type="text/css" href="../../css/img.css">
 	<link rel="shortcut icon" type="text/css" href="../../images/icones/engrenagem.png">
 </head>
 <body>
   <div class="container">
   	<h1 class="text-info">Cadastro</h1>
    <form action="adminCadastro.php" method="post">
	  <div class="form-group">
	    <label for="email">Email</label>
	    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
	    <small id="emailAjuda" class="form-text text-muted">Nunca compartilhe email</small>
	  </div>
	  <div class="form-group">
	    <label for="senha">senha</label>
	    <input type="password" class="form-control" id="senha" name="senha" placeholder="senha" required>
	  </div>
	  <div class="form-group">
	    <label for="confirmar">Confirmar</label>
	    <input type="password" class="form-control" id="confirmar" name="confirmar" placeholder="senha" required>
	  </div>
	  <div class="form-group form-check">
	    <input type="checkbox" class="form-check-input" id="check" required>
	    <label class="form-check-label" for="check">Clique aqui !</label>
	  </div>
	  <button type="submit" class="btn btn-primary">Enviar</button>
   </form>
 </div>
 	<script src="../../jQuery/jquery.js"></script>
 	<script src="../../bootstrap/bootstrap.bundle.min.js"></script>
 </body>
 </html> 
