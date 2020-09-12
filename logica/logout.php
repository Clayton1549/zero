<?php
   
   session_start();
   session_destroy();
   print_r("<script> var res = alert( 'Saindo da página')
   document.location.href = '../templates/login_h.php';</script>");
   exit();

   
?>