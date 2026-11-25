<?php
   include "include_bd.php";
   if(
   	  !isset($_POST["email"]) || 
      !isset($_POST["senha"]) ||
      !isset($_POST["confirme"]) ||
      !isset($_POST["city"])
      ) {
         header("Location:../templates/cadastro.php");
         exit;
      }

     if(empty($_POST["email"]) || empty($_POST["senha"]) || empty($_POST["city"])) {
     	die("Digite todos os campos !");
     }
	 
     $usuario = trim($_POST["email"]);
     $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
     $comfirma = $_POST["confirme"];
     $cidade = $_POST["city"];
   
    if($_POST["senha"] !== $_POST["confirme"]) {
        echo "Senhas diferentes";
        exit;
	   }
    if(!filter_var($usuario, FILTER_VALIDATE_EMAIL)) {
       die("Isto não é um email valído");
     }
    
   $sql = "SELECT email FROM user WHERE email = ?";

   if(!$stmt = $conexao->prepare($sql)) {
   	  die("Erro prepare: " . $conexao->error);
   }
   $stmt->bind_param("s", $usuario);
   $stmt->execute();

   $resultado = $stmt->get_result();

   if($resultado->num_rows > 0) {
   	  echo "<script> 
   	         alert('Usuario já cadastrado !');
   	         window.location.href = '../templates/cadastro.php';
   	        </script>";
   	        exit;
   }
   
   $sql = "INSERT INTO user (email, senha, cidade) VALUES(?, ?, ?)";
   if(!$stmt = $conexao->prepare($sql)) {
   	die("Erro prepare: " . $conexao->error);}
   	$stmt->bind_param("sss", $usuario, $senha, $cidade);
   	if($stmt->execute()) {
   		echo "<script>
   		        alert('Cadastro realizado com sucesso !');
   		        window.location.href = '../templates/login_h.php';
   		       </script>";
   	} else {
   		echo "<script>
   		        alert('Erro ao tentar cadastro !');
   		        window.location.href = '../templates/cadastro.php';
   		        </script>";
   		  }

   	$stmt->close();
   	$conexao->close();
?>
