<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title>Vendas</title>
		<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
         <link href="../bootstrap/bootstrap.min.css"  rel="stylesheet">
		 <link rel="stylesheet" href="../css/img.css">
	     <link rel="shortcut icon" href="../images/favicon/favicon.png" /> 

	 </head>
	 
     <body>
     	<?php
	       session_start();
	        
	    	   require('../logica/include_bd.php');
	       
	        ?>

	    	<div class="container text-center">
	     		        
	     		        <h1 class="text-info">Tela cadastro de pedidos   </h1>
	                  

	                </div>

	           <hr>
        
         	<div class="container-fluid  ">
           		<div class="row">
           			<div  class="col-md-3   ">
       
                 <h4 class="text-success">Vamos Cadastar  seu pedido ? </h4>
                 <br>
                 <p class="text-info ">Prencha a quantidade e os campos abaixo e clique proximo , forneça as informações
                  de modo correto para que seu pedido seja aprovado o mais breve possível ,
                  assim que aprovado o prazo de entrega pode variar de uma semana ate  um mês dependendo da sua
                  localidade.
                </p>
                <p class="text-info">Agradecemos por nos escolher !</p>
              </div>

            <div class="col-md-6">
                <?php
                 $preco = $_SESSION["preco"];
                 $codigo = $_GET['id'];
                
                 $sql = "SELECT nome_imagem,imagem,descricao FROM imagens WHERE codigo =  $codigo  ";
                 $resultado = mysqli_query($conexao,$sql);
		         
                 if($resultado->num_rows > 0){
				     while ($row = mysqli_fetch_array($resultado)){
				      	
				       $img_template = '<img src="data:image/jpg;base64,'. base64_encode($row[1]) . '" alt= "imagem" width="600" height="200" />';

				      	print_r ('<h4 class="text-success"  >' . 'Nome do produto : ' .  $row['nome_imagem'] . ' -  Valor unitário   :  R$ ' . $preco . '.00 '  . '</h4>');
				      	print_r('<br>');
				      	print_r($img_template);
				      	print_r('<br>');
				      	
				      	print_r ('<p class="text-info">' .   $row['descricao'] . '</p>');
				      	$nomeImagem =  $row['nome_imagem'];

		                  }
				     }
                     
                     $sql = "SELECT count(codigo) FROM imagens WHERE nome_imagem = '$nomeImagem'  ";
                     $result = $conexao->query($sql);
					 if ($result->num_rows > 0) {
					    // output data of each row
					    while($row = $result->fetch_row()) {
							$quantidade =   $row[0] ;
							

						 }
					   
					   } else {
					    echo "0 results";
					}

                   //echo mt_rand() . "\n";
                    $rand = mt_rand() . "\n";
                    //echo mt_rand(5, 14);
                    $NumeroPedido = mt_rand(5, 14);

                 
                  $_SESSION['numeroPedido'] =  $rand . $NumeroPedido;  //echo mt_rand() . "\n";
                    $rand = mt_rand() . "\n";
                    //echo mt_rand(5, 14);
                    $NumeroPedido = mt_rand(5, 14);

                 
                  $_SESSION['numeroPedido'] =  $rand . $NumeroPedido;

                 // echo $_SESSION['numeroPedido'];
              ?>

			 <div  class="text-danger bg-light" >
			 	
			 	  <div id="erros1"></div>
			      <div id="errosA"></div>
			      <div id="errosB"></div>
			      <div id="errosC"></div>
			      <div id="errosD"></div> 
			      <div id="errosE"></div>
			      <div id="errosF"></div>
			      <div id="errosG"></div>
			      <div id="errosH"></div>
			      <div id="errosI"></div>
			      <div id="errosJ"></div>
			      <div id="errosL"></div>
			      <div id="errosM"></div>
			      <div id="errosN"></div>
              
              </div>
			     
			      


			  </div>
			  <div class="col-md-3">
              
			  	 <h4 class="text-success">  Quantidade em estoque :  <?php  echo  $quantidade;  ?>  </h4>  
			  	 <br><br><br>
			  
			  
			  	 <select class="form-control text-primary" id="selecionadoItem" name="selecionadoItem" style="width: 240px;" >
			  	 	
			  	   <option class="select"><?php if($quantidade <= 8){ echo '<script> var document.getElemetById(select).style.display = "none" </script>'; } 
			  	 	else { echo  $quantidade - 8; } ?>Escolha a quantidade</option>
                   
                   <option class="select"><?php if($quantidade <= 7){ echo '<script> var document.getElemetById(select).style.display = "none" </script>'; } 
			  	 	else { echo  $quantidade - 7; } ?></option>

			  	 	<option class="select"><?php if($quantidade <= 6){ echo '<script> var document.getElemetById(select).style.display = "none" </script>'; } 
			  	 	else { echo  $quantidade - 6; } ?></option>

			  	 	<option class="select"><?php if($quantidade <= 5){ echo '<script> var document.getElemetById(select).style.display = "none" </script>'; } 
			  	 	else { echo  $quantidade - 5; } ?></option>


			  	 	<option class="select"><?php if($quantidade <= 4){ echo '<script> var document.getElemetById(select).style.display= "none" </script>'; } 
			  	 	else { echo  $quantidade - 4; } ?></option>

			  	 	<option class="select"><?php if($quantidade <= 3){ echo '<script> var document.getElemetById(select).style.display = "none" </script>'; } 
			  	 	else { echo  $quantidade - 3; } ?></option>

			  	 	<option class="select"><?php if($quantidade <= 2){ echo '<script> var document.getElemetById(select).style.display = "none" </script>'; } 
			  	 	else { echo  $quantidade - 2; } ?></option>

			  	 		<option class="select"><?php if($quantidade <= 1){ echo '<script> var document.getElemetById(select).style.display = "none" </script>'; } 
			  	 	else { echo  $quantidade - 1; } ?></option>
			  	 	

			  	 	<option><?php  echo  $quantidade ;  ?></option>

                  
                   </select> <br> <br> <br> 
                
                  
			  	 	<h4 class="text-info">Frete Grátis </h4>
			        <p  class="text-info">Pagamento a ser feito : </p>
			  	 	<p  class="text-info" id="valorPg"></p>

			  	 	
                <?php if($quantidade <= 8){ echo '<script> var document.getElemetById(quan).style.display = "none" </script>'; } 
			  	 	    
			  	 	    else { echo "<div id='quan'>
			  	 	                        
							  	 	    	     <legend class='text-info'>Quantidade maior que 9 unidades ? </legend>
							  	 	             <input type='number' name='quantidade>9' id='quantidade>9' placeholder='Digite a quantidade...' max='$quantidade' > 
							  	 	             <legend class='text-info'>Tudo certo ? </legend>
							  	 	             <button id='conf' class='btn btn-primary'>Confirmar</button>
							  	 	         
			  	 	                	</div>";
			  	 	           } ?>

               	  </div>
            </div>

            
          
		 </div>	 
		 	 <br><br><br>

            <div class="container border border-primary bg-light">
			 	<h1>Formulario pedido</h1>
			 <form   id="val_pedidos" class="was-validated" method="post" action="../logica/validaPedido.php"   >

			 	<div class="form-group ">

			 		<?php echo " <input   class='form-control' type='hidden' name='nome_produto' id='nome_produto' value=' $nomeImagem ''> "; ?>

			 	 </div>


			 	<div class="form-group ">
			    <label for="Nome">Nome Completo</label>
			    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome" required>
			  </div>

			  <div class="form-group">
			    <label for="">CPF</label>
			    <input type="text"  class="form-control" id="cpf" name="cpf" placeholder="Digite seu CPF" required>
			  </div>
			  <div class="form-row">
			    <div class="form-group col-md-6 ">
			      <label for="inputEmail4">Email</label>
			      <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
			    </div>
			    <div class="form-group col-md-6">
			      <label for="confirmar">Confirme Email</label>
			      <input type="email" class="form-control" id="confirmar" name="confirmar" placeholder="confirmar email"   required>
			    </div>
			  </div>
			 
			 <legend>Endereço:</legend>
			   <div class="form-group col-md-3">
			      <label for="cep">CEP</label>
			      <input type="text" class="form-control" id="cep" name="cep" required>
			    </div>
			     <div class="form-group">
			    <label for="inputAddress">Bairro</label>

			    <input type="text" class="form-control" id="bairro" name="bairro" placeholder=" Bairro" required>
			  </div>
			  <div class="form-group">
			  
			    <label for="inputLogradouro">Rua</label>

			    <input type="text" class="form-control" id="logradouro" name="logradouro" placeholder="Rua" required>
			  </div>
			   <div class="form-group col-md-3">
			      <label for="inputNum">Número</label>
			      <input type="number" class="form-control" id="numero" name="numero" required>
			    </div>

             
         <div class="form-group">
			    <label for="">Compelemento</label>

			    <input type="text" class="form-control" id="compelemento" name="compelemento" placeholder=" Apartameto,Bloco,etc..."  >
			  </div>
			  <div class="form-group">
			    <label for="inputReferncia">Referência</label>

			    <input type="text" class="form-control" id="referencia" name="referencia" placeholder=" Proximidade,estação de trem, ect...." required  >
			  </div>
			  
			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="cidade">Cidade</label>
			      <input type="text" class="form-control" id="cidade" name="cidade" required>
			    </div>
			    <div class="form-group col-md-6">
			      <label for="estado">Estado</label>
			      <select id="estado" name="estado" class="form-control" required>
			        <option selected></option>
			        <option>SP</option>
					<option>AC</option>	
					<option>AL</option>	
					<option>AP</option>	
					<option>AM</option>	
					<option>BA</option>	
					<option>CE</option>	
					<option>DF</option>	
					<option>ES</option>	
					<option>GO</option>	
					<option>MA</option>	
					<option>MT</option>	
					<option>MS</option>	
					<option>MG</option>	
					<option>PA</option>	
					<option>PB</option>	
					<option>PR</option>	
					<option>PE</option>	
					<option>PI</option>	
					<option>RJ</option>	
					<option>RN</option>	
					<option>RS</option>	
					<option>RO</option>	
					<option>RR</option>	
					<option>SC</option>	
					<option>SE</option>	
					<option>TO</option>	
			      </select>
			    </div>

			  <div class="form-group col-md-6">
			      <label for="valor">Pagamento</label>
                <p  class="text-info" id="valorPg-b" ></p>
			    
                  <?php echo " <input   class='form-control' type='number' name='valorPg-b' id='valorPg-b'  placeholder='Confirme a quantidade...' max='$quantidade' min='1'  required  > "; ?>
              </div>
			     
			    	
			  </div>
			  <div class="form-group">
			    <div class="form-check">
			      <input class="form-check-input" type="checkbox" id="gridCheck" required>
			      <label class="form-check-label" for="gridCheck">
			        Clique em mim
			      </label>
			    </div>
			  </div>
			
			    <button id="btconfirma" onclick="myFunction()" name="btconfirma" type="submit" class="btn btn-primary">Proximo</button>
			
			   <br><br><br>
			  </form>
			 </div>
			<br>

       
      <?php   include('../templates/footer_b.php');   ?>
			
    <script src="../jQuery/jquery.js"></script>
    <script src="../jQuery/bootstrap.bundle.min.js"></script>
    <script src="../javascript/valida_cpf.js"></script>
	<script src="../javascript/valida_pedidos.js"></script>
	
   	<script>

	   $(function(){
          
          // preencher campos de endereço

		  function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#logradouro").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#estado").val("");
                //$("#ibge").val("");
            }
            
         //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#logradouro").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#estado").val("...");
                        //$("#ibge").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#logradouro").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#estado").val(dados.uf);
                              //  $("#ibge").val(dados.ibge);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });


            //selecionando quantidade 
	
			 $('#selecionadoItem').click(function(event){
			 	event.preventDefault();
			 
			  quantidade = $('#selecionadoItem option:selected').text();
			
			 if(quantidade > 8){

			  alert('Acima de 9 unidades digite a quantidade !')
			
			 }
			else  if(quantidade <= 8 ){
		      document.getElementById("valorPg").innerHTML = ' R$ :  '  + quantidade * <?php echo $preco; ?> + '.00';
		      document.getElementById('valorPg-b').innerHTML = ' R$ :  '  + quantidade * <?php echo $preco; ?> + '.00';
		      }
		      else{
		       document.getElementById("valorPg").innerHTML =  '';
		      }
		      
		   });
		 });
   

	    //quantidade maior que 9
		var valDigitado  =  document.getElementById('quantidade>9');
	    var conf = document.getElementById('conf');
	    conf.addEventListener('click' , function(){
	    a = valDigitado.value;
	    
	    if( a  >  <?php echo $quantidade; ?> ){
	    	alert('Não temos essa quantidade em estoque');
	    	valDigitado.style.border = '1px solid red';
	    	valDigitado.value = ' ';

	    }
	    else if(a <= 0){
	    	alert('Digite uma quantidade válida !');
	    	valDigitado.style.border = '1px solid red';
	    	valDigitado.value = ' ';

	  }
	    else{
		  document.getElementById('valorPg').innerHTML = a * <?php echo $preco; ?> + '.00'; 
		
		
	   }

	  });
       
        </script>
	  </body>
</html>
