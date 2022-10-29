 <?php include('../logica/autentica_login.php'); 
        require('../logica/include_bd.php');

 ?>
   <h2 id="textoAcima" class='text-center  text-info'> Produtos ilustrativos enviados por   Internautas</h2>
   <table id="semItens" class="table" border="1">

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

    $sql = 'SELECT codigo FROM imagens ';
	$result = $conexao->query($sql);
	if ($result->num_rows > 0) {
	     while($row = $result->fetch_row()) {
			 $codigo =  $row[0] ;
		    $_SESSION["codigo"]  = $codigo;

		 }

		
		} else {
	      echo "<h1 class='text-center text-primary' > Não temos  nehum produto aqui ainda... </h1>";
        echo  "<script>;
                       alert('Compra  cadastrada !');
                       document.getElementById('semItens').style.display = 'none';
                       document.getElementById('textoAcima').style.display = 'none';
                       
                       
               </script>";  
	  }

	



$sql = 'SELECT  codigo,imagem,descricao,nome_imagem FROM imagens LIMIT  4 ';


$resultado = mysqli_query($conexao,$sql);

   
      // echo "<h2  class='text-center  text-info'> Produtos ilustrativos enviados por   Internautas</h2>";
    
	
    while ($row = mysqli_fetch_array($resultado)) {?>   


    
  <tr  style=>
	<td align="center">
	<?php echo $row['codigo']; ?>
	</td>

	<td align="center">
	<?php echo   $img_template = '<img src="data:image/jpg;base64,'. base64_encode($row[1]) . '" alt= "produtos" width="600" height="200" />';

          ?>

	</td>

	<td align="center">
	
	<?php 
	      echo '<div  class="card text-center container" style=" width: 38rem;" id="slideShow">';
	      echo '</a>';
          echo  '<div class="card-body">';
          echo  '<h5 class="card-title text-info">Produto á venda preço único</h5>';
          echo  '<p class="text-success"> R$ :  '  . $preco . '.00'  . '</p>';
		  echo  '<p class="card-text text-danger">Todos os produtos enviadas por nossos internautas são  ilustrativos .</p>';
		  echo  '<p class="text-success">Seu Produto é garantido !  </p>';
          echo  '<a href="pedidos.php?id='.$row['codigo'].
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
   <?php  include('../templates/footer_b.php');     ?>


   <!-- boostrap javascript -->
	<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
	<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>-->
	<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>-->
	<script src="../jQuery/jquery.js"></script>
	<script src="../jQuery/bootstrap.bundle.min.js"></script>

	

</body>
</html>

