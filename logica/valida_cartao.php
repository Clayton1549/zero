<?php 
 function LuhnAlgorithm($num) {
  	$inputNum = preg_replace("/[\s-]/","", $num);

  	if(!preg_match("/^\d+$/", $inputNum)) {
       return false;
  	}

  	$sum = 0;
  	$doubleUp = false;

  	for($i = strlen($inputNum) - 1; $i >= 0; $i--) {
  		$curDigit = (int) $inputNum[$i];
  		if($doubleUp) {
  			$curDigit *= 2;
          if($curDigit > 9) {
          	$curDigit -= 9;
          }
  		}

  		$sum += $curDigit;
  		$doubleUp = !$doubleUp;
  	}

  	return $sum % 10 === 0;
  }

 $numero = $_POST["bandeira"];
 
 if(LuhnAlgorithm($numero)) {
 	
 }else {
    header("Location:../templates/vendas.php");
 }


?>