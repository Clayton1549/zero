<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Produtos</title>

<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
<link href="../bootstrap/bootstrap.min.css"  rel="stylesheet">


      <link rel="stylesheet" href="../css/img.css">
      <link rel="shortcut icon" href="../images/favicon/favicon.png" /> 

</head>

<body>


<nav  class="navbar  bg-dark navbar-dark  navbar-expand-lg ">
<a class="navbar-brand"   href="../templates/index.php"><img src="../images/logo_b.jpg" alt="clayton"></a>
   <!-- menu sanduich -->
   <button class="navbar-toggler" data-toggle="collapse" data-target="#menu" >
   	<span class="navbar-toggler-icon"></span>
   </button>
       <div id="menu" class="collapse navbar-collapse">

	 <ul class="navbar-nav ml-4 ">
       
        <li class="nav-item">
		  <a class="nav-link " href="../templates/template.php">Inicio</a>
	  </li>
	  <li class="nav-item"> 
		  <a class="nav-link" href="../templates/in_conteudo.php">Conteúdo</a>
	  </li>
	  <li class="nav-item">
		  <a class="nav-link active" href="../templates/produtos.php">Enviar foto </a>
		  <li class="nav-item">
		  <a class="nav-link " href="../templates/vendas.php"> Vendas </a>
	   </li>
	   </li>
	 </ul>
	 <ul class="navbar-nav ml-auto">
        <li class="nav-item ">
		   <a class="nav-link" href="../templates/login_h.php"><span class=""></span>Pesquisa </a>
		 </li>
		 <li class="nav-item">
			 <a class="nav-link" href="../logica/logout.php"><span class=""></span> Sair</a></li>
		 </li>
		 
	  </ul>     
 </div>
</nav>

	
<?php
session_start();
require('../bd/conexao.php');
if((isset ($_SESSION['user']) == true) and (isset ($_SESSION['senha']) == true)){

	$logado = $_SESSION['user'];
    date_default_timezone_set('America/Sao_Paulo');
	$x =  $_SESSION["inicio"]  = date(" d-m-Y H:i");
    $d = preg_replace('/[-]/' , '/' , $x);
	print_r("  <p style ='margin:10px ; color:#0F0A0A'>$d</p>");
	echo "  <p   style = 'margin:10px; color:blue;' >      Olá    .$logado;</p>";
	 } else{
	
     header("Location: index.php");	
       }

      ?>

    <div class="container diplay-5 text-secondary">
        	<h1>Envie uma foto do seu produto.</h1>
         </div>

    <div class="container border border-primary bg-light ">
	  <h1>Envie uma foto  </h1>
	  <h2>Selecione um novo arquivo de imagem</h2>
    
	<form enctype="multipart/form-data" action="../logica/upload.php" method="post"  class="was-validated">
	    <input type="hidden" name="MAX_FILE_SIZE" value="99999999"/>
	
		<div class="form-group">
		  <label >Nome do produto</label>
		  <input type="text" class="form-control" placeholder="Nome do produto..." name="nome_produto" type="text" required>
		  <div class="valid-feedback">Ok.</div>
		  <div class="invalid-feedback">Por favor preëncha esse campo.</div>
		</div>
		
		<div class="form-group">
		  <label >Descrição</label>
		  <input  class="form-control"  placeholder="Descrição..." name="descricao_produto" type="textarea" required>
		  <div class="valid-feedback">Ok.</div>
		  <div class="invalid-feedback">Por favor preëncha esse campo.</div>
		</div>
		
		 <label >Selecione  arquivo</label>
		  <input type="file" class="form-control"   name="imagem" required>
		  <div class="valid-feedback">OK.</div>
		  <div class="invalid-feedback">Selecione uma foto.</div>
		
	
		<div class="form-group form-check">
		  <label class="form-check-label">
			<input class="form-check-input" type="checkbox" name="remember" required> Confirme o envio.
			<div class="valid-feedback">OK.</div>
			<div class="invalid-feedback">Click para continuar.</div>
		  </label>
		
	</div>
		<button type="submit" class="btn btn-primary">Enviar</button>
	  </form>
	</div>

   
<br/>

<div class="container diplay-5 text-secondary">
 <h1  style='color:red;text-align: center;'>Produtos cadastradas na  base  de dados</h1> 

<table class="table" border="1">
	
	<tr>
		<td align="center">
			Código
			
		</td>
		<td align="center">
			Evento
		</td>
		<td align="center">
			Descrição
		</td>
		<td align="center">
			Nome da imagem
		</td>
		<td align="center">
			Tamanho
		</td>
		<td align="center">
			Visualizar imagem
		</td>


       <td align="center">
			Quantidade
		</td>
	</tr>


<?php

$sql = "SELECT codigo,evento,descricao,nome_imagem,tamanho_imagem,imagem  FROM  imagens ";
	

$resultado = mysqli_query($conexao,$sql);

while($arquivos = mysqli_fetch_array($resultado)){?>
        <tr  style=>
		<td align="center">
		<?php echo $arquivos['codigo']; ?>
		</td>

		<td align="center">
		<?php echo $arquivos['evento']; ?>
		</td>

		<td align="center">
		<?php echo $arquivos['descricao']; ?>
		</td>

		<td align="center">
		<?php echo $arquivos['nome_imagem']; ?>
		</td>
		<td align="center">
		<?php echo $arquivos['tamanho_imagem']; ?>
		</td>
		 <td align="center">
		<?php echo '<a href="../logica/ver_imagem.php?id='.$arquivos['codigo'].
		'">Produto : '.$arquivos['nome_imagem'].'</a>';  ?>
		</td>
	  
	  <td align="center">
		

         </td>

	</tr>	
 
<?php } ?>

</table>
<br><br><br>


</div>

<?php
      include("footer.php");

?>
       <!-- boostrap javascript -->
		<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
		<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>-->
		<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>-->
		<script src="../jQuery/jquery.js"></script>
		<script src="../jQuery/bootstrap.bundle.min.js"></script>
		
	

</body>


</html>