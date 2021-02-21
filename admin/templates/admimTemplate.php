<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Pagina de inicio</title>

<link href="../../bootstrap/bootstrap.min.css"  rel="stylesheet">

      <link rel="stylesheet" href="../css/img.css">
      <link rel="shortcut icon" href="../images/favicon/favicon.png" /> 

</head>

<body>
	<nav class="navbar bg-info navbar-dark navbar-expand-lg">
		<a class="navbar-brand" href="#"><img src="../../images/logo_b.jpg" alt="clayton"></a>
		<!-- menu sanduich -->
		<button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
	      <span class="navbar-toggler-icon"></span>
         </button>
		
		<div id="menu" class="collapse navbar-collapse">
			
			<ul class="navbar-nav ml-4">
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
		</ul>
			
			<ul class="navbar-nav ml-md-auto">
				<li class="nav-item">
					<a class="nav-link" href="../login-logout/logout.php">Sair</a>
				</li>
			</ul>
		
		</div>
     </nav>

      <?php
         session_start();
          
           require('../../admin/login-logout/include_bd.php');
           
			if((isset ($_SESSION['email']) == true) and (isset ($_SESSION['senha']) == true)){
	
				$logado = $_SESSION['email'];
			    
				echo "  <p   style = 'margin:10px; color:green;' >      Olá    .$logado;</p>";
				 } else{
				
			     header("Location: index.php");	
                   }

	         ?>

    <div class="container">
       
        <h1 class="text-center text-info">Central de administração do site </h1>

        <p class="text-center text-info">Escolha uma tarefa ...  </p>


      <a href="../templates/atualizaPreco.php">Atualizar preco</a>

   </div>
 

          



  <br><br><br><br>
 
	<script src="../../jQuery/jquery.js"></script>
	<script src="../../jQuery/bootstrap.bundle.min.js"></script>


  </body>
</html>

