<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
	<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
<link href="../bootstrap/bootstrap.min.css"  rel="stylesheet">
    <link rel="stylesheet" href="../css/img.css">
    <link rel="shortcut icon" href="../images/favicon/favicon.png" /> 

</head>
<body>

 
<nav  class="navbar  bg-dark navbar-dark  navbar-expand-lg ">
	<a class="navbar-brand"  href="../templates/index.php"><img src="../images/logo_b.jpg" alt="clayton"></a>
	   <!-- menu sanduich -->
	   <button class="navbar-toggler" data-toggle="collapse" data-target="#menu" >
	   	<span class="navbar-toggler-icon"></span>
	   </button>
           <div id="menu" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-md-auto" >
			
		 </ul>
		 <ul class="navbar-nav ml-auto ">
	        <li class="nav-item ">
			  <a class="nav-link active" href="login_h.php"><span class=""></span>Login </a>
			<li class="nav-item">
			  <a class="nav-link" href="cadastro.php"><span class=""></span> Cadastro</a>
			 </li>
		</ul>  
     </div>
</nav>
	<br><br><br>
	        <div class="container diplay-5 text-secondary">
	        	<h1>Digite seu E-mail e senha para Entrar.</h1>

	             </div>
	             
				<div class="container border border-primary bg-light ">
				  <h2>Fazer Login</h2>
					  <p>Garantimos sua privacidade ! </p>
			      <form method="post" action="../logica/login.php" class="was-validated">
					<div class="form-group">
					  <label for="user">Seu E-mail:</label>
					  <input type="email" class="form-control" id="user" placeholder="Enter email" name="user" required>
				   <div class="valid-feedback">Ok.</div>
					 <div class="invalid-feedback">Por favor preêncha esse  campo.</div>
					</div>
				   <div class="form-group">
					 <label for="senha">Sua senha:</label>
					  <input type="password" class="form-control" id="senha" placeholder="Enter password" name="senha" required>
				    <div class="valid-feedback">Ok.</div>
					  <div class="invalid-feedback">Por favor preêncha esse  campo.</div>
					</div>
					<div class="form-group form-check">
					   <label class="form-check-label">
					   <input class="form-check-input" type="checkbox" name="remember" required> Click aqui para continuar.
					<div class="valid-feedback">Ok.</div>
					 <div class="invalid-feedback">click-me</div>
						</label>
					  </div>
					  <button type="submit" class="btn btn-primary">Entrar</button>
					  <br><br>
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