<?php 
   session_start();

			if((isset ($_SESSION['user']) == true) and (isset ($_SESSION['senha']) == true)){
	
		
		       include('../templates/conteudo.php');
			}
         else{
			 
			print_r("<script> var res = alert( 'Faça login para  acessar esse conteúdo !')
                 document.location.href = '../templates/login_h.php';</script>"); 
			 
		 }




?>