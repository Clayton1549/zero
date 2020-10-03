<!DOCTYPE html>
 <html lang="pt-br">
 <head>
 	<meta charset="UTF-8">
 	<title></title>
 </head>
 
<?php
session_start();
require("../../bd/conexao.php");

$adminUser = $_POST['email'];
$adminSenha = $_POST['senha'];


if(empty($adminSenha )){
				print_r("digite uma senha senha");
			}
			print_r("<br>");
			 if (!filter_var($adminUser, FILTER_VALIDATE_EMAIL)) {

						   die(" Digite  um    um email valído");
						  }
			print_r("<br>");

			print_r($adminUser);

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

                print_r("<br>");


                 print_r("<br>");

				echo 'Sua senha  está  incorreta ';

	        }
		}

	   }else {
          
        echo"<script language='javascript' type='text/javascript'>alert('Você não  está  cadastrado,faça seu cadatro!');window.location.href='../templates/admimTemplate.php';</script>";
			die();
       }
		





?>