<?php

	$total = 0;
	function incrementa(&$variavel, $valor=40){
		$variavel+=$valor;
	}
	$a = 10;
	incrementa($a);
	echo $a;
	
?>
