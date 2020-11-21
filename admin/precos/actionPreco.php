<?php
	 require('../../bd/conexao.php');
	$novoPreco = $_POST['preco'];



	date_default_timezone_set('America/Sao_Paulo');
	$hora = date('Y-m-d H:i:s');


	/*echo $hora;*/
	$sql = "UPDATE adminpreco SET preco=$novoPreco ,data='$hora' WHERE id_atualiza = 1";

	if ($conexao->query($sql) === TRUE) 
	{
	    
	    echo  "<script>
		           alert('Operação  realizado  com  sucesso !!!');
				   
				   window.location.href='../templates/atualizaPreco.php';
				   </script>";
	} else {
	    echo "Error updating record: " . $conexao->error;
	     echo "
	     <script> 
		      alert('ops , deu erro ! ');
		      window.location.href='../templates/atualizaPreco.php'
	      </script> ";
	}
			
	     
       mysqli_close($conexao);
	
     
?>