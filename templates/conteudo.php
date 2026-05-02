<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Conteúdol</title>

<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
<link href="../bootstrap/bootstrap.min.css"  rel="stylesheet">
<link href="../css/folha.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="../css/img.css">
<link rel="shortcut icon" href="../images/favicon/favicon.png" /> 
<style>
  .img-card-fixa {
  height: 450px;      /* escolha a altura desejada */
  width: 100%;
  object-fit: cover;  /* corta a imagem mantendo proporção */
}

</style>
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
	  <a class="nav-link " href="../templates/in_conteudo.php">Conteúdo</a>
  </li>
  <li class="nav-item">
	  <a class="nav-link" href="../templates/produtos.php">Enviar foto </a>
   </li>
   <li class="nav-item">
	  <a class="nav-link " href="../templates/vendas.php"> Vendas </a>
   </li>
 </ul>
 <ul class="navbar-nav ml-auto">
    <li class="nav-item ">
	  <form class="form-inline">
			     <div class="input-group">
			     	<input type="text" name="buscar" placeholder="Buscar" class="form-control">
			     	<input type="submit" class="btn btn-primary input-group-append">
			     </div>
			   </form>
	 </li>
	 <li class="nav-item">
		 <a class="nav-link" href="../logica/logout.php" onclick="if(!confirm(' Tem certeza que quer  fazer   logout   no sistema  ?   ')) return false;">  <span class=""></span> Sair</a></li>
	 </li>
	 
  </ul>     
</div>
</nav>


<?php

if(!isset($_SESSION['user']) && !isset($_SESSION['senha'])){
  header("Location: ../templates/index.php");	}else{


 $logado = $_SESSION['user'];
 date_default_timezone_set('America/Sao_Paulo');
 $x =  $_SESSION["inicio"]  = date(" d-m-Y H:i");
 $d = preg_replace('/[-]/' , '/' , $x);
 print_r("  <p style = 'margin:10px ; color:#0F0A0A'>$d</p>");
 echo "  <p   style = 'margin:10px ;color:blue'; >      Olá    .$logado;</p>";

      }
?>
<br><br><br>		       

   <div class="container" id="folha">
     <h1 class="text-info">Alguns dos nossos produtos, ou enviados:</h1>
  
     <div class="card" style="width: 48rem;">
    <img class="card-img-top img-thumbnail img-fluid  img-card-fixa" src="../images/20180111_012951_thumb.jpg" alt="imagem de anime" >
    <div class="card-body">
    <h5 class="card-title text-info">Item quadro 1</h5>
    <p class="card-text text-primary">este produto é um quadro anonimo para decoração.</p>
  </div>
    <ul class="list-group list-group-flush text-info">
    <li class="list-group-item">Item</li>
    <li class="list-group-item">Quadro</li>
    <li class="list-group-item">Decoração</li>
    <li class="list-group-item">Novo</li>
    <li class="list-group-item">Para</li>
    <li class="list-group-item">Todo</li>
    <li class="list-group-item">País</li>
  </ul>
  <div class="card-body">
    <a href="https://duckduckgo.com/?q=qudros+&t=newext&atb=v375-1&ia=images&iax=images" class="card-link" target="_blank">Quadros</a>
    <a href="https://www.goquadros.com.br/" class="card-link" target="_blank">semelhantes</a>
     </div>
  </div>

</div>

<br> <br>

<div class="container" id="folha">

 <div class="card" style="width: 48rem; ">
   <img class="card-img-top  img-thumbnail img-fluid  img-card-fixa" src="../images/download.png" alt="imagem de anime"  >
  <div class="card-body">
    <h5 class="card-title text-info">Item 1</h5>
    <p class="card-text text-primary">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
  </div>
    <ul class="list-group list-group-flush text-info">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A third item</li>
    <li class="list-group-item">Item</li>
    <li class="list-group-item">Item</li>
    <li class="list-group-item">Item</li>
    <li class="list-group-item">Item</li>
    <li class="list-group-item">Item</li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
     </div>
  </div>

</div>

<br> <br>
  <div class="container" id="folha">
    <div class="card" style="width: 48rem; ">
   <img class="card-img-top  img-thumbnail img-fluid  img-card-fixa" src="../images/distdig02.jpg" alt="imagem de anime"  >
  <div class="card-body">
    <h5 class="card-title text-info">Item 1</h5>
    <p class="card-text text-primary">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
  </div>
    <ul class="list-group list-group-flush text-info">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A third item</li>
    <li class="list-group-item">Item</li>
    <li class="list-group-item">Item</li>
    <li class="list-group-item">Item</li>
    <li class="list-group-item">Item</li>
    <li class="list-group-item">Item</li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
     </div>
  </div>

   
   </div>
		  <br> <br>

     <div class="container" id="folha">
      <div class="card" style="width: 48rem; ">
   <img class="card-img-top  img-thumbnail img-fluid  img-card-fixa" src="../images/Boleto_6.jpg" alt="imagem de anime"  >
  <div class="card-body">
    <h5 class="card-title text-info">Item 1</h5>
    <p class="card-text text-primary">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
  </div>
    <ul class="list-group list-group-flush text-info">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A third item</li>
    <li class="list-group-item">Item</li>
    <li class="list-group-item">Item</li>
    <li class="list-group-item">Item</li>
    <li class="list-group-item">Item</li>
    <li class="list-group-item">Item</li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
     </div>
  </div>

        
     </div>
		

<br><br><br>

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




</body>
</html>