<?php

/** 
*	FUNCIÓN sumarNumeros
* Esta función recibe como parámetros 2 números y comprobrará
* que estos sean números y en caso de serlo devolverá la suma
* de ambos. En caso de no ser números devolvera False.
* 
* @author Baldomero Navas
* @version 1.0
* 
* @param num1 Primer factor para sumar
* @param num2 Segundo factor para sumar
* @return La suma de los 2 factores introducidos
* 
* @internal Utilizar esta función con precaución
*/

function sumarNumeros($num1, $num2){
	if(is_numeric($num1)&is_numeric($num2)){
		return $num1+$num2;
	}else{
		return false;
	}
}

/** 
*	FUNCIÓN esPar
* Esta función recibe como parámetros un número y comprobrará
* si éste es par o impar.
* 
* @author Baldomero Navas
* @version 1.0
* 
* @param num Número a comprobar si es par o impar
* @return Devolvéra el texto "Es par" en caso de ser par, "No es par" en caso
* de no serlo o "No es número" en caso de no ser un número
* 
* @internal Esta función se puede mejorar en la siguiente versión
*/

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
