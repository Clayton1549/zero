<?php
	//require("../bd/conexao.php");
   require('include_bd.php');
    session_start();
	$usuario = $_POST["email"];
    //$senha = password_hash($_POST["senha"],PASSWORD_ARGON2I);
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $cidade = $_POST["City"];
     
         if(empty($cidade  && $usuario)){
		print_r("digite uma senha/Email");
	    }
        print_r("<br>");
     if (!filter_var($usuario, FILTER_VALIDATE_EMAIL)) {
           
			   die("O  usuario não é um email valído");
              }
        

	                
				
                $sql = "SELECT email FROM user ";

				if(!$stmt = $conexao->prepare($sql)){
					die("Error prepare ".$conexao->error);}

					  
					  $stmt->execute();
					  $result = $stmt->get_result();
                      
					foreach  ($result as $row) {
		               foreach ($row as $key => $value) {
					    echo "<br>";		 
                
                   //echo " </strong>" . $value . "<br>"; 
					   }
				}
			
			if($value === $usuario){
				
				echo  "<script>
	           alert('Usuaro já  cadastrado  em mossa base de dados !!!');
			   
			   window.location.href='../templates/cadastro.php';
			   </script>";
				
			}else{
	if(!$stmt = $conexao->prepare("INSERT INTO user (email,senha,cidade) VALUES (?,?,?)")){
		die("erro prepare:".$conexao->error);}
          
		if(!$stmt->bind_param("sss", $usuario, $senha,$cidade)){
		  die("erro bind_param:".$conexao->error);}
		 if(!$stmt->execute()){
		  die("erro execute:".$conexao->error);
	    	}
        
        $resultado = $conexao;

     if($resultado ){
		echo  "<script>
	           alert('Cadastro  realizado  com  sucesso !!!');
			   
			   window.location.href='../templates/login_h.php';
			   </script>";
	
	     }else{
			
	       echo  "<script>
	           alert('Erro ao  tentar  cadstro  !');
			   
			   window.location.href='../templates/cadastro.php';
			   
			   </script>";
	
	         
	  
	             }
			}

 
         mysqli_close($conexao);
	




?>
