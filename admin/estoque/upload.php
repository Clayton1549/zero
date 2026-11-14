<?php
   include "../../admin/login-logout/include_bd.php";
	 $nomeEvento = $_POST['nome_produto'];
	 $descricaoEvento = $_POST['descricao_produto'];
	 $imagem = $_FILES['imagem']['tmp_name'];
	 $tamanho = $_FILES['imagem']['size'];
	 $tipo = $_FILES['imagem']['type'];
	 $nome = $_FILES['imagem']['name'];
    
    if($imagem !== "none") {
	   $conteudo = file_get_contents($_FILES['imagem']['tmp_name']);
       
        if(!$stmt = $conexao->prepare("INSERT INTO imagens(evento, descricao, nome_imagem, tamanho_imagem, tipo_imagem, imagem) VALUES(?, ?, ?, ?, ?, ?)")) {
            die("erro prepare:".$conexao->error);}
         if(!$stmt->bind_param("sssiss", $nomeEvento, $descricaoEvento, $nome,$tamanho, $tipo, $conteudo)) {
            die("erro bind_param:".$conexao->error);}
            if(!$stmt->execute()) {
            	die("erro execute:".$stmt->error);
            }

            $stmt->close();
	       
	        echo "<script>
				  alert('Registro inserido com sucesso !!!');
                  window.location.href='../templates/estoque.php';
				</script>";
		 }
	?>
