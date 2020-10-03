<?php
   
   session_start();
   session_destroy();
   print_r("<script> var res = alert( 'Saindo da página')
   document.location.href = '../index.php';</script>");
   exit();

   
?>