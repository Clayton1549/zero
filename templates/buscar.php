<?php   include('../logica/autentica_login.php'); ?>
     <div class="container">
       <h2 class="center text-info">Sua pesquisa:</h2>
      </div>
      <table class="table" border="1">
      <tr class="bg-info">
      	<td align="center">
      		Código
      	</td>
      	<td align="center">
      		imagem
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
        $sql = "SELECT preco FROM adminpreco";
        $result = $conexao->query($sql);
        if($result->num_rows > 0) {
      	while($row = $result->fetch_row()) {
      		$preco = $row[0];
      		$_SESSION["preco"] = $preco;
      	 }
      	} else { 
      		"0 resultado";
      }
     if(empty($_GET['buscar'])){
     	echo "<div class='container'><p class='text-info'>Sem resultado para:'...'</p></div>";
       } else {
          $buscar = $_GET['buscar']; 
          $pesquisa = '%'.$buscar.'%';
          echo "<div class='container'><h3 class='text-info'>Resultado(s) para: \"$buscar\"</h3></div>";
          $sql = "SELECT codigo, evento, imagem, descricao, nome_imagem FROM imagens WHERE evento like '$pesquisa' or descricao like '$pesquisa' or nome_imagem like '$pesquisa' ";
          $resultado = mysqli_query($conexao,$sql);
          $rowcount = mysqli_num_rows($resultado);
          echo "<div class='container'><h3 class='text-info'>Encontramos <span class='text-danger'> $rowcount item(s) </span> \n </h3></div>";
          
          while($row = mysqli_fetch_array($resultado)){?>
          <tr>
          <td align="center">
            <?php echo $row['codigo']; ?>
          </td>
          <td align="center">
          <?php echo $img_template = '<img src="data:image/jpg;base64,'.base64_encode($row['imagem']).'" alt="produtos" width="600" height="200">';
 ?>
          </td>
          <td align="center">
          <?php         
            echo '<div class="card text-center container" style="width:38rem;">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title texto-info">Produto á venda preço único</h5>';
            echo '<p class="text-success">R$ ' . $preco . '</p>';
            echo '<p class="card-text text-danger">Todos os produtos enviados por nossos internautas são inlustrativos.</p>'; 
             echo '<p class="text-success">Seu produto é garantido ! </p>';
             echo '<a href="pedidos.php?id='.$row['codigo'].
	'"   class="btn btn-primary">Comprar</a>'; 
            echo '</div>';
            echo '</div>';
            ?>
           </td> 
           <td align="center">
	          <?php echo $row['descricao']; ?>
	       </td>
           <td align="center">
             <?php echo $row['nome_imagem'];?>
            </td>
          </tr>

          <?php }} ?>
      </table>
      <br><br><br><br>
    <?php  include('../templates/footer_b.php');?>
    <script src="../jQuery/jquery.js"></script>
	  <script src="../jQuery/bootstrap.bundle.min.js"></script>

  </body>
</html>