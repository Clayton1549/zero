<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Produtos / Estoque</title>


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
				<a class="nav-link" href="#">Pedidos</a>
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
            require('../../bd/conexao.php');
			if((isset ($_SESSION['email']) == true) and (isset ($_SESSION['senha']) == true)){
	
				$logado = $_SESSION['email'];
			    
				echo "  <p   style = 'margin:10px; color:green;' >      Olá    .$logado;</p>";
				 } else{
				
			     header("Location: ../index.php");	
               }

     ?>

		
  <br><br><br>
 

    <div class="container diplay-5 text-secondary">
        	<h1>Envie um produto.</h1>
         </div>

    <div class="container border border-primary bg-light ">
	  <h1>Selecione um foto  </h1>
	  <h2>Selecione um novo arquivo de imagem</h2>
    
	<form enctype="multipart/form-data" action="../estoque/upload.php" method="post"  class="was-validated">
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
 <h1 style='color:red;text-align: center;'>Produtos cadastradas na  base  de dados</h1> 

<table class="table container" border="1">
	
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

		
	 
     <!-- <td align="center">
      	Quantidade
		
		</td>-->

         <td align="center">
            Excluir imagem
			
		</td>
	</tr>
<?php
    
  
	



	$sql = "SELECT  codigo,evento,descricao,nome_imagem,tamanho_imagem,imagem  FROM  imagens  ";


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
		<?php   echo '<a href="../estoque/excluir_imagem.php?id='.$arquivos['codigo'].
		'">Excluir   </a>'; "<br/>"   ?>

         </td>


	</tr>	
 
<?php } ?>

</table>




<table class="table container" border="1">
	
	<tr>
		<td align="center">
			codigo/id
			
		</td>
		<td align="center">
			Produto
			
		</td>
		<td align="center">
			Quantidade/estoque
			
		  </td>
		</tr>

   	   <div class="container text-center">
	   <h1 class="text-info">Quantidade em estoque...</h1>

	   <?php

	  // $sql = "SELECT codigo, nome_imagem FROM  imagens WHERE codigo  ";
	  $sql = " SELECT codigo, nome_imagem, COUNT('codigo') as NUM FROM imagens 

        GROUP BY codigo , nome_imagem  "   ;

     
      /* ORDER BY nome_imagem  */ 

	  
       $resultado = mysqli_query($conexao,$sql);

	   
			


	while($arquivo = mysqli_fetch_array($resultado)){?>
	      
	        <tr  style=>
			<td align="center">

               <?php echo $arquivo['codigo'] ?>
            
            </td>


			<td align="center">
		    	
                  <?php echo $arquivo['nome_imagem']; ?>
            </td>

           <td align="center">


           	<?php 
           	
                // echo $arquivo['NUM'];
           	    $sql = "SELECT  nome_imagem as quan   FROM  imagens   "  ;

                $result = $conexao->query($sql);

	            if ($result->num_rows > 0) {
	                // output data of each row
	             while($row = $result->fetch_assoc()) {
	         
	             
	               if ($row["quan"] == $arquivo['nome_imagem'] ){
	                
                        
                        echo   ' / ' . $arquivo[1][0]   . count($row);
                       

                      	
	                } else {

	                  	echo ' ';
	             }
       }

}
           	  
                /* if($arquivo['nome_imagem'] === "metro.jpg"){
                   
                      echo "1";
                
                  }else{
                  
                  	echo 'j';
                 
                  }

                  */

           
               ?>
           	
             	
          
          <?php
           
	           /*	if($arquivo['nome_imagem']  =  1){

	                $quan +=  $arquivo['nome_imagem'];

	           		echo $quan;
	           	}

	           	else{

	           		echo 'n';
	           	}*/
           	
            ?>


			
	     	</td>
			
			

	       

	      </tr>	
 
        <?php } ?>

      </table>


	</div>

<br><br><br>


       
			<script src="../../jQuery/jquery.js"></script>
	        <script src="../../jQuery/bootstrap.bundle.min.js"></script>
		
	

</body>


</html>

