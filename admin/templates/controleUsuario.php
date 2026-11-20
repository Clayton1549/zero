<?php include "../inicio_footer_validacao/autentication_admin.php" ?>
 
 <div class="container">
   <h1 class="text-info">Lista de usuários cadastrados</h1>
 </div>
 <div class="container">
 	<table class="table table-bordered border-primary text-light">
 	  <tr class="bg-success">
 	  	<td align="center">Id</td>
 	  	<td align="center">email</td>
 	  	<td align="center">Cidade</td>
 	  	<td align="center">Excluir usuário</td>
 	  </tr>
 <?php $sql = "SELECT id_usuario, email, cidade FROM user";
   $resultado = mysqli_query($conexao, $sql);
   
   while($row = mysqli_fetch_array($resultado)) {?>
   	<tr class="text-info">
   	 <td align="center">
   	  <?php echo $row['id_usuario']; ?>
   	 </td> 

   	 <td align="center">
   	  <?php echo $row['email']; ?>
   	 </td>

   	 <td align="center">
   	  <?php echo $row['cidade']; ?>
   	 </td> 

   	 <td align="center">
   	 	<?php echo "<form action='../usuario/excluirUsuario.php' method='post'> 
   	 	            <input type='hidden' name='excluiruser' value='{$row['id_usuario']}'>
   	 	            <button type='submit' class='btn btn-outline-danger'>Excluir</button>
   	 	            </form>";
   	 	  ?>
   	 </td>
    <?php } ?>
 	</table>
 </div>



   <?php include "../inicio_footer_validacao/admin_footer.php"; ?>
   </body>
 </html>