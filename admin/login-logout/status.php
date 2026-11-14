<?php
 include "../../admin/login-logout/include_bd.php"; 
 empty($_POST['idmg']) ? header("Location: ../templates/pedidos.php") : $idImg = $_POST['idmg'];

 $atualizarEstatus = "UPDATE pedido SET status='Status compra ok' WHERE id_pedido = ?";
 
 if(!$stmt = $conexao->prepare($atualizarEstatus)) {
 	die("Error prepare ".$conexao->error);
 }

 $stmt->bind_param("s", $idImg);
 $stmt->execute();
 $sts = $stmt->get_result();
 $lns = $stmt->affected_rows;
 if($lns > 0) {
 	echo "<h1>$lns afetadas</h1>";
 	header("Location:../templates/pedidos.php");
  }
?>