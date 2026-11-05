<?php 
  if(session_start() === PHP_SESSION_NONE) {
  	session_start();
  }
  if(!isset($_SESSION["user"]) || !isset($_SESSION["senha"])) {
  	header("Location:../index.php");
  	exit;
  }
 ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pagamento concluído</title>
	<link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="../css/img.css">
	<link rel="shortcut icon" href="../images/favicon/favicon.png">

</head>
<body class="pagina-cartao">
    <div class="msgCartao">
	  <h2 class="text-success">Pagamento realizado com sucesso!</h2>
	  <a class="badge badge-success" href="../templates/vendas.php">Continuar comprando</a>
	  <a class="badge badge-danger" href="../logica/logout.php">Sair</a>
	</div>

    <?php include "../logica/valida_cartao.php"; ?>
	
	
</body>
</html>