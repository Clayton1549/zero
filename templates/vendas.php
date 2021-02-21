<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Vendas</title>

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
		  <a class="nav-link " href="../templates/produtos.php">Enviar foto </a>
	   </li>
	    <li class="nav-item">
		  <a class="nav-link active" href="../templates/produtos.php"> Vendas </a>
	   </li>

	 </ul>
	 <ul class="navbar-nav ml-auto">
	    <li class="nav-item ">
		   <a class="nav-link" href="#"><span class=""></span>Pesquisa </a>
		 </li>
		 <li class="nav-item">
			 <a class="nav-link" href="../logica/logout.php"><span class=""></span> Sair</a></li>
		 </li>

		 
	  </ul>     
   </div>
</nav>

   
	 <?php
         session_start();
           require('../logica/include_bd.php');
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

             
				    //echo mt_rand() . "\n";
                    $rand = mt_rand() . "\n";
                    //echo mt_rand(5, 14);
                    $NumeroPedido = mt_rand(5, 14);

                 
                  $_SESSION['numeroPedido'] =  $rand . $NumeroPedido;




	         ?>

   <table class="table" border="1">

	<tr>
		<td align="center">
			Código
			
		</td>

		<td align="center">
			Imagem
			
		</td>

		

		<td align="center">
		Preços
			
		</td>
		<td align="center">
			Descrição
			
		</td>
		<td align="center">
			Nome 
			
		</td>

</tr>

  <?php
   
  
	$sql = 'SELECT preco FROM adminpreco';
	$result = $conexao->query($sql);
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_row()) {
			$preco =  $row[0] ;
		   $_SESSION["preco"]  = $preco;

		 }
	   
	   } else {
	    echo "0 results";
	}



$sql = 'SELECT  codigo,imagem,descricao,nome_imagem FROM imagens   LIMIT  9 ';


$resultado = mysqli_query($conexao,$sql);


       echo "<h2 class='text-center  text-info'> Produtos ilustrativos enviados por   Internautas</h2>";
    
	
    while ($row = mysqli_fetch_array($resultado)) {?>   
    
    <tr  style=>
	<td align="center">
	<?php echo $row['codigo']; ?>
	</td>

	<td align="center">
	<?php echo   $img_template = '<img src="data:image/jpg;base64,'. base64_encode($row[1]) . '" alt= "" width="600" height="200" />';

          ?>

	</td>

	<td align="center">
	
	<?php 
	
	      echo '<div  class="card text-center container" style=" width: 38rem;" id="slideShow">';
	      echo '</a>';
          echo  '<div class="card-body">';
          echo   '<h5 class="card-title text-info">Produto á venda preço único</h5>';
          echo '<p class="text-success"> R$ :  '  . $preco . '.00'  . '</p>';
		  echo   '<p class="card-text text-danger">Todos os produtos enviadas por nossos internautas são meramente ilustrativos .</p>';
		  echo '<p class="text-success">Seu Produto é garantido !  </p>';
          echo '<a href="pedidos.php?id='.$row['codigo'].
	'"   class="btn btn-primary ">Comprar  </a>';  

          echo  ' </div>';
          echo  '</div>';

	      ?>
	</td>


	<td align="center">
	<?php echo $row['descricao']; ?>
	</td>

	   <td align="center">
	      <?php echo $row['nome_imagem']; ?>

	    </td>

    </tr>

     <?php } ?>
</table>
     

  <!--  <button class='btn btn-outline-info' id="carregando">Carregar mais itens</button> -->
        
   <br><br><br><br>

    <!-- boostrap javascript -->
	<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
	<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>-->
	<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>-->
	<script src="../jQuery/jquery.js"></script>
	<script src="../jQuery/bootstrap.bundle.min.js"></script>

	

</body>
</html>

