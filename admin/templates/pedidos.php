<?php 
 include('../inicio_footer_validacao/autentication_admin.php'); 

 include('../login-logout/include_bd.php');

 ?>

<table class="table" border="1">
   <tr>
     <td align="center">id </td>
     <td align="center">Produto</td>
     <td align="center">Nunero do pedido</td>
     <td align="center">Nome</td>
     <td align="center">Email</td>
     <td align="center">Cpf</td>
     <td align="center">Valor compra</td>
     <td align="center">Cp</td>
     <td align="center">Pendencias</td>
    <td align="center">Comfirmar </td>
</tr>

    
<?php

  $sql = "SELECT id_pedido, produto, numero_pedido, nome, email, cpf, valor, cep,status FROM  pedido ";
        $resultado = mysqli_query($conexao,$sql);

 while ($row = mysqli_fetch_array($resultado)) {?>   

   <tr class="text-info">Cofirmar" style=>
      <td align="center">
      <?php echo $row['id_pedido']; ?>
    </td>
 
      <td align="center">
      <?php echo $row['produto']; ?>
    </td>
   
      <td align="center">
      <?php echo $row['numero_pedido']; ?>
    </td>
  
      <td align="center">
      <?php echo $row['nome']; ?>
    </td>
   
      <td align="center">
      <?php echo $row['email']; ?>
    </td>
    
      <td align="center">
      <?php echo $row['cpf']; ?>
    </td>
    
      <td align="center">
      <?php echo $row['valor']; ?>
    </td>
     
    <td align="center">
      <?php echo $row['cep']; ?>
    </td>
    
     <td class="text-primary" align="center">
      <?php echo $row['status']; ?>
    </td>
     <td class="text-primary" align="center">
      <?php  print_r('<br>');
       echo ' <form action="../login-logout/status.php" method="post" ><button type="submit" class="btn btn-outline-info text-secondary">Cofirmar compra</button> </form>'; 
       ?>
      </td>
   </tr>
 <?php } ?>
  
</table>



<?php include('..//inicio_footer_validacao/admin_footer.php');?>

		
  