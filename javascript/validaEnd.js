//validação dos campos endereços

jQuery(function($){
   $("#CEP").change(function(){
      var cep_code = $(this).val();
      if( cep_code.length <= 0 ) return;
      $.get("http://apps.widenet.com.br/busca-cep/api/cep.json", { code: cep_code },
         function(result){
            if( result.status!=1 ){
               alert(result.message || "Houve um erro desconhecido");
               return;
            }
            $("input#CEP").val( result.code );
            $("inputEstado").val( result.state );
            $("inputCidade").val( result.city );
            $("inputAddress").val( result.district );
            $("inputAddress").val( result.address );
            $("input#estado").val( result.state );
         });
   });
});