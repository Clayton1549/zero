<?php 
 include('../inicio_footer_validacao/autentication_admin.php'); 

 include('../login-logout/include_bd.php');

 ?>

<table class="table" border="1">
   <tr>
     <td align="cennter">id compra</td>
     <td align="cennter">Produto</td>
     <td align="cennter">Nunero do peido</td>
     <td align="cennter">Nome</td>
     <td align="cennter">Email</td>
     <td align="cennter">Cpf</td>
     <td align="cennter">Valor compra</td>
     <td align="cennter">Cp</td>
     <td align="cennter">Estatus </td>
</tr>

    
  

<?php

  $sql = "SELECT id_pedido, produto, numero_pedido, nome, email, cpf, valor, cep,status FROM  pedido ";

          if(!$stmt = $conexao->prepare($sql)){
            die("Error prepare ".$conexao->error);}

              
              $stmt->execute();
              $result = $stmt->get_result();
                        
            foreach  ($result as $row) {
                     foreach ($row as $key => $value) {
                //echo "<br>";     
                  
              // echo( " </strong>" . $value . "<br>"); 
              
              // print_r("<br>");
               
               }
          }
?>


   <tr  style=>
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
    
     <td align="center">
      <?php echo $row['status'];
      print_r('<br>');
       echo ' <button type="submit" class="btn btn outline-info">Cofirmar compra</button>'; ?>
    </td>

  </tr>

  
</table>



<?php include('..//inicio_footer_validacao/admin_footer.php');?>

		
  