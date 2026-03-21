<?php  include('../inicio_footer_validacao/autentication_admin.php');  ?>
		
  <br><br><br>
 
     
	<div class="container border border-primary bg-light">
	   <h1 class="text-info">Seja bem vindo</h1>
	   <h3 class="text-primary">Atualizar preços</h3>
	  	<form action="../precos/actionPreco.php" method="post">
	  		
	    	<br><br><br>
	    	<div class="text-group">
		    	<p style="color: #2715E9FF; font-size: 20px; "> Insira um novo valor unitário para os produtos -> <strong style="color:#2808F6FF; font-size: 24px;"> Exemplo: 0.00 </strong></p>   	
		      </div>
		     <br>
		    <div class="input-group">
		     <div class="input-group-preapend">
		    	 <span class="input-group-text">R$</span>
		       </div>
		    	 <input class="w-50" type="text" name="preco" class="form-control" maxlength="9" placeholder="Digite o valor" required>
                 
               </div>
               <br>
               <div>
		    	    <h3 class="text-primary">O valor será atualizado na base de dados.</h3>
               </div>
   		   <div>
   		    <div> 
   		      <button type="submit" class="btn btn-primary">Atualizar</button>
   		    </div>
   		     <br>
   		  </div>

	  	 </form>
	    </div>
   
   
    <script src="../../jQuery/jquery.js"></script>
	<script src="../../jQuery/bootstrap.bundle.min.js"></script>
    <?php  include('..//inicio_footer_validacao/admin_footer.php'); ?>

</body>
</html>