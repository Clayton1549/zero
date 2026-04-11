<?php
require("../../admin/login-logout/include_bd.php");
empty($_POST["idmg"]) ? header("location:../templates/pedidos.php") : $id = $_POST["idmg"];

print_r($id);

$excluirStatus = "DELETE FROM pedido WHERE id_pedido = ?";
$stmt = $conexao->prepare($excluirStatus); // ← FALTAVA O ;

if(!$stmt) {
    die("Error prepare: " . $conexao->error);
}

$stmt->bind_param("i", $id);

if(!$stmt->execute()){
    die("Erro ao executar: " . $stmt->error);
}

$lns = $stmt->affected_rows;

if($lns > 0) {
    echo "<h1>$lns linhas afetadas</h1>";
    header("Location: ../../../templates/pedidos.php");
    exit;
} else {
    echo "<h3>Nenhum registro encontrado para excluir!</h3>";
}

?>