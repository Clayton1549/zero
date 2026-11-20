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
echo $usuario; echo $usuario; echo $senha;