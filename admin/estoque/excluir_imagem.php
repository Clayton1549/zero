<?php
  
		require("../../bd/conexao.php");
		
       $codigo = $_GET['id'];

      
        
		$sql = "DELETE FROM imagens WHERE codigo = $codigo ";
		
        if(!mysqli_query($conexao,$sql)){
		
			echo   "<script>
				alert('Algo deu errado ao excluir a imagem. Tente novamente.');
                window.location.href='../templates/estoque.php';
				    </script>";
		}
		//else{
			
			//echo "<script>
				//alert('Imagem excluída com sucesso!!!!');
                //window.location.href='../templates/estoque.php';
				 //   </script>";
			
	//	}
		
			
?>