<?php

	if ($a = 5){
		echo 'essa operacao atribui 5 a variavel $a retorna sempre verdadeiro';
	}

	$a = 1234;
	$b = '1234';
	
	if ($a == $b){
		echo '$a e $b sao iguais.';
	} else if ($a != $b){
		echo '$a e $b sao diferentes.';
	}
	
	$c = 1234;
	$d = '1234';
	
	if ($c === $d){
		echo '$c e $d sao iguais.';
	} else if ($c !== $d){
		echo '$c e $d sao diferentes.';
	}
	
	$e = 0;
	
	if ($e == false){
		echo '$e é falso';
	}
	
	if ($e === false){
		echo '$e é do tipo false';
	}
	
	if ($e == 0){
		echo '$e é zero mesmo';
	}
?>