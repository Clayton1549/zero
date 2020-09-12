       //validar cartão de vredito
       var bandeira = document.querySelector('#bandeira');
       var validCard = document.querySelector('#card');
    

                
           function LuhnAlgorithm(num){


                   var inputNum = num.toString();
                    var sum = 0;
                    var doubleUp = false;

                    /* from the right to left, double every other digit starting with the second to last digit.*/
                    for (var i = inputNum.length - 1; i >= 0; i--)
                    {
                        var curDigit = parseInt(inputNum.charAt(i));

                        /* double every other digit starting with the second to last digit */
                        if(doubleUp)
                       {
                            /* doubled number is greater than 9 than subtracted 9 */
                            if((curDigit *2 ) > 9)
                            {
                              sum +=( curDigit*2)-9;
                            }
                            else
                            {
                              sum += curDigit*2;
                            }
                        }
                      else
                        {
                          sum += curDigit;
                       }
                        var doubleUp =!doubleUp
                    }

                  /* sum and divide it by 10. If the remainder equals zero, the original credit card number is valid.  */
                  return (sum % 10) == 0  ? true : false;

           };
                        
                 
          

            validCard.addEventListener('click' , function(){
             card =  bandeira.value;
             alert(LuhnAlgorithm(card));
          });
            
               
     

