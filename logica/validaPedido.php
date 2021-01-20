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
       require('../bd/conexao.php');
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
         print_r('Nome : ' . $usuario);
         print_r('<br>');
         print_r('Número do pedido : ' . $_SESSION['numeroPedido']  . ' - ' . $cpf); 
         print_r('<br>');
         print_r('Email : ' . $email);
         print_r('<br>');
         print_r('Cpf : ' . $cpf);
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
            <legend class="text-center text-info">Boleto</legend>
            <input class="form-control" type="text" id="carNome-b" name="carNome-b" placeholder="Digite seu nome..." required>
             <div class="valid-feedback">Ok.</div>
             <div class="invalid-feedback">Este campo não pode ficar vazio.</div>
          </div>

               <?php 

                $valor_boleto = $quantidade * $preco ;
                    print_r( " <input  class='form-control' type='text' name='boletoVal' id='boletoVal'  value= ' $valor_boleto ' > "); 
                    print_r("<input class='form-control' type='text' name='nomebol' id='nomebol' value='$usuario' >   ");
                    print_r("<input class='form-control' type='text' name='enderecobol' id='enderecobol' value=' $logradouro'  >  ");
                   print_r("<input class='form-control' type='text' name='c_e_cp' id='c_e_cp' value=' $cidade  $uf   $cp'  >  ");
                  ?>



              </div>

               <button id="boleto-b" class="btn btn-outline-success">Enviar</button>
       
         </form>
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
  
  
 
  
   

   


          
    </body>
</html>
