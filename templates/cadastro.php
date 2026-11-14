<!DOCTYPE html>
<html lang="pt-BR">
  <head>
  <meta charset="utf-8">
  <title>cadastro</title>
  <link href="../bootstrap/bootstrap.min.css"  rel="stylesheet">
  <link rel="stylesheet" href="../css/img.css">
  <link rel="shortcut icon" href="../images/favicon/favicon.png" /> 
</head>
<body>
<nav class="navbar bg-dark navbar-dark navbar-expand-lg">
  <a class="navbar-brand" href="../templates/index.php"><img src="../images/icones/logo_b.jpg" alt="logo"></a>
	 <!-- menu sanduich -->
	<button class="navbar-toggler" data-toggle="collapse" data-target="#menu" >
	  <span class="navbar-toggler-icon"></span>
	 </button>
     <div id="menu" class="collapse navbar-collapse">
      <ul class="navbar-nav ml-auto">
	    <li class="nav-item">
		 <a class="nav-link " href="login_h.php">Login</a>
	    <li class="nav-item">
		 <a class="nav-link active" href="cadastro.php">Cadastro</a>
	    </li>
	 </ul>  
   </div>
</nav>

<br><br><br>
    <div class="container diplay-5 text-secondary">
	   <h1>Digite seus dados para fazer cadastro.</h1>
    </div>
    <div class="container border border-primary bg-light">
	  <h2>Fazer Cadastro</h2>
	  <p>Seja bem vindo</p>
  <form method="post" action="../logica/gravar.php" class="was-validated">
	<div class="form-group">
	 <label for="email">E-mail:</label>
	 <input type="text" class="form-control" id="email" placeholder="email" name="email" required>
    <div class="valid-feedback">Ok.</div>
    <div class="invalid-feedback">Preencha esse campo por favor.</div>
	</div>
	<div class="form-group">
	 <label for="senha">Senha</label>
	 <input type="password" class="form-control" id="senha" placeholder="senha" name="senha" required>
	 <div class="valid-feedback">Ok.</div>
	 <div class="invalid-feedback">Preencha esse campo por favor.</div>
     <div class="form-group">
	  <label for="senha">Redigitar senha</label>
	  <input type="password" class="form-control" id="confirme" placeholder="digite a senha novamente" name="confirme" required>
	 <div class="valid-feedback">Ok.</div>
	  <div class="invalid-feedback">Preencha esse campo por favor.</div>
		<div class="form-group">
		  <label for="City">Cidade</label>
		  <input type="text" class="form-control" id="City" placeholder="cidade" name="City" required>
		  <div class="valid-feedback">Ok.</div>
		  <div class="invalid-feedback">Preencha esse campo por favor.</div>
		</div>
	  <div class="form-group form-check">
		  <label class="form-check-label">
			<input class="form-check-input" type="checkbox" name="remember" required> Confime!.
			<div class="valid-feedback">Confirmado.</div>
			<div class="invalid-feedback">Confirme</div>
		  </label>
	  </div>
		<button type="submit" class="btn btn-primary">Enviar</button>
         </form>
	</div>
	
	<script src="../jQuery/jquery.js"></script>
	<script src="../jQuery/bootstrap.bundle.min.js"></script>
</body>
</html>