<?php
  if(session_start() === PHP_SESSION_NONE) {
    session_start();
  } 
  if(!isset($_SESSION["user"]) || !isset($_SESSION["senha"])) {
    header("Location:../index.php");
    exit;
  }
  require_once __DIR__."/../logica/include_bd.php";
?>

<!DOCTYPE html>
<html>
  <head>
   <meta charset="utf-8">
   <title>Pagamento</title>
   <link href="../bootstrap/bootstrap.min.css"  rel="stylesheet">
   <link rel="stylesheet" href="../css/img.css">
   <link rel="shortcut icon" href="../images/favicon/favicon.png"/> 
  </head>
     <body>
   <?php    
     if((isset ($_SESSION["user"]) == true) and (isset ($_SESSION["senha"]) == true)){
         $logado = $_SESSION['user'];
    		 date_default_timezone_set("America/Sao_Paulo");
    		 $x =  $_SESSION["inicio"] = date("d-m-Y H:i");
         $d = preg_replace("/[-]/" , "/" , $x);
    		 echo"<p style = 'margin:10px ; color:#0F0A0A'>$d</p>";
    		 echo "<p style = 'margin:10px; color:blue;'>Olá .$logado;</p>";
				} else {
				
        header("Location: index.php");	
    }

        $usuario = $_POST["nome"];
        $email = $_POST["email"];
        $confirma = $_POST["confirmar"];
        $cpf = $_POST["cpf"];
        $numero_cpf = preg_replace("/[^\d]/", "",$cpf);
        $cp = $_POST["cep"];
        $bairro = $_POST["bairro"];
        $logradouro = $_POST["logradouro"];
        $numero = $_POST["numero"];
        $complemento = $_POST["compelemento"];
        $referencia = $_POST["referencia"];
        $uf = $_POST["estado"];
        $cidade = $_POST["cidade"];
        $quantidade = $_POST["valorPg-b"];
        $preco = $_SESSION["preco"];
        $nome_produto_selecionado =  $_POST["nome_produto"];
       
       if( $email !=  $confirma)
         {
          echo "<script language='javascript' type='text/javascript'>alert('E-mails não conferem - digite email e confirme !');window.location.href='../templates/vendas.php';</script>";
          }
         
          include('../logica/valida-cpf.php');

          if (valida_cpf( $cpf ) ) {
            } else {
            echo "<script language='javascript' type='text/javascript'>alert('CPF inválido !');window.location.href='../templates/vendas.php';</script>";
             }
                
            echo "<div style='font-size: 22px;' class='container-fluid text-info'>";
            echo "Produto Selecionado : " . $nome_produto_selecionado;
            echo "<br>";
            echo "Nome : " . $usuario;
            echo "<br>";
            echo "Número do pedido : " . $_SESSION['numeroPedido'] . $numero_cpf; 
            echo "<br>";
            echo "Email : " . $email;
            echo "<br>";
            echo "Cpf : " . $numero_cpf;
            echo "<br>";
            echo "Cep : " . $cp;
            echo "<br>";
            echo "Bairro : " . $bairro;
            echo "<br>";
            echo "Logradouro : " . $logradouro;
            echo "<br>";
            echo "Número : " . $numero;
            echo "<br>";
            echo "Compelemento : " . $complemento;
            echo "<br>";
            echo "Referência : " . $referencia;
            echo "<br>";
            echo "Estado : " . $uf;
            echo "<br>";
            echo "Cidade : " . $cidade;
            echo "<br>";
            echo "Valor : R$  " . $quantidade * $preco . '.00';
            echo "<br>";
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
          <form class="was-validated"  method="post" >
            <div class="form-group">
                <legend class="text-center text-info">Cartão de credito</legend>
                <input class="form-control" type="text" id="carNome" name="carNome" placeholder="Nome no cartão" required>
                 <div class="valid-feedback">Ok.</div>
                 <div class="invalid-feedback">Preenha com nome no catão.</div>
             </div>
             <div class="form-group">
                <input class="form-control" type="text" id="bandeira" name="bandeira" placeholder="Digite o número de cartão" maxlength="16" required>
                <div class="valid-feedback">Ok.</div>
                <div class="invalid-feedback">Prêenha com o número do catão.</div>
             </div>
             <div class="form-group">
               <input class="form-control col-md-3" type="text" id="cvv" name="cvv" placeholder="Digite seu cvv" maxlength="4" required>
               <div class="valid-feedback">Ok.</div>
               <div class="invalid-feedback">Prêencha com o número que está atrás do cartão</div>
             </div>
            <button id="card" class="btn btn-outline-success">Enviar</button>
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

     <div id="boleto" style="display: none;" class="container border border-info col-lg-6 col-xl-9">
     <div class="mb-5 mt-5 mr-4 ml-4 pt-4">
      <form  method="post" action="../templates/boleto_unibanco.php"   class="was-validated">
      <div class="form-group">
        <h1 class="text-center text-info">Boleto</h1>
          <?php 
            $valor_boleto = $quantidade * $preco;
            echo "<h1> Você escolheu: $nome_produto_selecionado</h1>";
            echo "<h1 class='text-primary'>Confira nome</h1>";
            echo "<input class='form-control' type='text' name='nomebol' id='nomebol'  value='$usuario'>"; 
            echo "<h1>Valor: R$ $valor_boleto</h1>"; 
            echo "<input class='form-control' type='hidden' name='boletoVal' id='boletoVal' value= '$valor_boleto'>"; 
            echo "<h1 class='text-primary'>Confira endereço</h1>"; 
            echo "<input class='form-control' type='text' name='enderecobol' id='enderecobol' value='$logradouro . $numero'>";
            echo "<h1 class='text-primary' class='text-primary'>Confira cidade, estado e CEP</h1>";  
            echo "<input class='form-control' type='text' name='c_e_cp' id='c_e_cp' value=' $cidade $uf $cp'>";
            echo "<h1>Quantidade: $quantidade</h1>";  
            echo "<input class='form-control' type='hidden' name='quantidade' id='quantidade' value='$quantidade'>";
                     
          ?>
    </div>
    <button onclick="if(!confirm('Tem certeza que quer gerar o boleto ?')) return false;"  id="boleto-b" class="btn btn-outline-success">Criar boleto</button> 
               
         </form>
      </div>
  </div>
 <br><br><br><br>
  
  <?php  // include('verificaPedidos.php');?>
  <?php  include "../templates/footer_b.php";?>
  <script src="../jQuery/jquery.js"></script>
  <script src="../javascript/valida.js"></script>
  <script src="../jQuery/bootstrap.bundle.min.js"></script>
  <script src="../javascript/cartoes.js"></script>
 
  </body>
</html>
