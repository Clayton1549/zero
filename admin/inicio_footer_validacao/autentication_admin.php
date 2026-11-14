<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pagina de inicio</title>
  <link rel="stylesheet" href="../../bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="../css/img.css">
  <link rel="shortcut icon" href="../../images/icones/engrenagem.png"> 
</head>
 <body>
	<nav class="navbar bg-info navbar-dark navbar-expand-lg">
	  <a class="navbar-brand" href="../templates/admimTemplate.php"><img src="../../images/icones/logo_b.jpg" alt="logo"></a>
		<!-- menu sanduich -->
		<button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	 
	 <div id="menu" class="collapse navbar-collapse">
	   <ul class="navbar-nav">
	   <li class="nav-item">
		 <a class="nav-link" href="admimTemplate.php">Inicio</a>
		</li>
		<li class="nav-item">
		  <a class="nav-link" href="../templates/atualizaPreco.php">Preços</a>
		</li>
		<li class="nav-item">
		  <a class="nav-link" href="../templates/estoque.php">Estoque</a>
		</li>
          <li class="nav-item">
			<a class="nav-link" href="pedidos.php">Pedidos</a>
		 </li>
		 <li class="nav-item">
		 	<a class="nav-link" href="../templates/controleUsuario.php">Controle usuário</a>
		 </li>
		</ul>
		 <ul class="navbar-nav ml-md-auto">
		 <li class="nav-item">
		  <a class="nav-link " href="../login-logout/logout.php" onclick="if(!confirm(' Tem certeza que quer fazer logout no sistema ?')) return false;">Sair</a>
				</li>
			</ul>
		</div>
     </nav>
     
     <?php
         session_start();
          include '../../admin/login-logout/include_bd.php';
           if((isset ($_SESSION['email']) == true) and (isset ($_SESSION['senha']) == true)){
	           $logado = $_SESSION['email'];
			   echo "<p style = 'margin:10px; color:green;'> Olá . $logado;</p>";
				 } else {
				
			     header("Location: ../index.php");	
                }

	         ?>

       <script>
    </script>
  