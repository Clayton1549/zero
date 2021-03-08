<?php
//Enviando  estatus  compra  para bd
  $num_pedido  =   $_SESSION['numeroPedido'] .   $numero_cpf ;  //"948427638 10 - 27427580893";

         $sql = "SELECT id_pedido  ,   cpf   FROM  pedido ";

        if(!$stmt = $conexao->prepare($sql)){
          die("Error prepare ".$conexao->error);}

            
            $stmt->execute();
            $result = $stmt->get_result();
                      
          foreach  ($result as $row) {
                   foreach ($row as $key => $value) {
              echo "<br>";     
                
               // print_r( " </strong>" . $value . "<br>"); 
             }
        }

      if($value  == $cpf ){
        
       echo  "<script>
                alert('Escolha  a  forma de  pagamento !!!');
             </script>";  
          }else{

    $valor_boleto = $quantidade * $preco;
   $status = 'Não confirmado';
   $endereco_com  = $uf  . ' , ' .   $cidade .' , '.  $bairro . ' , ' . $logradouro . ' , '.   $numero; 
   $num_pedido  = $numero .  $numero_cpf ;

  
  if(!$stmt = $conexao->prepare("INSERT INTO pedido ( produto, numero_pedido, nome, email, cpf, valor, cep, endereco,status) VALUES (?,?,?,?,?,?,?,?,?)")){
    die("erro prepare:".$conexao->error);}
          
    if(!$stmt->bind_param("sssssssss", $nome_produto_selecionado,$num_pedido , $usuario, $email,  $numero_cpf , $valor_boleto,  $cp ,$endereco_com , $status )){
      die("erro bind_param:".$conexao->error);}
     if(!$stmt->execute()){
      die("erro execute:".$conexao->error);
        }
        
        $resultado = $conexao;

       }

 ?>

