<!DOCTYPE html>

<html>
  <head>
   <meta charset="utf-8">
   
    <title>Pagamento</title>
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
     <link href="../bootstrap/bootstrap.min.css"  rel="stylesheet">
     <link rel="stylesheet" href="../css/img.css">
     <link rel="shortcut icon" href="../images/favicon/favicon.png" /> 
   </head>
    
     <body>
 <?php    
       session_start();
       require('include_bd.php');
			if((isset ($_SESSION['user']) == true) and (isset ($_SESSION['senha']) == true)){

           $logado = $_SESSION['user'];
    			 date_default_timezone_set('America/Sao_Paulo');
    			 $x =  $_SESSION["inicio"]  = date(" d-m-Y H:i");
           $d = preg_replace('/[-]/' , '/' , $x);
    			 print_r("  <p style ='margin:10px ; color:#0F0A0A'>$d</p>");
    			 echo "  <p   style = 'margin:10px; color:blue;' >      Olá    .$logado;</p>";
				 } else{
				
			     header("Location: index.php");	
    }

        $usuario = $_POST["nome"];
        $email = $_POST['email'];
        $confirma = $_POST['confirmar'];
        $cpf = $_POST['cpf'];
        $numero_cpf = preg_replace('/[^\d]/', '',$cpf);
        $cp = $_POST['cep'];
        $bairro = $_POST['bairro'];
        $logradouro = $_POST['logradouro'];
        $numero = $_POST['numero'];
        $complemento = $_POST['compelemento'];
        $referencia = $_POST['referencia'];
        $uf = $_POST['estado'];
        $cidade = $_POST['cidade'];
        $quantidade = $_POST['valorPg-b'];
        $preco = $_SESSION["preco"];
        $nome_produto_selecionado =  $_POST['nome_produto'];
       // $numero_cpf = preg_replace('/[^\d]/', '',$cpf);

    
      //validar email 
      if( $email !=  $confirma)
         {
          echo "<script language='javascript' type='text/javascript'>alert('E-mails não conferem  - digite email e confirme !');window.location.href='../templates/vendas.php';</script>";
         
         }
 
              // Inclui o arquivo com a função valida_cpf
          include('../logica/valida-cpf.php');

             // Verifica o CPF
           if (valida_cpf( $cpf ) ) {
             echo "CPF oK";
            } else {
               echo "<script language='javascript' type='text/javascript'>alert('CPF inválido !');window.location.href='../templates/vendas.php';</script>";
             }
                
                      
             echo "<div style='font-size: 22px;' class='container-fluid text-info'>";

             print_r('Produto Selecionado : ' . $nome_produto_selecionado);
             print_r('<br>');
             print_r('Nome : ' . $usuario);
             print_r('<br>');
             print_r('Número do pedido : ' . $_SESSION['numeroPedido']  .   $numero_cpf ); 
             print_r('<br>');
             print_r('Email : ' . $email);
             print_r('<br>');
             print_r('Cpf : ' .  $numero_cpf );
             print_r('<br>');
             print_r('Cep : ' . $cp);
             print_r('<br>');
             print_r('Bairro : ' . $bairro);
             print_r('<br>');
             print_r('Logradouro : ' . $logradouro);
             print_r('<br>');
             print_r('Número : ' . $numero);
             print_r('<br>');
             print_r('Compelemento : ' . $complemento);
             print_r('<br>');
             print_r('Referência : ' . $referencia);
             print_r('<br>');
             print_r('Estado : ' . $uf);
             print_r('<br>');
             print_r('Cidade : ' . $cidade);
             print_r('<br>');
             print_r('Valor :  R$  ' . $quantidade * $preco . '.00');
             print_r('<br>');

      
       "</div>";


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
                
                var_dump( " </strong>" . $value . "<br>"); 
             }
        }
     
      if($value  ==  $cpf ){
        
       echo  "<script>
             

             alert('Usuaro já  cadastrado  em mossa base de dados !!!');
         
       
         </script>";  


       }else{

   

   $valor_boleto = $quantidade * $preco;
   /* $status = 'Não confirmado';
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
*/
        

     
   }

  // var_dump($cpf);

    
