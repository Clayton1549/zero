<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Conteúdol</title>
<link href="../bootstrap/bootstrap.min.css"  rel="stylesheet">
<link href="../css/folha.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="../css/img.css">
<link rel="shortcut icon" href="../images/favicon/favicon.png" /> 
<style>
 

</style>
</head>
<body>
  <nav class="navbar bg-dark navbar-dark  navbar-expand-lg ">
   <a class="navbar-brand"   href="../templates/index.php"><img src="../images/logo_b.jpg" alt="clayton"></a>
  <!-- menu sanduich -->
   <button class="navbar-toggler" data-toggle="collapse" data-target="#menu" >
   	<span class="navbar-toggler-icon"></span>
   </button>
     <div id="menu" class="collapse navbar-collapse">

   <ul class="navbar-nav">
     
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
  	  <form class="form-inline" method="post" action="buscar.php">
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
  
  <div class="container folha" id="folha">
     <h1 class="text-info">Alguns dos nossos produtos, ou enviados:</h1>
  
    <div class="card">
     <img class="card-img-top img-thumbnail img-fluid  img-card-fixa" src="../images/produtos/art.jpg" alt="imagem de anime" >
    <div class="card-body">
    <h5 class="card-title text-info">Item: art</h5>
    <p class="card-text text-success">Uma quadro de de arte contemporanio, servindo para decoração de ambiente.</p>
  </div>
    <ul class="list-group list-group-flush text-info">
    <li class="list-group-item">Tipo: quadro decorativo.</li>
    <li class="list-group-item">Preço: são todos únicos em nossos produtos.</li>
    <li class="list-group-item">Origem: usuários do site.</li>
    <li class="list-group-item">Estado: coservado, seminovo.</li>
    <li class="list-group-item">Entrega: para todo o Brasil.</li>
    <li class="list-group-item">Descrição: puro estado da arte por um preço acessível.</li>
  </ul>
  <div class="card-body">
    <a href="https://duckduckgo.com/?q=qudros+&t=newext&atb=v375-1&ia=images&iax=images" class="card-link" target="_blank">Quadros</a>
    <a href="https://blombo.com/obras" class="card-link" target="_blank">semelhantes</a>
     </div>
  </div>

</div>

<br> <br>

<div class="container folha">

 <div class="card">
   <img class="card-img-top img-thumbnail img-fluid  img-card-fixa" src="../images/produtos/th.jpg" alt="imagem de anime"  >
  <div class="card-body">
    <h5 class="card-title text-info">Item: th</h5>
    <p class="card-text text-success">Arte developer.</p>
  </div>
    <ul class="list-group list-group-flush text-info">
    <li class="list-group-item">Tipo: quadro decorativo tecnologia.</li>
    <li class="list-group-item">Preço: são todos únicos em nossos produtos.</li>
    <li class="list-group-item">Origem: usuários do site.</li>
    <li class="list-group-item">Estado: coservado, seminovo.</li>
    <li class="list-group-item">Entrega: para todo o Brasil.</li>
    <li class="list-group-item">Descrição: tecnologia, desenvolvimento web sites.</li>
  </ul>
  <div class="card-body">
    <a href="https://duckduckgo.com/?q=qudros+&t=newext&atb=v375-1&ia=images&iax=images" class="card-link" target="_blank">Quadros</a>
    <a href="https://www.vitalquadrosdobrasil.com.br/produtos/quadro-decorativo-informatica/" class="card-link" target="_blank">semelhantes</a>
     </div>
  </div>

</div>

<br> <br>
  <div class="container folha">
    <div class="card">
   <img class="card-img-top  img-thumbnail img-fluid  img-card-fixa" src="../images/produtos/trees.jpg" alt="imagem de anime"  >
  <div class="card-body">
    <h5 class="card-title text-info">Item: trees</h5>
    <p class="card-text text-success">Uma quadro em bom estado.</p>
  </div>
    <ul class="list-group list-group-flush text-info">
      <li class="list-group-item">Tipo: quadro decorativo natureza.</li>
      <li class="list-group-item">Preço: são todos únicos em nossos produtos.</li>
      <li class="list-group-item">Origem: usuários do site.</li>
      <li class="list-group-item">Estado: coservado, seminovo.</li>
      <li class="list-group-item">Entrega: para todo o Brasil.</li>
      <li class="list-group-item">Descrição: natureza, rio, matas.</li>
   </ul>
  <div class="card-body">
    <a href="https://duckduckgo.com/?q=qudros+&t=newext&atb=v375-1&ia=images&iax=images" class="card-link" target="_blank">Quadros</a>
    <a href="https://www.quadrosbrasil.com.br/quadros-de-paisagens" class="card-link" target="_blank">semelhantes</a>
     </div>
  </div>

   
   </div>
		  <br> <br>

     <div class="container folha">
      <div class="card">
   <img class="card-img-top img-thumbnail img-fluid img-card-fixa" src="../images/produtos/webself4.png" alt="imagem de anime"  >
  <div class="card-body">
    <h5 class="card-title text-info">Item: webself4</h5>
    <p class="card-text text-success">Uma quadro em bom estado.</p>
  </div>
      <ul class="list-group list-group-flush text-info">
      <li class="list-group-item">Tipo: quadro decorativo tecnologia.</li>
      <li class="list-group-item">Preço: são todos únicos em nossos produtos.</li>
      <li class="list-group-item">Origem: usuários do site.</li>
      <li class="list-group-item">Estado: coservado, seminovo.</li>
      <li class="list-group-item">Entrega: para todo o Brasil.</li>
      <li class="list-group-item">Descrição: tecnologia, desenvolvimento web sites.</li>
  </ul>
  <div class="card-body">
    <a href="https://duckduckgo.com/?q=qudros+&t=newext&atb=v375-1&ia=images&iax=images" class="card-link" target="_blank">Quadros</a>
    <a href="https://www.amazon.com.br/s?k=quadros+de+tecnologia&adgrpid=1136896845641696&hvadid=71056220376799&hvbmt=be&hvdev=c&hvlocphy=293489&hvnetw=o&hvqmt=e&hvtargid=kwd-71056785138714%3Aloc-20&hydadcr=7319_13253601&mcid=c1d00f1d53143c108f39c6b02bab3c68&tag=msndesktopsta-20&ref=pd_sl_69h01bqm3c_e" class="card-link" target="_blank">semelhantes</a>
     </div>
  </div>
</div>
	<br><br><br>

<?php
  include("footer.php");
?>
  <script src="../jQuery/jquery.js"></script>
	<script src="../jQuery/bootstrap.bundle.min.js"></script>

</body>
</html>




</body>
</html>