$(function(){


 $("#selecionarItem").click(function(event){
   event.preventDefault();
    

   action =  $('#selecionarItem option:selected').text();
   
   
   if(action === 'Credito'){
      
      $('#credito').css("display","block");
      $('#boleto').css("display","none");
      $('#debito').css("display","none");
        
        }
    else if(action === 'Débito'){

     $('#debito').css("display","block");
     $('#credito').css("display","none");
     $('#boleto').css("display","none");

        }
    else if(action === 'Boleto'){

      $('#boleto').css("display","block");
      $('#credito').css("display","none");
      $('#debito').css("display","none");


     }
    
     });

});