<?php
session_start();
         require('include_bd.php');

		 $usuario = $_POST["user"];
		 $senha = $_POST["senha"];

			if(empty($senha )){
				print_r("digite uma senha senha");
			}
			print_r("<br>");
			 if (!filter_var($usuario, FILTER_VALIDATE_EMAIL)) {

						   die(" Digite  um  email valído");
						  }
			print_r("<br>");

			print_r($usuario);

			$sql = "SELECT senha FROM user WHERE  email = ?";

				if(!$stmt = $conexao->prepare($sql)){
					die("Error prepare ".$conexao->error);}

					  $stmt->bind_param("s",$usuario);
					  $stmt->execute();
					  $result = $stmt->get_result();

			if($result->num_rows > 0){
				while($row = $result-> fetch_assoc()){

					if(password_verify($senha, $row["senha"])) {

						   $_SESSION['user'] = $usuario;
						   $_SESSION['senha'] = $senha;

						  header("Location:../templates/template.php");


			} else {

                print_r("<br>");


                 print_r("<br>");

				echo 'Sua senha  está  incorreta ';

	        }
		}

	   }else {
          
        echo"<script language='javascript' type='text/javascript'>alert('Você não  está  cadastrado,faça seu cadatro!');window.location.href='../templates/cadastro.php';</script>";
			die();
       }
				






?>