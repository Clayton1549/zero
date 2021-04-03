<?php


//Enviando  estatus  compra  para bd
  $num_pedido  =   $numero_cpf ;  
   
   // $num_pedido  = "1360038685 503644687005" ;

  // $num_pedido  = $_SESSION['numeroPedido']. $numero_cpf;  
   


         $sql = "SELECT id_pedido FROM  pedido ";

        if(!$stmt = $conexao->prepare($sql)){
          die("Error prepare ".$conexao->error);}

            
            $stmt->execute();
            $result = $stmt->get_result();
                      
          foreach  ($result as $row) {
                   foreach ($row as $key => $value) {
              echo "<br>";     
                
            //  var_dump( " </strong>" . $value . "<br>"); 
             // var_dump(  $value ); 
           //   print_r("<br>");
             // var_dump($num_pedido);
             }
        }


      if($value  !== $value ){
        
       echo  "<script>
                alert('Escolha  a  forma de  pagamento !!!');
             </script>";  
       
          }else{
  
 

   /* $valor_boleto = $quantidade * $preco;
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

       }*/

           echo  "<script>
                alert('Algo errado !');
             </script>";  

           }



         

   
 ?>

