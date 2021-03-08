<?php  include('../inicio_footer_validacao/autentication_admin.php');  ?>
		
  <br><br><br>
 
     
	<div class="container border border-primary bg-light">
	
	  <p>Seja bem vindo</p>
	  <div class="container">
	  	<h1>Atualizar preços</h1>
	  	<form action="../precos/actionPreco.php" method="post">
	  		
	    	<br><br><br>
	    	<div class="input-group">
		    	<p style="color: #2715E9FF; font-size: 20px; "> Insira o novo valor unitário  para os produtos 	<strong style="color:#2808F6FF; font-size: 24px;"> "Sem pontos ou virgulas :   Correto :    100  errado : 100,00" </strong>	 </p>   	
		      </div>
		    </div>
              <br><br>
		    <div class="input-group">
		     <div class="input-group-preapend">
		    	 <span class="input-group-text">R$</span>
		       </div>
		    	 <input type="text"  name="preco" class="form-control" maxlength="9" placeholder="Digite o valor">
		    	 <legend>O valor será atualizado na base de dados</legend>
               </div>
   		   <div>
   		   	<legend></legend>
   		    <button type="submit" class="btn btn-primary">Atualizar</button>
   		   <legend></legend>
   		  </div>

	  	</form>
	</div>

	 
		
         </form>
	</div>
	   
    
	<script src="../../jQuery/jquery.js"></script>
	<script src="../../jQuery/bootstrap.bundle.min.js"></script>
</body>
</html>