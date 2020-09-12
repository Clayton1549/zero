<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Admin atualiza preco</title>
<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
<link href="../../bootstrap/bootstrap.min.css"  rel="stylesheet">



<link rel="stylesheet" href="../css/img.css">
<link rel="shortcut icon" href="../images/favicon/favicon.png" /> 

</head>
<body class="text-center">
	

    <div class="container">

       <h1 class="text-warning">Login do  Painel de Administração do Sistema (somente administradores)...</h1>

    </div>
		
<br><br><br>
    <div class="container border border-primary bg-light">
      <form  action= "../ResqAdmin/actionLogin.php"  method="post" class="form-signin">
			 <h1 class=" text-info mb-3">Login</h1>
			 <input type="email" name="email" class="form-control" placeholder="Digite seu email" required autofocus>
			 <legend></legend>
			 <input type="password" name="senha" class="form-control" placeholder="Digite sua senha" required>

			 <div class="checkbox mb-3">
			 	<label><input type="checkbox" name="lembrar" required> Clicar ok ?</label>
			 	
			 </div>
	 <input type="submit" name="enviar" value="Entrar" class="btn btn-primary btn-lg btn-block">
   </form>
</div>
	   
    <!-- boostrap javascript -->
	<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
	<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>-->
	<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>-->
	<script src="../jQuery/jquery.js"></script>
	<script src="../jQuery/bootstrap.bundle.min.js"></script>
</body>
</html>