<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
</head>
<body>
<?php  include('../inicio_footer_validacao/autentication_admin.php');  ?>
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

<table class="table table table-bordered  border-primary container">
	
	<tr class="bg-primary">
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
            Excluir imagem
			
		</td>
	</tr>
 <?php
    $sql = "SELECT  codigo,evento,descricao,nome_imagem,tamanho_imagem,imagem  FROM  imagens  ";
    $resultado = mysqli_query($conexao,$sql);
    function formatTamanho($bytes) {
             	if($bytes >=  1024 * 1024) {
             		return round($bytes / (1024 * 1024),2) . " MB";
             	}else if($bytes >= 1024){
             		return round($bytes / 1024, 2) . " KB";
             	}else {
             		return $bytes . " bytes";
             	}
             }
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
			<?php 
             
			 echo formatTamanho($arquivos['tamanho_imagem']); ?>
			</td>
		
       <td align="center">
		<?php   echo '<a href="../estoque/excluir_imagem.php?id='.$arquivos['codigo'].
		'">Excluir   </a>'; "<br/>"   ?>

         </td>
     </tr>	
 
<?php } ?>

</table>
<table class="table table-bordered  border-primary  container" >
	  <tr class="bg-danger">
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
        $sql = "SELECT codigo,nome_imagem, COUNT(*) AS quan
        FROM imagens
        GROUP BY nome_imagem
        HAVING COUNT(*) >= 1";

         $resultado = mysqli_query($conexao,$sql);
        
        while($arquivo = mysqli_fetch_array($resultado)){?>
	         <tr>
			<td align="center">
				<?php echo $arquivo['codigo'] ?>
             </td>
            <td align="center">
		    	<?php echo $arquivo['nome_imagem']; ?>
            </td>
          <td align="center">
        	<strong><?php  echo  $arquivo['quan'];  ?></strong>
          </td>
	   </tr>	
     <?php } ?>

      </table>
    </div>
   <br><br><br>
   <script src="../../jQuery/jquery.js"></script>
   <script src="../../jQuery/bootstrap.bundle.min.js"></script>
  <?php  include('..//inicio_footer_validacao/admin_footer.php'); ?>
 
 </body>
</html>

