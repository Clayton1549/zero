<?php 
include "../login-logout/include_bd.php";
if(empty($_POST["numero"])) { 
 header("Location:../index.php");
 exit;
} else {
	$numero = $_POST["numero"];
}

$sql = "SELECT numero FROM numero WHERE numero = ?";
if(!$stmt = $conexao->prepare($sql)) {
	die("Error prepare".$conexao->error);
}
$stmt->bind_param("i", $numero);
$stmt->execute();
$resultado = $stmt->get_result();

if($resultado->num_rows > 0) {
	include "../login-logout/formularioCadastro.php";
} else {
	header("Location:../index.php");
	exit;
}

