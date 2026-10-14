 
 <?php  include '../logica/autentica_login.php'; ?>
   <h2 class='text-center  text-info'> Produtos ilustrativos enviados por  Internautas</h2>
   <div class="table-responsive">
   <table class="table" border="1">
     <tr class="bg-info" >
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
	   while($row = $result->fetch_row()) {
			$preco =  $row[0] ;
		    $_SESSION["preco"]  = $preco;

		 }
	   
	   } else {
	    echo "0 results";
	}

    $sql = 'SELECT codigo FROM imagens';
	$result = $conexao->query($sql);
	if ($result->num_rows > 0) {
	     while($row = $result->fetch_row()) {
			 $codigo =  $row[0];
		     $_SESSION['codigo'] = $codigo;

		 }

		
		} else {
	      echo "<h1 class='text-center text-primary' > Não temos  nehum produto aqui ainda... </h1>";
          echo  "<script>;
                       alert('Compra  cadastrada !');
                       document.getElementById('semItens').style.display = 'none';
                       document.getElementById('textoAcima').style.display = 'none';
                       
                       
               </script>";  
	  }

	$sql = 'SELECT codigo,imagem,descricao,nome_imagem FROM imagens LIMIT 14';
    $resultado = mysqli_query($conexao,$sql);

    while ($row = mysqli_fetch_array($resultado)) {?>   
   
    <tr>
	<td align="center">
	<?php echo $row['codigo']; ?>
	</td>
	<td align="center">
	<?php echo   $img_template = '<img src="data:image/jpg;base64,'. base64_encode($row['imagem']) . '" alt= "produtos" width="600" height="200">';

          ?>
          
      </td>

	<td align="center">
	
	<?php 
	      echo  '<div  class="card text-center container" style=" width: 38rem;">';
	      echo  '<div class="card-body">';
          echo  '<h5 class="card-title text-info">Produto á venda preço único</h5>';
          echo  '<p class="text-success"> R$ :  '  . $preco . '</p>';
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
</div>
    
    <br><br><br><br>
    <?php  include('../templates/footer_b.php'); ?>
    <script src="../jQuery/jquery.js"></script>
	<script src="../jQuery/bootstrap.bundle.min.js"></script>

	</body>
</html>

