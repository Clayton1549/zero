<?php

   include("./include_bd.php");
  
   $valor_boleto = $quantidade * $preco;
   $status = '';
   $endereco_com  = $uf  . ' , ' .   $cidade .' , '.  $bairro . ' , ' . $logradouro . ' , '.   $numero; 
   $num_pedido  =   $numero_cpf . $_SESSION['numeroPedido']; 

   //print_r($usuario);
   
   // $j = $usuario; 
  //  if ($j == "Fernanando de Souza"){
   
    // MODIFICAÇÃO

      //id_pedido, produto, numero_pedido, nome, email, cpf, valor, cep, endereco, status

  //$sqlChecar = "SELECT * FROM pedido WHERE numero_pedido = ? AND nome =  ? and email = ?";
  $sqlChecar = "SELECT * FROM pedido WHERE  nome =  ? and status = ?  and cpf = ? ";

    if(!$stmt = $conexao->prepare($sqlChecar)){
      die("Error prepare" .$conexao->error);
    }
    
    $stmt->bind_param("sss" ,$usuario,$status, $cpf );
    $stmt->execute();
    $result = $stmt->get_result();
    //Irá buscar os registros

    if($result->num_rows > 0){
    while ($row = $result-> fetch_assoc()) {
            foreach ($row as $key => $value) {
                    print_r($key . ' :  ' );
                    print_r($value);
                    print_r('<br>');
              }  
         }

     }
        else{
          //se não

        echo "sem  dados desse  usuario";
        }


      /*else{

       print_r('erro');
        ///Se não houver resgistros faça...
        if(!$stmt = $conexao->prepare("INSERT INTO pedido ( produto, numero_pedido, nome, email, cpf, valor, cep, endereco,status) VALUES (?,?,?,?,?,?,?,?,?)")){
        die("erro prepare:".$conexao->error);}
                      
       if(!$stmt->bind_param("sssssssss", $nome_produto_selecionado,$num_pedido , $usuario, $email,  $numero_cpf , $valor_boleto,  $cp ,$endereco_com , $status )){
          die("erro bind_param:".$conexao->error);}
            if(!$stmt->execute()){
              die("erro execute:".$conexao->error);
       }
    // Insere normalmente

    
 }
*/

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

