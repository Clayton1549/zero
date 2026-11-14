<!DOCTYPE html>
<html pt-BR>
<head>
  <meta charset="utf-8">
<title>Admin atualiza preco</title>
  <link rel="stylesheet" href="../../bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="../css/img.css">
  <link rel="shortcut icon" href="../../images/icones/engrenagem.png"> 
</head>
<body class="text-center">
	<div class="container">
    <h1 class="text-warning">Painel de Administração do Sistema.</h1>
 </div>
   <br><br><br>
    <div class="container border border-primary bg-light">
      <form action= "../login-logout/actionLogin.php" method="post" class="form-signin">
		<h1 class=" text-info mb-3">Login</h1>
		<label for="email">Digite seu email:</label>
		<input type="email" id="email" name="email" class="form-control" placeholder="Digite seu email" required autofocus>
		<label for="senha">Digite a senha:</label>
		<input type="password" id="senha" name="senha" class="form-control" placeholder="Digite sua senha" required>
     <div class="checkbox mb-3">
		<label><input type="checkbox" name="lembrar" required> Clicar ok ?</label>
	 </div>
	 <input type="submit" name="enviar" value="Entrar" class="btn btn-primary btn-lg btn-block">
   </form>
</div>
	
	<script src="../jQuery/jquery.js"></script>
	<script src="../jQuery/bootstrap.bundle.min.js"></script>
</body>
</html>