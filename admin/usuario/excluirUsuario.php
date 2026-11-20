<?php
  include "../../admin/login-logout/include_bd.php";
  empty($_POST['excluiruser']) ? header("Location:../templates/controleUsuario.php") : $id = $_POST['excluiruser'];
  
  $excluirUsuario = "Delete FROM user WHERE id_usuario = ?";
  $stmt = $conexao->prepare($excluirUsuario);

  if(!$stmt) {
  	die("Error prepare: ".$conexao->error);
  }

  $stmt->bind_param("i", $id);

  if(!$stmt->execute()) {
  	die("Erro ao executar:".$stmt->error);
  }

  $resultado = $stmt->affected_rows;

  if($resultado > 0) {
  	echo "<h1>$resultado linhas afetadas</h1>";
  	header("Location:../templates/controleUsuario.php");
  	exit;
  } else {
  	echo "<h2>Nenhum registro encontrado para excluir!>/h2>";
  }
?>