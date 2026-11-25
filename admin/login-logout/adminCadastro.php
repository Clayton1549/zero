<?php
 include "../login-logout/include_bd.php";

 if(
     !isset($_POST["email"]) ||
     !isset($_POST["senha"]) ||
     !isset($_POST["confirmar"])
 ) {
 	header("Location:../login-logout/cadAdmin.php");
 	exit;
 }

 if(empty($_POST["email"]) || empty($_POST["senha"]) || empty($_POST["confirmar"])) {
 	 die("Digite todos os campos");
 }

  $usuario = trim($_POST["email"]);
  $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
  $confirma = $_POST["confirmar"];
 
 if($_POST["senha"] !== $_POST["confirmar"]) {
 	echo "Senhas diferentes";
    exit;
 }
if(!filter_var($usuario, FILTER_VALIDATE_EMAIL)) {
	die("Email inválido !");
}

$senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

$sql = "SELECT usuario FROM admin WHERE usuario = ?";
      
      if(!$stmt = $conexao->prepare($sql)) {
      	die("Erro prepare: " . $conexao->error);
      }  
      $stmt->bind_param("s", $usuario);
      $stmt->execute();

      $resultado = $stmt->get_result();

      if($resultado->num_rows > 0) {
      	echo "<script>
      	        alert('Usuario já cadastrado!');
      	        window.location.href='../login-logout/cadAdmin.php';
      	      </script>";
      	exit;
      }

        $sql = "INSERT INTO admin (senha, usuario) VALUES(?, ?)";
        if(!$stmt = $conexao->prepare($sql)) { 
        	die("Erro prepare: " . $conexao->error); }
      	$stmt->bind_param("ss", $senha, $usuario);
      	
      	if($stmt->execute()) {
      		echo "<script>
      		       alert('Cadastro realizado com sucesso !');
      		       window.location.href = '../templates/adminLogin.php';
      		      </script>";
            } else {
            	echo "<script>
            	       alert('Erro ao tentar cadastro !');
            	       window.location.href = '../login-logout/cadAdmin.php';
            	      </script>";
             }
      
      $smt->close();
      $conexao->close();

  ?>