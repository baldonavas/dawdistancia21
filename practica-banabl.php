<?php

function sumarNumeros($num1, $num2){
	if(is_numeric($num1)&is_numeric($num2)){
		return $num1+$num2;
	}else{
		return false;
	}
}


function esPar($num){
	if(is_numeric($num)){
		if($num%2==0){
			return "Es par";
		}else{
			return "No es par";
		}
	}else{
		return "No es un número";
	}
}


?>
