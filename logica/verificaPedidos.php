<?php
  include("./include_bd.php");
  $status  =  'Não confirmado' ;  

       $sql = "SELECT status FROM  pedido ";

        if(!$stmt = $conexao->prepare($sql)){
          die("Error prepare ".$conexao->error);}

            
            $stmt->execute();
            $result = $stmt->get_result();
                      
          foreach  ($result as $row) {
                   foreach ($row as $key => $value) {
              echo "<br>";     
                
             var_dump( " </strong>" . $value . "<br>"); 
             print_r(  $status ); 
             print_r("<br>");
             
             }
        }


      if($value  ===  $status  ){
        
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

