<?php

      require('../../admin/login-logout/include_bd.php');
		
	 
		$nomeEvento = $_POST['nome_produto'];
		$descricaoEvento = $_POST['descricao_produto'];
		$imagem = $_FILES['imagem']['tmp_name'];
		$tamanho = $_FILES['imagem']['size'];
		$tipo = $_FILES['imagem']['type'];
		$nome = $_FILES['imagem']['name'];

		if ( $imagem != "none" )
		{
			$fp = fopen($imagem, "rb");
			$conteudo = fread($fp, $tamanho);
			$conteudo = addslashes($conteudo);
			fclose($fp);

		$sql = "INSERT INTO imagens(evento, descricao, nome_imagem, tamanho_imagem, tipo_imagem, imagem) 
		VALUES ('$nomeEvento', '$descricaoEvento','$nome','$tamanho', '$tipo','$conteudo')";
			
			if(!mysqli_query($conexao,$sql)){
				die ("Error print ,Não foi possível salvar a imagem na base de dados" . mysqli_error($conexao));
			}else{ 
				echo   "<script>
				alert('Registro inserido com sucesso !!!');
                window.location.href='../templates/estoque.php';
				    </script>";
		       
		       
		    }
			 
		}
			
		 
		
?>
