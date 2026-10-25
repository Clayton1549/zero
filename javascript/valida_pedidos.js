function validaCadastro() {
  var nome = document.getElementById("nome");
	var email = document.getElementById("email");
	var confirmar = document.getElementById("confirmar");
	var cep = document.getElementById("cep");
	var bairro = document.getElementById("bairro");
	var logradouro = document.getElementById("logradouro");
	var numero =  document.getElementById("numero");
	var compelemento = document.getElementById("compelemento");
	var referencia =  document.getElementById("referencia");
	var cidade = document.getElementById("cidade")
	var estado  = document.getElementById("estado");
	var confir =  document.getElementById("btconfirma");
      
      confir.addEventListener("click", function() {
		  if(nome.value  === ""){
	       document.getElementById("errosA").innerHTML = "Campo nome não pode estar vazio"; 
        } 
         else{
          document.getElementById("errosA").innerHTML = "nome ok"; 
          document.getElementById("errosA").style.color = "green";
        }
      
      if(email.value !== confirmar.value){
          document.getElementById("errosM").innerHTML = "Campos de email estão diferenntes"; 
          }
            else {
             document.getElementById("errosM").innerHTML = ""; 
          }
          
      if(email.value === ""){
          document.getElementById("errosB").innerHTML = "Campo email não pode estar vazio"; 
          }
          else{
           document.getElementById("errosB").innerHTML = "email ok"; 
           document.getElementById("errosB").style.color = "green";
          }

      if(confirmar.value === ""){
           document.getElementById("errosC").innerHTML = "Campo confirmar email não pode estar vazio"; 
          }
           else{
           document.getElementById("errosC").innerHTML = "cofirmar email ok"; 
           document.getElementById("errosC").style.color = "green";
          }
        
      if(cep.value === ""){
           document.getElementById("errosD").innerHTML = "Campo cep não pode estar vazio"; 
          }
           else{
           document.getElementById("errosD").innerHTML = "cep ok"; 
           document.getElementById("errosD").style.color = "green";
          }
        
      if(bairro.value === ""){
            document.getElementById("errosE").innerHTML = "Campo bairro não pode estar vazio"; 
          }
           else{
            document.getElementById("errosE").innerHTML = "bairro ok"; 
            document.getElementById("errosE").style.color = "green";
          }
        
      if(logradouro.value === ""){
          	 document.getElementById("errosF").innerHTML = "Campo logradouro não pode estar vazio"; 
          }
           else{
             document.getElementById("errosF").innerHTML = "logradouro ok"; 
             document.getElementById("errosF").style.color = "green"; 
          }
        
      if(numero.value  ===  ''){
          	 document.getElementById("errosG").innerHTML = 'Campo número não pode estar vazio'; 
          }
           else{
             document.getElementById("errosG").innerHTML = "numero ok"; 
             document.getElementById("errosG").style.color = "green";
          }
          
      if(referencia.value === ""){
          	document.getElementById("errosI").innerHTML = "Campo referencia não pode estar vazio"; 
          }
           else{
            document.getElementById("errosI").innerHTML = "referencia ok"; 
            document.getElementById("errosI").style.color = "green";
          }
      
      if(cidade.value === ""){
          	document.getElementById("errosJ").innerHTML = "Campo cidade não pode estar vazio"; 
          }
           else{
            document.getElementById("errosJ").innerHTML = "cidade ok"; 
            document.getElementById("errosJ").style.color = "green";
          }
       if(estado.value === ""){
          	document.getElementById("errosL").innerHTML = "Campo estado não pode estar vazio"; 
          }
           else{
            document.getElementById("errosL").innerHTML = "estado ok"; 
            document.getElementById("errosL").style.color = "green";
          }
      });
   }
  
  validaCadastro();






