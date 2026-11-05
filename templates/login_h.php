<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<title>Login</title>
  <link href="../bootstrap/bootstrap.min.css"  rel="stylesheet">
  <link rel="stylesheet" href="../css/img.css">
  <link rel="shortcut icon" href="../images/favicon/favicon.png" /> 
</head>
<body>
 <nav class="navbar  bg-dark navbar-dark navbar-expand-lg">
   <a class="navbar-brand" href="../index.php"><img src="../images/logo_b.jpg" alt="logo"></a>
	   <!-- menu sanduich -->
	<button class="navbar-toggler" data-toggle="collapse" data-target="#menu" >
	  <span class="navbar-toggler-icon"></span>
	</button>
    <div id="menu" class="collapse navbar-collapse">
     <ul class="navbar-nav ml-auto">
	    <li class="nav-item">
		 <a class="nav-link active" href="login_h.php">Login</a>
		</li>
		<li class="nav-item">
		 <a class="nav-link" href="cadastro.php">Cadastro</a>
	    </li>
	 </ul>  
    </div>
</nav>
   <br><br><br>
	 <div class="container diplay-5 text-secondary">
	  <h1>Digite seu E-mail e senha para Entrar.</h1>
     </div>
	 <div class="container border border-primary bg-light">
	   <h2>Fazer Login</h2>
	   <p>Garantimos sua privacidade ! </p>
	 
	 <form method="post" action="../logica/login.php" class="was-validated">
	 <div class="form-group">
	   <label for="user">Seu E-mail:</label>
	   <input type="email" class="form-control" id="user" placeholder="Enter email" name="user" required>
	 <div class="valid-feedback">Ok.</div>
	 <div class="invalid-feedback">Por favor preêncha esse campo.</div>
	 </div>
	 <div class="form-group">
	  <label for="senha">Sua senha:</label>
	  <input type="password" class="form-control" id="senha" placeholder="Enter password" name="senha" required>
	 <div class="valid-feedback">Ok.</div>
	 <div class="invalid-feedback">Por favor preêncha esse campo.</div>
	 </div>
	 <div class="form-group form-check">
	  <label class="form-check-label">
	  <input class="form-check-input" type="checkbox" name="remember" required> Click aqui para continuar.
	  <div class="valid-feedback">Ok.</div>
	  <div class="invalid-feedback">click-me</div>
	 </label>
	  </div>
	  <button type="submit" class="btn btn-primary">Entrar</button>
	  <a class="btn btn-danger" href="../admin/index.php">Admin</a>
	<br><br>
	</form>
  </div>

   <script src="../jQuery/jquery.js"></script>
  <script src="../jQuery/bootstrap.bundle.min.js"></script>
			   
  </body>
</html>