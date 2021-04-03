<!-- topo do site -->
<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
<title>Clayton   site</title>
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
			  <a class="nav-link active" href="../templates/template.php">Inicio</a>
		  </li>
		  <li class="nav-item"> 
			  <a class="nav-link" href="../templates/in_conteudo.php">Conteúdo</a>
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
			   <a class="nav-link" href="../templates/login_h.php"><span class=""></span>Pesquisa </a>
			 </li>
			 <li class="nav-item">
				
				 <a class="nav-link " href="../logica/logout.php" onclick="if(!confirm(' Tem certeza que quer  fazer   logout   no sistema  ?   ')) return false;" >Sair</a>
			 </li>

			 
		  </ul>     
     </div>
</nav>



<?php

//  validar

 session_start();
 require('../logica/include_bd.php');

if((isset ($_SESSION['user']) == true) and (isset ($_SESSION['senha']) == true)){
      
	   $logado = $_SESSION['user'];
       date_default_timezone_set('America/Sao_Paulo');
	   $x =  $_SESSION["inicio"]  = date(" d-m-Y H:i");
       $d = preg_replace('/[-]/' , '/' , $x);
     
       print_r("  <p style ='margin:10px ; color:#0F0A0A'>$d</p>");
	   echo "  <p   style ='margin:10px ; color:blue'; >      Olá    .$logado;</p>";


	   echo "<script language='javascript' type='text/javascript'>
	   setTimeout(function(){
	    window.location.href='../logica/logout.php';},900000);
	      </script>";
            	

      } else{

       header("Location: index.php");	

		}


     ?>

      



