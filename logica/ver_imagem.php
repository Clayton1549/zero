<?php
   
		require('include_bd.php');

		$id_imagem = $_GET['id']; //$_GET["codigo"];

		$sql = "SELECT imagem FROM imagens WHERE codigo = $id_imagem";

		$resultado = mysqli_query($conexao,$sql);
         
      

		$imagem = mysqli_fetch_object($resultado);
        
	    header("content-type: image/gif");

		 echo $imagem->imagem;

		

		


?>
