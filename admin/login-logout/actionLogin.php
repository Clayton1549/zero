<!DOCTYPE html>
 <html lang="pt-br">
 <head>
 	<meta charset="UTF-8">
 	<title>Login</title>
 </head>
 <?php
  session_start();
  include '../../admin/login-logout/include_bd.php';
	
	$adminUser = $_POST['email'];
    $adminSenha = $_POST['senha'];
    if(empty($adminSenha)){
	   die("digite uma senha senha");
	   }
		echo "<br>";
	 if(!filter_var($adminUser, FILTER_VALIDATE_EMAIL)) {
         die(" Digite um email valído");
		 }
	   echo "<br>";
       echo $adminUser;
       
       $sql = "SELECT senha FROM admin WHERE  usuario = ?";
     if(!$stmt = $conexao->prepare($sql)){
		die("Error prepare ".$conexao->error);}
         $stmt->bind_param("s",$adminUser);
		 $stmt->execute();
		 $result = $stmt->get_result();
      if($result->num_rows > 0){
		while($row = $result-> fetch_assoc()){
        if(password_verify( $adminSenha, $row["senha"])) {
              $_SESSION['email'] = $adminUser;
			  $_SESSION['senha'] = $adminSenha;
              header("Location:../templates/admimTemplate.php");
        } else {
              echo "<br>";
              echo "<br>";
              echo 'Sua senha está incorreta ';

	        }
		}

	   } else {
          echo "<script language='javascript' type='text/javascript'>alert('Você não  está cadastrado,faça seu cadatro !');window.location.href='../templates/adminLogin.php';</script>";
			die();
       }
		





?>