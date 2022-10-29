<?php
     
  include("./include_bd.php");
  $valor_boleto = $quantidade * $preco;
  $status = 'Esperando verificação...';
  $endereco_com  = $uf  . ' , ' .   $cidade .' , '.  $bairro . ' , ' . $logradouro . ' , '.   $numero; 
  $num_pedido  =   $numero_cpf . $_SESSION['numeroPedido']; 

  
   
    try{

         if(!$stmt = $conexao->prepare("INSERT INTO pedido ( produto, numero_pedido, nome, email, cpf, valor, cep, endereco,status) VALUES (?,?,?,?,?,?,?,?,?)")){
                die("erro prepare:".$conexao->error);}
                      
                if(!$stmt->bind_param("sssssssss", $nome_produto_selecionado,$num_pedido , $usuario, $email,  $numero_cpf , $valor_boleto,  $cp ,$endereco_com , $status )){
                  die("erro bind_param:".$conexao->error);}
                  if(!$stmt->execute()){
                  die("erro execute:". $conexao->error);
                  $error = 'Uncaught mysqli_sql_exception: Duplicate entry "Fernanando de Souza" for key "nome" in C:\xampp\htdocs\zero\logica\verificaPedidos.php:18 Stack trace: #0 C:\xampp\htdocs\zero\logica\verificaPedidos.php(18): mysqli_stmt->execute() #1 C:\xampp\htdocs\zero\logica\validaPedido.php(202): include("C:\\xampp\\htdocs...") #2 {main} thrown in';
                    throw new Exception();

                    }else{

                    $resultado = $conexao;
                   
                    echo  "<script>;
                                 alert('Compra  cadastrada !');
                              </script>";  

                     }
             
                } catch(Exception $e) {
                    print_r("<h4 class='text-info'>Cadastro em andamento...!</h3>");
              }

            
         

          
?>