?>
   
   <div class="container-fluid col-lg-6 col-xl-4">
    <div class="mb-5 mt-5 mr-4 ml-4 pt-4">
      <select id="selecionarItem" class="form-control text-info">
          <option>Escolha a forma de pagamento</option>
          <option>Credito</option>
          <option>Débito</option>
          <option>Boleto</option>
       </select>
    </div>
  </div>

   <div id="credito" style="display: none;" class="container-fluid border border-info col-lg-6 col-xl-9" >
      <div class="mb-5 mt-5 mr-4 ml-4 pt-4">
          <form class="was-validated" action="../templates/boleto_unibanco.php" method="post" >
            <div class="form-group">
                <legend class="text-center text-info">Cartão de credito</legend>
                <input class="form-control" type="text" id="carNome" name="carNome" placeholder="Nome no cartão" required>
                 <div class="valid-feedback">Ok.</div>
                 <div class="invalid-feedback">Preenha com nome no catão.</div>
             </div>
            
             <div   class="form-group">
                <input class="form-control" type="text" id="bandeira" name="bandeira" placeholder="Digite o número de cartão " required>
                <div class="valid-feedback">Ok.</div>
                <div class="invalid-feedback">Preenha com o número do catão.</div>
             </div>
          
               <button  id="card" class="btn btn-outline-success">Enviar</button>
          </form>
        </div>
    </div>
  

    <div id="debito" style="display: none;" class="container-fluid border border-info col-lg-6 col-xl-9">
      <div class="mb-5 mt-5 mr-4 ml-4 pt-4">
        <form class="was-validated">
          <div class="form-group">
             <legend class="text-center text-info">Cartão de debito</legend>
             <input class="form-control" type="text" id="carNome-d" name="carNome-d" placeholder="Nome no cartão" required>
             <div class="valid-feedback">Ok.</div>
             <div class="invalid-feedback">Preenha com o número do catão.</div>

          </div>

         <div class="form-group">
             <input class="form-control" type="text" id="debito" name="debito" placeholder="Digite o número de cartão " required>
             <div class="valid-feedback">Ok.</div>
             <div class="invalid-feedback">Preenha com o número do catão.</div>
           </div>
            
             <button id="c-debito" class="btn btn-outline-success">Enviar</button>
       
       </form>
     </div>
   </div>

  <div id="boleto" style="display: none;" class="container-fluid border border-info col-lg-6 col-xl-9">
     <div class="mb-5 mt-5 mr-4 ml-4 pt-4">
     
        <form  method="post"  action="../templates/boleto_unibanco.php" class="was-validated">
        
          <div class="form-group">
            <h1 class="text-center text-info">Boleto</h1>
                    


               <?php 
                    
                     


                      
                       print_r("<h1> Você escolheu :  $nome_produto_selecionado  </h>");
                       print_r('<h1 class="text-primary"> Confira   nome  </h1>'); 
                       print_r( " <input  class='form-control' type='text' name='nomebol' id='nomebol'  value= ' $usuario ' > "); 
                       print_r("<h1> Valor:  R$ $valor_boleto  </h1>"); 
                       print_r( " <input     class='form-control'     type='hidden' name='boletoVal' id='boletoVal'  value= ' $valor_boleto ' > "); 
                       print_r('<h1 class="text-primary"> Confira  endereço  </h1>'); 
                       print_r("<input class='form-control' type='text' name='enderecobol' id='enderecobol' value=' $logradouro'  >  ");
                       print_r('<h1 class="text-primary" lass="text-primary"> Confira cidade ,estado e  CEP </h1>');  
                       print_r("<input class='form-control' type='text' name='c_e_cp' id='c_e_cp' value=' $cidade  $uf   $cp'  >  ");
                       print_r("<h1> Quantidade : $quantidade  </h1>");  
                       print_r("<input class='form-control' type='hidden' name='quantidade' id='quantidade' value=' $quantidade '  >  ");
                    
                      

                
                  ?>

                 </div>

            

               <button  onclick="myFunction()" id="boleto-b" class="btn btn-outline-success">Criar boleto</button>
              
         </form>
      </div>
  </div>
</div>


   <footer style="margin-top: 1000px;"  id="contato" class="page-footer font-small  text-light bg-dark ">
    
     <!-- Copyright -->
    <div class="footer-copyright text-center py-3"> Desenvolvido por  Clayton  Pereira de Oliveira © em  2019  <br>
    <?php   $ano  =  date("m/ Y ");       echo  $ano;    ?>
        
      
        </div>
     </footer>
  

  <!-- Copyright -->
  <!-- boostrap javascript -->
  <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
  <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>-->
  <!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>-->
  

  <script src="../jQuery/jquery.js"></script>
  <script src="../javascript/valida.js"></script>
  <script src="../jQuery/bootstrap.bundle.min.js"></script>
  <script src="../javascript/cartoes.js"></script>
  <script>

    function myFunction() {
        
      var txt;
      var r = confirm("Press a button!");
      
      if (r == true) {
       
        } else {
          
         



             }
 
      }
        

  
     //var txt;
    
    </script>
  
  
 
  
   

   


          
    </body>
</html>
