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
					<a class="nav-link" href="../templates/admimTemplate.php">Inicio</a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link" href="#">Preços</a>
				</li>
			
			<li class="nav-item">
				<a class="nav-link" href="#">Estoque</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="#">Pedidos</a>
			</li>

			
		</ul>
			
		
			<ul class="navbar-nav ml-md-auto">
				<li class="nav-item">
					<a class="nav-link" href="../ResqAdmin/logout.php">Sair</a>
				</li>
			</ul>
		
		</div>
     </nav>


   <?php
         session_start();
            require('../../bd/conexao.php');
			if((isset ($_SESSION['email']) == true) and (isset ($_SESSION['senha']) == true)){
	
				$logado = $_SESSION['email'];
			    
				echo "  <p   style = 'margin:10px; color:green;' >      Olá    .$logado;</p>";
				 } else{
				
			     header("Location: ../index.php");	
               }

     ?>

		
  <br><br><br>
 
     
	<div class="container border border-primary bg-light">
	
	  <p>Seja bem vindo</p>
	  <div class="container">
	  	<h1>Atualizar preços</h1>
	  	<form action="actionPreco.php" method="post">
	  		
	    	<br><br><br>
	    	<div class="input-group">
		    	<p> Insira o novo valor unitario  para os produtos ---	<strong style="color:#BCF20CFF">Sem pontos ou virgulas :   certo =  Ex 100  errado = 100,00  </strong>	 </p>   	
		      </div>
		    </div>
              <br><br>
		    <div class="input-group">
		     <div class="input-group-preapend">
		    	 <span class="input-group-text">R$</span>
		       </div>
		    	 <input type="text"  name="preco" class="form-control" placeholder="Digite o valor">
		    	 <legend>O valor será atualizado na base de dados</legend>
               </div>
   		   <div>
   		   	<legend></legend>
   		    <button type="submit" class="btn btn-primary">Atualizar</button>
   		   <legend></legend>
   		  </div>

	  	</form>
	</div>

	 
		
         </form>
	</div>
	   
    <!-- boostrap javascript -->
	<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
	<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>-->
	<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>-->
	<script src="../../jQuery/jquery.js"></script>
	<script src="../../jQuery/bootstrap.bundle.min.js"></script>
</body>
</html>