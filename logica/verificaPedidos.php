<?php

   include("./include_bd.php");
  
   $valor_boleto = $quantidade * $preco;
   $status = '';
   $endereco_com  = $uf  . ' , ' .   $cidade .' , '.  $bairro . ' , ' . $logradouro . ' , '.   $numero; 
   $num_pedido  =   $numero_cpf . $_SESSION['numeroPedido']; 









$libera = $_POST['libera']; 
if ($libera == "sim"){

// MODIFICAÇÃO

$sqlChecar = mysql_query("SELECT id FROM a_finan WHERE id_reserva = '$id_res' AND id_cliente = '$id_cliente'");
// Irá buscar os registros

if(mysql_num_rows($sqlChecar) === 0){
// Se não houver resgistros faça...

// FIM DA MODIFICAÇÃO 

$sql = mysql_query ("INSERT INTO a_finan(id_reserva,id_cliente)VALUES('$id_res','$id_cliente')", $conexao) or die( mysql_error());
// Insere normalmente

}else{
//se não

echo "Já existe";


}
}else{
echo ""
}


/*

    $sql = "SELECT status from pedido  " ;   

        if(!$stmt = $conexao->prepare($sql)){
          die("Error prepare ".$conexao->error);}

            
            $stmt->execute();
            $result = $stmt->get_result();

          foreach  ($result as $row) {
              foreach ($row as $key => $value) {
              
              echo "<br>";     
                
           var_dump( " </strong>" . $value. "<br>"); 
            // print_r(  $status ); 
             print_r("<br>");

               if($value !== 'Não confirmado'  ){


                           echo  "<script>;
                                 alert('Compra  já feita !');
                              </script>";  
              
         
                    
                } 

              else if ($value == 'Não confirmado') {
                    
                   
                         //     echo  "<script>;
                        //         alert('Compra  já feita !');
                         //     </script>";  
              
                 /*  if(!$stmt = $conexao->prepare("INSERT INTO pedido ( produto, numero_pedido, nome, email, cpf, valor, cep, endereco,status) VALUES (?,?,?,?,?,?,?,?,?)")){
                die("erro prepare:".$conexao->error);}
                      
                if(!$stmt->bind_param("sssssssss", $nome_produto_selecionado,$num_pedido , $usuario, $email,  $numero_cpf , $valor_boleto,  $cp ,$endereco_com , $status )){
                  die("erro bind_param:".$conexao->error);}
                 if(!$stmt->execute()){
                  die("erro execute:".$conexao->error);
                  

                    }

                    */
        
                    /* $resultado = $conexao;
                   
                  

                        echo  "<script>;
                                 alert('Compra  cadastrada !');
                              </script>";  

                    
                     }
               }
        }
           
          
*/

         


/*
    if($value  !==  $value  ){
        
       echo  "<script>
                alert('Escolha  a  forma de  pagamento !!!');
             </script>";  
       
          }    else{
  
 

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


              echo  "<script>;
                alert('Algo errado !');
             </script>";  

  }
        */
   
 ?>

